<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDestinationRequest;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\Destination;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DestinationController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('destination_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Destination::query()->select(sprintf('%s.*', (new Destination)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'destination_show';
                $editGate      = 'destination_edit';
                $deleteGate    = 'destination_delete';
                $crudRoutePart = 'destinations';

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

        return view('admin.destinations.index');
    }

    public function create()
    {
        abort_if(Gate::denies('destination_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.destinations.create');
    }

    public function store(StoreDestinationRequest $request)
    {
        $destination = Destination::create($request->all());

        if ($request->input('image', false)) {
            $destination->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $destination->id]);
        }

        return redirect()->route('admin.destinations.index');
    }

    public function edit(Destination $destination)
    {
        abort_if(Gate::denies('destination_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.destinations.edit', compact('destination'));
    }

    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $destination->update($request->all());

        if ($request->input('image', false)) {
            if (! $destination->image || $request->input('image') !== $destination->image->file_name) {
                if ($destination->image) {
                    $destination->image->delete();
                }
                $destination->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($destination->image) {
            $destination->image->delete();
        }

        return redirect()->route('admin.destinations.index');
    }

    public function show(Destination $destination)
    {
        abort_if(Gate::denies('destination_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.destinations.show', compact('destination'));
    }

    public function destroy(Destination $destination)
    {
        abort_if(Gate::denies('destination_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $destination->delete();

        return back();
    }

    public function massDestroy(MassDestroyDestinationRequest $request)
    {
        $destinations = Destination::find(request('ids'));

        foreach ($destinations as $destination) {
            $destination->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('destination_create') && Gate::denies('destination_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Destination();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
