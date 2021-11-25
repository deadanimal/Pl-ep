<?php

namespace App\Http\Controllers;

use App\Models\ItemKart;
use App\Models\FizaItemInfo;
use Illuminate\Http\Request;
use App\Models\User;
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
        $itemKart = itemKart::all();
        $fizaItemInfo = FizaItemInfo::all();

        return view('1_kart.index', [
            'itemKart'=> $itemKart, 
            'fizaItemInfo'=>$fizaItemInfo
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
