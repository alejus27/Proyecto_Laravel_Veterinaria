<?php

namespace App\Http\Controllers;

use App\MedicineDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Exception;

class MedicineDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        $medicine_detail = MedicineDetail::latest()->paginate(5);



        return view('medicine_detail.index', compact('medicine_detail'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MedicineDetail::create(array_merge($request->all(), ['medicine_id' => request()->id]));

        return redirect()->route('medicines.index')->with('success', 'MedicineDetail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicineDetail  $medicine_detail
     * @return \Illuminate\Http\Response
     */
    public function show($memberID)
    {
        $medicine_detail = MedicineDetail::where('medicine_id', $memberID)->first();

        if (empty($medicine_detail)) {
            return redirect()->route('medicines.index')->with('success', 'No hay detalles.');
        } else {
            return view('medicine_detail.show', compact('medicine_detail'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineDetail  $medicine_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineDetail $medicine_detail)
    {
        return view('medicine_detail.edit', compact('medicine_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicineDetail  $medicine_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineDetail $medicine_detail)
    {
        $medicine_detail->update($request->all());

        return redirect()->route('medicine_detail.index')
            ->with('success', 'MedicineDetail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineDetail  $medicine_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineDetail $medicine_detail)
    {
        $medicine_detail->delete();

        return redirect()->route('medicine_detail.index')
            ->with('success', 'MedicineDetail deleted successfully');
    }
}
