<?php

namespace App\Http\Controllers;

use App\Models\FizaKatalog;
use Illuminate\Http\Request;

class FizaKatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaKatalog = FizaKatalog::all();
        return view ('1_katalog.index',[
            'fizaKatalog'=>$fizaKatalog]);
    }

    public function create()
    {
        return view('1_katalog.create');
    }

    public function store(Request $request)
    {
        $fizaKatalog = new FizaKatalog;

        $fizaKatalog->katalog_kategori=$request->katalog_kategori;
        $fizaKatalog->katalog_kumpulan=$request->katalog_kumpulan;
        $fizaKatalog->katalog_jenis=$request->katalog_jenis;
        $fizaKatalog->katalog_created_by=$request->katalog_created_by;
        $fizaKatalog->user_id=$request->user_id;

        $fizaKatalog->save();
        return redirect('/fizaKatalog');
    
    }


    public function show(FizaKatalog $fizaKatalog)
    {
        //
    }


    public function edit(FizaKatalog $fizaKatalog)
    {
        $fizaKatalog = FizaKatalog::all();
        return view ('1_katalog.edit',[
            'fizaKatalog'=>$fizaKatalog]);
        
    }


    public function update(Request $request, FizaKatalog $fizaKatalog)
    {
        $fizaKatalog->katalog_kategori=$request->katalog_kategori;
        $fizaKatalog->katalog_kumpulan=$request->katalog_kumpulan;
        $fizaKatalog->katalog_jenis=$request->katalog_jenis;
        $fizaKatalog->katalog_updated_by=$request->katalog_updated_by;
        $fizaKatalog->user_id=$request->user_id;

        $fizaKatalog->save();
        return redirect('/fizaKatalog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaKatalog  $fizaKatalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaKatalog $fizaKatalog)
    {
        //
    }
}
