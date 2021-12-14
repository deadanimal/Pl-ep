<?php

namespace App\Http\Controllers;

use App\Models\FizaKodBidang;
use Illuminate\Http\Request;
use App\Mail\SuratMainan;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaKodBidangController extends Controller
{

    public function index()
    {
        $KodBidang = FizaKodBidang::all();
        return view ('1_kod_bidang.index',[
             'KodBidang'=>$KodBidang]);
        // dd('mainmain');
    }



    public function create()
    {

         return view('1_kod_bidang.create');
    }
    


    public function store(Request $request)
    {
        $fizaKodBidang = new FizaKodBidang;

        $fizaKodBidang->kod_type =$request->kod_type ;
        $fizaKodBidang->kod_category=$request->kod_category;
        $fizaKodBidang->kod_pengkhususan=$request->kod_pengkhususan;
        $fizaKodBidang->kod_description=$request->kod_description;
        $fizaKodBidang->kod_created_by=$request->kod_created_by;


        $fizaKodBidang->save();
        return redirect('/KodBidang')->with('success', 'Kod Bidang Berjaya Didaftarkan!');
    }

 
    public function show(FizaKodBidang $fizaKodBidang)
    {
        //
    }


    public function edit($id)
    {
        $fizaKodBidang = FizaKodBidang::find($id);
        return view ('1_kod_bidang.edit',[
            'fizaKodBidang'=>$fizaKodBidang]);
    }

    public function update(Request $request,$id)
    {
        $fizaKodBidang = FizaKodBidang::find($id);

        $fizaKodBidang->kod_type =$request->kod_type ;
        $fizaKodBidang->kod_category=$request->kod_category;
        $fizaKodBidang->kod_pengkhususan=$request->kod_pengkhususan;
        $fizaKodBidang->kod_description=$request->kod_description;
        $fizaKodBidang->kod_updated_by=$request->kod_updated_by;

        $fizaKodBidang->save();
        return redirect('/KodBidang')->with('success','Kod Bidang Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $KodBidang = FizaKodBidang::where('id',$id)->first();

        $KodBidang->delete();


        return redirect('/KodBidang')->with('message', 'Data telah berjaya dipadam!');
    }
}
