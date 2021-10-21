<?php

namespace App\Http\Controllers;

use App\Models\FizaPertanyaanItem;
use Illuminate\Http\Request;

class FizaPertanyaanItemController extends Controller
{

    public function index()
    {
        $fizaPertanyaanItem = FizaPertanyaanItem::all();
        return view ('1_tanya_item.index',[
            'fizaPertanyaanItem'=>$fizaPertanyaanItem]);
    }


    public function create()
    {
      
        return view ('1_tanya_item.create');
    }


    public function store(Request $request)
    {
        $fizaPertanyaanItem = new FizaPertanyaanItem;

        $fizaPertanyaanItem->item_id=$request->item_id;
        $fizaPertanyaanItem->user_id=$request->user_id;
        $fizaPertanyaanItem->pembekal_id=$request->pembekal_id;
        $fizaPertanyaanItem->tanya_kuantiti=$request->tanya_kuantiti;
        $fizaPertanyaanItem->tanya_tempoh_penghantaran=$request->tanya_tempoh_penghantaran;

        $fizaPertanyaanItem->tanya_jenis_perolehan=$request->tanya_jenis_perolehan;
        $fizaPertanyaanItem->tanya_catatan1=$request->tanya_catatan1;
        $fizaPertanyaanItem->tanya_ketersediaan_stok=$request->tanya_ketersediaan_stok;
        $fizaPertanyaanItem->tanya_harga_baru=$request->tanya_harga_baru;
        $fizaPertanyaanItem->tanya_status=$request->tanya_status;
        $fizaPertanyaanItem->tanya_created_by=$request->tanya_created_by;



        $fizaPertanyaanItem->save();
        return redirect('/PertanyaanItem');
    
    }

    public function show(FizaPertanyaanItem $fizaPertanyaanItem)
    {
        //
    }

    public function edit(FizaPertanyaanItem $fizaPertanyaanItem)
    {
        $fizaPertanyaanItem = FizaPertanyaanItem::all();
        return view ('1_tanya_item.edit',[
            'fizaPertanyaanItem'=>$fizaPertanyaanItem]);
    }


    public function update(Request $request, FizaPertanyaanItem $fizaPertanyaanItem)
    {
        
        $fizaPertanyaanItem->item_id=$request->item_id;
        $fizaPertanyaanItem->user_id=$request->user_id;
        $fizaPertanyaanItem->pembekal_id=$request->pembekal_id;
        $fizaPertanyaanItem->tanya_kuantiti=$request->tanya_kuantiti;
        $fizaPertanyaanItem->tanya_tempoh_penghantaran=$request->tanya_tempoh_penghantaran;

        $fizaPertanyaanItem->tanya_jenis_perolehan=$request->tanya_jenis_perolehan;
        $fizaPertanyaanItem->tanya_catatan1=$request->tanya_catatan1;
        $fizaPertanyaanItem->tanya_ketersediaan_stok=$request->tanya_ketersediaan_stok;
        $fizaPertanyaanItem->tanya_harga_baru=$request->tanya_harga_baru;
        $fizaPertanyaanItem->tanya_status=$request->tanya_status;
        $fizaPertanyaanItem->tanya_updated_by=$request->tanya_updated_by;

        $fizaPertanyaanItem->save();
        return redirect('/PertanyaanItem');
    }

 
    public function destroy(FizaPertanyaanItem $fizaPertanyaanItem)
    {
        //
    }
}
