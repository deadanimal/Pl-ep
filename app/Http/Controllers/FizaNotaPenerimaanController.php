<?php

namespace App\Http\Controllers;

use App\Models\FizaNotaPenerimaan;
use Illuminate\Http\Request;

class FizaNotaPenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaNotaPenerimaan = FizaNotaPenerimaan::all();
        return view ('1_nota_penerimaan.index',[
            'fizaNotaPenerimaan'=>$fizaNotaPenerimaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_nota_penerimaan.create');
    }


    public function store(Request $request)
    {
        $fizaNotaPenerimaan = new FizaNotaPenerimaan;

        $fizaNotaPenerimaan->terima_id=$request->terima_id;
        $fizaNotaPenerimaan->pesanan_id=$request->pesanan_id;
        $fizaNotaPenerimaan->user_id=$request->user_id;
        $fizaNotaPenerimaan->terima_pegawai_pengesah=$request->terima_pegawai_pengesah;
        $fizaNotaPenerimaan->terima_kuantiti=$request->terima_kuantiti;
        $fizaNotaPenerimaan->terima_catatan=$request->terima_catatan;
        $fizaNotaPenerimaan->terima_amaun=$request->terima_amaun;
        $fizaNotaPenerimaan->terima_skor_khidmat_sokongan=$request->terima_skor_khidmat_sokongan;
        $fizaNotaPenerimaan->terima_skor_kuantiti=$request->terima_skor_kuantiti;
        $fizaNotaPenerimaan->terima_skor_tempoh_penghantaran=$request->terima_skor_tempoh_penghantaran;
        $fizaNotaPenerimaan->penghantaran_id=$request->penghantaran_id;
        $fizaNotaPenerimaan->sst_id=$request->sst_id;
        $fizaNotaPenerimaan->terima_created_by=$request->terima_created_by;
        $fizaNotaPenerimaan->penghantaran_id=$request->penghantaran_id;

        $fizaNotaPenerimaan->save();
        return redirect('/fizaNotaMinta');


    }


    public function show(FizaNotaPenerimaan $fizaNotaPenerimaan)
    {
        //
    }


    public function edit(FizaNotaPenerimaan $fizaNotaPenerimaan)
    {
        $fizaNotaPenerimaan = FizaNotaPenerimaan::all();
        return view ('1_nota_penerimaan.index',[
            'fizaNotaPenerimaan'=>$fizaNotaPenerimaan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaNotaPenerimaan  $fizaNotaPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaNotaPenerimaan $fizaNotaPenerimaan)
    {
        $fizaNotaPenerimaan->terima_id=$request->terima_id;
        $fizaNotaPenerimaan->pesanan_id=$request->pesanan_id;
        $fizaNotaPenerimaan->user_id=$request->user_id;
        $fizaNotaPenerimaan->terima_pegawai_pengesah=$request->terima_pegawai_pengesah;
        $fizaNotaPenerimaan->terima_kuantiti=$request->terima_kuantiti;
        $fizaNotaPenerimaan->terima_catatan=$request->terima_catatan;
        $fizaNotaPenerimaan->terima_amaun=$request->terima_amaun;
        $fizaNotaPenerimaan->terima_skor_khidmat_sokongan=$request->terima_skor_khidmat_sokongan;
        $fizaNotaPenerimaan->terima_skor_kuantiti=$request->terima_skor_kuantiti;
        $fizaNotaPenerimaan->terima_skor_tempoh_penghantaran=$request->terima_skor_tempoh_penghantaran;
        $fizaNotaPenerimaan->penghantaran_id=$request->penghantaran_id;
        $fizaNotaPenerimaan->sst_id=$request->sst_id;
        $fizaNotaPenerimaan->terima_updated_by=$request->terima_updated_by;
        $fizaNotaPenerimaan->penghantaran_id=$request->penghantaran_id;


        $url = '/fizaNotaPenerimaan'.$fizaNotaPenerimaan->id;
        return redirect('/fizaNotaPenerimaan');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaNotaPenerimaan  $fizaNotaPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaNotaPenerimaan $fizaNotaPenerimaan)
    {
        //
    }
}
