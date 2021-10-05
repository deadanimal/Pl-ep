<?php

namespace App\Http\Controllers;

use App\Models\KontrakPerjanjianPindaan;
use Illuminate\Http\Request;

class KontrakPerjanjianPindaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kontrak_perjanjian_pindaan.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontrak_perjanjian_pindaan.create');
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(KontrakPerjanjianPindaan $kontrakPerjanjianPindaan)
    {
        return view('kontrak_perjanjian_pindaan.show');
        
    }


    public function edit(KontrakPerjanjianPindaan $kontrakPerjanjianPindaan)
    {
        return view('kontrak_perjanjian_pindaan.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KontrakPerjanjianPindaan  $kontrakPerjanjianPindaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KontrakPerjanjianPindaan $kontrakPerjanjianPindaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KontrakPerjanjianPindaan  $kontrakPerjanjianPindaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KontrakPerjanjianPindaan $kontrakPerjanjianPindaan)
    {
        //
    }
}
