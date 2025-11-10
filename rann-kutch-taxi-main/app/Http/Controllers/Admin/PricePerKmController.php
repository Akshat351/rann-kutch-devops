<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PricePerKilometer;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StorePricePerKmRequest;
use App\Http\Requests\UpdatePricePerKmRequest;
use App\Http\Requests\MassDestroyPricePerKmRequest;

class PricePerKmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('priceperkm_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priceperkm = PricePerKilometer::all();

        return view('admin.priceperkm.index', compact('priceperkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('priceperkm_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceperkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePricePerKmRequest $request)
    {
        $priceperkm = PricePerKilometer::create($request->all());

        return redirect()->route('admin.priceperkm.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PricePerKilometer $priceperkm)
    {
        abort_if(Gate::denies('priceperkm_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceperkm.show', compact('priceperkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PricePerKilometer $priceperkm)
    {
        abort_if(Gate::denies('priceperkm_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceperkm.edit', compact('priceperkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePricePerKmRequest $request, PricePerKilometer $priceperkm)
    {
        $priceperkm->update($request->all());

        return redirect()->route('admin.priceperkm.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricePerKilometer $priceperkm)
    {
        abort_if(Gate::denies('priceperkm_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priceperkm->delete();

        return back();
    }

    public function massDestroy(MassDestroyPricePerKmRequest $request)
    {
        $priceperkms = PricePerKilometer::find(request('ids'));

        foreach ($priceperkms as $priceperkm) {
            $priceperkm->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
