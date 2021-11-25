<?php

namespace App\Http\Controllers;

use App\Models\FizaPenandatanganKontrak;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPenandatanganKontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPenandatanganKontrak = FizaPenandatanganKontrak::all();
        return view ('1_penandatangan_kontrak.index',[
            'fizaPenandatanganKontrak'=>$fizaPenandatanganKontrak]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_penandatangan_kontrak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaPenandatanganKontrak = new FizaPenandatanganKontrak;




        $fizaPenandatanganKontrak->save();
        return redirect('/fizaPenandatanganKontrak');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPenandatanganKontrak  $fizaPenandatanganKontrak
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPenandatanganKontrak $fizaPenandatanganKontrak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPenandatanganKontrak  $fizaPenandatanganKontrak
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPenandatanganKontrak $fizaPenandatanganKontrak)
    {
        return view('1_penandatangan_kontrak.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaPenandatanganKontrak  $fizaPenandatanganKontrak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaPenandatanganKontrak $fizaPenandatanganKontrak)
    {
        $fizaPenandatanganKontrak->pembekal_id=$request->pembekal_id;
        $fizaPenandatanganKontrak->user_id=$request->user_id;
        $fizaPenandatanganKontrak->penandatangan_pihak=$request->penandatangan_pihak;
        $fizaPenandatanganKontrak->perjanjian_id=$request->perjanjian_id;
        $fizaPenandatanganKontrak->penandatangan_updated_by=$request->penandatangan_updated_by;


        $fizaPenandatanganKontrak->save();
        return redirect('/fizaPenandatanganKontrak');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPenandatanganKontrak  $fizaPenandatanganKontrak
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPenandatanganKontrak $fizaPenandatanganKontrak)
    {
        //
    }
}
