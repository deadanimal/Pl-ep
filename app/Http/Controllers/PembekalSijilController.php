<?php

namespace App\Http\Controllers;

use App\Models\PembekalSijil;
use Illuminate\Http\Request;

class PembekalSijilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembekal_sijil.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembekal_sijil.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PembekalSijil  $pembekalSijil
     * @return \Illuminate\Http\Response
     */
    public function show(PembekalSijil $pembekalSijil)
    {
        return view('pembekal_sijil.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembekalSijil  $pembekalSijil
     * @return \Illuminate\Http\Response
     */
    public function edit(PembekalSijil $pembekalSijil)
    {
        return view('pembekal_sijil.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PembekalSijil  $pembekalSijil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembekalSijil $pembekalSijil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembekalSijil  $pembekalSijil
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembekalSijil $pembekalSijil)
    {
        //
    }
}
