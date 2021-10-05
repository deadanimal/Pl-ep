<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderKodItem;
use Illuminate\Http\Request;

class SebutHargaTenderKodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_kod_item.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tender_kod_item.create');
        
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
     * @param  \App\Models\SebutHargaTenderKodItem  $sebutHargaTenderKodItem
     * @return \Illuminate\Http\Response
     */
    public function show(SebutHargaTenderKodItem $sebutHargaTenderKodItem)
    {
        return view('tender_kod_item.show');

    }

    public function edit(SebutHargaTenderKodItem $sebutHargaTenderKodItem)
    {
        return view('tender_kod_item.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SebutHargaTenderKodItem  $sebutHargaTenderKodItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SebutHargaTenderKodItem $sebutHargaTenderKodItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaTenderKodItem  $sebutHargaTenderKodItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaTenderKodItem $sebutHargaTenderKodItem)
    {
        //
    }
}
