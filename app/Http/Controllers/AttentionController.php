<?php

namespace App\Http\Controllers;

use App\Attention;
use App\User;
use App\Pet;
use App\Veterinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttentionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        $attention = Attention::latest()->paginate(5);



        return view('attention.index', compact('attention'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$pets = Pet::latest()->paginate(5);
        $pets = Pet::where('id_user', auth()->id())->latest()->paginate(5);
        
        $vets = Veterinary::latest()->paginate(5);
        
        return view('attention.create', compact('pets', 'vets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();


        Attention::create($input);


        return redirect()->route('attention.index')->with('success', 'Attention created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attention  $attention
     * @return \Illuminate\Http\Response
     */
    public function show(Attention $attention)
    {

        return view('attention.show', compact('attention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attention  $attention
     * @return \Illuminate\Http\Response
     */
    public function edit(Attention $attention)
    {
        return view('attention.edit', compact('attention'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attention  $attention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attention $attention)
    {
        $attention->update($request->all());

        return redirect()->route('attention.index')
            ->with('success', 'Attention updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attention  $attention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attention $attention)
    {
        $attention->delete();

        return redirect()->route('attention.index')
            ->with('success', 'Attention deleted successfully');
    }
}
