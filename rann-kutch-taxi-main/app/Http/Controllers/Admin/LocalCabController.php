<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLocalCabRequest;
use App\Http\Requests\StoreLocalCabRequest;
use App\Http\Requests\UpdateLocalCabRequest;
use App\Models\LocalCab;
use App\Models\Source;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LocalCabController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('local_cab_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LocalCab::with('source')->select('local_cabs.*');
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'local_cab_show';
                $editGate      = 'local_cab_edit';
                $deleteGate    = 'local_cab_delete';
                $crudRoutePart = 'local-cabs';

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

            $table->editColumn('mini_eight_hr_eighty_km', fn($row) => $row->mini_eight_hr_eighty_km ?? '');
            $table->editColumn('mini_ten_hr_hundred_km', fn($row) => $row->mini_ten_hr_hundred_km ?? '');
            $table->editColumn('mini_twelve_hr_hundred_twenty_km', fn($row) => $row->mini_twelve_hr_hundred_twenty_km ?? '');
            $table->editColumn('sedan_eight_hr_eighty_km', fn($row) => $row->sedan_eight_hr_eighty_km ?? '');
            $table->editColumn('sedan_ten_hr_hundred_km', fn($row) => $row->sedan_ten_hr_hundred_km ?? '');
            $table->editColumn('sedan_twelve_hr_hundred_twenty_km', fn($row) => $row->sedan_twelve_hr_hundred_twenty_km ?? '');
            $table->editColumn('ertiga_eight_hr_eighty_km', fn($row) => $row->ertiga_eight_hr_eighty_km ?? '');
            $table->editColumn('ertiga_ten_hr_hundred_km', fn($row) => $row->ertiga_ten_hr_hundred_km ?? '');
            $table->editColumn('ertiga_twelve_hr_hundred_twenty_km', fn($row) => $row->ertiga_twelve_hr_hundred_twenty_km ?? '');

            $table->editColumn('sort_description', fn($row) => $row->sort_description ?? '');
            $table->editColumn('meta_title', fn($row) => $row->meta_title ?? '');
            $table->editColumn('meta_description', fn($row) => $row->meta_description ?? '');
            $table->editColumn('sort_description', function ($row) {
                return $row->sort_description ? $row->sort_description : '';
            });
            $table->editColumn('meta_title', function ($row) {
                return $row->meta_title ? $row->meta_title : '';
            });
            $table->editColumn('meta_description', function ($row) {
                return $row->meta_description ? $row->meta_description : '';
            });
            $table->addColumn('source_name', fn($row) => $row->source ? $row->source->name : '');



            $table->rawColumns(['actions', 'placeholder', 'source_name']);

            return $table->make(true);
        }

        return view('admin.localCabs.index');
    }

    public function create()
    {
        abort_if(Gate::denies('local_cab_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sources = Source::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.localCabs.create', compact('sources'));
    }

    public function store(StoreLocalCabRequest $request)
    {
        $localCab = LocalCab::create($request->all());

        if ($request->input('image', false)) {
            $localCab->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $localCab->id]);
        }

        return redirect()->route('admin.local-cabs.index');
    }

    public function edit(LocalCab $localCab)
    {
        abort_if(Gate::denies('local_cab_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sources = Source::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.localCabs.edit', compact('localCab', 'sources'));
    }

    public function update(UpdateLocalCabRequest $request, LocalCab $localCab)
    {
        $localCab->update($request->all());

        if ($request->input('image', false)) {
            if (! $localCab->image || $request->input('image') !== $localCab->image->file_name) {
                if ($localCab->image) {
                    $localCab->image->delete();
                }
                $localCab->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($localCab->image) {
            $localCab->image->delete();
        }

        return redirect()->route('admin.local-cabs.index');
    }

    public function show(LocalCab $localCab)
    {
        abort_if(Gate::denies('local_cab_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $localCab->load('source');
        return view('admin.localCabs.show', compact('localCab'));
    }

    public function destroy(LocalCab $localCab)
    {
        abort_if(Gate::denies('local_cab_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $localCab->delete();

        return back();
    }

    public function massDestroy(MassDestroyLocalCabRequest $request)
    {
        $localCabs = LocalCab::find(request('ids'));

        foreach ($localCabs as $localCab) {
            $localCab->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('local_cab_create') && Gate::denies('local_cab_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new LocalCab();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
