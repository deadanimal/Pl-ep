<?php

namespace App\Http\Controllers;

use App\Models\FizaPadananBayaran;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPadananBayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPadananBayaran = FizaPadananBayaran::all();
        return view ('1_padanan_bayaran.index',[
            'fizaPadananBayaran'=>$fizaPadananBayaran]);
    }


    public function create()
    {
        return view ('1_padanan_bayaran.create');
    }


    public function store(Request $request)
    {
        $fizaPadananBayaran = new FizaPadananBayaran;

        $fizaPadananBayaran->pesanan_id=$request->pesanan_id;
        $fizaPadananBayaran->sst_id=$request->sst_id;
        $fizaPadananBayaran->pembekal_id=$request->pembekal_id;
        $fizaPadananBayaran->padanan_perihal_pembayaran=$request->padanan_perihal_pembayaran;
        $fizaPadananBayaran->padanan_jenis_potongan=$request->padanan_jenis_potongan;
        $fizaPadananBayaran->padanan_perihal_potongan=$request->padanan_perihal_potongan;
        $fizaPadananBayaran->padanan_klausa_rujukan=$request->padanan_klausa_rujukan;
        $fizaPadananBayaran->padanan_cara_pembayaran=$request->padanan_cara_pembayaran;
        $fizaPadananBayaran->padanan_kod_akaun=$request->padanan_kod_akaun;
        $fizaPadananBayaran->padanan_amaun=$request->padanan_amaun;
        $fizaPadananBayaran->padanan_created_by=$request->padanan_created_by;
        $fizaPadananBayaran->user_id=$request->user_id;


        $fizaPadananBayaran->save();
        return redirect('/fizaPadananBayaran')->with('success','Data telah berjaya ditambah!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPadananBayaran  $fizaPadananBayaran
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPadananBayaran $fizaPadananBayaran)
    {
        //
    }


    public function edit(FizaPadananBayaran $fizaPadananBayaran)
    {
        $fizaPadananBayaran = FizaPadananBayaran::all();
        return view ('1_padanan_bayaran.edit',[
            'fizaPadananBayaran'=>$fizaPadananBayaran]);
    }


    public function update(Request $request, FizaPadananBayaran $fizaPadananBayaran)
    {
        $fizaPadananBayaran->pesanan_id=$request->pesanan_id;
        $fizaPadananBayaran->sst_id=$request->sst_id;
        $fizaPadananBayaran->pembekal_id=$request->pembekal_id;
        $fizaPadananBayaran->padanan_perihal_pembayaran=$request->padanan_perihal_pembayaran;
        $fizaPadananBayaran->padanan_jenis_potongan=$request->padanan_jenis_potongan;
        $fizaPadananBayaran->padanan_perihal_potongan=$request->padanan_perihal_potongan;
        $fizaPadananBayaran->padanan_klausa_rujukan=$request->padanan_klausa_rujukan;
        $fizaPadananBayaran->padanan_cara_pembayaran=$request->padanan_cara_pembayaran;
        $fizaPadananBayaran->padanan_kod_akaun=$request->padanan_kod_akaun;
        $fizaPadananBayaran->padanan_amaun=$request->padanan_amaun;
        $fizaPadananBayaran->padanan_updated_by=$request->padanan_updated_by;
        $fizaPadananBayaran->user_id=$request->user_id;

        $fizaPadananBayaran->save();
        return redirect('/fizaPadananBayaran')->with('success','Data telah berjaya dikemaskini!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPadananBayaran  $fizaPadananBayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $padananbayaran = FizaPadananBayaran::where('id',$id)->first();
        $padananbayaran ->delete();

        return redirect('/PadananBayaran')->with('message','Data telah berjaya dipadam!');
    }
}
