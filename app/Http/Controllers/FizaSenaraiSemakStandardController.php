<?php

namespace App\Http\Controllers;

use App\Models\FizaSenaraiSemakStandard;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaSenaraiSemakStandardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaSenaraiSemakStandard = FizaSenaraiSemakStandard::all();
        return view ('1_senarai_semak.index',[
            'fizaSenaraiSemakStandard'=>$fizaSenaraiSemakStandard]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('1_senarai_semak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaSenaraiSemakStandard = new FizaSenaraiSemakStandard;

        $fizaSenaraiSemakStandard->spesifikasi_id=$request->spesifikasi_id;
        $fizaSenaraiSemakStandard->sss_jenis_spesifikasi=$request->sss_jenis_spesifikasi;

        $fizaSenaraiSemakStandard->sss__nama_doc=$request->sss__nama_doc;
        $fizaSenaraiSemakStandard->sss_skor=$request->sss_skor;
        $fizaSenaraiSemakStandard->sss_skor_maksima=$request->sss_skor_maksima;
        $fizaSenaraiSemakStandard->sss_created_by=$request->sss_created_by;


        $sss_file=$request->file('sss_file')->store('sss_file');
        $fizaSenaraiSemakStandard->sss_file=$sss_file;
       // $fizaSenaraiSemakStandard->sss_file =$request->sss_file ;//file

        $fizaSenaraiSemakStandard->sss_status_pematuhan=$request->sss_status_pematuhan;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaSenaraiSemakStandard  $fizaSenaraiSemakStandard
     * @return \Illuminate\Http\Response
     */
    public function show(FizaSenaraiSemakStandard $fizaSenaraiSemakStandard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaSenaraiSemakStandard  $fizaSenaraiSemakStandard
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaSenaraiSemakStandard $fizaSenaraiSemakStandard)
    {
        $fizaSenaraiSemakStandard = FizaSenaraiSemakStandard::all();
        return view ('1_senarai_semak.edit',[
            'fizaSenaraiSemakStandard'=>$fizaSenaraiSemakStandard]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaSenaraiSemakStandard  $fizaSenaraiSemakStandard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaSenaraiSemakStandard $fizaSenaraiSemakStandard)
    {
        
        $fizaSenaraiSemakStandard->spesifikasi_id=$request->spesifikasi_id;
        $fizaSenaraiSemakStandard->sss_jenis_spesifikasi=$request->sss_jenis_spesifikasi;

        $fizaSenaraiSemakStandard->sss__nama_doc=$request->sss__nama_doc;
        $fizaSenaraiSemakStandard->sss_skor=$request->sss_skor;
        $fizaSenaraiSemakStandard->sss_skor_maksima=$request->sss_skor_maksima;
        $fizaSenaraiSemakStandard->sss_created_by=$request->sss_created_by;
        //$fizaSenaraiSemakStandard->sss_file =$request->sss_file ;//file

        if ($request->hasFile('sss_file')) {
            $sss_file=$request->file('sss_file')->store('sss_file');
            $fizaSenaraiSemakStandard->sss_file=$sss_file;
        }
        $fizaSenaraiSemakStandard->sss_status_pematuhan=$request->sss_status_pematuhan;


        $fizaSenaraiSemakStandard->save();
        return redirect('/fizaSenaraiSemakStandard');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaSenaraiSemakStandard  $fizaSenaraiSemakStandard
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaSenaraiSemakStandard $fizaSenaraiSemakStandard)
    {
        //
    }
}
