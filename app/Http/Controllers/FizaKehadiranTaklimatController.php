<?php

namespace App\Http\Controllers;

use App\Models\FizaKehadiranTaklimat;
use Illuminate\Http\Request;

class FizaKehadiranTaklimatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaKehadiran_Taklimat = FizaKehadiran_Taklimat::all();
        return view ('1_kehadiran_taklimat.index',[
            'KehadiranTaklimat'=>$fizaKehadiranTaklimat]);
    }

   
    public function create()
    {
        return view('/1_kehadiran_taklimat.create');
    }

    public function store(Request $request)
    {
        $fizaKehadiran_Taklimat = new FizaKehadiran_Taklimat;

        $fizaKehadiran_Taklimat->pst_id=$request->pst_id;
        $fizaKehadiran_Taklimat->pembekal_id=$request->pembekal_id;
        $fizaKehadiran_Taklimat->kehadiran_nama=$request->kehadiran_nama;
        $fizaKehadiran_Taklimat->kehadiran_pengenalan_no=$request->kehadiran_pengenalan_no;
        $fizaKehadiran_Taklimat->kehadiran_no_tel=$request->kehadiran_no_tel;
        $fizaKehadiran_Taklimat->kehadiran_email=$request->kehadiran_email;
        $fizaKehadiran_Taklimat->kehadiran_status=$request->kehadiran_status;
        $fizaKehadiran_Taklimat->kehadiran_link=$request->kehadiran_link;
        $fizaKehadiran_Taklimat->kehadiran_created_by=$request->kehadiran_created_by;

        $fizaKehadiran_Taklimat->save();
        return redirect('/KehadiranTaklimat');
    }


    public function show(FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        //
    }


    public function edit(FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        $fizaKehadiran_Taklimat = FizaKehadiran_Taklimat::all();
        return view ('1_kehadiran_taklimat.edit',[
            'fizaKehadiranTaklimat'=>$fizaKehadiranTaklimat]);
    }

    public function update(Request $request, FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        $fizaKehadiran_Taklimat->pst_id=$request->pst_id;
        $fizaKehadiran_Taklimat->pembekal_id=$request->pembekal_id;
        $fizaKehadiran_Taklimat->kehadiran_nama=$request->kehadiran_nama;
        $fizaKehadiran_Taklimat->kehadiran_pengenalan_no=$request->kehadiran_pengenalan_no;
        $fizaKehadiran_Taklimat->kehadiran_no_tel=$request->kehadiran_no_tel;
        $fizaKehadiran_Taklimat->kehadiran_email=$request->kehadiran_email;
        $fizaKehadiran_Taklimat->kehadiran_status=$request->kehadiran_status;
        $fizaKehadiran_Taklimat->kehadiran_link=$request->kehadiran_link;
        $fizaKehadiran_Taklimat->kehadiran_updated_by=$request->kehadiran_updated_by;

        $fizaKehadiranTaklimat->save();
        return redirect('/fizaKehadiranTaklimat');
    }


    public function destroy(FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        //
    }
}
