<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderPemilihan;
use Illuminate\Http\Request;

class SebutHargaTenderPemilihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_pemilihan.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_pemilihan.create');

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
     * @param  \App\Models\SebutHargaTenderPemilihan  $sebutHargaTenderPemilihan
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderPemilihan $sebutHargaTenderPemilihan)
    {
        return view('tender_pemilihan.show');
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderPemilihan  $sebutHargaTenderPemilihan
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderPemilihan $sebutHargaTenderPemilihan)
    {
        return view('tender_pemilihan.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderPemilihan  $sebutHargaTenderPemilihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderPemilihan $sebutHargaTenderPemilihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderPemilihan  $sebutHargaTenderPemilihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderPemilihan $sebutHargaTenderPemilihan)
    {
        //
    }
}
