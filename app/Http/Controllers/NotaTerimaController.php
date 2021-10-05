<?php

namespace App\Http\Controllers;

use App\Models\NotaTerima;
use Illuminate\Http\Request;

class NotaTerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nota_terima.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nota_terima.create');
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
     * @param  \App\Models\NotaTerima  $notaTerima
     * @return \Illuminate\Http\Response
     */
    public function show(NotaTerima $notaTerima)
    {
        return view('nota_terima.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotaTerima  $notaTerima
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaTerima $notaTerima)
    {
        return view('nota_terima.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotaTerima  $notaTerima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaTerima $notaTerima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotaTerima  $notaTerima
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaTerima $notaTerima)
    {
        //
    }
}
