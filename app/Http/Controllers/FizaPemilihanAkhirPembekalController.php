<?php

namespace App\Http\Controllers;

use App\Models\FizaPemilihanAkhirPembekal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FizaPemilihanAkhirPembekalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPemilihanAkhirPembekal = FizaPemilihanAkhirPembekal::all();
        return view ('1_pemilihan_pembekal.index',[
            'fizaPemilihanAkhirPembekal'=>$fizaPemilihanAkhirPembekal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_pemilihan_pembekal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaPemilihanAkhirPembekal = new FizaPemilihanAkhirPembekal;

        $fizaPemilihanAkhirPembekal->akhir_mesyuarat_date=$request->akhir_mesyuarat_date;
        $fizaPemilihanAkhirPembekal->akhir_mesyuarat_place=$request->akhir_mesyuarat_place;
        $fizaPemilihanAkhirPembekal->akhir_mesyuarat_status=$request->akhir_mesyuarat_status;
        $fizaPemilihanAkhirPembekal->akhir_mesyuarat_catatan=$request->akhir_mesyuarat_catatan;
        $fizaPemilihanAkhirPembekal->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaPemilihanAkhirPembekal->akhir_kehadiran=$request->akhir_kehadiran;
        $fizaPemilihanAkhirPembekal->akhir_keputusan_mesyuarat=$request->akhir_keputusan_mesyuarat;
        $fizaPemilihanAkhirPembekal->akhir_pilihan=$request->akhir_pilihan;
        $fizaPemilihanAkhirPembekal->pembekal_id=$request->pembekal_id;
        $fizaPemilihanAkhirPembekal->syor_id=$request->syor_id;

        $fizaPemilihanAkhirPembekal->akhir_created_by=$request->akhir_created_by;
        $fizaPemilihanAkhirPembekal->pst_id=$request->pst_id;


        $fizaPemilihanAkhirPembekal->save();
        return redirect('/fizaPemilihanAkhirPembekal');



    }

    public function show(FizaPemilihanAkhirPembekal $fizaPemilihanAkhirPembekal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPemilihanAkhirPembekal  $fizaPemilihanAkhirPembekal
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPemilihanAkhirPembekal $fizaPemilihanAkhirPembekal)
    {
        $fizaPemilihanAkhirPembekal = FizaPemilihanAkhirPembekal::all();
        return view ('1_pemilihan_pembekal.edit',[
            'fizaPemilihanAkhirPembekal'=>$fizaPemilihanAkhirPembekal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaPemilihanAkhirPembekal  $fizaPemilihanAkhirPembekal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaPemilihanAkhirPembekal $fizaPemilihanAkhirPembekal)
    {
        
        $fizaPemilihanAkhirPembekal->akhir_mesyuarat_date=$request->akhir_mesyuarat_date;
        $fizaPemilihanAkhirPembekal->akhir_mesyuarat_place=$request->akhir_mesyuarat_place;
        $fizaPemilihanAkhirPembekal->akhir_mesyuarat_status=$request->akhir_mesyuarat_status;
        $fizaPemilihanAkhirPembekal->akhir_mesyuarat_catatan=$request->akhir_mesyuarat_catatan;
        $fizaPemilihanAkhirPembekal->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaPemilihanAkhirPembekal->akhir_kehadiran=$request->akhir_kehadiran;
        $fizaPemilihanAkhirPembekal->akhir_keputusan_mesyuarat=$request->akhir_keputusan_mesyuarat;
        $fizaPemilihanAkhirPembekal->akhir_pilihan=$request->akhir_pilihan;
        $fizaPemilihanAkhirPembekal->pembekal_id=$request->pembekal_id;
        $fizaPemilihanAkhirPembekal->syor_id=$request->syor_id;

        $fizaPemilihanAkhirPembekal->akhir_updated_by=$request->akhir_updated_by;
        $fizaPemilihanAkhirPembekal->pst_id=$request->pst_id;

       $fizaPemilihanAkhirPembekal->save();
        return redirect('/fizaPemilihanAkhirPembekal');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPemilihanAkhirPembekal  $fizaPemilihanAkhirPembekal
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPemilihanAkhirPembekal $fizaPemilihanAkhirPembekal)
    {
        //
    }
}
