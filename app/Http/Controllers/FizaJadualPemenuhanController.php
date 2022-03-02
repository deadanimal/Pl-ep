<?php

namespace App\Http\Controllers;

use App\Models\FizaJadualPemenuhan;
use App\Models\FizaPenyediaanSpesifikasi;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaKatalog;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaJadualPemenuhanController extends Controller
{
    public function index()
    {

        $role=Auth::user()->roles;
        //dd($role->id[0]);
        if ($role[0]->id=='1') {

            $spesifikasi=FizaPenyediaanSpesifikasi::where('spesifikasi_status', 'diluluskan')->first()->get();
            $jadual = FizaJadualPemenuhan::all();
            return view('1_jadual.index', [
            'jadual'=>$jadual,
            'spesifikasi'=>$spesifikasi
             ]);
        }

        else{

            $spesifikasi=FizaPenyediaanSpesifikasi::where('spesifikasi_status','diluluskan')->first()->get();
             $jadual = FizaJadualPemenuhan::where('jadual_created_by',Auth::user()->id)->get();
        return view ('1_jadual.index',[
            'jadual'=>$jadual,
            'spesifikasi'=>$spesifikasi
        ]);
        }
        
    }


    public function create($id)
    {
        $spesifikasi = FizaPenyediaanSpesifikasi::find($id);
        $pst=FizaPembelianSebutTender::where('id',$spesifikasi->pst_id)->first();
        $katalog = FizaKatalog::where('id',$pst->pst_katalog_kumpulan)->first();
        $user = User::where('id',$pst->pst_pelulus)->first();

        return view('1_jadual.create',[
            'spesifikasi'=>$spesifikasi,
            'pst'=>$pst,
            'katalog'=>$katalog,
            'user'=>$user
        ]);
    }

    public function store(Request $request)
    {
         $fizaJadualPemenuhan = new FizaJadualPemenuhan;
        
        $fizaJadualPemenuhan->spesifikasi_id=$request->spesifikasi_id;
        $fizaJadualPemenuhan->jadual_jenis_pemenuhan =$request->jadual_jenis_pemenuhan ;
        $fizaJadualPemenuhan->jadual_kekerapan=$request->jadual_kekerapan;
        $fizaJadualPemenuhan->jadual_bil=$request->jadual_bil;
        $fizaJadualPemenuhan->jadual_bulan_mula=$request->jadual_bulan_mula;
        // $fizaJadualPemenuhan->jadual_tahun_mula=$request->jadual_tahun_mula;
        $fizaJadualPemenuhan->jadual_bulan_akhir =$request->jadual_bulan_akhir ;
        // $fizaJadualPemenuhan->jadual_tahun_akhir=$request->jadual_tahun_akhir;
        $fizaJadualPemenuhan->jadual_jumlah_bulan =$request->jadual_jumlah_bulan ;
        $fizaJadualPemenuhan->jadual_jenis =$request->jadual_jenis ;
        $fizaJadualPemenuhan->jadual_created_by=Auth::user()->id;
        $fizaJadualPemenuhan->jadual_status="menunggu semakan";
        
  
        $fizaJadualPemenuhan->save();
        return redirect('/JadualPemenuhan')->with('success','Data telah berjaya disimpan!');
    }

    public function show(FizaJadualPemenuhan $fizaJadualPemenuhan)
    {
        //
    }

    public function edit($id)
    {
        $jadual = FizaJadualPemenuhan::find($id);
        

        return view ('1_jadual.edit',[
            'jadual'=>$jadual
        ]);
    }

    public function update(Request $request, $id)
    {
        $fizaJadualPemenuhan = FizaJadualPemenuhan::find($id);

        $fizaJadualPemenuhan->spesifikasi_id=$request->spesifikasi_id;
        $fizaJadualPemenuhan->jadual_jenis_pemenuhan =$request->jadual_jenis_pemenuhan ;
        $fizaJadualPemenuhan->jadual_kekerapan=$request->jadual_kekerapan;
        $fizaJadualPemenuhan->jadual_bil=$request->jadual_bil;
        $fizaJadualPemenuhan->jadual_bulan_mula=$request->jadual_bulan_mula;
        $fizaJadualPemenuhan->jadual_tahun_mula=$request->jadual_tahun_mula;
        $fizaJadualPemenuhan->jadual_bulan_akhir =$request->jadual_bulan_akhir ;
        $fizaJadualPemenuhan->jadual_tahun_akhir=$request->jadual_tahun_akhir;
        $fizaJadualPemenuhan->jadual_jumlah_bulan =$request->jadual_jumlah_bulan ;
        $fizaJadualPemenuhan->jadual_jenis =$request->jadual_jenis ;
        $fizaJadualPemenuhan->jadual_updated_by=Auth::user()->id ;
        $fizaJadualPemenuhan->jadual_status=$request->jadual_status;


       $fizaJadualPemenuhan->save();
        return redirect('/JadualPemenuhan')->with('success','Data telah berjaya dikemaskini!');
    }

    public function destroy($id)
    {
        $JadualPemenuhan = FizaJadualPemenuhan::where('id',$id)->first();
        $JadualPemenuhan->delete();

        return redirect('/JadualPemenuhan')->with('message', 'Data telah berjaya dipadam!');
    }
}
