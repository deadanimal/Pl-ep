<?php

namespace App\Http\Controllers;

use App\Models\FizaKart;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaKartController extends Controller
{
    
    public function index()
    {
        $fizaKart = FizaKart::all();
        return view ('1_kart.index',[
            'Kart'=>$fizaKart]);
    }


    public function create()
    {
        return view ('1_kart.create');
    }


    public function store(Request $request)
    {
        $fizaKart = new FizaKart;
        
        $fizaKart-> item_kod=$request-> item_kod;
        $fizaKart->kart_kuantiti=$request->kart_kuantiti;
        // $fizaKart->pembekal_id =$request->pembekal_id ;
        $fizaKart->kart_justifikasi =$request->kart_justifikasi ;
        $fizaKart->user_id =$request->user_id ;
        $fizaKart->tanya_id=$request->tanya_id;
        $fizaKart->kart_created_by =$request->kart_created_by ;


        $fizaKart->save();
        return redirect('/Kart');
    }


    public function show(FizaKart $fizaKart)
    {
        //
    }


    public function edit(FizaKart $fizaKart)
    {
        $fizaKart = FizaKart::all();
        return view ('1_kart.edit',[
            'fizaKart'=>$fizaKart]);
    }

 
    public function update(Request $request, FizaKart $fizaKart)
    {
        $fizaKart->item_kod=$request-> item_kod;
        $fizaKart->kart_kuantiti=$request->kart_kuantiti;
        $fizaKart->pembekal_id =$request->pembekal_id ;
        $fizaKart->kart_justifikasi =$request->kart_justifikasi ;
        $fizaKart->user_id =$request->user_id ;
        $fizaKart->tanya_id=$request->tanya_id;
        $fizaKart->kart_updated_by =$request->kart_updated_by;


        $fizaKart->save();
        return redirect('/Kart');

    
    }

    public function destroy(FizaKart $fizaKart)
    {
        //
    }


}
