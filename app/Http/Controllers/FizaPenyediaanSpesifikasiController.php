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
        $fizaPenyediaanSpesifikasi->spesifikasi_tajuk=$request->spesifikasi_tajuk;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_barang=$request->spesifikasi_jenis_barang;
        // $fizaPenyediaanSpesifikasi->spesifikasi_status="Draf";
        $fizaPenyediaanSpesifikasi->spesifikasi_description=$request->spesifikasi_description;
        $fizaPenyediaanSpesifikasi->spesifikasi_unit_ukuran=$request->spesifikasi_unit_ukuran;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_harga=$request->spesifikasi_jenis_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif=$request->spesifikasi_jumlah_harga_indikatif;

        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga=$request->spesifikasi_jumlah_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_maksima=$request->spesifikasi_skor_maksima;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_teknikal=$request->spesifikasi_jumlah_skor_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_teknikal=$request->spesifikasi_skor_lulus_teknikal;

        if ($request->hasFile('spesifikasi_skema_teknikal')) {
            $spesifikasi_skema_teknikal=$request->file('spesifikasi_skema_teknikal')->store('spesifikasi_skema_teknikal');
            $fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal=$spesifikasi_skema_teknikal;
        }


        // $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan=$request->spesifikasi_jumlah_skor_kewangan;
        // $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan=$request->spesifikasi_skor_lulus_kewangan;
        if ($request->hasFile('spesifikasi_skema_kewangan')) {
            $spesifikasi_skema_kewangan=$request->file('spesifikasi_skema_kewangan')->store('spesifikasi_skema_kewangan');
            $fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$spesifikasi_skema_kewangan;
        }
        // $fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$request->spesifikasi_skema_kewangan;
        
        // $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan=$request->spesifikasi_skor_lulus_keseluruhan;
        $fizaPenyediaanSpesifikasi->spesifikasi_alamat_penghantaran=$request->spesifikasi_alamat_penghantaran;
        $fizaPenyediaanSpesifikasi->spesifikasi_catatan=$request->spesifikasi_catatan;

        if ($request->status_spesifikasi=="hantar"){
            $fizaPenyediaanSpesifikasi->spesifikasi_status="Menunggu Semakan";

        }
        else if($request->status_spesifikasi=="draf"){
            $fizaPelanPerancanganPerolehan->spesifikasi_status="Draf";
        }

        $fizaPenyediaanSpesifikasi->save();
        return redirect('/PenyediaanSpesifikasi');
    }


    public function show(FizaPenyediaanSpesifikasi $fizaPenyediaanSpesifikasi)
    {
        //
    }


    public function edit($id)
    {
        $fizaPenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::find($id);
        return view ('1_penyediaan_spesifikasi.edit',[
            'fizaPenyediaanSpesifikasi'=>$fizaPenyediaanSpesifikasi]);
    }

    public function update(Request $request, $id)
    {
        $fizaPenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::find($id);


        $fizaPenyediaanSpesifikasi->pst_id=$request->pst_id;
        $fizaPenyediaanSpesifikasi->sss_id=$request->sss_id;
        $fizaPenyediaanSpesifikasi->item_id=$request->item_id;
        $fizaPenyediaanSpesifikasi->spesifikasi_tajuk=$request->spesifikasi_tajuk;
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

        if ($request->hasFile('spesifikasi_skema_teknikal')) {
            $spesifikasi_skema_teknikal=$request->file('spesifikasi_skema_teknikal')->store('spesifikasi_skema_teknikal');
            $fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal=$spesifikasi_skema_teknikal;
        }

       // $fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal=$request->spesifikasi_skema_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan=$request->spesifikasi_jumlah_skor_kewangan;

        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan=$request->spesifikasi_skor_lulus_kewangan;

        if ($request->hasFile('spesifikasi_skema_kewangan')) {
            $spesifikasi_skema_kewangan=$request->file('spesifikasi_skema_kewangan')->store('spesifikasi_skema_kewangan');
            $fizaPenyediaanKewangan->spesifikasi_skema_kewangan=$spesifikasi_skema_kewangan;
        }

        //$fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$request->spesifikasi_skema_kewangan;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan=$request->spesifikasi_skor_lulus_keseluruhan;
        $fizaPenyediaanSpesifikasi->spesifikasi_alamat_penghantaran=$request->spesifikasi_alamat_penghantaran;
        $fizaPenyediaanSpesifikasi->spesifikasi_catatan=$request->spesifikasi_catatan;


        $fizaPenyediaanSpesifikasi->save();
        return redirect('/PenyediaanSpesifikasi');

    }


    public function destroy(FizaPenyediaanSpesifikasi $fizaPenyediaanSpesifikasi)
    {
        //
    }
}
