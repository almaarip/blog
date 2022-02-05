<?php

namespace App\Http\Controllers;
use App\baju;
use App\pelanggan;
use App\pembayaran;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pembayarans = pembayaran::all(); 
        return view('auth.pembayaran.index')->with('pembayarans',$pembayarans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggans = Pelanggan::all();
        $bajus = Baju::all();
        return view('auth.pembayaran.create', compact('pelanggans','bajus'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'baju_id' => 'required',
            'pelanggan_id' => 'required',
            'qty' => 'required',
            'total' => 'required',
        ]);
        $pembayarans = Pembayaran::create($validatedData);

        return redirect('/pembayaran')->with('success', 'Book is successfully saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        //
        return view('authpembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        $pembayaran->update($request->all());
        return redirect('pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
        $pembayaran->delete();
        return redirect('pembayaran');
    }
}
