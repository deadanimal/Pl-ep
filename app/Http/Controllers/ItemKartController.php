<?php

namespace App\Http\Controllers;

use App\Models\ItemKart;
use App\Models\FizaItemInfo;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FizaKart;
use Illuminate\Support\Facades\Auth;

class ItemKartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

 

        $list_nama_barang = itemKart::join('fiza_item_infos', 'item_karts.item_id', 'fiza_item_infos.id')
        ->select('*')
        ->get();

        // dd($list_nama_barang);
        return view('1_kart.index', [
            'list_nama_barang'=> $list_nama_barang,
            //     'kart'=>$kart,
            //     'item'=>$item
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(ItemKart $itemKart)
    {
        //
    }


    public function edit(ItemKart $itemKart)
    {
        //
    }

    public function update(Request $request, ItemKart $itemKart)
    {
        //
    }

    public function destroy(ItemKart $itemKart)
    {
        //
    }
}
