<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBlogPostRequest;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\UpdateBlogPostRequest;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
class BlogPostController extends Controller
{
    use MediaUploadingTrait;
    public function index(Request $request)
    {
        abort_if(Gate::denies('blog_post_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = BlogPost::with(['blog_categories'])->select(sprintf('%s.*', (new BlogPost)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'blog_post_show';
                $editGate      = 'blog_post_edit';
                $deleteGate    = 'blog_post_delete';
                $crudRoutePart = 'blog-posts';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('slug', function ($row) {
                return $row->slug ? $row->slug : '';
            });
            $table->editColumn('small_description', function ($row) {
                return $row->small_description ? $row->small_description : '';
            });
            $table->editColumn('main_image', function ($row) {
                if ($photo = $row->main_image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('meta_title', function ($row) {
                return $row->meta_title ? $row->meta_title : '';
            });
            $table->editColumn('meta_description', function ($row) {
                return $row->meta_description ? $row->meta_description : '';
            });
            $table->editColumn('blog_category', function ($row) {
                $labels = [];
                foreach ($row->blog_categories as $blog_category) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $blog_category->title);
                }

                return implode(' ', $labels);
            });

            $table->rawColumns(['actions', 'placeholder', 'main_image', 'blog_category']);

            return $table->make(true);
        }

        return view('admin.blogPosts.index');
    }

    public function create()
    {
        abort_if(Gate::denies('blog_post_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blog_categories = BlogCategory::pluck('title', 'id');

        return view('admin.blogPosts.create', compact('blog_categories'));
    }

    public function store(StoreBlogPostRequest $request)
    {
        $blogPost = BlogPost::create($request->all());
        $blogPost->blog_categories()->sync($request->input('blog_categories', []));
        if ($request->input('main_image', false)) {
            $blogPost->addMedia(storage_path('tmp/uploads/' . basename($request->input('main_image'))))->toMediaCollection('main_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $blogPost->id]);
        }
        return redirect()->route('admin.blog-posts.index');
    }

    public function edit(BlogPost $blogPost)
    {
        abort_if(Gate::denies('blog_post_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blog_categories = BlogCategory::pluck('title', 'id');

        $blogPost->load('blog_categories');

        return view('admin.blogPosts.edit', compact('blogPost', 'blog_categories'));
    }

    public function update(UpdateBlogPostRequest $request, BlogPost $blogPost)
    {
        $blogPost->update($request->all());
        $blogPost->blog_categories()->sync($request->input('blog_categories', []));
        if ($request->input('main_image', false)) {
            if (! $blogPost->main_image || $request->input('main_image') !== $blogPost->main_image->file_name) {
                if ($blogPost->main_image) {
                    $blogPost->main_image->delete();
                }
                $blogPost->addMedia(storage_path('tmp/uploads/' . basename($request->input('main_image'))))->toMediaCollection('main_image');
            }
        } elseif ($blogPost->main_image) {
            $blogPost->main_image->delete();
        }
        return redirect()->route('admin.blog-posts.index');
    }

    public function show(BlogPost $blogPost)
    {
        abort_if(Gate::denies('blog_post_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blogPost->load('blog_categories');

        return view('admin.blogPosts.show', compact('blogPost'));
    }

    public function destroy(BlogPost $blogPost)
    {
        abort_if(Gate::denies('blog_post_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blogPost->delete();
        return back();
    }

    public function massDestroy(MassDestroyBlogPostRequest $request)
    {
        $blogPosts = BlogPost::find(request('ids'));

        foreach ($blogPosts as $blogPost) {
            $blogPost->delete();
        }
        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('blog_post_create') && Gate::denies('blog_post_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new BlogPost();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
