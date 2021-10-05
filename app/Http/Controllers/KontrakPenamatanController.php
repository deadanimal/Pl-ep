<?php

namespace App\Http\Controllers;

use App\Models\KontrakPenamatan;
use Illuminate\Http\Request;

class KontrakPenamatanController extends Controller
{

    public function index()
    {
        return view('kontrak_penamatan.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontrak_penamatan.create');
        
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

    public function show(KontrakPenamatan $kontrakPenamatan)
    {
        return view('kontrak_penamatan.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KontrakPenamatan  $kontrakPenamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(KontrakPenamatan $kontrakPenamatan)
    {
        return view('kontrak_penamatan.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KontrakPenamatan  $kontrakPenamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KontrakPenamatan $kontrakPenamatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KontrakPenamatan  $kontrakPenamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KontrakPenamatan $kontrakPenamatan)
    {
        //
    }
}
