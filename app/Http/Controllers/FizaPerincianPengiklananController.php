<?php

namespace App\Http\Controllers;

use App\Models\FizaPerincianPengiklanan;
use App\Models\FizaPenyediaanSpesifikasi;
use App\Models\FizaPembelianSebutTender;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use \PDF;

class FizaPerincianPengiklananController extends Controller
{

    public function index()
    {

        $iklan = FizaPerincianPengiklanan::all();
        $pst = FizaPembelianSebutTender::where('pst_status','diluluskan')->get();

        return view ('1_perincian_iklan.index',[
            'iklan'=>$iklan,
            'pst'=>$pst
        ]);
    }


    public function create($id)
    {
        $pst = FizaPembelianSebutTender::find($id);
        $pelulus=User::where('id',$pst->pst_pelulus)->first();

        return view('1_perincian_iklan.create',[
            'pst'=>$pst,
            'pelulus'=>$pelulus

        ]);
    }


    public function store(Request $request)
    {
        $fizaPerincianPengiklanan = new FizaPerincianPengiklanan;

        $fizaPerincianPengiklanan->iklan_date=$request->iklan_date;
        $fizaPerincianPengiklanan->iklan_taklimat_date=$request->iklan_taklimat_date;
        $fizaPerincianPengiklanan->iklan_taklimat_time=$request->iklan_taklimat_time;
        // $fizaPerincianPengiklanan->iklan_tempoh=$request->iklan_tempoh;
        $fizaPerincianPengiklanan->iklan_last_date=$request->iklan_last_date;
        $fizaPerincianPengiklanan->iklan_tempoh_sah_laku=$request->iklan_tempoh_sah_laku;
        // $fizaPerincianPengiklanan->iklan_sah_laku_tamat=$request->iklan_sah_laku_tamat;

        // $fizaPerincianPengiklanan->user_id=$request->user_id;
        $fizaPerincianPengiklanan->iklan_created_by=Auth::user()->id;
        $fizaPerincianPengiklanan->pst_id=$request->pst_id;
        // $fizaPerincianPengiklanan->iklan_id=$request->iklan_id;

        // $url = '/fizaPerincianPengiklanan'.$fizaPerincianPengiklanan->id;

        $fizaPerincianPengiklanan->save();
        return redirect('PerincianPengiklanan')->with('sucess','Data telah berjaya dihantar!');



    }
    public function show(FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        //
    }

    public function edit($id)
    {
        $perincianPengiklanan = FizaPerincianPengiklanan::find($id);
        $pst = FizaPembelianSebutTender::where('id',$perincianPengiklanan->pst_id)->first();
        $pelulus=User::where('id',$pst->pst_pelulus)->first();

        return view ('1_perincian_iklan.edit',[
            'perincianPengiklanan'=>$perincianPengiklanan,
            'pst'=>$pst,
            'pelulus'=>$pelulus
        ]);
    }

    public function update(Request $request)
    {
        $perincianPengiklanan->iklan_date=$request->iklan_date;
        $perincianPengiklanan->iklan_taklimat_date=$request->iklan_taklimat_date;
        $perincianPengiklanan->iklan_taklimat_time=$request->iklan_taklimat_time;
        $perincianPengiklanan->iklan_tempoh=$request->iklan_tempoh;
        $perincianPengiklanan->iklan_last_date=$request->iklan_last_date;
        $perincianPengiklanan->iklan_tempoh_sah_laku=$request->iklan_tempoh_sah_laku;
        $perincianPengiklanan->iklan_sah_laku_tamat=$request->iklan_sah_laku_tamat;

        $perincianPengiklanan->user_id=$request->user_id;
        $perincianPengiklanan->iklan_created_by=$request->iklan_created_by;
        $perincianPengiklanan->pst_id=$request->pst_id;
        $perincianPengiklanan->iklan_id=$request->iklan_id;
        $perincianPengiklanan->iklan_date=$request->iklan_date;

        $perincianPengiklanan->save();
        return redirect ('/PerincianPengiklanan');
    }


    public function destroy(FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        //
    }


    public function senaraisebutharga(){

        $iklan = FizaPerincianPengiklanan::where('iklan_status',"diluluskan")->get();

        foreach ($iklan as $iklan) {
            $pst = FizaPembelianSebutTender::where('id',$iklan->pst_id)->first();

            return view ('1_perincian_iklan.senarai_pst',[
                'iklan'=>$iklan,
                'pst'=>$pst,

            ]);

        }

    }

    public function butiransebutharga(){

        $iklan = FizaPerincianPengiklanan::where('iklan_status',"diluluskan")->get();

        foreach ($iklan as $iklan) {
            $pst = FizaPembelianSebutTender::where('id',$iklan->pst_id)->first();
            $spesfikasi = FizaPenyediaanSpesifikasi::where('pst_id',$pst->id)->first();

            $iklan->iklan_status=$iklan->iklan_status;
            $iklan->save();

            $pdf = PDF::loadView('pdf.butiransebutharga', [
            'pst' => $pst,
            'spesifikasi'=>$spesifikasi,
            'iklan'=>$iklan
        ]);
            return $pdf->download($pst->pst_tajuk.'.pdf');

        }

    }

}




