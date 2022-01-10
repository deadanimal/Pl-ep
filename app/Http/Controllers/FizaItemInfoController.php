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
        }
        else{
            $ItemInfo = FizaItemInfo::where('pembekal_id', Auth::user()->pembekal_id)->get();
            $Katalog=FizaKatalog::all();
    
            return view('1_item_info.index', [
                'ItemInfo'=>$ItemInfo,
                'Katalog'=>$Katalog,
                
    
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fizaItemInfo = FizaItemInfo::all();
        $fizaKatalog = FizaKatalog::all();
        return view('1_item_info.create',[
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
        $fizaItemInfo->start_date=$request->item_start_date;
        $fizaItemInfo->end_date=$request->item_end_date;
        $fizaItemInfo->katalog_id=$request->katalog_id;
        $fizaItemInfo->pembekal_id=Auth::user()->pembekal_id;
        $fizaItemInfo->item_created_by=Auth::user()->user_name;


        $fizaItemInfo->save();

        // $user_id = $request->user()->id;
        $item ="Item Info";
        $user_id= Auth::user()->id;
        $description = $fizaItemInfo->item_created_by. "telah menambahkan info untuk item". $fizaItemInfo->item_name;

        $log_item = [$item, $description, $user_id];

        app('App\Http\Controllers\AuditLogController')->log($log_item);
        return redirect('/ItemInfo')->with('success','Data telah berjaya disimpan'); 
    }

    public function show(FizaItemInfo $fizaItemInfo)
    {
        //
    }

  
    public function edit($id)
    {
         $fizaItemInfo = FizaItemInfo::find($id);
         $fizaKatalog=FizaKatalog::where('id', $fizaItemInfo->katalog_id)->get();
        return view ('1_item_info.edit',[
            'fizaItemInfo'=>$fizaItemInfo,
            'fizaKatalog'=>$fizaKatalog
        ]);
    }


    public function update(Request $request, FizaItemInfo $fizaItemInfo, $id)

    {
        $fizaItemInfo = FizaItemInfo::find($id);

        $fizaItemInfo->item_name=$request->item_name;
        $fizaItemInfo->item_price=$request->item_price;
        $fizaItemInfo->item_unit=$request->item_unit;
        $fizaItemInfo->item_start_date=$request->item_start_date;
        $fizaItemInfo->item_end_date=$request->item_end_date;
        $fizaItemInfo->katalog_id=$request->katalog_id;
        $fizaItemInfo->pembekal_id=$request->pembekal_id;
        $fizaItemInfo->item_updated_by =$request->item_updated_by;


        $fizaItemInfo->save();
        return redirect('/ItemInfo')->with('message', 'Data telah berjaya dipadam!');
    }

    public function destroy(FizaItemInfo $fizaItemInfo)
    {
        //
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

        
        return redirect('/ItemInfo');
    }

    public function removecart(Request $request,ItemKart $itemKart)
    {
        $itemKart->delete();
        return redirect('/ItemKart');
    }

    public function katalog_belian()
    {
        $fizaItemInfo = FizaItemInfo::all();
        $fizaKatalog=FizaKatalog::all();
        $pembekal = FizaPembekal::all();
        return view ('1_item_info.katalog_belian',[
            'ItemInfo'=>$fizaItemInfo,
            'Katalog'=>$fizaKatalog,
            'pembekal'=>$pembekal
        ]);
    }

}
