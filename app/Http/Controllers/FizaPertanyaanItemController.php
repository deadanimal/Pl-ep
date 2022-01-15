<?php

namespace App\Http\Controllers;

use App\Models\FizaPertanyaanItem;
use App\Models\FizaItemInfo;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

        $fizaPertanyaanItem = FizaPertanyaanItem::find($id);
        $itemInfo = FizaItemInfo::where('id',$fizaPertanyaanItem->item_id)->first();
        return view ('1_tanya_item.create',[
            'user'=> $user,
            'itemInfo'=>$itemInfo
            ]);
    }


    public function store(Request $request)
    {
        $fizaPertanyaanItem = new FizaPertanyaanItem;

        $fizaPertanyaanItem->item_id=$itemInfo->id;
        // $fizaPertanyaanItem->user_id=$request->user_id;
        $fizaPertanyaanItem->pembekal_id=$itemInfo->pembekal_id;
        $fizaPertanyaanItem->tanya_kuantiti=$request->tanya_kuantiti;
        $fizaPertanyaanItem->tanya_tempoh_penghantaran=$request->tanya_tempoh_penghantaran;

        $fizaPertanyaanItem->tanya_jenis_perolehan=$request->tanya_jenis_perolehan;
        $fizaPertanyaanItem->tanya_catatan1=$request->tanya_catatan1;
        $fizaPertanyaanItem->tanya_ketersediaan_stok=$request->tanya_ketersediaan_stok;
        $fizaPertanyaanItem->tanya_harga_baru=$request->tanya_harga_baru;
        $fizaPertanyaanItem->tanya_status=$request->tanya_status;
        $fizaPertanyaanItem->tanya_created_by=Auth::user()->user_name;

        $fizaPertanyaanItem->save();
        
    }

    public function show(FizaPertanyaanItem $fizaPertanyaanItem)
    {
        //
    }

    public function edit($id)
    {
        $fizaPertanyaanItem = FizaPertanyaanItem::find($id);
        $itemInfo = FizaItemInfo::where('id', $fizaPertanyaanItem->item_id)->first();
        return view('1_tanya_item.edit', [
            'user'=> $user,
            'itemInfo'=>$itemInfo
            ]);
    }

    public function update(Request $request, FizaPertanyaanItem $fizaPertanyaanItem)
    {
        
        $fizaPertanyaanItem->item_id=$itemInfo->id;
        // $fizaPertanyaanItem->user_id=$request->user_id;
        $fizaPertanyaanItem->pembekal_id=$itemInfo->pembekal_id;
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
