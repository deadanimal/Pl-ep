<?php

namespace App\Http\Controllers;

use App\Models\FizaJawatankuasa;
use Illuminate\Http\Request;

class FizaJawatankuasaController extends Controller
{

    public function index()
    {
        $fizaJawatankuasa = FizaJawatankuasa::all();
        return view ('1_jawatankuasa.index',[
            'Jawatankuasa'=>$fizaJawatankuasa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_jawatankuasa.create');
    }

    public function store(Request $request)
    {
        $fizaJawatankuasa = new FizaJawatankuasa;
        
        $fizaJawatankuasa->jenis_jawatankuasa=$request->jenis_jawatankuasa;
        $fizaJawatankuasa->user_id=$request->user_id;
        $fizaJawatankuasa->jawatankuasa_peranan=$request->jawatankuasa_peranan;
        $fizaJawatankuasa->pst_id=$request->pst_id;
        $fizaJawatankuasa->jawatankuasa_created_by=$request->jawatankuasa_created_by;

        $fizaJawatankuasa->save();
        return redirect('/Jawatankuasa');
        
    }

    public function show(FizaJawatankuasa $fizaJawatankuasa)
    {
        //
    }


    public function edit( $id)
    {
        $fizaJawatankuasa= fizaJawatankuasa::find($id);
        return view ('1_jawatankuasa.edit',[
            'Jawatankuasa'=>$fizaJawatankuasa]);
    }


    public function update($id, Request $request)
    {
        $fizaJawatankuasa= fizaJawatankuasa::find($id);
        $fizaJawatankuasa->jenis_jawatankuasa=$request->jenis_jawatankuasa;
        $fizaJawatankuasa->user_id=$request->user_id;
        $fizaJawatankuasa->jawatankuasa_peranan=$request->jawatankuasa_peranan;
        $fizaJawatankuasa->pst_id=$request->pst_id;
        $fizaJawatankuasa->jawatankuasa_updated_by=$request->jawatankuasa_updated_by;

        $fizaJawatankuasa->save();
        return redirect('/Jawatankuasa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaJawatankuasa  $fizaJawatankuasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaJawatankuasa $fizaJawatankuasa)
    {
        //
    }
}
