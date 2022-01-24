<?php

namespace App\Http\Controllers;


use App\baju;
use Illuminate\Http\Request;

class bajuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bajus = Baju::all();
        return view('auth.baju.index', compact('bajus'));
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bajus = Baju::all();
        return view('auth.baju.create', compact('bajus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Baju::create($request->all());
        return redirect('baju');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Baju  $baju
     * @return \Illuminate\Http\Response
     */
    public function show(Baju $baju)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baju  $baju
     * @return \Illuminate\Http\Response
     */
    public function edit(Baju $baju)
    {
        return view('auth.baju.edit', compact('baju'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baju  $baju
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baju $baju)
    {
        $baju->update($request->all());
        return redirect('baju');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baju  $baju
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $baju = baju::findOrFail($id);
        $baju->delete();
        return redirect('baju');
    }
}
