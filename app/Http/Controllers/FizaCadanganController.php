<?php

namespace App\Http\Controllers;

use App\Models\FizaCadangan;
use Illuminate\Http\Request;

class FizaCadanganController extends Controller
{

    public function index()
    {
        $fizaCadangan = FizaCadangan::all();
        return view ('1_cadangan.index',[
            '$fizaCadangan'=>$fizaCadangan]);
    }

    public function create()
    {
        return view('1_cadangan.create');
    }


    public function store(Request $request)
    {
        $fizaCadangan = new FizaCadangan;

        $fizaCadangan->pembekal_id =$request->pembekal_id ;
        $fizaCadangan->spesifikasi_id =$request->spesifikasi_id ;
        $fizaCadangan->sss_id =$request->sss_id ;
        $fizaCadangan->cadangan_mesyuarat_date=$request->cadangan_mesyuarat_date;
        $fizaCadangan->cadangan_mesyuarat_place =$request->cadangan_mesyuarat_place ;
        $fizaCadangan->cadangan_created_by=$request->cadangan_created_by;
        $fizaCadangan->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaCadangan->cadangan_mesyuarat_status=$request->cadangan_mesyuarat_status;
        $fizaCadangan->cadangan_kehadiran=$request->cadangan_kehadiran;
        $fizaCadangan->cadangan_bil_pembekal_lulus_teknikal=$request->cadangan_bil_pembekal_lulus_teknikal;
        $fizaCadangan->cadangan_bil_pembekal_lulus_kewangan=$request->cadangan_bil_pembekal_lulus_kewangan;
        $fizaCadangan->cadangan_ulasan_penilaian=$request->cadangan_ulasan_penilaian;

        $fizaCadangan->save();
        return redirect('/fizaCadangan');
    }


    public function show(FizaCadangan $fizaCadangan)
    {
        //
    }


    public function edit(FizaCadangan $fizaCadangan)
    {
        return redirect('1_cadangan.edit', [
            'FizaCadangan'=>$fizaCadangan
        ]); 
    }


    public function update(Request $request, FizaCadangan $fizaCadangan)
    {
        $fizaCadangan->pembekal_id =$request->pembekal_id ;
        $fizaCadangan->spesifikasi_id =$request->spesifikasi_id ;
        $fizaCadangan->sss_id =$request->sss_id ;
        $fizaCadangan->cadangan_mesyuarat_date=$request->cadangan_mesyuarat_date;
        $fizaCadangan->cadangan_mesyuarat_place =$request->cadangan_mesyuarat_place ;
        $fizaCadangan->cadangan_updated_by=$request->cadangan_updated_by;
        $fizaCadangan->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaCadangan->cadangan_mesyuarat_status=$request->cadangan_mesyuarat_status;
        $fizaCadangan->cadangan_kehadiran=$request->cadangan_kehadiran;
        $fizaCadangan->cadangan_bil_pembekal_lulus_teknikal=$request->cadangan_bil_pembekal_lulus_teknikal;
        $fizaCadangan->cadangan_bil_pembekal_lulus_kewangan=$request->cadangan_bil_pembekal_lulus_kewangan;
        $fizaCadangan->cadangan_ulasan_penilaian=$request->cadangan_ulasan_penilaian;

        
        $url = '/fizaCadangan'.$fizaCadangan->id;
        return redirect('/fizaCadangan');
    }


    public function destroy(FizaCadangan $fizaCadangan)
    {
        //
    }
}
