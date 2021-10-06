<?php

namespace App\Http\Controllers;

use App\Models\FizaJadualPemenuhan;
use Illuminate\Http\Request;

class FizaJadualPemenuhanController extends Controller
{
    public function index()
    {
        $fizaJadualPemenuhan = FizaJadualPemenuhan::all();
        return view ('1_jadual.index',[
            'fizaJadualPemenuhan'=>$fizaJadualPemenuhan]);
    }


    public function create()
    {
        return view('1_jadual.create');
    }

    public function store(Request $request)
    {
         $fizaJadualPemenuhan = new FizaJadualPemenuhan;
        
        $fizaJadualPemenuhan->spesifikasi_id=$request->spesifikasi_id;
        $fizaJadualPemenuhan->jadual_jenis_pemenuhan =$request->jadual_jenis_pemenuhan ;
        $fizaJadualPemenuhan->jadual_kekerapan=$request->jadual_kekerapan;
        $fizaJadualPemenuhan->jadual_bil=$request->jadual_bil;
        $fizaJadualPemenuhan->jadual_bulan_mula=$request->jadual_bulan_mula;
        $fizaJadualPemenuhan->jadual_tahun_mula=$request->jadual_tahun_mula;
        $fizaJadualPemenuhan->jadual_bulan_akhir =$request->jadual_bulan_akhir ;
        $fizaJadualPemenuhan->jadual_tahun_akhir=$request->jadual_tahun_akhir;
        $fizaJadualPemenuhan->jadual_jumlah_bulan =$request->jadual_jumlah_bulan ;
        $fizaJadualPemenuhan->jadual_jenis =$request->jadual_jenis ;
        $fizaJadualPemenuhan->jadual_created_by=$request->jadual_created_by ;
  
        $fizaJadualPemenuhan->save();
        return redirect('/fizaJadualPemenuhan');
    }

    public function show(FizaJadualPemenuhan $fizaJadualPemenuhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaJadualPemenuhan  $fizaJadualPemenuhan
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaJadualPemenuhan $fizaJadualPemenuhan)
    {
        $fizaJadualPemenuhan = FizaJadualPemenuhan::all();
        return view ('1_jadual.edit',[
            'fizaJadualPemenuhan'=>$fizaJadualPemenuhan]);
    }

    public function update(Request $request, FizaJadualPemenuhan $fizaJadualPemenuhan)
    {
        $fizaJadualPemenuhan->spesifikasi_id=$request->spesifikasi_id;
        $fizaJadualPemenuhan->jadual_jenis_pemenuhan =$request->jadual_jenis_pemenuhan ;
        $fizaJadualPemenuhan->jadual_kekerapan=$request->jadual_kekerapan;
        $fizaJadualPemenuhan->jadual_bil=$request->jadual_bil;
        $fizaJadualPemenuhan->jadual_bulan_mula=$request->jadual_bulan_mula;
        $fizaJadualPemenuhan->jadual_tahun_mula=$request->jadual_tahun_mula;
        $fizaJadualPemenuhan->jadual_bulan_akhir =$request->jadual_bulan_akhir ;
        $fizaJadualPemenuhan->jadual_tahun_akhir=$request->jadual_tahun_akhir;
        $fizaJadualPemenuhan->jadual_jumlah_bulan =$request->jadual_jumlah_bulan ;
        $fizaJadualPemenuhan->jadual_jenis =$request->jadual_jenis ;
        $fizaJadualPemenuhan->jadual_updated_by=$request->jadual_updated_by ;

        $url = '/fizaJadualPemenuhan'.$fizaJadualPemenuhan->id;
        return redirect('/fizaJadualPemenuhan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaJadualPemenuhan  $fizaJadualPemenuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaJadualPemenuhan $fizaJadualPemenuhan)
    {
        //
    }
}
