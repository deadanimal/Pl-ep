<?php

namespace App\Http\Controllers;

use App\Models\FizaPayment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPayment = FizaPayment::all();
        return view ('1_payment.index',[
            'fizaPayment'=>$fizaPayment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_payment.create');
    }


    public function store(Request $request)
    {
        $fizaPayment = new FizaPayment;

        $fizaPayment->user_id=$request->user_id;
        $fizaPayment->sijil_id=$request->sijil_id;
        $fizaPayment->payment_amount=$request->payment_amount;
        $fizaPayment->payment_date=$request->payment_date;
        $fizaPayment->payment_time=$request->payment_time;
        $fizaPayment->payment_created_by=$request->payment_created_by;
        $fizaPayment->pembekal_id=$request->pembekal_id;

        $fizaPayment->save();
        return redirect('/fizaPayment');


    }

    
    public function show(FizaPayment $fizaPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPayment  $fizaPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPayment $fizaPayment)
    {
        $fizaPayment = FizaPayment::all();
        return view ('1_payment.edit',[
            'fizaPayment'=>$fizaPayment]);
    }


    public function update(Request $request, FizaPayment $fizaPayment)
    {
        $fizaPayment->user_id=$request->user_id;
        $fizaPayment->sijil_id=$request->sijil_id;
        $fizaPayment->payment_amount=$request->payment_amount;
        $fizaPayment->payment_date=$request->payment_date;
        $fizaPayment->payment_time=$request->payment_time;
        $fizaPayment->payment_updated_by=$request->payment_updated_by;
        $fizaPayment->pembekal_id=$request->pembekal_id;

        $fizaPayment->save();
        return redirect('/fizaPayment');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPayment  $fizaPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPayment $fizaPayment)
    {
        //
    }
}
