<?php

namespace App\Http\Controllers;

use App\Models\FizaKehadiranTaklimat;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaPerincianPengiklanan;
use App\Models\FizaPembekal;
use App\Models\FizaJawatankuasa;
use App\Models\FizaPenyediaanSpesifikasi;
use App\Models\FizaCadangan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\MaklumBalasKehadiranTaklimatSebutHarga;


class FizaKehadiranTaklimatController extends Controller
{

    public function index()
    {

        $role=Auth::user()->roles;
        if ($role[0]->id=='1') {

            $iklan = FizaPerincianPengiklanan::where('iklan_status','diluluskan')->get();
            foreach($iklan as $iklan){
                $pst=FizaPembelianSebutTender::where('id',$iklan->pst_id)->first()->get();
            }


            return view('1_kehadiran_taklimat.index', [
                'iklan'=>$iklan,
                'pst'=>$pst

                ]);
        }

        else{

            $iklan = FizaPerincianPengiklanan::where('iklan_status','diluluskan')->get();

            foreach($iklan as $iklan){
                $pst=FizaPembelianSebutTender::where('id',$iklan->pst_id)->first();
                $jawatankuasa=FizaJawatankuasa::where('pst_id',$pst->id)->first();
            }


            return view ('1_kehadiran_taklimat.index',[
                'jawatankuasa'=>$jawatankuasa,
                'iklan'=>$iklan,
                'pst'=>$pst
                    ]);

            }

    }


    public function create($id)
    {
        $pst = FizaPembelianSebutTender::find($id);

        return view('/1_kehadiran_taklimat.create', [
            'pst'=>$pst
        ]);
    }

    public function store(Request $request)
    {
        $fizaKehadiranTaklimat = new FizaKehadiranTaklimat;

        $fizaKehadiranTaklimat->pst_id=$request->pst_id;
        $fizaKehadiranTaklimat->pembekal_id=$request->pembekal_id;
        $fizaKehadiranTaklimat->kehadiran_nama=$request->kehadiran_nama;
        $fizaKehadiranTaklimat->kehadiran_pengenalan_no=$request->kehadiran_pengenalan_no;
        $fizaKehadiranTaklimat->kehadiran_no_tel=$request->kehadiran_no_tel;
        $fizaKehadiranTaklimat->kehadiran_email=$request->kehadiran_email;
        $fizaKehadiranTaklimat->status="menunggu kelulusan";
        $fizaKehadiranTaklimat->kehadiran_created_by=Auth::user()->id;

        $fizaKehadiranTaklimat->save();
        return redirect('/dashboard')->with('success','Data anda telah berjaya dihantar dan perlu menunggu kelulusan dari pihak kami.');
    }


    public function show(FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        //
    }


    public function edit($id)
    {
        $kehadiran = FizaKehadiranTaklimat::find($id);
        $pst=FizaPembelianSebutTender::where('id',$kehadiran->id)->get();
        $pembekal=FizaPembekal::where('id',$kehadiran->pembekal_id)->first();

        return view ('1_kehadiran_taklimat.edit',[
            'kehadiran'=>$kehadiran,
            'pst'=>$pst,
            'pembekal'=>$pembekal
        ]);
    }

    public function update(Request $request, $id)
    {
        $kehadiranTaklimat= FizaKehadiranTaklimat::find($id);

        $kehadiranTaklimat->pst_id=$request->pst_id;
        $kehadiranTaklimat->pembekal_id=$request->pembekal_id;
        $kehadiranTaklimat->kehadiran_nama=$request->kehadiran_nama;
        $kehadiranTaklimat->kehadiran_pengenalan_no=$request->kehadiran_pengenalan_no;
        $kehadiranTaklimat->kehadiran_no_tel=$request->kehadiran_no_tel;
        $kehadiranTaklimat->kehadiran_email=$request->kehadiran_email;
        $kehadiranTaklimat->status=$request->status;
        $kehadiranTaklimat->link=$request->link;
        $kehadiranTaklimat->kehadiran_updated_by=Auth::user()->id;



        $ahli_hadir = User::where('id',$kehadiranTaklimat->kehadiran_created_by)->first();


        if ($request->status_kehadiran=="dilulus"){
            $kehadiranTaklimat->status="diluluskan";

            $kehadiranTaklimat->save();
            //dd($request);
            Mail::to($ahli_hadir->email)->send(new MaklumBalasKehadiranTaklimatSebutHarga);

        }
        else if($request->status_kehadiran=="ditolak"){
            $kehadiranTaklimat->status="ditolak";
            $kehadiranTaklimat->save();

            Mail::to($ahli_hadir->email)->send(new MaklumBalasKehadiranTaklimatSebutHarga );


        }



        return redirect('/KehadiranTaklimat');
    }


    public function destroy(FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        //
    }

    public function kehadiranPembekal(FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        $kehadiran = FizaKehadiranTaklimat::where('pembekal_id',Auth::user()->pembekal_id)->get();

            foreach ($kehadiran as $kehadiran) {
                $iklan=FizaPerincianPengiklanan::where('pst_id',$kehadiran->pst_id)->first();
                $spesifikasi=FizaPenyediaanSpesifikasi::where('pst_id',$kehadiran->pst_id)->first();
                $pst=FizaPembelianSebutTender::where('id',$kehadiran->pst_id)->get()->first();
                $cadangan=FizaCadangan::where('spesifikasi_id',$spesifikasi->id)->get()->first();
            }

        //    dd($iklan);
           return view('1_kehadiran_taklimat.kehadiranPembekal', [
            'kehadiran'=>$kehadiran,
            'pst'=>$pst,
            'iklan'=>$iklan,
            'spesifikasi'=>$spesifikasi,
            'cadangan'=>$cadangan

            ]);
    }


    public function senarai_kehadiran()
    {

        $role=Auth::user()->roles;
        if ($role[0]->id=='1') {

            $kehadiran=FizaKehadiranTaklimat::all();




            // dd($kehadiran);
            return view('1_kehadiran_taklimat.senarai_kehadiran', [
                'kehadiran'=>$kehadiran,
                // 'pst'=>$pst,
                // 'pembekal'=>$pembekal

                ]);
        }

        else{

                $pst = FizaPembelianSebutTender::where('pst_pelulus',Auth::user()->id)->get();

                foreach ($pst as $pst) {
                    $jawatankuasa = FizaJawatankuasa::where('pst_id', $pst->id)->first();
                    $kehadiran=FizaKehadiranTaklimat::where('pst_id', $pst->id)->first();
                }


                    return view ('1_kehadiran_taklimat.index',[
                        'jawatankuasa'=>$jawatankuasa,
                        'kehadiran'=>$kehadiran,
                        'pst'=>$pst
                    ]);
            }

    }


}
