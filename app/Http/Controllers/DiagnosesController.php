<?php

namespace App\Http\Controllers;

use App\Diagnoses;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Exception;

class DiagnosesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        $diagnoses = Diagnoses::latest()->paginate(5);



        return view('diagnoses.index', compact('diagnoses'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnoses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Diagnoses::create(array_merge($request->all(), ['attention_id' => request()->id]));

        return redirect()->route('attention.index')->with('success', 'Diagnoses created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DiagnosesDetail  $diagnoses
     * @return \Illuminate\Http\Response
     */
    public function show($memberID)
    {
        $diagnoses = Diagnoses::where('attention_id', $memberID)->first();

        if (empty($diagnoses)) {
            return redirect()->route('attention.index')->with('success', 'No hay reporte de diagnostico.');
        } else {
            return view('diagnoses.show', compact('diagnoses'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiagnosesDetail  $diagnoses
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnoses $diagnoses)
    {
        return view('diagnoses.edit', compact('diagnoses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiagnosesDetail  $diagnoses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnoses $diagnoses)
    {
        $diagnoses->update($request->all());

        return redirect()->route('diagnoses.index')
            ->with('success', 'Diagnoses updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiagnosesDetail  $diagnoses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnoses $diagnoses)
    {
        $diagnoses->delete();

        return redirect()->route('diagnoses.index')
            ->with('success', 'Diagnoses deleted successfully');
    }
}
