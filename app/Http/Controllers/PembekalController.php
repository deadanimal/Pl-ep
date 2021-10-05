<?php

namespace App\Http\Controllers;

use App\Models\Pembekal;
use Illuminate\Http\Request;

class PembekalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembekal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembekal.create');

    }

    public function store(Request $request)
    {
        //
    }


    public function show(Pembekal $pembekal)
    {
        return view('pembekal.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembekal  $pembekal
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembekal $pembekal)
    {
        return view('pembekal.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembekal  $pembekal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembekal $pembekal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembekal  $pembekal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembekal $pembekal)
    {
        //
    }
}
