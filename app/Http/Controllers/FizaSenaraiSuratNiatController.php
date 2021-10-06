<?php

namespace App\Http\Controllers;

use App\Models\FizaSenaraiSuratNiat;
use Illuminate\Http\Request;

class FizaSenaraiSuratNiatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaSenaraiSuratNiat = FizaSenaraiSuratNiat::all();
        return view('1_surat_niat.index', [
            'fizaSenaraiSuratNiat'=>$fizaSenaraiSuratNiat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('1_surat_niat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaSenaraiSuratNiat = new FizaSenaraiSuratNiat;

        $fizaSenaraiSuratNiat->niat_tajuk=$request->niat_tajuk;
        $fizaSenaraiSuratNiat->pembekal_id=$request->pembekal_id;
        $fizaSenaraiSuratNiat->niat_lokasi_rundingan=$request-> niat_lokasi_rundingan;
        $fizaSenaraiSuratNiat->niat_tarikh_rundingan=$request->niat_tarikh_rundingan;
        $fizaSenaraiSuratNiat->niat_catatan_rundingan=$request->niat_catatan_rundingan;
        $fizaSenaraiSuratNiat->niat_terma_rundingan=$request->niat_terma_rundingan;
        $fizaSenaraiSuratNiat->niat_penandatangan=$request->niat_penandatangan;

        $fizaSenaraiSuratNiat->niat_jawatan=$request->niat_jawatan;
        $fizaSenaraiSuratNiat->user_id=$request->user_id;
        $fizaSenaraiSuratNiat->niat_pelulus=$request->niat_pelulus;
        $fizaSenaraiSuratNiat->niat_status=$request->niat_status;
        $fizaSenaraiSuratNiat->niat_created_by=$request->niat_created_by;
        $fizaSenaraiSuratNiat->niat_file=$request->niat_file;//FILE
        $fizaSenaraiSuratNiat->akhir_id=$request->akhir_id;

        $fizaSenaraiSuratNiat->save();
        return redirect('/fizaSenaraiSuratNiat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaSenaraiSuratNiat  $fizaSenaraiSuratNiat
     * @return \Illuminate\Http\Response
     */
    public function show(FizaSenaraiSuratNiat $fizaSenaraiSuratNiat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaSenaraiSuratNiat  $fizaSenaraiSuratNiat
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaSenaraiSuratNiat $fizaSenaraiSuratNiat)
    {

    $fizaSenaraiSuratNiat = FizaSenaraiSuratNiat::all();
    return view('1_surat_niat.edit', [
        'fizaSenaraiSuratNiat'=>$fizaSenaraiSuratNiat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaSenaraiSuratNiat  $fizaSenaraiSuratNiat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaSenaraiSuratNiat $fizaSenaraiSuratNiat)
    {
        $fizaSenaraiSuratNiat->niat_tajuk=$request->niat_tajuk;
        $fizaSenaraiSuratNiat->pembekal_id=$request->pembekal_id;
        $fizaSenaraiSuratNiat->niat_lokasi_rundingan=$request-> niat_lokasi_rundingan;
        $fizaSenaraiSuratNiat->niat_tarikh_rundingan=$request->niat_tarikh_rundingan;
        $fizaSenaraiSuratNiat->niat_catatan_rundingan=$request->niat_catatan_rundingan;
        $fizaSenaraiSuratNiat->niat_terma_rundingan=$request->niat_terma_rundingan;
        $fizaSenaraiSuratNiat->niat_penandatangan=$request->niat_penandatangan;

        $fizaSenaraiSuratNiat->niat_jawatan=$request->niat_jawatan;
        $fizaSenaraiSuratNiat->user_id=$request->user_id;
        $fizaSenaraiSuratNiat->niat_pelulus=$request->niat_pelulus;
        $fizaSenaraiSuratNiat->niat_status=$request->niat_status;
        $fizaSenaraiSuratNiat->niat_created_by=$request->niat_created_by;
        $fizaSenaraiSuratNiat->niat_file=$request->niat_file;//FILE

        $url = '/fizaSenaraiSuratNiat'.$fizaSenaraiSuratNiat->id;
        return redirect('/fizaSenaraiSuratNiat');
    }

    public function destroy(FizaSenaraiSuratNiat $fizaSenaraiSuratNiat)
    {
        //
    }
}
