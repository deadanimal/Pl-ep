<?php

namespace App\Http\Controllers;

use App\Models\FizaPembekal;
use Illuminate\Http\Request;

class FizaPembekalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaPembekal = FizaPembekal::all();
        return view ('1_pembekal.index',[
            'fizaPembekal'=>$fizaPembekal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_pembekal.create');
    }


    public function store(Request $request)
    {
        $fizaPembekal = new FizaPembekal;

        $fizaPembekal->pembekal_jenis_akaun=$request->pembekal_jenis_akaun;
        $fizaPembekal->pembekal_jenis=$request->pembekal_jenis;
        $fizaPembekal->pembekal_jenis_company=$request->pembekal_jenis_company;
        $fizaPembekal->pembekal_no_pendaftaran=$request->pembekal_no_pendaftaran;
        $fizaPembekal->pembekal_pemilik=$request->pembekal_pemilik;

        $fizaPembekal->pembekal_citizenship=$request->pembekal_citizenship;
        $fizaPembekal->pembekal_identity_type=$request->pembekal_identity_type;
        $fizaPembekal->pembekal_identity_no=$request->pembekal_identity_no;
        $fizaPembekal->pembekal_company_name=$request->pembekal_company_name;
        $fizaPembekal->pembekal_establishment_date=$request->pembekal_establishment_date;
        $fizaPembekal->pembekal_income_tax_no=$request->pembekal_income_tax_no;

        $fizaPembekal->pembekal_company_address=$request->pembekal_company_address;
        $fizaPembekal->pembekal_city=$request->pembekal_city;
        $fizaPembekal->pembekal_postcode=$request->pembekal_postcode;
        $fizaPembekal->pembekal_state=$request->pembekal_state;
        $fizaPembekal->pembekal_country=$request->pembekal_country;
        $fizaPembekal->pembekal_tel_no=$request->pembekal_tel_no;
        $fizaPembekal->pembekal_fax_no=$request->pembekal_fax_no;

        $fizaPembekal->pembekal_cbp_no=$request->pembekal_cbp_no;
        $fizaPembekal->pembekal_cbp_effective_date=$request->pembekal_cbp_effective_date;
        $fizaPembekal->pembekal_cbp_end_date=$request->pembekal_cbp_end_date;
        $fizaPembekal->pembekal_cbp_approval_doc=$request->pembekal_cbp_approval_doc;
        $fizaPembekal->pembekal_jenis_peniagaan=$request->pembekal_jenis_peniagaan;
        $fizaPembekal->pembekal_bank=$request->pembekal_bank;
        $fizaPembekal->pembekal_akaun_no=$request->pembekal_akaun_no;
        $fizaPembekal->pembekal_amaun_yuran=$request->pembekal_amaun_yuran;
        $fizaPembekal->pembekal_yuran_status=$request->pembekal_yuran_status;
        $fizaPembekal->user_id=$request->user_id;
        $fizaPembekal->pembekal_created_by=$request->pembekal_created_by;
        $fizaPembekal->kod_id=$request->kod_id;

        $fizaPembekal->save();
        return redirect('/fizaPembekal');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPembekal  $fizaPembekal
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPembekal $fizaPembekal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPembekal  $fizaPembekal
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPembekal $fizaPembekal)
    {
        $fizaPembekal = FizaPembekal::all();
        return view ('1_pembekal.edit',[
            'fizaPembekal'=>$fizaPembekal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaPembekal  $fizaPembekal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaPembekal $fizaPembekal)
    {
        $fizaPembekal->pembekal_jenis_akaun=$request->pembekal_jenis_akaun;
        $fizaPembekal->pembekal_jenis=$request->pembekal_jenis;
        $fizaPembekal->pembekal_jenis_company=$request->pembekal_jenis_company;
        $fizaPembekal->pembekal_no_pendaftaran=$request->pembekal_no_pendaftaran;
        $fizaPembekal->pembekal_pemilik=$request->pembekal_pemilik;

        $fizaPembekal->pembekal_citizenship=$request->pembekal_citizenship;
        $fizaPembekal->pembekal_identity_type=$request->pembekal_identity_type;
        $fizaPembekal->pembekal_identity_no=$request->pembekal_identity_no;
        $fizaPembekal->pembekal_company_name=$request->pembekal_company_name;
        $fizaPembekal->pembekal_establishment_date=$request->pembekal_establishment_date;
        $fizaPembekal->pembekal_income_tax_no=$request->pembekal_income_tax_no;

        $fizaPembekal->pembekal_company_address=$request->pembekal_company_address;
        $fizaPembekal->pembekal_city=$request->pembekal_city;
        $fizaPembekal->pembekal_postcode=$request->pembekal_postcode;
        $fizaPembekal->pembekal_state=$request->pembekal_state;
        $fizaPembekal->pembekal_country=$request->pembekal_country;
        $fizaPembekal->pembekal_tel_no=$request->pembekal_tel_no;
        $fizaPembekal->pembekal_fax_no=$request->pembekal_fax_no;

        $fizaPembekal->pembekal_cbp_no=$request->pembekal_cbp_no;
        $fizaPembekal->pembekal_cbp_effective_date=$request->pembekal_cbp_effective_date;
        $fizaPembekal->pembekal_cbp_end_date=$request->pembekal_cbp_end_date;
        $fizaPembekal->pembekal_cbp_approval_doc=$request->pembekal_cbp_approval_doc;
        $fizaPembekal->pembekal_jenis_peniagaan=$request->pembekal_jenis_peniagaan;
        $fizaPembekal->pembekal_bank=$request->pembekal_bank;
        $fizaPembekal->pembekal_akaun_no=$request->pembekal_akaun_no;
        $fizaPembekal->pembekal_amaun_yuran=$request->pembekal_amaun_yuran;
        $fizaPembekal->pembekal_yuran_status=$request->pembekal_yuran_status;
        $fizaPembekal->user_id=$request->user_id;
        $fizaPembekal->pembekal_updated_by=$request->pembekal_updated_by;
        $fizaPembekal->kod_id=$request->kod_id;

        $url = '/fizaPembekal'.$fizaPembekal->id;
        return redirect('/fizaPembekal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPembekal  $fizaPembekal
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPembekal $fizaPembekal)
    {
        //
    }
}
