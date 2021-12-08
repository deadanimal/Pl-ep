<?php

namespace App\Http\Controllers;

use App\Models\FizaSenaraiSuratNiat;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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


    public function create()
    {
        return view('1_surat_niat.create');
    }

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


        $fizaSenaraiSuratNiat->akhir_id=$request->akhir_id;

        $fizaSenaraiSuratNiat->save();
        return redirect('/fizaSenaraiSuratNiat');
    }


    public function show(FizaSenaraiSuratNiat $fizaSenaraiSuratNiat)
    {
        //
    }

   
    public function edit(FizaSenaraiSuratNiat $fizaSenaraiSuratNiat)
    {

    $fizaSenaraiSuratNiat = FizaSenaraiSuratNiat::all();
    return view('1_surat_niat.edit', [
        'fizaSenaraiSuratNiat'=>$fizaSenaraiSuratNiat]);
    }

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
        $fizaSenaraiSuratNiat->niat_updated_by=$request->niat_updated_by;

        if ($request->hasFile('niat_file')) {
            $niat_file=$request->file('niat_file')->store('niat_file');
            $fizaSenaraiSuratNiat->niat_file=$niat_file;//FILE
        }

        //$fizaSenaraiSuratNiat->niat_file=$request->niat_file;//FILE

        $fizaSenaraiSuratNiat->save();
        return redirect('/fizaSenaraiSuratNiat');
    }

    public function destroy(FizaSenaraiSuratNiat $fizaSenaraiSuratNiat)
    {
        //
    }
}
