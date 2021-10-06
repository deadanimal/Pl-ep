<?php

namespace App\Http\Controllers;

use App\Models\FizaSuratSetujuTerima;
use Illuminate\Http\Request;

class FizaSuratSetujuTerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaSuratSetujuTerima = FizaSuratSetujuTerima::all();
        return view ('1_sst.index',[
            'fizaSuratSetujuTerima'=>$fizaSuratSetujuTerima]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_sst.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaSuratSetujuTerima = new FizaSuratSetujuTerima;

        $fizaSuratSetujuTerima->sst_id=$request->sst_id;
        $fizaSuratSetujuTerima->pembekal_id=$request->pembekal_id;
        $fizaSuratSetujuTerima->sst_tajuk=$request->sst_tajuk;
        $fizaSuratSetujuTerima->pst_id=$request->pst_id;
        $fizaSuratSetujuTerima->sst_insurans_jaminan=$request->sst_insurans_jaminan;
        $fizaSuratSetujuTerima->sst_bon=$request->sst_bon;
        $fizaSuratSetujuTerima->sst_semakan=$request->sst_semakan;
        $fizaSuratSetujuTerima->sst_sl1m=$request->sst_sl1m;
        $fizaSuratSetujuTerima->sst_pentadbir_kontrak=$request->sst_pentadbir_kontrak;
        $fizaSuratSetujuTerima->sst_file=$request->sst_file;
        $fizaSuratSetujuTerima->sst_perjanjian=$request->sst_perjanjian;
        $fizaSuratSetujuTerima->katalog_kategori=$request->katalog_kategori;

        $fizaSuratSetujuTerima->sst_pelulus=$request->sst_pelulus;
        $fizaSuratSetujuTerima->sst_catatan_pelulus=$request->sst_catatan_pelulus;
        $fizaSuratSetujuTerima->sst_no_akaun=$request->sst_no_akaun;
        $fizaSuratSetujuTerima->sst_nama_bank=$request->sst_nama_bank;
        $fizaSuratSetujuTerima->sst_harga_cadangan_tawaran=$request->sst_harga_cadangan_tawaran;
        $fizaSuratSetujuTerima->sst_amaun_cbp=$request->sst_amaun_cbp;

        $fizaSuratSetujuTerima->sst_amaun_keseluruhan=$request->sst_amaun_keseluruhan;
        $fizaSuratSetujuTerima->sst_nama_saksi=$request->sst_nama_saksi;
        $fizaSuratSetujuTerima->sst_no_pengenalan=$request->sst_no_pengenalan;
        $fizaSuratSetujuTerima->sst_jawatan=$request->sst_jawatan;
        $fizaSuratSetujuTerima->sst_alamat=$request->sst_alamat;
        $fizaSuratSetujuTerima->sst_no_tel=$request->sst_no_tel;
        $fizaSuratSetujuTerima->sst_no_fax=$request->sst_no_fax;
        $fizaSuratSetujuTerima->sst_email=$request->sst_email;

        $fizaSuratSetujuTerima->item_id=$request->item_id;
        $fizaSuratSetujuTerima->sst_jenis_potongan=$request->sst_jenis_potongan;
        $fizaSuratSetujuTerima->sst_amaun_potongan=$request->sst_amaun_potongan;
        $fizaSuratSetujuTerima->sst_created_by=$request->sst_created_by;
        $fizaSuratSetujuTerima->sst_email=$request->sst_email;
        $fizaSuratSetujuTerima->akhir_id=$request->akhir_id;
        $fizaSuratSetujuTerima->jadual_id=$request->jadual_id;
        $fizaSuratSetujuTerima->niat_id=$request->niat_id;

        $fizaSuratSetujuTerima->save();
        return redirect('/fizaSuratSetujuTerima');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaSuratSetujuTerima  $fizaSuratSetujuTerima
     * @return \Illuminate\Http\Response
     */
    public function show(FizaSuratSetujuTerima $fizaSuratSetujuTerima)
    {
        //
    }

    public function edit(FizaSuratSetujuTerima $fizaSuratSetujuTerima)
    {
        $fizaSuratSetujuTerima = FizaSuratSetujuTerima::all();
        return view ('1_sst.edit',[
            'fizaSuratSetujuTerima'=>$fizaSuratSetujuTerima]);
    }


    public function update(Request $request, FizaSuratSetujuTerima $fizaSuratSetujuTerima)
    {
        $fizaSuratSetujuTerima->sst_id=$request->sst_id;
        $fizaSuratSetujuTerima->pembekal_id=$request->pembekal_id;
        $fizaSuratSetujuTerima->sst_tajuk=$request->sst_tajuk;
        $fizaSuratSetujuTerima->pst_id=$request->pst_id;
        $fizaSuratSetujuTerima->sst_insurans_jaminan=$request->sst_insurans_jaminan;
        $fizaSuratSetujuTerima->sst_bon=$request->sst_bon;
        $fizaSuratSetujuTerima->sst_semakan=$request->sst_semakan;
        $fizaSuratSetujuTerima->sst_sl1m=$request->sst_sl1m;
        $fizaSuratSetujuTerima->sst_pentadbir_kontrak=$request->sst_pentadbir_kontrak;
        $fizaSuratSetujuTerima->sst_file=$request->sst_file;
        $fizaSuratSetujuTerima->sst_perjanjian=$request->sst_perjanjian;
        $fizaSuratSetujuTerima->katalog_kategori=$request->katalog_kategori;

        $fizaSuratSetujuTerima->sst_pelulus=$request->sst_pelulus;
        $fizaSuratSetujuTerima->sst_catatan_pelulus=$request->sst_catatan_pelulus;
        $fizaSuratSetujuTerima->sst_no_akaun=$request->sst_no_akaun;
        $fizaSuratSetujuTerima->sst_nama_bank=$request->sst_nama_bank;
        $fizaSuratSetujuTerima->sst_harga_cadangan_tawaran=$request->sst_harga_cadangan_tawaran;
        $fizaSuratSetujuTerima->sst_amaun_cbp=$request->sst_amaun_cbp;

        $fizaSuratSetujuTerima->sst_amaun_keseluruhan=$request->sst_amaun_keseluruhan;
        $fizaSuratSetujuTerima->sst_nama_saksi=$request->sst_nama_saksi;
        $fizaSuratSetujuTerima->sst_no_pengenalan=$request->sst_no_pengenalan;
        $fizaSuratSetujuTerima->sst_jawatan=$request->sst_jawatan;
        $fizaSuratSetujuTerima->sst_alamat=$request->sst_alamat;
        $fizaSuratSetujuTerima->sst_no_tel=$request->sst_no_tel;
        $fizaSuratSetujuTerima->sst_no_fax=$request->sst_no_fax;
        $fizaSuratSetujuTerima->sst_email=$request->sst_email;

        $fizaSuratSetujuTerima->item_id=$request->item_id;
        $fizaSuratSetujuTerima->sst_jenis_potongan=$request->sst_jenis_potongan;
        $fizaSuratSetujuTerima->sst_amaun_potongan=$request->sst_amaun_potongan;
        $fizaSuratSetujuTerima->sst_created_by=$request->sst_created_by;
        $fizaSuratSetujuTerima->sst_email=$request->sst_email;
        $fizaSuratSetujuTerima->akhir_id=$request->akhir_id;
        $fizaSuratSetujuTerima->jadual_id=$request->jadual_id;
        $fizaSuratSetujuTerima->niat_id=$request->niat_id;

        $url = '/fizaSuratSetujuTerima'.$fizaSuratSetujuTerima->id;
        return redirect('/fizaSuratSetujuTerima');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaSuratSetujuTerima  $fizaSuratSetujuTerima
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaSuratSetujuTerima $fizaSuratSetujuTerima)
    {
        //
    }
}
