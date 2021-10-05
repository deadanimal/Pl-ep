<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderSemakanCadangan;
use Illuminate\Http\Request;

class SebutHargaTenderSemakanCadanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_semakan_cadangan.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_semakan_cadangan.create');
        
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
     * @param  \App\Models\SebutHargaTenderSemakanCadangan  $sebutHargaTenderSemakanCadangan
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderSemakanCadangan $sebutHargaTenderSemakanCadangan)
    {
        return view('tender_semakan_cadangan.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderSemakanCadangan  $sebutHargaTenderSemakanCadangan
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderSemakanCadangan $sebutHargaTenderSemakanCadangan)
    {
        return view('tender_semakan_cadangan.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderSemakanCadangan  $sebutHargaTenderSemakanCadangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderSemakanCadangan $sebutHargaTenderSemakanCadangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderSemakanCadangan  $sebutHargaTenderSemakanCadangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderSemakanCadangan $sebutHargaTenderSemakanCadangan)
    {
        //
    }
}
