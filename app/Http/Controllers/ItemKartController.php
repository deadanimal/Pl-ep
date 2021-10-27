<?php

namespace App\Http\Controllers;

use App\Models\ItemKart;
use Illuminate\Http\Request;

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
        return view('1_kart.index', [
            'itemKart'=> $itemKart,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemKart  $itemKart
     * @return \Illuminate\Http\Response
     */
    public function show(ItemKart $itemKart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemKart  $itemKart
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemKart $itemKart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemKart  $itemKart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemKart $itemKart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemKart  $itemKart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemKart $itemKart)
    {
        //
    }
}
