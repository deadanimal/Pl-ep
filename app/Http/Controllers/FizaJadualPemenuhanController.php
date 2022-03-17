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

        if ($role[0]->id=='1') {
            $jadual = FizaJadualPemenuhan::all();

            foreach ($jadual as $jadual) {
                $spesifikasi = FizaPenyediaanSpesifikasi::where('id', $jadual->spesifikasi_id)->first();
                $pst = FizaPembelianSebutTender::where('id', $spesifikasi->pst_id)->first();

                // dd($pst);

                return view('1_jadual.index', [
                    'jadual'=>$jadual,
                    'pst'=>$pst,
                    'spesifikasi'=>$spesifikasi
                ]);
            }
        }


        else
        $jadual = FizaJadualPemenuhan::whereIn('jadual_status',['diluluskan','menunggu semakan'])
                ->where('jadual_created_by', Auth::user()->id)
                ->get();



        foreach ($jadual as $jadual) {
            $spesifikasi = FizaPenyediaanSpesifikasi::where('id', $jadual->spesifikasi_id)->first();
            $pst = FizaPembelianSebutTender::where('id', $spesifikasi->pst_id)->first();
            // dd($jadual);


            return view('1_jadual.index', [
                'jadual'=>$jadual,
                'pst'=>$pst,
                'spesifikasi'=>$spesifikasi
            ]);
        }
    }






    public function create($id)
    {
        $spesifikasi = FizaPenyediaanSpesifikasi::find($id);
        $pst=FizaPembelianSebutTender::where('id',$spesifikasi->pst_id)->first();
        $katalog=FizaKatalog::where('id',$pst->pst_katalog_kumpulan)->first();
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

        $pelulus=User::where('id',$pst->pst_pelulus)->first();
        Mail::to($pelulus->email)->send(new PermohonanJadualPemenuhan);

        return redirect('/JadualPemenuhan')->with('success','Data telah berjaya disimpan!');
    }

    public function show(FizaJadualPemenuhan $fizaJadualPemenuhan)
    {
        //
    }

    public function edit($id)
    {
        $jadual = FizaJadualPemenuhan::find($id);
        $spesifikasi=FizaPenyediaanSpesifikasi::where('id','spesifikasi_id')->first();

        if($jadual->jadual_status=="menunggu semakan"){
            return view ('1_jadual.edit',[
                'jadual'=>$jadual,
                'spesifikasi'=>$spesifikasi
            ]);
        }

        elseif($jadual->jadual_status=="menunggu kelulusan"){

            return view ('1_jadual.kelulusan',[
                'jadual'=>$jadual,
                'spesfikasi'=>$spesifikasi
            ]);
        }

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


        $urusetia=User::where('id',$fizaJadualPemenuhan->jadual_created_by)->first();

        if ($request->jadual_status=="lulus"){
            $fizaJadualPemenuhan->jadual_status="diluluskan";
            $fizaJadualPemenuhan->save();
            // Mail::to($urusetia->email)->send(new KelulusanJadualPemenuhan($fizaJadualPemenuhan));
            return redirect('/JadualPemenuhan')->with('success','Spesifikasi telah diluluskan');
        }

        elseif($request->jadual_status=="ditolak"){
            $fizaJadualPemenuhan->jadual_status="ditolak";
            $fizaJadualPemenuhan->save();
            Mail::to($urusetia->email)->send(new KelulusanJadualPemenuhan($fizaJadualPemenuhan));

            return redirect('/JadualPemenuhan')->with('success','Data telah berjaya dikemaskini!');

        }

    }




    public function destroy($id)
    {
        $JadualPemenuhan = FizaJadualPemenuhan::where('id',$id)->first();
        $JadualPemenuhan->delete();

        return redirect('/JadualPemenuhan')->with('message', 'Data telah berjaya dipadam!');
    }
}
