<?php

namespace App\Http\Controllers;

use App\Models\FizaNotificationCenter;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaNotificationCenterController extends Controller
{

    public function index()
    {
        $fizaNotificationCenter = FizaNotificationCenter::where('user_id',Auth::user()->id)->get();
        
        return view ('1_notification_center.index',[
            'NotificationCenter'=>$fizaNotificationCenter]);
    }


    public function create()
    {
        return view('/NotificationCenter');
    }

 
    public function store( $request)
    {
        $fizaNotificationCenter = new FizaNotificationCenter;

        $fizaNotificationCenter->noti_type=$request->noti_type;
        $fizaNotificationCenter->noti_template=$request->noti_template;
        $fizaNotificationCenter->noti_subject=$request->noti_subject;
        $fizaNotificationCenter->noti_content=$request->noti_content;
        $fizaNotificationCenter->noti_status=$request->noti_status;

        // $fizaNotificationCenter->noti_created_by=$request->user()->user_name;
        $fizaNotificationCenter->user_id=$request->user_id;


        $fizaNotificationCenter->save();

        return redirect('/NotificationCenter');
    }

 
    public function show(FizaNotificationCenter $fizaNotificationCenter)
    {
        //
    }

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
