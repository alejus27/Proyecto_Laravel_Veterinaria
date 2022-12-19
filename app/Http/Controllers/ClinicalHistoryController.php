<?php

namespace App\Http\Controllers;

use App\ClinicalHistory;
use App\User;
use App\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClinicalHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$clinicalHistory = ClinicalHistory::latest()->paginate(5);

        $clinicalHistory = ClinicalHistory::where('id_pet', request()->id)->latest()->paginate(5);

        return view('history.index', compact('clinicalHistory'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ClinicalHistory::create($request->all(), ['id_user' => auth()->id()]);

        ClinicalHistory::create(array_merge($request->all(), ['id_pet' => request()->id]));

        return redirect()->route('history.index')->with('success', 'ClinicalHistory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClinicalHistory  $clinicalHistory
     * @return \Illuminate\Http\Response
     */
    public function show(ClinicalHistory $clinicalHistory)
    {

        return view('history.show', compact('clinicalHistory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClinicalHistory  $clinicalHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(ClinicalHistory $clinicalHistory)
    {
        return view('history.edit', compact('clinicalHistory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClinicalHistory  $clinicalHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClinicalHistory $clinicalHistory)
    {
        $clinicalHistory->update($request->all());

        return redirect()->route('history.index')
            ->with('success', 'ClinicalHistory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClinicalHistory  $clinicalHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClinicalHistory $clinicalHistory)
    {
        $clinicalHistory->delete();

        return redirect()->route('history.index')
            ->with('success', 'ClinicalHistory deleted successfully');
    }
}
