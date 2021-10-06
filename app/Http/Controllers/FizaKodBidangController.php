<?php

namespace App\Http\Controllers;

use App\Models\FizaKodBidang;
use Illuminate\Http\Request;
use App\Mail\SuratMainan;
use Illuminate\Support\Facades\Mail;

class FizaKodBidangController extends Controller
{

    public function index()
    {
        Mail::to('syafiza.senin@pipeline.com.my')->send(new SuratMainan);
        $fizaKodBidang = FizaKodBidang::all();
        // return view ('1_kod_bidang.index',[
        //      'fizaKodBidang'=>$fizaKodBidang]);
        dd('mainmain');
    }



    public function create()
    {
        return redirect('1_kod_bidang.create');
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
        return redirect('/fizaKodBidang');
    
    }

 
    public function show(FizaKodBidang $fizaKodBidang)
    {
        //
    }


    public function edit(FizaKodBidang $fizaKodBidang)
    {
        $fizaKodBidang = FizaKodBidang::all();
        return view ('1_kod_bidang.edit',[
            'fizaKodBidang'=>$fizaKodBidang]);
    }

    public function update(Request $request, FizaKodBidang $fizaKodBidang)
    {
        
        $fizaKodBidang->kod_type =$request->kod_type ;
        $fizaKodBidang->kod_category=$request->kod_category;
        $fizaKodBidang->kod_pengkhususan=$request->kod_pengkhususan;
        $fizaKodBidang->kod_description=$request->kod_description;
        $fizaKodBidang->kod_updated_by=$request->kod_updated_by;

        $url = '/fizaKodBidang'.$fizaKodBidang->id;
        return redirect('/fizaKodBidang');
    }

    public function destroy(FizaKodBidang $fizaKodBidang)
    {
        //
    }
}
