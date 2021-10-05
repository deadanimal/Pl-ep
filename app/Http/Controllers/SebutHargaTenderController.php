<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTender;
use Illuminate\Http\Request;

class SebutHargaTenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender.create');

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
     * @param  \App\Models\SebutHargaTender  $sebutHargaTender
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTender $sebutHargaTender)
    {
        return view('tender.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaTender  $sebutHargaTender
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaTender $sebutHargaTender)
    {
        return view('tender.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTender  $sebutHargaTender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTender $sebutHargaTender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTender  $sebutHargaTender
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTender $sebutHargaTender)
    {
        //
    }
}
