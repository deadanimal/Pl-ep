<?php

namespace App\Http\Controllers;

use App\Models\KontrakPerjanjian;
use Illuminate\Http\Request;

class KontrakPerjanjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kontrak_perjanjian.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontrak_perjanjian.index');
        
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(KontrakPerjanjian $kontrakPerjanjian)
    {
        return view('kontrak_perjanjian.show');

    }

    public function edit(KontrakPerjanjian $kontrakPerjanjian)
    {
        return view('kontrak_perjanjian.edit');

    }


    public function update(Request $request, KontrakPerjanjian $kontrakPerjanjian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KontrakPerjanjian  $kontrakPerjanjian
     * @return \Illuminate\Http\Response
     */
    public function destroy(KontrakPerjanjian $kontrakPerjanjian)
    {
        //
    }
}
