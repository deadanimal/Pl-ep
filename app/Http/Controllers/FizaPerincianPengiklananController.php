<?php

namespace App\Http\Controllers;

use App\Models\FizaPerincianPengiklanan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPerincianPengiklananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPerincianPengiklanan = FizaPerincianPengiklanan::all();
        return view ('1_perincian_iklan.index',[
            'fizaPerincianPengiklanan'=>$fizaPerincianPengiklanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('1_perincian_iklan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaPerincianPengiklanan = new FizaPerincianPengiklanan;

        $fizaPerincianPengiklanan->iklan_date=$request->iklan_date;
        $fizaPerincianPengiklanan->iklan_taklimat_date=$request->iklan_taklimat_date;
        $fizaPerincianPengiklanan->iklan_taklimat_time=$request->iklan_taklimat_time;
        $fizaPerincianPengiklanan->iklan_tempoh=$request->iklan_tempoh;
        $fizaPerincianPengiklanan->iklan_last_date=$request->iklan_last_date;
        $fizaPerincianPengiklanan->iklan_tempoh_sah_laku=$request->iklan_tempoh_sah_laku;
        $fizaPerincianPengiklanan->iklan_sah_laku_tamat=$request->iklan_sah_laku_tamat;

        $fizaPerincianPengiklanan->user_id=$request->user_id;
        $fizaPerincianPengiklanan->iklan_created_by=$request->iklan_created_by;
        $fizaPerincianPengiklanan->pst_id=$request->pst_id;
        $fizaPerincianPengiklanan->iklan_id=$request->iklan_id;
        $fizaPerincianPengiklanan->iklan_date=$request->iklan_date;

        $url = '/fizaPerincianPengiklanan'.$fizaPerincianPengiklanan->id;
        return redirect('/fizaPerincianPengiklanan');



    }
    public function show(FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPerincianPengiklanan  $fizaPerincianPengiklanan
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        $fizaPerincianPengiklanan = FizaPerincianPengiklanan::all();
        return view ('1_perincian_iklan.create',[
            'fizaPerincianPengiklanan'=>$fizaPerincianPengiklanan]);
    }

    public function update(Request $request, FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        $fizaPerincianPengiklanan->iklan_date=$request->iklan_date;
        $fizaPerincianPengiklanan->iklan_taklimat_date=$request->iklan_taklimat_date;
        $fizaPerincianPengiklanan->iklan_taklimat_time=$request->iklan_taklimat_time;
        $fizaPerincianPengiklanan->iklan_tempoh=$request->iklan_tempoh;
        $fizaPerincianPengiklanan->iklan_last_date=$request->iklan_last_date;
        $fizaPerincianPengiklanan->iklan_tempoh_sah_laku=$request->iklan_tempoh_sah_laku;
        $fizaPerincianPengiklanan->iklan_sah_laku_tamat=$request->iklan_sah_laku_tamat;

        $fizaPerincianPengiklanan->user_id=$request->user_id;
        $fizaPerincianPengiklanan->iklan_created_by=$request->iklan_created_by;
        $fizaPerincianPengiklanan->pst_id=$request->pst_id;
        $fizaPerincianPengiklanan->iklan_id=$request->iklan_id;
        $fizaPerincianPengiklanan->iklan_date=$request->iklan_date;

        $fizaPerincianPengiklanan->save();
        return redirect ('/$fizaPerincianPengiklanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPerincianPengiklanan  $fizaPerincianPengiklanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        //
    }
}
