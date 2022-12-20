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
        //$history = ClinicalHistory::latest()->paginate(5);

        $history = ClinicalHistory::where('id_pet', request()->id)->latest()->paginate(5);

        return view('history.index', compact('history'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        return redirect()->route('pets.index')->with('success', 'ClinicalHistory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClinicalHistory  $history
     * @return \Illuminate\Http\Response
     */
    public function show(ClinicalHistory $history)
    {

        return view('history.show', compact('history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClinicalHistory  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(ClinicalHistory $history)
    {
        return view('history.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClinicalHistory  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClinicalHistory $history)
    {
        $history->update($request->all());

        return redirect()->route('pets.index')
            ->with('success', 'ClinicalHistory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClinicalHistory  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClinicalHistory $history)
    {
        $history->delete();

        return redirect()->route('pets.index')
            ->with('success', 'ClinicalHistory deleted successfully');
    }
}
