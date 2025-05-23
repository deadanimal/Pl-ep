<?php

namespace App\Http\Controllers;

use App\Models\FizaInvoice;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaInvoice = FizaInvoice::all();
        return view ('1_invoice.index',[
            'fizaInvoice'=>$fizaInvoice]);
    }


    public function create()
    {
        return view('1_invoice.create');
    }

    public function store(Request $request)
    {
        $fizaInvoice = new FizaInvoice;

        $fizaInvoice->pembekal_id=$request->pembekal_id;
        $fizaInvoice->sst_id=$request->sst_id;
        $fizaInvoice->pesanan_id=$request->pesanan_id;
        $fizaInvoice->terima_id=$request->terima_id;
        $fizaInvoice->invoice_created_by=$request->invoice_created_by;


        $fizaInvoice->save();
        return redirect('/Invoice'); 

    }

    public function show(FizaInvoice $fizaInvoice)
    {
        //
    }


    public function edit(FizaInvoice $fizaInvoice)
    {
        $fizaInvoice = FizaInvoice::all();
        return view ('1_invoice.edit',[
            'fizaInvoice'=>$fizaInvoice]);
    }

    public function update(Request $request, FizaInvoice $fizaInvoice)
    {
        $fizaInvoice->pembekal_id=$request->pembekal_id;
        $fizaInvoice->sst_id=$request->sst_id;
        $fizaInvoice->pesanan_id=$request->pesanan_id;
        $fizaInvoice->terima_id=$request->terima_id;
        $fizaInvoice->invoice_updated_by=$request->invoice_updated_by;

                

        $fizaInvoice->save();
        return redirect('/Invoice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaInvoice  $fizaInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaInvoice $fizaInvoice)
    {
        //
    }
}
