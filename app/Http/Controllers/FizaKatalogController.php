<?php

namespace App\Http\Controllers;

use App\Models\FizaKatalog;
use App\Models\FizaItemInfo;

use Illuminate\Http\Request;

class FizaKatalogController extends Controller
{

    public function index()
    {
        $fizaKatalog = FizaKatalog::all();
        $fizaItemInfo = FizaItemInfo::all();
        return view ('1_katalog.index',[
            'Katalog'=>$fizaKatalog, 
            'ItemInfo'=>$fizaItemInfo]);
    }

    public function create()
    {
      
        return view('1_katalog.create');
    }

    public function store(Request $request)
    {
        $fizaKatalog = new FizaKatalog;
        $fizaKatalog->id=$request->id;

        $fizaKatalog->katalog_kategori=$request->katalog_kategori;
        $fizaKatalog->katalog_kumpulan=$request->katalog_kumpulan;
        $fizaKatalog->katalog_jenis=$request->katalog_jenis;
        // $fizaKatalog->katalog_created_by=$request->katalog_created_by;
        // $fizaKatalog->user_id=$request->user_id;

        $fizaKatalog->save();
        return redirect('/Katalog');
    
    }


    public function show(FizaKatalog $fizaKatalog)
    {
        //
    }


    public function edit($id)
    {
        $fizaKatalog = FizaKatalog::find($id);
        return view ('1_katalog.edit',[
            'Katalog'=>$fizaKatalog]);
        
    }


    public function update(Request $request,$id)
    {
        $fizaKatalog = FizaKatalog::find($id);
        // $fizaKatalog->id=$request->id;

        $fizaKatalog->katalog_kategori=$request->katalog_kategori;
        $fizaKatalog->katalog_kumpulan=$request->katalog_kumpulan;
        $fizaKatalog->katalog_jenis=$request->katalog_jenis;
        $fizaKatalog->katalog_updated_by=$request->katalog_updated_by;
        $fizaKatalog->user_id=$request->user_id;

        $fizaKatalog->save();
        return redirect('/Katalog');

    }


    public function destroy(FizaKatalog $fizaKatalog)
    {
        //
    }

    public function listkatalog($id)
    {
        // $fizaKatalog = FizaKatalog::find($id);
        // $fizaItemInfo = FizaItemInfo::where('id', $fizaKatalog->katalog_id)->get();

        $fizaItemInfo = FizaItemInfo::find($id);
        $fizaKatalog = FizaKatalog::where('id', $fizaItemInfo->katalog_id)->first();

    
        return view ('1_katalog.listkatalog',[
            'Katalog'=>$fizaKatalog, 
            'ItemInfo'=>$fizaItemInfo
        ]);
    }
}
