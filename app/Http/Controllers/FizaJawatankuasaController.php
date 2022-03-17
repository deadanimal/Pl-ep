<?php

namespace App\Http\Controllers;

use App\Models\FizaJawatankuasa;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FizaPembelianSebutTender;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Mail\PerlantikanJawatankuasaSpesifikasi;
use Illuminate\Support\Facades\Mail;

class FizaJawatankuasaController extends Controller
{

    public function index()
    {
        $fizaJawatankuasa = FizaJawatankuasa::all();
        return view ('1_jawatankuasa.index',[
            'Jawatankuasa'=>$fizaJawatankuasa, ]);
    }


    public function create($id)
    {
        $pst = FizaPembelianSebutTender::find($id);
        $user= User::where('jenis','pekerja')->where('user_status','aktif')->get();
        $penyelaras= User::where('jenis','pekerja')
        ->where('user_status','aktif')->get();

        // $fizaPembelianSebutTender= FizaPembelianSebutTender::find($id);
        return view ('1_jawatankuasa.create',[
            'pst'=>$pst,
            'user'=>$user,
            'penyelaras'=>$penyelaras
        ]);
    }

    public function store(Request $request)
    {
        // $pst = FizaPembelianSebutTender::find($id);
        $fizaJawatankuasa = new FizaJawatankuasa;

        $fizaJawatankuasa->jawatankuasa_spesifikasi_pengerusi=$request->jawatankuasa_spesifikasi_pengerusi;
        $fizaJawatankuasa->jawatankuasa_spesifikasi_ajk=$request->jawatankuasa_spesifikasi_ajk;
        $fizaJawatankuasa->jawatankuasa_spesifikasi_urusetia=$request->jawatankuasa_spesifikasi_urusetia;

        $fizaJawatankuasa->jawatankuasa_teknikal_pengerusi=$request->jawatankuasa_teknikal_pengerusi;
        $fizaJawatankuasa->jawatankuasa_teknikal_ajk=$request->jawatankuasa_teknikal_ajk;

        $fizaJawatankuasa->jawatankuasa_kewangan_pengerusi=$request->jawatankuasa_kewangan_pengerusi;
        $fizaJawatankuasa->jawatankuasa_kewangan_ajk=$request->jawatankuasa_kewangan_ajk;

        $fizaJawatankuasa->jawatankuasa_kerja_pengerusi=$request->jawatankuasa_kerja_pengerusi;
        $fizaJawatankuasa->jawatankuasa_kerja_ajk=$request->jawatankuasa_kerja_ajk;

        $fizaJawatankuasa->jawatankuasa_terbuka_pengerusi=$request->jawatankuasa_terbuka_pengerusi;
        $fizaJawatankuasa->jawatankuasa_terbuka_ajk=$request->jawatankuasa_terbuka_ajk;

        $fizaJawatankuasa->jawatankuasa_penilaian_pengerusi=$request->jawatankuasa_penilaian_pengerusi;
        $fizaJawatankuasa->jawatankuasa_penilaian_ajk=$request->jawatankuasa_penilaian_ajk;

        $fizaJawatankuasa->pst_id=$request->pst_id;
        $fizaJawatankuasa->jawatankuasa_created_by=Auth::user()->id;

        $fizaJawatankuasa->save();

        // Mail::to($receiver->email)->send(new SebutHargaBaru);
        // Mail::to($receiver_spesifikasi->email)->send(new PerlantikanJawatankuasaSpesifikasi);

        return redirect('/PembelianSebutTender')->with('success','Sebutharga telah berjaya dihantar!');

    }

    public function show(FizaJawatankuasa $fizaJawatankuasa)
    {
        //
    }


