<?php

namespace App\Http\Controllers;

use App\Models\FizaKontrak;
use Illuminate\Http\Request;

class FizaKontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaKontrak = FizaKontrak::all();
        return view ('1_kontrak.index',[
            'fizaKontrak'=>$fizaKontrak]);
    }


    public function create()
    {
        return redirect('/1_kontrak.create');
    }


    public function store(Request $request)
    {
        $fizaKontrak = new FizaKontrak;

        $fizaKontrak->sst_id=$request->sst_id;
        $fizaKontrak->kontrak_no_fizikal=$request->kontrak_no_fizikal;
        $fizaKontrak->kontrak_tempoh_penghantaran=$request->kontrak_tempoh_penghantaran;
        $fizaKontrak->kontrak_pilihan=$request->kontrak_pilihan;
        $fizaKontrak->pembekal_id=$request->pembekal_id;
        $fizaKontrak->pst_id =$request->pst_id ;
        $fizaKontrak->kontrak_no_rujukan_bon=$request->kontrak_no_rujukan_bon;
        $fizaKontrak->kontrak_institusi_kewangan=$request->kontrak_institusi_kewangan;
        $fizaKontrak->kontrak_amaun=$request->kontrak_amaun;
        $fizaKontrak->kontrak_tarikh_kuatkuasa=$request->kontrak_tarikh_kuatkuasa;
        $fizaKontrak->kontrak_tarikh_tamat=$request->kontrak_tarikh_tamat;
        $fizaKontrak->kontrak_file_bon=$request->kontrak_file_bon;//file
        $fizaKontrak->kontrak_pelulus=$request->kontrak_pelulus;
        $fizaKontrak->tempoh_id =$request->tempoh_id ;
        $fizaKontrak->kontrak_catatan_pelulus =$request->kontrak_catatan_pelulus ;
        $fizaKontrak->kontrak_created_by =$request->kontrak_created_by ;
        $fizaKontrak->user_id =$request->user_id ;


        $fizaKontrak->save();
        return redirect('/fizaKontrak');
    }


    public function show(FizaKontrak $fizaKontrak)
    {
        //
    }


    public function edit(FizaKontrak $fizaKontrak)
    {
        $fizaKontrak = FizaKontrak::all();
        return view ('1_kontrak.edit',[
            'fizaKontrak'=>$fizaKontrak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaKontrak  $fizaKontrak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaKontrak $fizaKontrak)
    {
        $fizaKontrak->sst_id=$request->sst_id;
        $fizaKontrak->kontrak_no_fizikal=$request->kontrak_no_fizikal;
        $fizaKontrak->kontrak_tempoh_penghantaran=$request->kontrak_tempoh_penghantaran;
        $fizaKontrak->kontrak_pilihan=$request->kontrak_pilihan;
        $fizaKontrak->pembekal_id=$request->pembekal_id;
        $fizaKontrak->pst_id =$request->pst_id;
        $fizaKontrak->kontrak_no_rujukan_bon=$request->kontrak_no_rujukan_bon;
        $fizaKontrak->kontrak_institusi_kewangan=$request->kontrak_institusi_kewangan;
        $fizaKontrak->kontrak_amaun=$request->kontrak_amaun;
        $fizaKontrak->kontrak_tarikh_kuatkuasa=$request->kontrak_tarikh_kuatkuasa;
        $fizaKontrak->kontrak_tarikh_tamat=$request->kontrak_tarikh_tamat;
        $fizaKontrak->kontrak_file_bon=$request->kontrak_file_bon;//file
        $fizaKontrak->kontrak_pelulus=$request->kontrak_pelulus;
        $fizaKontrak->tempoh_id=$request->tempoh_id;
        $fizaKontrak->kontrak_catatan_pelulus=$request->kontrak_catatan_pelulus;
        $fizaKontrak->kontrak_updated_by=$request->kontrak_updated_by;
        $fizaKontrak->user_id =$request->user_id;

        $url = '/fizaKontrak'.$fizaKontrak->id;
        return redirect('/fizaKontrak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaKontrak  $fizaKontrak
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaKontrak $fizaKontrak)
    {
        //
    }
}
