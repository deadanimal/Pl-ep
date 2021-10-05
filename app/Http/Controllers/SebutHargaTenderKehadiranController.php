<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderKehadiran;
use Illuminate\Http\Request;

class SebutHargaTenderKehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_kehadiran.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_kehadiran.create');

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
     * @param  \App\Models\SebutHargaTenderKehadiran  $sebutHargaTenderKehadiran
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderKehadiran $sebutHargaTenderKehadiran)
    {
        return view('tender_kehadiran.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderKehadiran  $sebutHargaTenderKehadiran
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderKehadiran $sebutHargaTenderKehadiran)
    {
        return view('tender_kehadiran.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderKehadiran  $sebutHargaTenderKehadiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderKehadiran $sebutHargaTenderKehadiran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderKehadiran  $sebutHargaTenderKehadiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderKehadiran $sebutHargaTenderKehadiran)
    {
        //
    }
}
