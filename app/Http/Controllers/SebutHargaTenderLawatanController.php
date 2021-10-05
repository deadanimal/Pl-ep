<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderLawatan;
use Illuminate\Http\Request;

class SebutHargaTenderLawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_lawatan.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_lawatan.create');
        
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
     * @param  \App\Models\SebutHargaTenderLawatan  $sebutHargaTenderLawatan
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderLawatan $sebutHargaTenderLawatan)
    {
        return view('tender_lawatan.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderLawatan  $sebutHargaTenderLawatan
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderLawatan $sebutHargaTenderLawatan)
    {
        return view('tender_lawatan.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderLawatan  $sebutHargaTenderLawatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderLawatan $sebutHargaTenderLawatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderLawatan  $sebutHargaTenderLawatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderLawatan $sebutHargaTenderLawatan)
    {
        //
    }
}
