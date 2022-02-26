<?php

namespace App\Http\Controllers;

use App\Models\FizaCadangan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaCadanganController extends Controller
{

    public function index()
    {
        $fizaCadangan = FizaCadangan::all();
        $user = User::all();
        return view ('1_cadangan.index',[
            'Cadangan'=>$fizaCadangan,
            'user'=>$user
        ]);
    }

    public function create()
    {
        $user = User::all();
        return view('1_cadangan.create',[
            'user'=>$user
        ]);
    }


    public function store(Request $request)
    {
        $fizaCadangan = new FizaCadangan;

        // $fizaCadangan->pembekal_id =$request->pembekal_id ;
        // $fizaCadangan->spesifikasi_id =$request->spesifikasi_id ;
        // $fizaCadangan->sss_id =$request->sss_id ;
        $fizaCadangan->cadangan_mesyuarat_date=$request->cadangan_mesyuarat_date;
        $fizaCadangan->cadangan_mesyuarat_place =$request->cadangan_mesyuarat_place ;
        $fizaCadangan->cadangan_created_by=Auth::user()->id;
        // $fizaCadangan->jawatankuasa_id=$request->jawatankuasa_id;
        // $fizaCadangan->cadangan_mesyuarat_status=$request->cadangan_mesyuarat_status;
        // $fizaCadangan->cadangan_kehadiran=$request->cadangan_kehadiran;
        // $fizaCadangan->cadangan_bil_pembekal_lulus_teknikal=$request->cadangan_bil_pembekal_lulus_teknikal;
        // $fizaCadangan->cadangan_bil_pembekal_lulus_kewangan=$request->cadangan_bil_pembekal_lulus_kewangan;
        // $fizaCadangan->cadangan_ulasan_penilaian=$request->cadangan_ulasan_penilaian;

        $fizaCadangan->save();
        return redirect('/Cadangan')->with('success','Cadangan telah berjaya disimpan!');
    }


    public function show(FizaCadangan $fizaCadangan)
    {
        //
    }


    public function edit($id)
    {
        $fizaCadangan = FizaCadangan::find($id);
        // dd($fizaCadangan);
        return view('1_cadangan.edit', [
            'Cadangan'=>$fizaCadangan
        ]); 
    }


    public function update(Request $request, FizaCadangan $fizaCadangan,$id)
    {
        $fizaCadangan = FizaCadangan::find($id);

        // $fizaCadangan->pembekal_id =$request->pembekal_id ;
        // $fizaCadangan->spesifikasi_id =$request->spesifikasi_id ;
        // $fizaCadangan->sss_id =$request->sss_id ;
        $fizaCadangan->cadangan_mesyuarat_date=$request->cadangan_mesyuarat_date;
        $fizaCadangan->cadangan_mesyuarat_place =$request->cadangan_mesyuarat_place ;
        // $fizaCadangan->cadangan_updated_by=$request->cadangan_updated_by;
        // $fizaCadangan->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaCadangan->cadangan_mesyuarat_status=$request->cadangan_mesyuarat_status;
        $fizaCadangan->cadangan_kehadiran=$request->cadangan_kehadiran;
        $fizaCadangan->cadangan_bil_pembekal_lulus_teknikal=$request->cadangan_bil_pembekal_lulus_teknikal;
        $fizaCadangan->cadangan_bil_pembekal_lulus_kewangan=$request->cadangan_bil_pembekal_lulus_kewangan;
        $fizaCadangan->cadangan_ulasan_penilaian=$request->cadangan_ulasan_penilaian;

        
   $fizaCadangan->save();
        return redirect('/Cadangan')->with('success','Cadangan telah berjaya dikemaskini!');
    }


    public function destroy($id)
    {
        $Cadangan = FizaCadangan::where('id',$id)->first();
        $Cadangan->delete();

        return redirect('/Cadangan')->with('success','Cadangan telah berjaya dipadam!');
    }
}
