<?php

namespace App\Http\Controllers;

use App\Veterinary;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeterinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       
            
            $veterinary = Veterinary::latest()->paginate(5);

        
        
        return view('veterinary.index', compact('veterinary'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veterinary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Veterinary::create($request->all());

        
        return redirect()->route('veterinary.index')->with('success', 'Veterinary created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Veterinary  $veterinary
     * @return \Illuminate\Http\Response
     */
    public function show(Veterinary $veterinary)
    {

        return view('veterinary.show', compact('veterinary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Veterinary  $veterinary
     * @return \Illuminate\Http\Response
     */
    public function edit(Veterinary $veterinary)
    {
        return view('veterinary.edit', compact('veterinary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Veterinary  $veterinary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veterinary $veterinary)
    {
        $veterinary->update($request->all());

        return redirect()->route('veterinary.index')
            ->with('success', 'Veterinary updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Veterinary  $veterinary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veterinary $veterinary)
    {
        $veterinary->delete();

        return redirect()->route('veterinary.index')
            ->with('success', 'Veterinary deleted successfully');
    }
}
