<?php

namespace App\Http\Controllers;

use App\Models\FizaKandunganPerjanjian;
use Illuminate\Http\Request;

class FizaKandunganPerjanjianController extends Controller
{

    public function index()
    {
        $fizaKandunganPerjanjian = FizaKandunganPerjanjian::all();
        return view ('1_kandungan_perjanjian.index',[
            'fizaKandunganPerjanjian'=>$fizaKandunganPerjanjian]);

    }


    public function create()
    {
        return redirect('1_kandungan_perjanjian.create');
    }
    public function store(Request $request)
    {
        $fizaKandunganPerjanjian = new FizaKandunganPerjanjian;
        
        $fizaKandunganPerjanjian->kandungan_nama=$request->kandungan_nama;
        $fizaKandunganPerjanjian->kandungan_template=$request->kandungan_template;//file
        $fizaKandunganPerjanjian->kandungan_created_by=$request->kandungan_created_by;

    
        $fizaKandunganPerjanjian->save();
        return redirect('/fizaKandunganPerjanjian');
    }

    public function show(FizaKandunganPerjanjian $fizaKandunganPerjanjian)
    {
        //
    }


    public function edit(FizaKandunganPerjanjian $fizaKandunganPerjanjian)
    {
        $fizaKandunganPerjanjian = FizaKandunganPerjanjian::all();
        return view ('1_kandungan_perjanjian.edit',[
            'fizaKandunganPerjanjian'=>$fizaKandunganPerjanjian]);

    }

    public function update(Request $request, FizaKandunganPerjanjian $fizaKandunganPerjanjian)
    {
        
        $fizaKandunganPerjanjian->kandungan_nama=$request->kandungan_nama;
        $fizaKandunganPerjanjian->kandungan_template=$request->kandungan_template;//file
        $fizaKandunganPerjanjian->kandungan_updated_by=$request->kandungan_updated_by;

        $url = '/fizaKandunganPerjanjian'.$fizaKandunganPerjanjian->id;
        return redirect('/fizaKandunganPerjanjian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaKandunganPerjanjian  $fizaKandunganPerjanjian
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaKandunganPerjanjian $fizaKandunganPerjanjian)
    {
        //
    }
}
