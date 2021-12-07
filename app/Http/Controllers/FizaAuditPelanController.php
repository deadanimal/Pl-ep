<?php

namespace App\Http\Controllers;
use App\Models\FizaAuditPelan;
use Illuminate\Http\Request;

class FizaAuditPelanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaAuditPelan = FizaAuditPelan::all();
        $user = User::all();
        return view ('1_audit_pelan.index',[
            'fizaAuditPelan'=>$fizaAuditPelan]);
    }

    public function create()
    {
        $user = User::all();
        return view('1_audit_pelan.create',[
            'user'=>$user
        ]);
    }
    
    public function store(Request $request)
    {
        $fizaAuditPelan = new FizaAuditPelan;

        $fizaAuditPelan->audit_pelan_action=$request->audit_pelan_action;
        $fizaAuditPelan->audit_pelan_path=$request->audit_pelan_path;
        $fizaAuditPelan->audit_pelan_created_by =$request->audit_pelan_created_by;
        $fizaAuditPelan->pelan_id=$request->pelan_id;
        $fizaAuditPelan->laporan_pelan_id=$request->laporan_pelan_id;

        $fizaAuditPelan->save();
        
        //TODO
        // 1. imprt controller notification
        // 2. call controller notification pass data yg kau nak store dalam notification punya table()
        
        return redirect('/fizaAuditPelan');
    }

    public function show(FizaAuditPelan $fizaAuditPelan)
    {
        //
    }


    public function edit(FizaAuditPelan $fizaAuditPelan)
    {
        return view('1_audit_pelan.edit', ['FizaAuditPelan'=>$fizaAuditPelan]); 
    }

    public function update(Request $request, FizaAuditPelan $fizaAuditPelan)
    {
        $fizaAuditPelan = new FizaAuditPelan;
        $fizaAuditPelan->audit_pelan_action=$request->audit_pelan_action;
        $fizaAuditPelan->audit_pelan_path=$request->audit_pelan_path;
        $fizaAuditPelan->audit_pelan_created_by =$request->audit_pelan_created_by ;
        $fizaAuditPelan->pelan_id=$request->pelan_id;
        $fizaAuditPelan->laporan_pelan_id=$request->laporan_pelan_id;


        $fizaArahanMemberhentikan->save();
        return redirect('/fizaAuditPelan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaAuditPelan  $fizaAuditPelan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaAuditPelan $fizaAuditPelan)
    {
        //
    }
}
