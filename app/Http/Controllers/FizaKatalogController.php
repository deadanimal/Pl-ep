<?php

namespace App\Http\Controllers;

use App\Models\FizaKatalog;
use App\Models\FizaItemInfo;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaKatalogController extends Controller
{

    public function index()
    {
        $fizaKatalog = FizaKatalog::where('katalog_created_by',Auth::user()->pembekal_id)->get();
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
        $fizaKatalog->katalog_created_by=Auth::user()->pembekal_id;
        // $fizaKatalog->user_id=$request->user_id;

        $fizaKatalog->save();
        return redirect('/Katalog')->with('success','Data telah berjaya ditambah!');
    
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
        return redirect('/Katalog')->with('success','Data telah berjaya dikemaskini!');

    }


    public function destroy($id)
    {
        $katalog = FizaKatalog::where('id', $id)->first();
        $katalog->delete();

        return redirect('/Katalog')->with('success', 'Data telah berjaya dipadam!');
    }

    public function listkatalog($id)
    {
        // $fizaKatalog = FizaKatalog::find($id);
        // $fizaItemInfo = FizaItemInfo::where('id', $fizaKatalog->katalog_id)->get();

        $fizaItemInfo = FizaItemInfo::find($id);
        $fizaKatalog = FizaKatalog::where('id', $fizaItemInfo->katalog_id)->get()->first();

        return view ('1_katalog.listkatalog',[
            'Katalog'=>$fizaKatalog, 
            'ItemInfo'=>$fizaItemInfo
        ]);
    }

    public function compare_barang(ItemInfo $barang_1, ItemInfo $barang_2, ItemInfo $barang_3 )
    {
        $barang_1 = ItemInfo::where('id', $request->iteminfo->id)->first();
        $barang_2 = ItemInfo::where('id', $request->iteminfo->id)->first();
        $barang_3 = ItemInfo::where('id', $request->iteminfo->id)->first();

        return view('compare_barang', [
            'barang_1' => $barang_1,
            'barang_2' => $barang_2,
            'barang_3' => $barang_3,
        ]);

    }
}
