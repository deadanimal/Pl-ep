<?php

namespace App\Http\Controllers;


use App\Models\AuditLog;
use App\Models\FizaKatalog;
use App\Models\FizaKart;
use App\Models\FizaItemInfo;
use App\Models\FizaPembekal;
use App\Models\ItemKart;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaItemInfoController extends Controller
{
    public function index()
    {
        $role=Auth::user()->roles;
        //dd($role->id[0]);
        if ($role[0]->id=='1') {
            $ItemInfo = FizaItemInfo::all();
            $Katalog=FizaKatalog::all();
    
    
            return view('1_item_info.index', [
                'ItemInfo'=>$ItemInfo,
                'Katalog'=>$Katalog,
            ]);
        } else {
            $ItemInfo = FizaItemInfo::where('pembekal_id', Auth::user()->pembekal_id)->get();
            $Katalog=FizaKatalog::all();
    
            return view('1_item_info.index', [
                'ItemInfo'=>$ItemInfo,
                'Katalog'=>$Katalog,
                
    
            ]);
        }
    }

  
    public function create()
    {
        $fizaItemInfo = FizaItemInfo::all();
        $fizaKatalog = FizaKatalog::all();
        return view('1_item_info.create', [
            'ItemInfo'=>$fizaItemInfo,
            'Katalog'=>$fizaKatalog
        ]);
    }

    public function store(Request $request)
    {
        $fizaItemInfo = new FizaItemInfo;
        
        $fizaItemInfo->item_name=$request->item_name;
        $fizaItemInfo->item_price=$request->item_price;
        $fizaItemInfo->item_unit=$request->item_unit;
        $fizaItemInfo->start_date=$request->start_date;
        $fizaItemInfo->end_date=$request->end_date;
        $fizaItemInfo->katalog_id=$request->katalog_id;
        $fizaItemInfo->pembekal_id=Auth::user()->pembekal_id;
        $fizaItemInfo->item_created_by=Auth::user()->id;


        $fizaItemInfo->save();


        //Audit Log
        $item ="Item Info";
        $user_id= Auth::user()->id;
        $description = Auth::user()->user_name . " telah menambahkan info untuk item " . $fizaItemInfo->item_name;

        $log_item = [$item, $description, $user_id];

        app('App\Http\Controllers\AuditLogController')->log($log_item);
        return redirect('/ItemInfo')->with('success', 'Data telah berjaya disimpan');
    }

    public function show(FizaItemInfo $fizaItemInfo)
    {
        //
    }

  
    public function edit($id)
    {
        $fizaItemInfo = FizaItemInfo::find($id);
        $katalog=FizaKatalog::where('id', $fizaItemInfo->katalog_id)->get();
        $pembekal = FizaPembekal::where('id', $fizaItemInfo->pembekal_id)->get();
        return view('1_item_info.edit', [
            'fizaItemInfo'=>$fizaItemInfo,
            'katalog'=>$katalog,
            'pembekal'=>$pembekal
        ]);
    }


    public function update(Request $request, FizaItemInfo $fizaItemInfo, $id)
    {
        $fizaItemInfo = FizaItemInfo::find($id);

        $fizaItemInfo->item_name=$request->item_name;
        $fizaItemInfo->item_price=$request->item_price;
        $fizaItemInfo->item_unit=$request->item_unit;
        $fizaItemInfo->start_date=$request->start_date;
        $fizaItemInfo->end_date=$request->end_date;
        $fizaItemInfo->katalog_id=$request->katalog_id;
        $fizaItemInfo->pembekal_id=$request->pembekal_id;
        $fizaItemInfo->item_updated_by =$request->item_updated_by;


        $fizaItemInfo->save();
        return redirect('/ItemInfo')->with('message', 'Data telah berjaya dikemaskini!');
    }

    public function destroy($id)
    {
        $itemInfo = FizaItemInfo::where('id', $id)->first();

        $itemInfo->delete();


        return redirect('/ItemInfo');
    }

    public function addcart(Request $request, FizaItemInfo $ItemInfo)
    {
        $fizaKart = FizaKart::where('aktif', true)->first();
        $user_id=Auth::user()->id;

        
        if ($fizaKart) {
        } else {
            $fizaKart = new FizaKart;
            $fizaKart->save();
        }

        $itemKart = new ItemKart;
        $itemKart->item_id = $ItemInfo->id;
        $itemKart->kart_id = $fizaKart->id;
        $itemKart->save();

        // $value = $request->session()->get('');

        
        return redirect()->back();
    }

    public function removecart(Request $request, ItemKart $itemKart, $id)
    {
        $list_nama_barang = FizaKart::where('id', $id)->get();
        $list_nama_barang->delete();
        return redirect()->back();
    }

    public function katalog_belian($id)
    {
        $fizaItemInfo = FizaItemInfo::all();
        $fizaKatalog=FizaKatalog::all();
        $pembekal = FizaPembekal::all();
        return view('1_item_info.katalog_belian', [
            'ItemInfo'=>$fizaItemInfo,
            'Katalog'=>$fizaKatalog,
            'pembekal'=>$pembekal
        ]);
    }


    public function listitem()
    {
            // $ItemInfo = FizaItemInfo::all();
            // $Katalog=FizaKatalog::all();
            // $pembekal=FizaPembekal::where('id',$ItemInfo->pembekal_id)->get();


            $item = FizaPembekal::join('fiza_item_infos', 'fiza_pembekals.id','fiza_item_infos.pembekal_id' )
            ->select('*')
            ->get();
            // dd($item);

            return view('1_item_info.senaraikatalog', [
                'item'=>$item,
                
    
            ]);
        }
    }
