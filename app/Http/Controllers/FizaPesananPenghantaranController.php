<?php

namespace App\Http\Controllers;

use App\Models\FizaPesananPenghantaran;
use App\Models\FizaItemInfo;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPesananPenghantaranController extends Controller
{

    public function index()
    {
        $role=Auth::user()->roles;
        //dd($role->id[0]);
        if ($role[0]->id=='1') {
            $PesananPenghantaran = FizaPesananPenghantaran::all();
            
            return view('1_pesanan_penghantaran.index', [
                'PesananPenghantaran'=>$PesananPenghantaran,
     
             ]);
        }else{
            $PesananPenghantaran = FizaPesananPenghantaran::where('penghantaran_created_by', Auth::user()->user_name)->get();
            
            return view('1_pesanan_penghantaran.index', [
                'PesananPenghantaran'=>$PesananPenghantaran,
             ]);
        }

    }

    
    public function create()
    {
        $PesananPenghantaran = FizaPesananPenghantaran::all();
        $itemInfo = FizaItemInfo::all();

        return view ('1_pesanan_penghantaran.create',[
            'PesananPenghantaran'=> $PesananPenghantaran,
            'itemInfo'=>$itemInfo
            ]);
    }

    public function store(Request $request)
    {
        $fizaPesananPenghantaran = new FizaPesananPenghantaran;

        $fizaPesananPenghantaran->user_id=$request->user_id;
        $fizaPesananPenghantaran->pesanan_id=$request->pesanan_id;
        $fizaPesananPenghantaran->pembekal_id=$itemInfo->pembekal_id;
        $fizaPesananPenghantaran->sst_id=$request->sst_id;
        $fizaPesananPenghantaran->penghantaran_kuantiti=$request->penghantaran_kuantiti;
        $fizaPesananPenghantaran->penghantaran_date=$request->penghantaran_date;
        $fizaPesananPenghantaran->penghantaran_created_by=Auth::user()->user_name;


        $fizaPesananPenghantaran->save();
        return redirect('/PesananPenghantaran');


        
    }


    public function show(FizaPesananPenghantaran $fizaPesananPenghantaran)
    {
        //
    }


    public function edit($id)
    {
        $PesananPenghantaran = FizaPesananPenghantaran::find($id);
        $itemInfo =FizaItemInfo::where('pembekal_id',$PesananPenghantaran->pembekal_id)->first();
        return view ('1_pesanan_penghantaran.edit',[
            'fizaPesananPenghantaran'=>$PesananPenghantaran]);
    }

    public function update(Request $request, FizaPesananPenghantaran $PesananPenghantaran)
    {
        
        // $PesananPenghantaran->user_id=$request->user_id;
        // $PesananPenghantaran->pesanan_id=$request->pesanan_id;
        $PesananPenghantaran->pembekal_id=$itemInfo->pembekal_id;
        $PesananPenghantaran->sst_id=$request->sst_id;
        $PesananPenghantaran->penghantaran_kuantiti=$request->penghantaran_kuantiti;
        $PesananPenghantaran->penghantaran_date=$request->penghantaran_date;
        $PesananPenghantaran->penghantaran_updated_by=Auth::user()->user_name;


        $PesananPenghantaran->save();
        return redirect('/PesananPenghantaran');

    }


    public function destroy(FizaPesananPenghantaran $fizaPesananPenghantaran)
    {
        //
    }
}