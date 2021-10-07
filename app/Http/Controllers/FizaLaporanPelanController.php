<?php

namespace App\Http\Controllers;

use App\Models\FizaLaporanPelan;
use Illuminate\Http\Request;

class FizaLaporanPelanController extends Controller
{

    public function index()
    {
        $fizaLaporanPelan = FizaLaporanPelan::all();
        return view ('1_laporan_pelan.index',[
            'fizaLaporanPelan'=>$fizaLaporanPelan]);
    }

    public function create()
    {
        return view ('1_laporan_pelan.index');
    }


    public function store(Request $request)
    {
        $fizaLaporanPelan = new FizaLaporanPelan;

        $fizaLaporanPelan->laporan_pelan_nama=$request->laporan_pelan_nama;
        $fizaLaporanPelan->laporan_pelan_modul=$request->laporan_pelan_modul;
        $fizaLaporanPelan->laporan_file=$request->laporan_file;//file
        $fizaLaporanPelan->laporan_created_by=$request->laporan_created_by;
        $fizaLaporanPelan->pelan_id=$request->pelan_id;


        $fizaLaporanPelan->save();
        return redirect('/fizaLaporanPelan');
    
    }

    public function show(FizaLaporanPelan $fizaLaporanPelan)
    {
        //
    }


    public function edit(FizaLaporanPelan $fizaLaporanPelan)
    {
        return view ('1_laporan_pelan.edit');
    }


    public function update(Request $request, FizaLaporanPelan $fizaLaporanPelan)
    {
        
        $fizaLaporanPelan->laporan_pelan_nama=$request->laporan_pelan_nama;
        $fizaLaporanPelan->laporan_pelan_modul=$request->laporan_pelan_modul;
        $fizaLaporanPelan->laporan_file=$request->laporan_file;//file
        $fizaLaporanPelan->laporan_created_by=$request->laporan_created_by;
        $fizaLaporanPelan->pelan_id=$request->pelan_id;


        $fizaLaporanPelan->save();
        return redirect('/fizaLaporanPelan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaLaporanPelan  $fizaLaporanPelan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaLaporanPelan $fizaLaporanPelan)
    {
        //
    }
}
