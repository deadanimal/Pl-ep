<?php

namespace App\Http\Controllers;

use App\Models\FizaNotaPenerimaan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaNotaPenerimaanController extends Controller
{


    public function index()
    {
        $fizaNotaPenerimaan = FizaNotaPenerimaan::all();
        return view ('1_nota_penerimaan.index',[
            'NotaPenerimaan'=>$fizaNotaPenerimaan]);
    }


    public function create()
    {
        return view ('1_nota_penerimaan.create');
    }


    public function store(Request $request)
    {
        $fizaNotaPenerimaan = new FizaNotaPenerimaan;

        // $fizaNotaPenerimaan->terima_id=$request->terima_id;
        $fizaNotaPenerimaan->pesanan_id=$request->pesanan_id;
        // $fizaNotaPenerimaan->user_id=$request->user_id;
        $fizaNotaPenerimaan->terima_pegawai_pengesah=$request->terima_pegawai_pengesah;
        $fizaNotaPenerimaan->terima_kuantiti=$request->terima_kuantiti;
        $fizaNotaPenerimaan->terima_catatan=$request->terima_catatan;
        $fizaNotaPenerimaan->terima_amaun=$request->terima_amaun;
        $fizaNotaPenerimaan->terima_skor_khidmat_sokongan=$request->terima_skor_khidmat_sokongan;
        $fizaNotaPenerimaan->terima_skor_kuantiti=$request->terima_skor_kuantiti;
        $fizaNotaPenerimaan->terima_skor_tempoh_penghantaran=$request->terima_skor_tempoh_penghantaran;
        $fizaNotaPenerimaan->penghantaran_id=$request->penghantaran_id;
        $fizaNotaPenerimaan->sst_id=$request->sst_id;
        // $fizaNotaPenerimaan->terima_created_by=$request->terima_created_by;
        $fizaNotaPenerimaan->penghantaran_id=$request->penghantaran_id;

        $fizaNotaPenerimaan->save();
        return redirect('/NotaPenerimaan')->with('success','Data berjaya ditambah!');


    }


    public function show(FizaNotaPenerimaan $fizaNotaPenerimaan)
    {
        //
    }


    public function edit($id)
    {
        $fizaNotaPenerimaan = FizaNotaPenerimaan::find($id);
        return view ('1_nota_penerimaan.edit',[
            'NotaPenerimaan'=>$fizaNotaPenerimaan]);
    }


    public function update(Request $request, FizaNotaPenerimaan $fizaNotaPenerimaan, $id)
    {
        $fizaNotaPenerimaan = FizaNotaPenerimaan::find($id);

        // $fizaNotaPenerimaan->terima_id=$request->terima_id;
        // $fizaNotaPenerimaan->pesanan_id=$request->pesanan_id;
        // $fizaNotaPenerimaan->user_id=$request->user_id;
        $fizaNotaPenerimaan->terima_pegawai_pengesah=$request->terima_pegawai_pengesah;
        $fizaNotaPenerimaan->terima_kuantiti=$request->terima_kuantiti;
        $fizaNotaPenerimaan->terima_catatan=$request->terima_catatan;
        $fizaNotaPenerimaan->terima_amaun=$request->terima_amaun;
        $fizaNotaPenerimaan->terima_skor_khidmat_sokongan=$request->terima_skor_khidmat_sokongan;
        $fizaNotaPenerimaan->terima_skor_kuantiti=$request->terima_skor_kuantiti;
        $fizaNotaPenerimaan->terima_skor_tempoh_penghantaran=$request->terima_skor_tempoh_penghantaran;
        // $fizaNotaPenerimaan->sst_id=$request->sst_id;
        // $fizaNotaPenerimaan->terima_updated_by=$request->terima_updated_by;
        // $fizaNotaPenerimaan->penghantaran_id=$request->penghantaran_id;


        $fizaNotaPenerimaan->save();
        return redirect('/NotaPenerimaan')->with('message','Data berjaya dikemaskini!');


    }


    public function destroy($id)
    {
        $notaterima = FizaNotaPenerimaan::where('id',$id)->first();
        $notaterima ->delete();

        return redirect-('/NotaPenerimaan')>with('success','Data telah berjaya dipadam!');
    }
}
