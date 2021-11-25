<?php

namespace App\Http\Controllers;

use App\Models\FizaLaporan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaLaporan = FizaLaporan::all();
        return view ('1_laporan.index',[
            'fizaLaporan'=>$fizaLaporan]);
    }


    public function create()
    {
        return view('/1_laporan.create');
    }

    public function store(Request $request)
    {
        $fizaLaporan = new FizaLaporan;

        $fizaLaporan->laporan_nama =$request->laporan_nama ;

        $laporan_file=$request->file('laporan_file')->store('laporan_file');
        $fizaLaporan->laporan_file=$laporan_file;//file

        $fizaLaporan->laporan_modul=$request->laporan_modul;
        $fizaLaporan->laporan_created_by=$request->laporan_created_by;
        $fizaLaporan->perjanjian_id =$request->perjanjian_id ;

        $fizaLaporan->save();
        return redirect('/fizaLaporan');


    }

    public function show(FizaLaporan $fizaLaporan)
    {
        //
    }

    public function edit(FizaLaporan $fizaLaporan)
    {
        return view('/1_laporan.edit');
    }

    public function update(Request $request, FizaLaporan $fizaLaporan)
    {
        $fizaLaporan->laporan_nama =$request->laporan_nama ;
        //$fizaLaporan->laporan_file=$request->laporan_file;

        if ($request->hasFile('laporan_file')) {
            $laporan_file=$request->file('laporan_file')->store('laporan_file');
            $fizaLaporan->laporan_file=$laporan_file;
        }

        $fizaLaporan->laporan_modul=$request->laporan_modul;
        $fizaLaporan->laporan_updated_by=$request->laporan_updated_by;
        $fizaLaporan->perjanjian_id =$request->perjanjian_id;


        $fizaLaporan->save();
        return redirect('/fizaLaporan');
    }


    public function destroy(FizaLaporan $fizaLaporan)
    {
        //
    }
}
