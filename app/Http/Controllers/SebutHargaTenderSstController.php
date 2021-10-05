<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderSst;
use Illuminate\Http\Request;

class SebutHargaTenderSstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_sst.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_sst.create');
        
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderSst  $sebutHargaTenderSst
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderSst $sebutHargaTenderSst)
    {
        return view('tender_sst.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderSst  $sebutHargaTenderSst
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderSst $sebutHargaTenderSst)
    {
        return view('tender_sst.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderSst  $sebutHargaTenderSst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderSst $sebutHargaTenderSst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderSst  $sebutHargaTenderSst
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderSst $sebutHargaTenderSst)
    {
        //
    }
}
