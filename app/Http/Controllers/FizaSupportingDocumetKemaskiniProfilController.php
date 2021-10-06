<?php

namespace App\Http\Controllers;

use App\Models\FizaSupportingDocumetKemaskiniProfil;
use Illuminate\Http\Request;

class FizaSupportingDocumetKemaskiniProfilController extends Controller
{

    public function index()
    {
        $fizaSupportingDocumetKemaskiniProfil = FizaSupportingDocumetKemaskiniProfil::all();
        return view ('1_docs_update_profil.index',[
            'fizaSupportingDocumetKemaskiniProfil'=>$fizaSupportingDocumetKemaskiniProfil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_docs_update_profil.create');
    }


    public function store(Request $request)
    {
        $fizaSupportingDocumetKemaskiniProfil = new FizaSupportingDocumetKemaskiniProfil;

        $fizaSupportingDocumetKemaskiniProfil->pkp_doc_name=$request->pkp_doc_name;
        $fizaSupportingDocumetKemaskiniProfil->pkp_doc_catatan=$request->pkp_doc_catatan;
        $fizaSupportingDocumetKemaskiniProfil->pkp_doc_status_terima=$request->pkp_doc_status_terima;
        $fizaSupportingDocumetKemaskiniProfil->permohonan_id=$request->permohonan_id;
        $fizaSupportingDocumetKemaskiniProfil->pkp_created_by=$request->pkp_created_by;

        $fizaSupportingDocumetKemaskiniProfil->save();
        return redirect('/fizaSupportingDocumetKemaskiniProfil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaSupportingDocumetKemaskiniProfil  $fizaSupportingDocumetKemaskiniProfil
     * @return \Illuminate\Http\Response
     */
    public function show(FizaSupportingDocumetKemaskiniProfil $fizaSupportingDocumetKemaskiniProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaSupportingDocumetKemaskiniProfil  $fizaSupportingDocumetKemaskiniProfil
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaSupportingDocumetKemaskiniProfil $fizaSupportingDocumetKemaskiniProfil)
    {
        $fizaSupportingDocumetKemaskiniProfil = FizaSupportingDocumetKemaskiniProfil::all();
        return view ('1_docs_update_profil.edit',[
            'fizaSupportingDocumetKemaskiniProfil'=>$fizaSupportingDocumetKemaskiniProfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaSupportingDocumetKemaskiniProfil  $fizaSupportingDocumetKemaskiniProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaSupportingDocumetKemaskiniProfil $fizaSupportingDocumetKemaskiniProfil)
    {
        $fizaSupportingDocumetKemaskiniProfil->pkp_doc_name=$request->pkp_doc_name;
        $fizaSupportingDocumetKemaskiniProfil->pkp_doc_catatan=$request->pkp_doc_catatan;
        $fizaSupportingDocumetKemaskiniProfil->pkp_doc_status_terima=$request->pkp_doc_status_terima;
        $fizaSupportingDocumetKemaskiniProfil->permohonan_id=$request->permohonan_id;
        $fizaSupportingDocumetKemaskiniProfil->pkp_updated_by=$request->pkp_updated_by;

        $url = '/fizaSupportingDocumetKemaskiniProfil'.$fizaSupportingDocumetKemaskiniProfil->id;
        return redirect('/fizaSupportingDocumetKemaskiniProfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaSupportingDocumetKemaskiniProfil  $fizaSupportingDocumetKemaskiniProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaSupportingDocumetKemaskiniProfil $fizaSupportingDocumetKemaskiniProfil)
    {
        //
    }
}
