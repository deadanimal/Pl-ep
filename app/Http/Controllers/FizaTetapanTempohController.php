<?php

namespace App\Http\Controllers;

use App\Models\FizaTetapanTempoh;
use Illuminate\Http\Request;

class FizaTetapanTempohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaTetapanTempoh = FizaTetapanTempoh::all();
        return view ('1_tetapan_tempoh.index',[
            'fizaTetapanTempoh'=>$fizaTetapanTempoh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
        return view ('1_tetapan_tempoh.edit');
    }

    public function store(Request $request)
    {
        $fizaTetapanTempoh = new FizaTetapanTempoh;

        $fizaTetapanTempoh->tempoh_type=$request->tempoh_type;
        $fizaTetapanTempoh->tempoh_hari=$request->tempoh_hari;
        $fizaTetapanTempoh->tempoh_created_by=$request->tempoh_created_by;
        $fizaTetapanTempoh->user_id=$request->user_id;
 
        $fizaTetapanTempoh->save();
        return redirect('/fizaTetapanTempoh');
    }


    public function show(FizaTetapanTempoh $fizaTetapanTempoh)
    {
        //
    }


    public function edit(FizaTetapanTempoh $fizaTetapanTempoh)
    {
        $fizaTetapanTempoh = FizaTetapanTempoh::all();
        return view ('1_tetapan_tempoh.edit',[
            'fizaTetapanTempoh'=>$fizaTetapanTempoh]);
    }


    public function update(Request $request, FizaTetapanTempoh $fizaTetapanTempoh)
    {
        $fizaTetapanTempoh->tempoh_type=$request->tempoh_type;
        $fizaTetapanTempoh->tempoh_hari=$request->tempoh_hari;
        $fizaTetapanTempoh->tempoh_created_by=$request->tempoh_created_by;
        $fizaTetapanTempoh->user_id=$request->user_id;

        $url = '/fizaTetapanTempoh'.$fizaTetapanTempoh->id;
        return redirect('/fizaTetapanTempoh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaTetapanTempoh  $fizaTetapanTempoh
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaTetapanTempoh $fizaTetapanTempoh)
    {
        //
    }
}
