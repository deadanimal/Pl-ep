<?php

namespace App\Http\Controllers;

use App\Models\PembekalKelulusan;
use Illuminate\Http\Request;

class PembekalKelulusanController extends Controller
{

    public function index()
    {
        return view('pembekal_kelulusan.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembekal_kelulusan.create');

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
     * @param  \App\Models\PembekalKelulusan  $pembekalKelulusan
     * @return \Illuminate\Http\Response
     */
    public function show(PembekalKelulusan $pembekalKelulusan)
    {
        return view('pembekal_kelulusan.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembekalKelulusan  $pembekalKelulusan
     * @return \Illuminate\Http\Response
     */
    public function edit(PembekalKelulusan $pembekalKelulusan)
    {
        return view('pembekal_kelulusan.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PembekalKelulusan  $pembekalKelulusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembekalKelulusan $pembekalKelulusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembekalKelulusan  $pembekalKelulusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembekalKelulusan $pembekalKelulusan)
    {
        //
    }
}
