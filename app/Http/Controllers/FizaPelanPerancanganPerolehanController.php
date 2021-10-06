<?php

namespace App\Http\Controllers;

use App\Models\FizaPelanPerancanganPerolehan;
use Illuminate\Http\Request;

class FizaPelanPerancanganPerolehanController extends Controller
{

    public function index()
    {
        $fizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::all();
        return view ('1_pelan_perancangan.index',[
            'fizaPelanPerancanganPerolehan'=>$fizaPelanPerancanganPerolehan]);
    }


    public function create()
    {
        return view ('/1_pelan_perancangan.create');
    }


    public function store(Request $request)
    {
        $fizaPelanPerancanganPerolehan = new FizaPelanPerancanganPerolehan;

        $fizaPelanPerancanganPerolehan->pelan_jenis=$request->pelan_jenis;
        $fizaPelanPerancanganPerolehan->pelan_year=$request->pelan_year;
        $fizaPelanPerancanganPerolehan->pelan_title=$request->pelan_title;
        $fizaPelanPerancanganPerolehan->pelan_description=$request->pelan_description;
        $fizaPelanPerancanganPerolehan->pelan_category=$request->pelan_category;
        $fizaPelanPerancanganPerolehan->pelan_method=$request->pelan_method;

        $fizaPelanPerancanganPerolehan->pelan_invitation_date=$request->pelan_invitation_date;
        $fizaPelanPerancanganPerolehan->pelan_estimated_amount=$request->pelan_estimated_amount;
        $fizaPelanPerancanganPerolehan->pelan_catatan=$request->pelan_catatan;
        $fizaPelanPerancanganPerolehan->pelan_status=$request->pelan_status;
        $fizaPelanPerancanganPerolehan->pelan_pengesah=$request->pelan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pengesah=$request->pelan_catatan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_pelulus=$request->pelan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pelulus=$request->pelan_catatan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_created_by=$request->pelan_created_by;
        $fizaPelanPerancanganPerolehan->user_id=$request->user_id;
    }
    
    public function show(FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan)
    {
        //
    }


    public function edit(FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan)
    {
        $fizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::all();
        return view ('1_pelan_perancangan.edit',[
            'fizaPelanPerancanganPerolehan'=>$fizaPelanPerancanganPerolehan]);
    }


    public function update(Request $request, FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan)
    {
        $fizaPelanPerancanganPerolehan->pelan_jenis=$request->pelan_jenis;
        $fizaPelanPerancanganPerolehan->pelan_year=$request->pelan_year;
        $fizaPelanPerancanganPerolehan->pelan_title=$request->pelan_title;
        $fizaPelanPerancanganPerolehan->pelan_description=$request->pelan_description;
        $fizaPelanPerancanganPerolehan->pelan_category=$request->pelan_category;
        $fizaPelanPerancanganPerolehan->pelan_method=$request->pelan_method;

        $fizaPelanPerancanganPerolehan->pelan_invitation_date=$request->pelan_invitation_date;
        $fizaPelanPerancanganPerolehan->pelan_estimated_amount=$request->pelan_estimated_amount;
        $fizaPelanPerancanganPerolehan->pelan_catatan=$request->pelan_catatan;
        $fizaPelanPerancanganPerolehan->pelan_status=$request->pelan_status;
        $fizaPelanPerancanganPerolehan->pelan_pengesah=$request->pelan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pengesah=$request->pelan_catatan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_pelulus=$request->pelan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pelulus=$request->pelan_catatan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_created_by=$request->pelan_created_by;
        $fizaPelanPerancanganPerolehan->user_id=$request->user_id;


        $url = '/fizaPelanPerancanganPerolehan'.$fizaPelanPerancanganPerolehan->id;
        return redirect('/fizaPelanPerancanganPerolehan');
    }


    public function destroy(FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan)
    {
        
    }
}
