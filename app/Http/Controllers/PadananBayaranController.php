<?php

namespace App\Http\Controllers;

use App\Models\PadananBayaran;
use Illuminate\Http\Request;

class PadananBayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('padanan_bayaran.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('padanan_bayaran.create');
    }


    public function store(Request $request)
    {
        //
    }

    
    public function show(PadananBayaran $padananBayaran)
    {
        return view('padanan_bayaran.show');
    }

    public function edit(PadananBayaran $padananBayaran)
    {
        return view('padanan_bayaran.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PadananBayaran  $padananBayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PadananBayaran $padananBayaran)
    {
        //
    }

    public function destroy(PadananBayaran $padananBayaran)
    {
        //
    }
}
