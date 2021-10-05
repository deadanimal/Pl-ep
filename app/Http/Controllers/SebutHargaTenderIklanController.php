<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderIklan;
use Illuminate\Http\Request;

class SebutHargaTenderIklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_iklan.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_iklan.create');
        
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
     * @param  \App\Models\SebutHargaTenderIklan  $sebutHargaTenderIklan
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderIklan $sebutHargaTenderIklan)
    {
        return view('tender_iklan.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderIklan  $sebutHargaTenderIklan
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderIklan $sebutHargaTenderIklan)
    {
        return view('tender_iklan.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderIklan  $sebutHargaTenderIklan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderIklan $sebutHargaTenderIklan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderIklan  $sebutHargaTenderIklan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderIklan $sebutHargaTenderIklan)
    {
        //
    }
}
