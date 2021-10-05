<?php

namespace App\Http\Controllers;

use App\Models\PermintaanKontrak;
use Illuminate\Http\Request;

class PermintaanKontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permintaan_kontrak.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permintaan_kontrak.create');

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
     * @param  \App\Models\PermintaanKontrak  $permintaanKontrak
     * @return \Illuminate\Http\Response
     */
    public function show(PermintaanKontrak $permintaanKontrak)
    {
        return view('permintaan_kontrak.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermintaanKontrak  $permintaanKontrak
     * @return \Illuminate\Http\Response
     */
    public function edit(PermintaanKontrak $permintaanKontrak)
    {
        return view('permintaan_kontrak.edit');
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermintaanKontrak  $permintaanKontrak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermintaanKontrak $permintaanKontrak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermintaanKontrak  $permintaanKontrak
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermintaanKontrak $permintaanKontrak)
    {
        //
    }
}
