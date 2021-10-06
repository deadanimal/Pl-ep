<?php

namespace App\Http\Controllers;

use App\Models\FizaItemInfo;
use Illuminate\Http\Request;

class FizaItemInfoController extends Controller
{

    public function index()
    {
        $fizaItemInfo = FizaItemInfo::all();
        return view ('1_item_info.index',[
            'fizaItemInfo'=>$fizaItemInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('1_item_info.create');
    }

    public function store(Request $request)
    {
        $fizaItemInfo = new FizaItemInfo;
        
        $fizaItemInfo->item_name=$request->item_name;
        $fizaItemInfo->item_price=$request->item_price;
        $fizaItemInfo->item_unit=$request->item_unit;
        $fizaItemInfo->item_start_date=$request->item_start_date;
        $fizaItemInfo->item_end_date=$request->item_end_date;
        $fizaItemInfo->katalog_id=$request->katalog_id;
        $fizaItemInfo->pembekal_id=$request->pembekal_id;
        $fizaItemInfo->item_created_by =$request->item_created_by ;

        $fizaItemInfo->save();
        return redirect('/fizaItemInfo'); 
    }

    public function show(FizaItemInfo $fizaItemInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaItemInfo  $fizaItemInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaItemInfo $fizaItemInfo)
    {
         $fizaItemInfo = FizaItemInfo::all();
        return view ('1_item_info.edit',[
            'fizaItemInfo'=>$fizaItemInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaItemInfo  $fizaItemInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaItemInfo $fizaItemInfo)
    {
        $fizaItemInfo->item_name=$request->item_name;
        $fizaItemInfo->item_price=$request->item_price;
        $fizaItemInfo->item_unit=$request->item_unit;
        $fizaItemInfo->item_start_date=$request->item_start_date;
        $fizaItemInfo->item_end_date=$request->item_end_date;
        $fizaItemInfo->katalog_id=$request->katalog_id;
        $fizaItemInfo->pembekal_id=$request->pembekal_id;
        $fizaItemInfo->item_updated_by =$request->item_updated_by;


        $url = '/fizaItemInfo'.$fizaItemInfo->id;
        return redirect('/fizaItemInfo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaItemInfo  $fizaItemInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaItemInfo $fizaItemInfo)
    {
        //
    }
}
