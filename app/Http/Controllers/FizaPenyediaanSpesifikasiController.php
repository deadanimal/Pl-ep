<?php

namespace App\Http\Controllers;

use App\Models\FizaPenyediaanSpesifikasi;
use Illuminate\Http\Request;

class FizaPenyediaanSpesifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::all();
        return view ('1_penyediaan_spesifikasi.index',[
            'fizaPenyediaanSpesifikasi'=>$fizaPenyediaanSpesifikasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_penyediaan_spesifikasi.create');
    }

    public function store(Request $request)
    {
        $fizaPenyediaanSpesifikasi = new FizaPenyediaanSpesifikasi;

        $fizaPenyediaanSpesifikasi->pst_id=$request->pst_id;
        $fizaPenyediaanSpesifikasi->sss_id=$request->sss_id;
        $fizaPenyediaanSpesifikasi->item_id=$request->item_id;
        $fizaPenyediaanSpesifikasi->spesifikasi_tajuk_template=$request->spesifikasi_tajuk_template;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_barang=$request->spesifikasi_jenis_barang;
        $fizaPenyediaanSpesifikasi->spesifikasi_status=$request->spesifikasi_status;
        $fizaPenyediaanSpesifikasi->spesifikasi_description=$request->spesifikasi_description;
        $fizaPenyediaanSpesifikasi->spesifikasi_unit_ukuran=$request->spesifikasi_unit_ukuran;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_harga=$request->spesifikasi_jenis_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif=$request->spesifikasi_jumlah_harga_indikatif;

        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga=$request->spesifikasi_jumlah_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_maksima=$request->spesifikasi_skor_maksima;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_teknikal=$request->spesifikasi_jumlah_skor_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_teknikal=$request->spesifikasi_skor_lulus_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal=$request->spesifikasi_skema_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan=$request->spesifikasi_jumlah_skor_kewangan;

        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan=$request->spesifikasi_skor_lulus_kewangan;
        $fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$request->spesifikasi_skema_kewangan;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan=$request->spesifikasi_skor_lulus_keseluruhan;
        $fizaPenyediaanSpesifikasi->spesifikasi_alamat_penghantaran=$request->spesifikasi_alamat_penghantaran;
        $fizaPenyediaanSpesifikasi->spesifikasi_catatan=$request->spesifikasi_catatan;

        $fizaPenyediaanSpesifikasi->save();
        return redirect('/fizaPenyediaanSpesifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPenyediaanSpesifikasi  $fizaPenyediaanSpesifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPenyediaanSpesifikasi $fizaPenyediaanSpesifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPenyediaanSpesifikasi  $fizaPenyediaanSpesifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPenyediaanSpesifikasi $fizaPenyediaanSpesifikasi)
    {
        $fizaPenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::all();
        return view ('1_penyediaan_spesifikasi.edit',[
            'fizaPenyediaanSpesifikasi'=>$fizaPenyediaanSpesifikasi]);
    }

    public function update(Request $request, FizaPenyediaanSpesifikasi $fizaPenyediaanSpesifikasi)
    {
        $fizaPenyediaanSpesifikasi->pst_id=$request->pst_id;
        $fizaPenyediaanSpesifikasi->sss_id=$request->sss_id;
        $fizaPenyediaanSpesifikasi->item_id=$request->item_id;
        $fizaPenyediaanSpesifikasi->spesifikasi_tajuk_template=$request->spesifikasi_tajuk_template;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_barang=$request->spesifikasi_jenis_barang;
        $fizaPenyediaanSpesifikasi->spesifikasi_status=$request->spesifikasi_status;
        $fizaPenyediaanSpesifikasi->spesifikasi_description=$request->spesifikasi_description;
        $fizaPenyediaanSpesifikasi->spesifikasi_unit_ukuran=$request->spesifikasi_unit_ukuran;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_harga=$request->spesifikasi_jenis_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif=$request->spesifikasi_jumlah_harga_indikatif;

        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga=$request->spesifikasi_jumlah_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_maksima=$request->spesifikasi_skor_maksima;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_teknikal=$request->spesifikasi_jumlah_skor_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_teknikal=$request->spesifikasi_skor_lulus_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal=$request->spesifikasi_skema_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan=$request->spesifikasi_jumlah_skor_kewangan;

        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan=$request->spesifikasi_skor_lulus_kewangan;
        $fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$request->spesifikasi_skema_kewangan;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan=$request->spesifikasi_skor_lulus_keseluruhan;
        $fizaPenyediaanSpesifikasi->spesifikasi_alamat_penghantaran=$request->spesifikasi_alamat_penghantaran;
        $fizaPenyediaanSpesifikasi->spesifikasi_catatan=$request->spesifikasi_catatan;


        $url = '/fizaPenyediaanSpesifikasi'.$fizaPenyediaanSpesifikasi->id;
        return redirect('/fizaPenyediaanSpesifikasi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPenyediaanSpesifikasi  $fizaPenyediaanSpesifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPenyediaanSpesifikasi $fizaPenyediaanSpesifikasi)
    {
        //
    }
}
