<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderNotaMinta;
use Illuminate\Http\Request;

class SebutHargaTenderNotaMintaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_notaminta.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_notaminta.create');
        
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
     * @param  \App\Models\SebutHargaTenderNotaMinta  $sebutHargaTenderNotaMinta
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderNotaMinta $sebutHargaTenderNotaMinta)
    {
        return view('tender_notaminta.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTenderNotaMinta  $sebutHargaTenderNotaMinta
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTenderNotaMinta $sebutHargaTenderNotaMinta)
    {
        return view('tender_notaminta.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderNotaMinta  $sebutHargaTenderNotaMinta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderNotaMinta $sebutHargaTenderNotaMinta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderNotaMinta  $sebutHargaTenderNotaMinta
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderNotaMinta $sebutHargaTenderNotaMinta)
    {
        //
    }
}
