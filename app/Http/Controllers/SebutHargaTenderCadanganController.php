<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderCadangan;
use Illuminate\Http\Request;

class SebutHargaTenderCadanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_cadangan.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_cadangan.create');

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
     * @param  \App\Models\SebutHargaTenderCadangan  $sebutHargaTenderCadangan
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderCadangan $sebutHargaTenderCadangan)
    {
        return view('tender_cadangan.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderCadangan  $sebutHargaTenderCadangan
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderCadangan $sebutHargaTenderCadangan)
    {
        return view('tender_cadangan.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderCadangan  $sebutHargaTenderCadangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderCadangan $sebutHargaTenderCadangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderCadangan  $sebutHargaTenderCadangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderCadangan $sebutHargaTenderCadangan)
    {
        //
    }
}
