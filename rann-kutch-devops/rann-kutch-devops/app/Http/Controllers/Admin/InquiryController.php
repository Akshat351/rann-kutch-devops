<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyInquiryRequest;
use App\Http\Requests\StoreInquiryRequest;
use App\Http\Requests\UpdateInquiryRequest;
use App\Models\Destination;
use App\Models\Inquiry;
use App\Models\Source;
use App\Models\Trip;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class InquiryController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('inquiry_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Inquiry::with(['user', 'source', 'destination', 'trip'])->select(sprintf('%s.*', (new Inquiry)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'inquiry_show';
                $editGate      = 'inquiry_edit';
                $deleteGate    = 'inquiry_delete';
                $crudRoutePart = 'inquiries';

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
            $table->editColumn('ip', function ($row) {
                return $row->ip ? $row->ip : '';
            });
            $table->editColumn('mobile', function ($row) {
                return $row->mobile ? $row->mobile : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('subject', function ($row) {
                return $row->subject ? $row->subject : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });
            $table->editColumn('page_url', function ($row) {
                return $row->page_url ? $row->page_url : '';
            });
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->addColumn('source_name', function ($row) {
                return $row->source ? $row->source->name : '';
            });

            $table->addColumn('destination_name', function ($row) {
                return $row->destination ? $row->destination->name : '';
            });

            $table->addColumn('trip_name', function ($row) {
                return $row->trip ? $row->trip->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'user', 'source', 'destination', 'trip']);

            return $table->make(true);
        }

        return view('admin.inquiries.index');
    }

    public function create()
    {
        abort_if(Gate::denies('inquiry_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sources = Source::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $destinations = Destination::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $trips = Trip::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.inquiries.create', compact( 'destinations',  'sources', 'trips', 'users'));
    }

    public function store(StoreInquiryRequest $request)
    {
        $inquiry = Inquiry::create($request->all());

        return redirect()->route('admin.inquiries.index');
    }

    public function edit(Inquiry $inquiry)
    {
        abort_if(Gate::denies('inquiry_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sources = Source::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $destinations = Destination::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $trips = Trip::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $inquiry->load('user', 'source', 'destination', 'trip');

        return view('admin.inquiries.edit', compact('airports', 'car_rentals', 'destinations', 'inquiry', 'local_cabs', 'sources', 'tempo_travellers', 'tour_categories', 'tour_packages', 'trips', 'users'));
    }

    public function update(UpdateInquiryRequest $request, Inquiry $inquiry)
    {
        $inquiry->update($request->all());

        return redirect()->route('admin.inquiries.index');
    }

    public function show(Inquiry $inquiry)
    {
        abort_if(Gate::denies('inquiry_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inquiry->load('user', 'source', 'destination', 'trip');

        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function destroy(Inquiry $inquiry)
    {
        abort_if(Gate::denies('inquiry_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inquiry->delete();

        return back();
    }

    public function massDestroy(MassDestroyInquiryRequest $request)
    {
        $inquiries = Inquiry::find(request('ids'));

        foreach ($inquiries as $inquiry) {
            $inquiry->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
