<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\FizaArahanMemberhentikan;
use Illuminate\Http\Request;

class FizaArahanMemberhentikanController extends Controller
{
    public function index()
    {
        $fizaArahanMemberhentikan = FizaArahanMemberhentikan::all();
        $user = User::all();

        return view ('1_arahan_berhenti.index',[
            'ArahanMemberhentikan'=>$fizaArahanMemberhentikan,
            'user'=>$user
        ]);
    }


    public function create()
    {
        $user = User::all();
        return view('1_arahan_berhenti.create',[
            'user'=>$user
        ]);
    }


    public function store(Request $request)
    {
        $fizaArahanMemberhentikan = new FizaArahanMemberhentikan;

        $fizaArahanMemberhentikan->pesanan_id=$request->pesanan_id;
        $fizaArahanMemberhentikan->sst_id=$request->sst_id;
        $fizaArahanMemberhentikan->pesanan_id=$request->pesanan_id;
        $fizaArahanMemberhentikan->pembekal_id=$request->pembekal_id;
        $fizaArahanMemberhentikan->arahan_justifikasi=$request->arahan_justifikasi;
        $fizaArahanMemberhentikan->arahan_keterangan=$request->arahan_keterangan;
        $fizaArahanMemberhentikan->terima_id=$request->terima_id;
        $fizaArahanMemberhentikan->penghantaran_id =$request->penghantaran_id ;
        $fizaArahanMemberhentikan->arahan_oleh=$request->arahan_oleh;
        $fizaArahanMemberhentikan->arahan_pelulus=$request->arahan_pelulus;
        $fizaArahanMemberhentikan->arahan_catatan =$request->arahan_catatan ;
        $fizaArahanMemberhentikan->arahan_created_by=$request->arahan_created_by;

        $fizaArahanMemberhentikan->save();
        
        return redirect('/ArahanMemberhentikan');
    }

    public function show(FizaArahanMemberhentikan $fizaArahanMemberhentikan)
    {
        //
    }
    public function edit($id)
    {
        $user = User::all();
        return view('1_arahan_berhenti.edit', [
            'ArahanMemberhentikan'=>$fizaArahanMemberhentikan,
            'user'=>$user

        ]); 
    }

    public function update(Request $request, FizaArahanMemberhentikan $fizaArahanMemberhentikan)
    {
        $fizaArahanMemberhentikan->pesanan_id=$request->pesanan_id;
        $fizaArahanMemberhentikan->sst_id=$request->sst_id;
        $fizaArahanMemberhentikan->pesanan_id=$request->pesanan_id;
        $fizaArahanMemberhentikan->pembekal_id=$request->pembekal_id;
        $fizaArahanMemberhentikan->arahan_justifikasi=$request->arahan_justifikasi;
        $fizaArahanMemberhentikan->arahan_keterangan=$request->arahan_keterangan;
        $fizaArahanMemberhentikan->terima_id=$request->terima_id;
        $fizaArahanMemberhentikan->penghantaran_id =$request->penghantaran_id ;
        $fizaArahanMemberhentikan->arahan_oleh=$request->arahan_oleh;
        $fizaArahanMemberhentikan->arahan_pelulus=$request->arahan_pelulus;
        $fizaArahanMemberhentikan->arahan_catatan =$request->arahan_catatan ;
        $fizaArahanMemberhentikan->arahan_updated_by=$request->arahan_updated_by;


        $fizaArahanMemberhentikan->save();

      
        return redirect('/ArahanMemberhentikan');
    }


    public function destroy(FizaArahanMemberhentikan $fizaArahanMemberhentikan)
    {
        //
    }
}
