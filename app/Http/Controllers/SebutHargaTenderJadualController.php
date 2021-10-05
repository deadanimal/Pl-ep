<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderJadual;
use Illuminate\Http\Request;

class SebutHargaTenderJadualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_jadual.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_jadual.create');
        
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderJadual  $sebutHargaTenderJadual
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderJadual $sebutHargaTenderJadual)
    {
        return view('tender_jadual.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderJadual  $sebutHargaTenderJadual
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderJadual $sebutHargaTenderJadual)
    {
        return view('tender_jadual.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderJadual  $sebutHargaTenderJadual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderJadual $sebutHargaTenderJadual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderJadual  $sebutHargaTenderJadual
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderJadual $sebutHargaTenderJadual)
    {
        //
    }
}
