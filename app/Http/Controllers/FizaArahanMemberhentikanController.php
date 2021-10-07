<?php

namespace App\Http\Controllers;

use App\Models\FizaArahanMemberhentikan;
use Illuminate\Http\Request;

class FizaArahanMemberhentikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaArahanMemberhentikan = FizaArahanMemberhentikan::all();
        return view ('1_arahan_berhenti.index',[
            'fizaArahanMemberhentikan'=>$fizaArahanMemberhentikan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('1_arahan_berhenti.create');
    }


    public function store(Request $request)
    {
        $fizaArahanMemberhentikan = new FizaArahanMemberhentikan;

        $fizaArahanMemberhentikan->pesanan_id=$request->pesanan_id;
        $fizaArahanMemberhentikan->sst_id=$request->sst_id;
        $fizaArahanMemberhentikan->pesanan_id=$request->pesanan_id;
        $fizaArahanMemberhentikan->pembekal_id=$request->pembekal_id;
        $fizaArahanMemberhentikan->arahan_justifikasi=$request->arahan_justifikasi;
        $fizaArahanMemberhentikan->arahan_keterangan=$request->arahan_keterangan;
        $fizaArahanMemberhentikan->terima_id=$request->terima_id;
        $fizaArahanMemberhentikan->penghantaran_id =$request->penghantaran_id ;
        $fizaArahanMemberhentikan->arahan_oleh=$request->arahan_oleh;
        $fizaArahanMemberhentikan->arahan_pelulus=$request->arahan_pelulus;
        $fizaArahanMemberhentikan->arahan_catatan =$request->arahan_catatan ;
        $fizaArahanMemberhentikan->arahan_created_by=$request->arahan_created_by;

        $fizaArahanMemberhentikan->save();
        
        return redirect('/fizaArahanMemberhentikan');
    }

    public function show(FizaArahanMemberhentikan $fizaArahanMemberhentikan)
    {
        //
    }
    public function edit(FizaArahanMemberhentikan $fizaArahanMemberhentikan)
    {
        return view('1_arahan_berhenti.edit', ['FizaArahanMemberhentikan'=>$fizaArahanMemberhentikan]); 
    }

    public function update(Request $request, FizaArahanMemberhentikan $fizaArahanMemberhentikan)
    {
        $fizaArahanMemberhentikan->pesanan_id=$request->pesanan_id;
        $fizaArahanMemberhentikan->sst_id=$request->sst_id;
        $fizaArahanMemberhentikan->pesanan_id=$request->pesanan_id;
        $fizaArahanMemberhentikan->pembekal_id=$request->pembekal_id;
        $fizaArahanMemberhentikan->arahan_justifikasi=$request->arahan_justifikasi;
        $fizaArahanMemberhentikan->arahan_keterangan=$request->arahan_keterangan;
        $fizaArahanMemberhentikan->terima_id=$request->terima_id;
        $fizaArahanMemberhentikan->penghantaran_id =$request->penghantaran_id ;
        $fizaArahanMemberhentikan->arahan_oleh=$request->arahan_oleh;
        $fizaArahanMemberhentikan->arahan_pelulus=$request->arahan_pelulus;
        $fizaArahanMemberhentikan->arahan_catatan =$request->arahan_catatan ;
        $fizaArahanMemberhentikan->arahan_updated_by=$request->arahan_updated_by;


        $fizaArahanMemberhentikan->save();

      
        return redirect('/fizaArahanMemberhentikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaArahanMemberhentikan  $fizaArahanMemberhentikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaArahanMemberhentikan $fizaArahanMemberhentikan)
    {
        //
    }
}
