<?php

namespace App\Http\Controllers;

use App\Models\FizaRoles;
use Illuminate\Http\Request;

class FizaRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaRole = FizaRole::all();
        return view ('1_role.index',[
            'fizaRole'=>$fizaRole]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('1_role.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaRole = new FizaRole;

        $fizaRole->role_name=$request->role_name;
        $fizaRole->role_staff_status=$request->role_staff_status;
        $fizaRole->role_created_by=$request->role_created_by;

        $fizaRole->save();
        return redirect('/fizaRole');

    }

    public function show(FizaRoles $fizaRoles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaRoles  $fizaRoles
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaRoles $fizaRoles)
    {
        $fizaRole = FizaRole::all();
        return view ('1_role.edit',[
            'fizaRole'=>$fizaRole]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaRoles  $fizaRoles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaRoles $fizaRoles)
    {
        $fizaRole->role_name=$request->role_name;
        $fizaRole->role_staff_status=$request->role_staff_status;
        $fizaRole->role_updated_by=$request->role_updated_by;


        $fizaKatalog->save();
        return redirect('/fizaRole');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaRoles  $fizaRoles
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaRoles $fizaRoles)
    {
        //
    }
}
