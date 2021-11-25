<?php

namespace App\Http\Controllers;

use App\Models\FizaPerjanjianKontrak;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPerjanjianKontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPerjanjianKontrak = FizaPerjanjianKontrak::all();
        return view ('1_perjanjian_kontrak.index',[
            'fizaPerjanjianKontrak'=>$fizaPerjanjianKontrak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_perjanjian_kontrak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fizaPerjanjianKontrak = new FizaPerjanjianKontrak;

        $fizaPerjanjianKontrak->sst_id=$request->sst_id;
        $fizaPerjanjianKontrak->kandungan_id=$request->kandungan_id;

        $perjanjian_file=$request->file('perjanjian_file')->store('perjanjian_file');
        $fizaPerjanjianKontrak->perjanjian_file=$perjanjian_file;

        $fizaPerjanjianKontrak->perjanjian_pelulus=$request->perjanjian_pelulus;
        $fizaPerjanjianKontrak->perjanjian_created_by=$request->perjanjian_created_by;

        $fizaPerjanjianKontrak->perjanjian_catatan_pelulus=$request->perjanjian_catatan_pelulus;
        $fizaPerjanjianKontrak->user_id=$request->user_id;
        $fizaPerjanjianKontrak->pembekal_id=$request->pembekal_id;


        $fizaPerjanjianKontrak->save();

        return redirect('/fizaPerjanjianKontrak');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPerjanjianKontrak  $fizaPerjanjianKontrak
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPerjanjianKontrak $fizaPerjanjianKontrak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPerjanjianKontrak  $fizaPerjanjianKontrak
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPerjanjianKontrak $fizaPerjanjianKontrak)
    {
        $fizaPerjanjianKontrak = FizaPerjanjianKontrak::all();
        return view ('1_perjanjian_kontrak.edit',[
            'fizaPerjanjianKontrak'=>$fizaPerjanjianKontrak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaPerjanjianKontrak  $fizaPerjanjianKontrak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaPerjanjianKontrak $fizaPerjanjianKontrak)
    {
        $fizaPerjanjianKontrak->sst_id=$request->sst_id;
        $fizaPerjanjianKontrak->kandungan_id=$request->kandungan_id;

        if ($request->hasFile('img_notis')) {
            $perjanjian_file=$request->file('perjanjian_file')->store('perjanjian_file');
            $fizaPerjanjianKontrak->perjanjian_file=$perjanjian_file;
        }


        $fizaPerjanjianKontrak->perjanjian_pelulus=$request->perjanjian_pelulus;
        $fizaPerjanjianKontrak->perjanjian_created_by=$request->perjanjian_created_by;

        $fizaPerjanjianKontrak->perjanjian_catatan_pelulus=$request->perjanjian_catatan_pelulus;
        $fizaPerjanjianKontrak->user_id=$request->user_id;
        $fizaPerjanjianKontrak->pembekal_id=$request->pembekal_id;

        $fizaPerjanjianKontrak->save();
        return redirect('/fizaPerjanjianKontrak');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPerjanjianKontrak  $fizaPerjanjianKontrak
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPerjanjianKontrak $fizaPerjanjianKontrak)
    {
        //
    }
}
