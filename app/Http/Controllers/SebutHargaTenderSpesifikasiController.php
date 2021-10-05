<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderSpesifikasi;
use Illuminate\Http\Request;

class SebutHargaTenderSpesifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_spesifikasi.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_spesifikasi.create');

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
     * @param  \App\Models\SebutHargaTenderSpesifikasi  $sebutHargaTenderSpesifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderSpesifikasi $sebutHargaTenderSpesifikasi)
    {
        return view('tender_spesifikasi.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderSpesifikasi  $sebutHargaTenderSpesifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderSpesifikasi $sebutHargaTenderSpesifikasi)
    {
        return view('tender_spesifikasi.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderSpesifikasi  $sebutHargaTenderSpesifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderSpesifikasi $sebutHargaTenderSpesifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderSpesifikasi  $sebutHargaTenderSpesifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderSpesifikasi $sebutHargaTenderSpesifikasi)
    {
        //
    }
}