    public function edit( $id)
    {

        $pst = FizaPembelianSebutTender::find($id);
        $Jawatankuasa= FizaJawatankuasa::where('pst_id', $pst->id)->get()->first();

        // $Jawatankuasa=FizaJawatankuasa::find($id);
        // $pst = FizaPembelianSebutTender::where('id',$Jawatankuasa->pst_id)->get()->first();

        $spesifikasi_pengerusi=User::where('id',$Jawatankuasa->jawatankuasa_spesifikasi_pengerusi)->get();
        $spesifikasi_ajk=User::where('id',$Jawatankuasa->jawatankuasa_spesifikasi_ajk)->get();
        $spesifikasi_urusetia=User::where('id',$Jawatankuasa->jawatankuasa_spesifikasi_urusetia)->get();

        $teknikal_pengerusi=User::where('id',$Jawatankuasa->jawatankuasa_teknikal_pengerusi)->get();
        $teknikal_ajk=User::where('id',$Jawatankuasa->jawatankuasa_teknikal_ajk)->get();

        $kewangan_pengerusi=User::where('id',$Jawatankuasa->jawatankuasa_kewangan_pengerusi)->get();
        $kewangan_ajk=User::where('id',$Jawatankuasa->jawatankuasa_kewangan_ajk)->get();

        $kerja_pengerusi=User::where('id',$Jawatankuasa->jawatankuasa_kerja_pengerusi)->get();
        $kerja_ajk=User::where('id',$Jawatankuasa->jawatankuasa_kerja_ajk)->get();

        $terbuka_pengerusi=User::where('id',$Jawatankuasa->jawatankuasa_terbuka_pengerusi)->get();
        $terbuka_ajk=User::where('id',$Jawatankuasa->jawatankuasa_terbuka_ajk)->get();

        $penilaian_pengerusi=User::where('id',$Jawatankuasa->jawatankuasa_penilaian_pengerusi)->get();
        $penilaian_ajk=User::where('id',$Jawatankuasa->jawatankuasa_penilaian_ajk)->get();


        return view ('1_jawatankuasa.edit',[
            'Jawatankuasa'=>$Jawatankuasa,
            'pst'=>$pst,
            'spesifikasi_pengerusi'=>$spesifikasi_pengerusi,
            'spesifikasi_urusetia'=>$spesifikasi_urusetia,
            'spesifikasi_ajk'=>$spesifikasi_ajk,
            'kerja_pengerusi'=>$kerja_pengerusi,
            'kerja_ajk'=>$kerja_ajk,
            'teknikal_pengerusi'=>$teknikal_pengerusi,
            'teknikal_ajk'=>$teknikal_ajk,
            'kewangan_pengerusi'=>$kewangan_pengerusi,
            'kewangan_ajk'=>$kewangan_ajk,
            'terbuka_pengerusi'=>$terbuka_pengerusi,
            'terbuka_ajk'=>$terbuka_ajk,
            'penilaian_pengerusi'=>$penilaian_pengerusi,
            'penilaian_ajk'=>$penilaian_ajk
        ]);


    }


    public function update(Request $request,$id)
    {
        // dd($request->jawatankuasa_spesifikasi);
        $fizaJawatankuasa= fizaJawatankuasa::find($id);
        // $fizaJawatankuasa->pst_id=$request->pst_id;

        $fizaJawatankuasa->jawatankuasa_spesifikasi_pengerusi=$request->jawatankuasa_spesifikasi_pengerusi;
        $fizaJawatankuasa->jawatankuasa_spesifikasi_ajk=$request->jawatankuasa_spesifikasi_ajk;
        $fizaJawatankuasa->jawatankuasa_spesifikasi_urusetia=$request->jawatankuasa_spesifikasi_urusetia;

        $fizaJawatankuasa->jawatankuasa_teknikal_pengerusi=$request->jawatankuasa_teknikal_pengerusi;
        $fizaJawatankuasa->jawatankuasa_teknikal_ajk=$request->jawatankuasa_teknikal_ajk;

        $fizaJawatankuasa->jawatankuasa_kewangan_pengerusi=$request->jawatankuasa_kewangan_pengerusi;
        $fizaJawatankuasa->jawatankuasa_kewangan_ajk=$request->jawatankuasa_kewangan_ajk;

        $fizaJawatankuasa->jawatankuasa_kerja_pengerusi=$request->jawatankuasa_kerja_pengerusi;
        $fizaJawatankuasa->jawatankuasa_kerja_ajk=$request->jawatankuasa_kerja_ajk;

        $fizaJawatankuasa->jawatankuasa_terbuka_pengerusi=$request->jawatankuasa_terbuka_pengerusi;
        $fizaJawatankuasa->jawatankuasa_terbuka_ajk=$request->jawatankuasa_terbuka_ajk;

        $fizaJawatankuasa->jawatankuasa_penilaian_pengerusi=$request->jawatankuasa_penilaian_pengerusi;
        $fizaJawatankuasa->jawatankuasa_penilaian_ajk=$request->jawatankuasa_penilaian_ajk;

        // $fizaJawatankuasa->user_id=$request->user_id;
        // $fizaJawatankuasa->jawatankuasa_peranan=$request->jawatankuasa_peranan;


        $fizaJawatankuasa->jawatankuasa_updated_by=Auth::user()->id;

        // dd($request->jawatankuasa_spesifikasi_urusetia);

        // if ($request->status_jawatankuasa=="diluluskan"){
        //     $fizaJawatankuasa->jawatankuasa_kelulusan="diluluskan";
        //     $urusetia_spesifikasi = User::where('id',$fizaJawatankuasa->jawatankuasa_spesifikasi_urusetia)->first();
        //     dd($fizaJawatankuasa->jawatankuasa_spesifikasi_urusetia);


        //     //  Mail::to($urusetia_spesifikasi->email)->send(new PerlantikanJawatankuasaSpesifikasi);



        // }

        // else if($request->status_jawatankuasa=="ditolak"){
        //     $fizaJawatankuasa->jawatankuasa_kelulusan="ditolak";
        //     $urusetia= User::where('id',$fizaJawatankuasa->jawatankuasa_created_by)->first();
        //     Mail::to($urusetia->email)->send(new PerlantikanJawatankuasaSpesifikasi);
        // }


        $fizaJawatankuasa->save();
        // dd($request->pst_id);

        return redirect('/PembelianSebutTender')->with('success','Data anda telah berjaya dikemaskini');



    }



    public function destroy(FizaJawatankuasa $fizaJawatankuasa)
    {
        //
    }
}
