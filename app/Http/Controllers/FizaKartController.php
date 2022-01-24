<?php

namespace App\Http\Controllers;

use App\Models\FizaKart;
use App\Models\FizaItemInfo;
use App\Models\FizaPertanyaanItem;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class FizaKartController extends Controller
{
    
    public function index()
    {
        $fizaKart = FizaKart::all();
        return view ('1_kart.index',[
            'Kart'=>$fizaKart
        ]);
    }


    public function create()
    {
        $itemInfo = FizaItemInfo::all();
        $tanya = FizaPertanyaanItem::all();

        return view ('1_kart.create',[
            'itemInfo'=>$itemInfo,
            'tanya'=>$tanya
            ]);
    }


    public function store(Request $request)
    {
        $fizaKart = new FizaKart;
        
        $fizaKart->item_kod=$itemInfo->id;
        $fizaKart->kart_kuantiti=$request->kart_kuantiti;
        $fizaKart->pembekal_id=$itemInfo->pembekal_id;
        $fizaKart->kart_justifikasi =$request->kart_justifikasi ;
        // $fizaKart->user_id =$request->user_id ;
        $fizaKart->tanya_id=$tanya->id;
        $fizaKart->kart_created_by =Auth::user()->user_name ;


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
        $itemInfo = FizaItemInfo::where('id',$fizaKart->item_id)->first();
        return view ('1_kart.edit',[
            'fizaKart'=>$fizaKart]);
    }

 
    public function update(Request $request, FizaKart $fizaKart)
    {
        $fizaKart->item_kod=$request-> item_kod;
        $fizaKart->kart_kuantiti=$request->kart_kuantiti;
        $fizaKart->pembekal_id=Auth::user()->pembekal_id;
        $fizaKart->kart_justifikasi =$request->kart_justifikasi ;
        // $fizaKart->user_id =$request->user_id ;
        $fizaKart->tanya_id=$tanya->id;
        $fizaKart->kart_updated_by =Auth::user()->user_name;


        $fizaKart->save();
        return redirect('/Kart');

    
    }

    public function destroy(FizaKart $fizaKart)
    {
        //
    }


}
