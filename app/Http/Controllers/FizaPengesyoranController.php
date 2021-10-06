<?php

namespace App\Http\Controllers;

use App\Models\FizaPengesyoran;
use Illuminate\Http\Request;

class FizaPengesyoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPengesyoran = FizaPengesyoran::all();
        return view ('1_pengesyoran.index',[
            'fizaPengesyoran'=>$fizaPengesyoran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_pengesyoran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaPengesyoran = new FizaPengesyoran;

        $fizaPengesyoran->syor_mesyuarat_date=$request->syor_mesyuarat_date;
        $fizaPengesyoran->syor_mesyuarat_place=$request->syor_mesyuarat_place;
        $fizaPengesyoran->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaPengesyoran->syor_kertas_taklimat=$request->syor_kertas_taklimat;
        $fizaPengesyoran->pembekal_id=$request->pembekal_id;

        $fizaPengesyoran->syor_kedudukan_pembekal=$request->syor_kedudukan_pembekal;
        $fizaPengesyoran->syor_catatan=$request->syor_catatan;
        $fizaPengesyoran->sss_id=$request->sss_id;
        $fizaPengesyoran->syor_jumlah_skor=$request->syor_jumlah_skor;
        $fizaPengesyoran->syor_created_by=$request->syor_created_by;
        $fizaPengesyoran->pst_id=$request->pst_id;
        $fizaPengesyoran->spesifikasi_id=$request->spesifikasi_id;


        $fizaPengesyoran->save();
        return redirect('/fizaPengesyoran');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPengesyoran  $fizaPengesyoran
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPengesyoran $fizaPengesyoran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPengesyoran  $fizaPengesyoran
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPengesyoran $fizaPengesyoran)
    {
        $fizaPengesyoran = FizaPengesyoran::all();
        return view ('1_pengesyoran.edit',[
            'fizaPengesyoran'=>$fizaPengesyoran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaPengesyoran  $fizaPengesyoran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaPengesyoran $fizaPengesyoran)
    {
        $fizaPengesyoran->syor_mesyuarat_date=$request->syor_mesyuarat_date;
        $fizaPengesyoran->syor_mesyuarat_place=$request->syor_mesyuarat_place;
        $fizaPengesyoran->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaPengesyoran->syor_kertas_taklimat=$request->syor_kertas_taklimat;
        $fizaPengesyoran->pembekal_id=$request->pembekal_id;

        $fizaPengesyoran->syor_kedudukan_pembekal=$request->syor_kedudukan_pembekal;
        $fizaPengesyoran->syor_catatan=$request->syor_catatan;
        $fizaPengesyoran->sss_id=$request->sss_id;
        $fizaPengesyoran->syor_jumlah_skor=$request->syor_jumlah_skor;
        $fizaPengesyoran->syor_created_by=$request->syor_created_by;
        $fizaPengesyoran->pst_id=$request->pst_id;
        $fizaPengesyoran->spesifikasi_id=$request->spesifikasi_id;

        $url = '/fizaPengesyoran'.$fizaPengesyoran->id;
        return redirect('/fizaPengesyoran');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPengesyoran  $fizaPengesyoran
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPengesyoran $fizaPengesyoran)
    {
        //
    }
}
