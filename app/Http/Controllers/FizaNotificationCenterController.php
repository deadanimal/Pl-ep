<?php

namespace App\Http\Controllers;

use App\Models\FizaNotificationCenter;
use Illuminate\Http\Request;

class FizaNotificationCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaNotificationCenter = FizaNotificationCenter::all();
        return view ('1_notification_center.index',[
            'fizaNotificationCenter'=>$fizaNotificationCenter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/fizaNotificationCenter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaNotificationCenter = new FizaNotificationCenter;

        $fizaNotificationCenter->noti_type=$request->noti_type;
        $fizaNotificationCenter->noti_template=$request->noti_template;
        $fizaNotificationCenter->noti_subject=$request->noti_subject;
        $fizaNotificationCenter->noti_content=$request->noti_content;
        $fizaNotificationCenter->noti_status=$request->noti_status;
        $fizaNotificationCenter->noti_created_by=$request->noti_created_by;
        $fizaNotificationCenter->user_id=$request->user_id;


        $fizaNotificationCenter->save();
        return redirect('/fizaNotificationCenter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaNotificationCenter  $fizaNotificationCenter
     * @return \Illuminate\Http\Response
     */
    public function show(FizaNotificationCenter $fizaNotificationCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaNotificationCenter  $fizaNotificationCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaNotificationCenter $fizaNotificationCenter)
    {
        $fizaNotificationCenter = FizaNotificationCenter::all();
        return view ('1_notification_center.edit',[
            'fizaNotificationCenter'=>$fizaNotificationCenter]);
    }


    public function update(Request $request, FizaNotificationCenter $fizaNotificationCenter)
    {
        $fizaNotificationCenter->noti_type=$request->noti_type;
        $fizaNotificationCenter->noti_template=$request->noti_template;
        $fizaNotificationCenter->noti_subject=$request->noti_subject;
        $fizaNotificationCenter->noti_content=$request->noti_content;
        $fizaNotificationCenter->noti_status=$request->noti_status;
        $fizaNotificationCenter->noti_updated_by=$request->noti_updated_by;
        $fizaNotificationCenter->user_id=$request->user_id;

        $fizaNotificationCenter->save();
        return redirect('/fizaNotificationCenter');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaNotificationCenter  $fizaNotificationCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaNotificationCenter $fizaNotificationCenter)
    {
        //
    }
}
