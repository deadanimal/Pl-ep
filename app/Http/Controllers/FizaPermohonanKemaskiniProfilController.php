<?php

namespace App\Http\Controllers;

use App\Models\FizaPermohonanKemaskiniProfil;
use Illuminate\Http\Request;

class FizaPermohonanKemaskiniProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPermohonanKemaskiniProfil = FizaPermohonanKemaskiniProfil::all();
        return view ('1_kemaskini_profil.index',[
            'fizaPermohonanKemaskiniProfil'=>$fizaPermohonanKemaskiniProfil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('1_kemaskini_profil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaPermohonanKemaskiniProfil = new FizaPermohonanKemaskiniProfil;

        $fizaPermohonanKemaskiniProfil->permohonan_description=$request->permohonan_description;
        $fizaPermohonanKemaskiniProfil->pembekal_id=$request->pembekal_id;
        $fizaPermohonanKemaskiniProfil->permohonan_created_by=$request->permohonan_created_by;
        $fizaPermohonanKemaskiniProfil->katalog_created_by=$request->katalog_created_by;
        $fizaPermohonanKemaskiniProfil->user_id=$request->user_id;

        $fizaPermohonanKemaskiniProfil->save();
        return redirect('/fizaPermohonanKemaskiniProfil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPermohonanKemaskiniProfil  $fizaPermohonanKemaskiniProfil
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPermohonanKemaskiniProfil $fizaPermohonanKemaskiniProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPermohonanKemaskiniProfil  $fizaPermohonanKemaskiniProfil
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPermohonanKemaskiniProfil $fizaPermohonanKemaskiniProfil)
    {
        $fizaPermohonanKemaskiniProfil = FizaPermohonanKemaskiniProfil::all();
        return view ('1_kemaskini_profil.edit',[
            'fizaPermohonanKemaskiniProfil'=>$fizaPermohonanKemaskiniProfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaPermohonanKemaskiniProfil  $fizaPermohonanKemaskiniProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaPermohonanKemaskiniProfil $fizaPermohonanKemaskiniProfil)
    {
        $fizaPermohonanKemaskiniProfil->permohonan_description=$request->permohonan_description;
        $fizaPermohonanKemaskiniProfil->pembekal_id=$request->pembekal_id;
        $fizaPermohonanKemaskiniProfil->permohonan_created_by=$request->permohonan_created_by;
        $fizaPermohonanKemaskiniProfil->katalog_updated_by=$request->katalog_updated_by;
        $fizaPermohonanKemaskiniProfil->user_id=$request->user_id;

        $fizaPermohonanKemaskiniProfil->save();
        return redirect('/fizaPermohonanKemaskiniProfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPermohonanKemaskiniProfil  $fizaPermohonanKemaskiniProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPermohonanKemaskiniProfil $fizaPermohonanKemaskiniProfil)
    {
        //
    }
}
