<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySourceRequest;
use App\Http\Requests\StoreSourceRequest;
use App\Http\Requests\UpdateSourceRequest;
use App\Models\Source;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SourceController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Source::query()->select(sprintf('%s.*', (new Source)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'source_show';
                $editGate      = 'source_edit';
                $deleteGate    = 'source_delete';
                $crudRoutePart = 'sources';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('slug', function ($row) {
                return $row->slug ? $row->slug : '';
            });
            $table->editColumn('image', function ($row) {
                if ($photo = $row->image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('sort_description', function ($row) {
                return $row->sort_description ? $row->sort_description : '';
            });
            $table->editColumn('meta_title', function ($row) {
                return $row->meta_title ? $row->meta_title : '';
            });
            $table->editColumn('meta_description', function ($row) {
                return $row->meta_description ? $row->meta_description : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'image']);

            return $table->make(true);
        }

        return view('admin.sources.index');
    }

    public function create()
    {
        abort_if(Gate::denies('source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sources.create');
    }

    public function store(StoreSourceRequest $request)
    {
        $source = Source::create($request->all());

        if ($request->input('image', false)) {
            $source->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $source->id]);
        }

        return redirect()->route('admin.sources.index');
    }

    public function edit(Source $source)
    {
        abort_if(Gate::denies('source_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sources.edit', compact('source'));
    }

    public function update(UpdateSourceRequest $request, Source $source)
    {
        $source->update($request->all());

        if ($request->input('image', false)) {
            if (! $source->image || $request->input('image') !== $source->image->file_name) {
                if ($source->image) {
                    $source->image->delete();
                }
                $source->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($source->image) {
            $source->image->delete();
        }

        return redirect()->route('admin.sources.index');
    }

    public function show(Source $source)
    {
        abort_if(Gate::denies('source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sources.show', compact('source'));
    }

    public function destroy(Source $source)
    {
        abort_if(Gate::denies('source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $source->delete();

        return back();
    }

    public function massDestroy(MassDestroySourceRequest $request)
    {
        $sources = Source::find(request('ids'));

        foreach ($sources as $source) {
            $source->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('source_create') && Gate::denies('source_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Source();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
