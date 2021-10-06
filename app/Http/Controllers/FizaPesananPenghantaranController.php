<?php

namespace App\Http\Controllers;

use App\Models\FizaPesananPenghantaran;
use Illuminate\Http\Request;

class FizaPesananPenghantaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPesananPenghantaran = FizaPesananPenghantaran::all();
        return view ('1_pesanan_penghantaran.index',[
            'fizaPesananPenghantaran'=>$fizaPesananPenghantaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_pesanan_penghantaran.create');
    }

    public function store(Request $request)
    {
        $fizaPesananPenghantaran = new FizaPesananPenghantaran;

        $fizaPesananPenghantaran->user_id=$request->user_id;
        $fizaPesananPenghantaran->pesanan_id=$request->pesanan_id;
        $fizaPesananPenghantaran->pembekal_id=$request->pembekal_id;
        $fizaPesananPenghantaran->sst_id=$request->sst_id;
        $fizaPesananPenghantaran->penghantaran_kuantiti=$request->penghantaran_kuantiti;
        $fizaPesananPenghantaran->penghantaran_date=$request->penghantaran_date;
        $fizaPesananPenghantaran->penghantaran_created_by=$request->penghantaran_created_by;


        $fizafizaPesananPenghantaran->save();
        return redirect('/fizafizaPesananPenghantaran');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPesananPenghantaran  $fizaPesananPenghantaran
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPesananPenghantaran $fizaPesananPenghantaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPesananPenghantaran  $fizaPesananPenghantaran
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPesananPenghantaran $fizaPesananPenghantaran)
    {
        $fizaPesananPenghantaran = FizaPesananPenghantaran::all();
        return view ('1_pesanan_penghantaran.edit',[
            'fizaPesananPenghantaran'=>$fizaPesananPenghantaran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaPesananPenghantaran  $fizaPesananPenghantaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaPesananPenghantaran $fizaPesananPenghantaran)
    {
        

        $fizaPesananPenghantaran->user_id=$request->user_id;
        $fizaPesananPenghantaran->pesanan_id=$request->pesanan_id;
        $fizaPesananPenghantaran->pembekal_id=$request->pembekal_id;
        $fizaPesananPenghantaran->sst_id=$request->sst_id;
        $fizaPesananPenghantaran->penghantaran_kuantiti=$request->penghantaran_kuantiti;
        $fizaPesananPenghantaran->penghantaran_date=$request->penghantaran_date;
        $fizaPesananPenghantaran->penghantaran_updated_by=$request->penghantaran_updated_by;


        $url = '/fizaPesananPenghantaran'.$fizaPesananPenghantaran->id;
        return redirect('/fizaPesananPenghantaran');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPesananPenghantaran  $fizaPesananPenghantaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPesananPenghantaran $fizaPesananPenghantaran)
    {
        //
    }
}
