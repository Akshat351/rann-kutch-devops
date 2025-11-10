<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTripRequest;
use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;
use App\Models\Destination;
use App\Models\Source;
use App\Models\Trip;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Cache;
use App\Traits\GenerateDynamicRoutesTrait;

class TripController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait, GenerateDynamicRoutesTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('trip_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Trip::with(['source', 'destination'])->select(sprintf('%s.*', (new Trip)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'trip_show';
                $editGate      = 'trip_edit';
                $deleteGate    = 'trip_delete';
                $crudRoutePart = 'trips';

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
            $table->editColumn('trip_type', function ($row) {
                return $row->trip_type ? Trip::TRIP_TYPE_SELECT[$row->trip_type] : '';
            });
            $table->editColumn('mini', function ($row) {
                return $row->mini ? $row->mini : '';
            });
            $table->editColumn('mini_round_trip', function ($row) {
                return $row->mini_round_trip ? $row->mini_round_trip : '';
            });
            $table->editColumn('sedan', function ($row) {
                return $row->sedan ? $row->sedan : '';
            });
            $table->editColumn('sedan_round_trip', function ($row) {
                return $row->sedan_round_trip ? $row->sedan_round_trip : '';
            });
            $table->editColumn('suv', function ($row) {
                return $row->suv ? $row->suv : '';
            });
            $table->editColumn('suv_round_trip', function ($row) {
                return $row->suv_round_trip ? $row->suv_round_trip : '';
            });
            $table->editColumn('innova', function ($row) {
                return $row->innova ? $row->innova : '';
            });
            $table->editColumn('innova_round_trip', function ($row) {
                return $row->innova_round_trip ? $row->innova_round_trip : '';
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
            $table->addColumn('source_name', function ($row) {
                return $row->source ? $row->source->name : '';
            });

            $table->addColumn('destination_name', function ($row) {
                return $row->destination ? $row->destination->name : '';
            });


            $table->rawColumns(['actions', 'placeholder', 'image', 'source', 'destination']);

            return $table->make(true);
        }

        return view('admin.trips.index');
    }

    public function create()
    {
        abort_if(Gate::denies('trip_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = Source::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $destinations = Destination::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');



        return view('admin.trips.create', compact( 'destinations', 'sources',));
    }

    public function store(StoreTripRequest $request)
    {
        $trip = Trip::create($request->all());

        if ($request->input('image', false)) {
            $trip->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $trip->id]);
        }

        Cache::forget("trip_" . $trip->slug);
        Cache::remember('trip_' . $trip->slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($trip) {
            return Trip::where("slug", $trip->slug)->first();
        });

        $this->clearTripCache($trip);
        $this->generate_xml_routes();
        return redirect()->route('admin.trips.index');
    }

    public function edit(Trip $trip)
    {
        abort_if(Gate::denies('trip_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = Source::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $destinations = Destination::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $trip->load('source', 'destination');

        return view('admin.trips.edit', compact( 'destinations','sources','trip'));
    }

    public function update(UpdateTripRequest $request, Trip $trip)
    {
        $trip->update($request->all());

        if ($request->input('image', false)) {
            if (! $trip->image || $request->input('image') !== $trip->image->file_name) {
                if ($trip->image) {
                    $trip->image->delete();
                }
                $trip->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($trip->image) {
            $trip->image->delete();
        }

        Cache::forget("trip_" . $trip->slug);
        Cache::remember('trip_' . $trip->slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($trip) {
            return Trip::where("slug", $trip->slug)->first();
        });

        $this->clearTripCache($trip);
        $this->generate_xml_routes();
        return redirect()->route('admin.trips.index');
    }

    public function show(Trip $trip)
    {
        abort_if(Gate::denies('trip_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trip->load('source', 'destination');

        return view('admin.trips.show', compact('trip'));
    }

    public function destroy(Trip $trip)
    {
        abort_if(Gate::denies('trip_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trip->delete();
        $this->generate_xml_routes();

        Cache::forget("trip_" . $trip->slug);
        $this->clearTripCache($trip);

        return back();
    }

    public function massDestroy(MassDestroyTripRequest $request)
    {
        $trips = Trip::find(request('ids'));

        foreach ($trips as $trip) {
            $trip->delete();
            $this->generate_xml_routes();
            Cache::forget("trip_" . $trip->slug);
            $this->clearTripCache($trip);
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('trip_create') && Gate::denies('trip_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Trip();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    protected function clearTripCache($trip)
    {

        // 2. Clear this trip's related routes cache
        Cache::forget('from_source_' . $trip->slug);
        Cache::forget('to_source_' . $trip->slug);
        Cache::forget('from_destination_' . $trip->slug);
        Cache::forget('to_destination_' . $trip->slug);

        // 3. Clear ALL other trips that might have this trip in their related routes
        $this->clearRelatedTripsCache($trip);
    }

     protected function clearRelatedTripsCache($trip)
    {
        // Get all trips that share the same source_id (they will show this trip in their related routes)
        $tripsWithSameSource = Trip::where('source_id', $trip->source_id)
            ->where('id', '!=', $trip->id)
            ->get(['slug']);

        // Get all trips that have this trip's source as destination (they will show this trip in related routes)
        $tripsToThisSource = Trip::where('destination_id', $trip->source_id)
            ->get(['slug']);

        // Get all trips that share the same destination_id
        $tripsWithSameDestination = Trip::where('destination_id', $trip->destination_id)
            ->where('id', '!=', $trip->id)
            ->get(['slug']);

        // Get all trips that have this trip's destination as source
        $tripsFromThisDestination = Trip::where('source_id', $trip->destination_id)
            ->get(['slug']);

        // Clear cache for all these trips
        $allRelatedTrips = $tripsWithSameSource
            ->concat($tripsToThisSource)
            ->concat($tripsWithSameDestination)
            ->concat($tripsFromThisDestination)
            ->unique('slug');

        foreach ($allRelatedTrips as $relatedTrip) {
            Cache::forget('from_source_' . $relatedTrip->slug);
            Cache::forget('to_source_' . $relatedTrip->slug);
            Cache::forget('from_destination_' . $relatedTrip->slug);
            Cache::forget('to_destination_' . $relatedTrip->slug);
        }
    }
}
