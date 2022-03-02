<?php

namespace App\Http\Controllers;

use App\Models\FizaPerincianPengiklanan;
use App\Models\FizaPembelianSebutTender;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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


    public function create()
    {
        $pst = FizaPembelianSebutTender::find($id); 
        
        return view('1_perincian_iklan.create',[
            'pst'=>$pst,
        
        ]);
    }


    public function store(Request $request)
    {
        $fizaPerincianPengiklanan = new FizaPerincianPengiklanan;

        $fizaPerincianPengiklanan->iklan_date=$request->iklan_date;
        $fizaPerincianPengiklanan->iklan_taklimat_date=$request->iklan_taklimat_date;
        $fizaPerincianPengiklanan->iklan_taklimat_time=$request->iklan_taklimat_time;
        $fizaPerincianPengiklanan->iklan_tempoh=$request->iklan_tempoh;
        $fizaPerincianPengiklanan->iklan_last_date=$request->iklan_last_date;
        $fizaPerincianPengiklanan->iklan_tempoh_sah_laku=$request->iklan_tempoh_sah_laku;
        $fizaPerincianPengiklanan->iklan_sah_laku_tamat=$request->iklan_sah_laku_tamat;

        // $fizaPerincianPengiklanan->user_id=$request->user_id;
        $fizaPerincianPengiklanan->iklan_created_by=Auth::user()->id;
        $fizaPerincianPengiklanan->pst_id=$request->pst_id;
        // $fizaPerincianPengiklanan->iklan_id=$request->iklan_id;

        // $url = '/fizaPerincianPengiklanan'.$fizaPerincianPengiklanan->id;
        return redirect('/fizaPerincianPengiklanan');



    }
    public function show(FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        //
    }

    public function edit(FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        $fizaPerincianPengiklanan = FizaPerincianPengiklanan::all();
        return view ('1_perincian_iklan.create',[
            'fizaPerincianPengiklanan'=>$fizaPerincianPengiklanan]);
    }

    public function update(Request $request, FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        $fizaPerincianPengiklanan->iklan_date=$request->iklan_date;
        $fizaPerincianPengiklanan->iklan_taklimat_date=$request->iklan_taklimat_date;
        $fizaPerincianPengiklanan->iklan_taklimat_time=$request->iklan_taklimat_time;
        $fizaPerincianPengiklanan->iklan_tempoh=$request->iklan_tempoh;
        $fizaPerincianPengiklanan->iklan_last_date=$request->iklan_last_date;
        $fizaPerincianPengiklanan->iklan_tempoh_sah_laku=$request->iklan_tempoh_sah_laku;
        $fizaPerincianPengiklanan->iklan_sah_laku_tamat=$request->iklan_sah_laku_tamat;

        $fizaPerincianPengiklanan->user_id=$request->user_id;
        $fizaPerincianPengiklanan->iklan_created_by=$request->iklan_created_by;
        $fizaPerincianPengiklanan->pst_id=$request->pst_id;
        $fizaPerincianPengiklanan->iklan_id=$request->iklan_id;
        $fizaPerincianPengiklanan->iklan_date=$request->iklan_date;

        $fizaPerincianPengiklanan->save();
        return redirect ('/$fizaPerincianPengiklanan');
    }

  
    public function destroy(FizaPerincianPengiklanan $fizaPerincianPengiklanan)
    {
        //
    }
}
