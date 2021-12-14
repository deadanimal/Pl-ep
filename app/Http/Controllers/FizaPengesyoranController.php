<?php

namespace App\Http\Controllers;

use App\Models\FizaPengesyoran;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPengesyoranController extends Controller
{
    public function index()
    {
        $pengesyoran = FizaPengesyoran::all();
        return view ('1_pengesyoran.index',[
            'pengesyoran'=>$pengesyoran]);
    }


    public function create()
    {
        $user = User::all();
        return view ('1_pengesyoran.create',[
            $user = $user
         ]);
    }


    public function store(Request $request)
    {
        $fizaPengesyoran = new FizaPengesyoran;

        $fizaPengesyoran->syor_mesyuarat_date=$request->syor_mesyuarat_date;
        $fizaPengesyoran->syor_mesyuarat_place=$request->syor_mesyuarat_place;
        // $fizaPengesyoran->jawatankuasa_id=$request->jawatankuasa_id;

        if ($request->hasFile('syor_kertas_taklimat')) {
            $syor_kertas_taklimat=$request->file('syor_kertas_taklimat')->store('syor_kertas_taklimat');
            $fizaPengesyoran->syor_kertas_taklimat=$syor_kertas_taklimat;
        }

        //$fizaPengesyoran->syor_kertas_taklimat=$request->syor_kertas_taklimat;//file
        $fizaPengesyoran->pembekal_id=$request->pembekal_id;

        $fizaPengesyoran->syor_kedudukan_pembekal=$request->syor_kedudukan_pembekal;
        $fizaPengesyoran->syor_catatan=$request->syor_catatan;
        // $fizaPengesyoran->sss_id=$request->sss_id;
        $fizaPengesyoran->syor_jumlah_skor=$request->syor_jumlah_skor;
        // $fizaPengesyoran->syor_created_by=Auth::user()->user_name;
        // $fizaPengesyoran->pst_id=$request->pst_id;
        // $fizaPengesyoran->spesifikasi_id=$request->spesifikasi_id;


        $fizaPengesyoran->save();
        return redirect('/Pengesyoran')->with('success','Data telah berjaya disimpan!');


    }


    public function show(FizaPengesyoran $fizaPengesyoran)
    {
        //
    }


    public function edit($id)
    {
        $pengesyoran = FizaPengesyoran::find($id);
        return view ('1_pengesyoran.edit',[
            'pengesyoran'=>$pengesyoran]);
    }


    public function update(Request $request,$id)
    {
        $pengesyoran = FizaPengesyoran::find($id);

        $fizaPengesyoran->syor_mesyuarat_date=$request->syor_mesyuarat_date;
        $fizaPengesyoran->syor_mesyuarat_place=$request->syor_mesyuarat_place;
        // $fizaPengesyoran->jawatankuasa_id=$request->jawatankuasa_id;

        //$fizaPengesyoran->syor_kertas_taklimat=$request->syor_kertas_taklimat;//file

        if ($request->hasFile('syor_kertas_taklimat')) {
            $fizaPengesyoran=$request->file('syor_kertas_taklimat')->store('syor_kertas_taklimat');
            $fizaPengesyoran->syor_kertas_taklimat=$syor_kertas_taklimat;
        }

        // $fizaPengesyoran->pembekal_id=$request->pembekal_id;
        $fizaPengesyoran->syor_kedudukan_pembekal=$request->syor_kedudukan_pembekal;
        $fizaPengesyoran->syor_catatan=$request->syor_catatan;
        // $fizaPengesyoran->sss_id=$request->sss_id;
        $fizaPengesyoran->syor_jumlah_skor=$request->syor_jumlah_skor;
        // $fizaPengesyoran->syor_created_by=$request->syor_created_by;
        // $fizaPengesyoran->pst_id=$request->pst_id;
        // $fizaPengesyoran->spesifikasi_id=$request->spesifikasi_id;
    
        $fizaPengesyoran->save();
        return redirect('/Pengesyoran')->with('success','Data telah berjaya dikemaskini!');

    }


    public function destroy($id)
    {
        $pengesyoran = FizaPengesyoran::where('id', $id)->first();
        $pengesyoran->delete();

        return redirect('/Pengesyoran')->with('message','Data telah berjaya dipadam!');
    }
}
