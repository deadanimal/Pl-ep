<?php

namespace App\Http\Controllers;

use App\Models\FizaPembekal;
use Illuminate\Http\Request;
use App\Models\FizaKodBidang;

class FizaPembekalController extends Controller
{

    public function index()
    {
        $fizaPembekal = FizaPembekal::all();
        return view ('1_pembekal.index',[
            'fizaPembekal'=>$fizaPembekal]);
    }


    public function create()
    {
        return view ('1_pembekal.create');
    }


    public function store(Request $request)
    {
        $fizaPembekal = new FizaPembekal;

        //$fizaPembekal->pembekal_jenis_akaun=$request->pembekal_jenis_akaun;
        $fizaPembekal->pembekal_jenis=$request->pembekal_jenis;
        $fizaPembekal->pembekal_jenis_company=$request->pembekal_jenis_company;
        $fizaPembekal->pembekal_no_pendaftaran=$request->pembekal_no_pendaftaran;
        $fizaPembekal->pembekal_pemilik=$request->pembekal_pemilik;
        $fizaPembekal->pembekal_establish_date=$request->pembekal_establish_date;


        $fizaPembekal->pembekal_citizenship=$request->pembekal_citizenship;
        $fizaPembekal->pembekal_identity_type=$request->pembekal_identity_type;
        $fizaPembekal->pembekal_identity_no=$request->pembekal_identity_no;
        $fizaPembekal->pembekal_company_name=$request->pembekal_company_name;
        $fizaPembekal->pembekal_establish_date=$request->pembekal_establish_date;
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

        $fizapembekal_cbp_approval_doc=$request->file('pembekal_cbp_approval_doc')->store('pembekal_cbp_approval_doc');
        $fizaPembekal->pembekal_cbp_approval_doc = $fizapembekal_cbp_approval_doc;
        //$fizaPembekal->pembekal_cbp_approval_doc=$request->pembekal_cbp_approval_doc;
        // $fizaPembekal->pembekal_jenis_peniagaan=$request->pembekal_jenis_peniagaan;
        $fizaPembekal->pembekal_bank=$request->pembekal_bank;
        $fizaPembekal->pembekal_akaun_no=$request->pembekal_akaun_no;
        // $fizaPembekal->pembekal_amaun_yuran=$request->pembekal_amaun_yuran;
        // $fizaPembekal->pembekal_yuran_status=$request->pembekal_yuran_status;
        // $fizaPembekal->user_id=$request->user_id;

        // $fizaPembekal->pembekal_created_by=$request->pembekal_created_by;
        $fizaPembekal->kod_id=$request->kod_id;

        if(!empty($request->pembekal_jenis_akaun)){
            $fizaPembekal->pembekal_jenis_akaun = implode("&" ,$request->pembekal_jenis_akaun);
        }else{
            $fizapembekal->pembekal_jenis_akaun = "Akaun Asas";
        }

        $fizaPembekal->save();

        if (!is_null($request->pembekal_jenis_akaun)) {
            if (in_array('Kerja', $request->pembekal_jenis_akaun) && in_array('Bekalan & Perkhidmatan(MOF)', $request->pembekal_jenis_akaun)) {
                return redirect('/insertfile');

            }elseif (in_array('Kerja', $request->pembekal_jenis_akaun)) {
                return redirect('/cidb');

            } elseif (in_array('Bekalan & Perkhidmatan(MOF)', $request->pembekal_jenis_akaun)) {
                return redirect('/dokumen/create');
            }
        }else{
            return redirect('/Pembekal');
        }

    }

    public function show(FizaPembekal $fizaPembekal)
    {
        //
    }

  
    public function edit(FizaPembekal $fizaPembekal)
    {
        $fizaPembekal = FizaPembekal::all();
        return view ('1_pembekal.edit',[
            'fizaPembekal'=>$fizaPembekal]);
    }

    public function update(Request $request, FizaPembekal $fizaPembekal)
    {
        // $fizaPembekal->pembekal_jenis_akaun=$request->pembekal_jenis_akaun;
        $fizaPembekal->pembekal_jenis=$request->pembekal_jenis;
        $fizaPembekal->pembekal_jenis_company=$request->pembekal_jenis_company;
        $fizaPembekal->pembekal_no_pendaftaran=$request->pembekal_no_pendaftaran;
        $fizaPembekal->pembekal_pemilik=$request->pembekal_pemilik;

        $fizaPembekal->pembekal_citizenship=$request->pembekal_citizenship;
        $fizaPembekal->pembekal_identity_type=$request->pembekal_identity_type;
        $fizaPembekal->pembekal_identity_no=$request->pembekal_identity_no;
        $fizaPembekal->pembekal_company_name=$request->pembekal_company_name;
        $fizaPembekal->pembekal_establish_date=$request->pembekal_establish_date;
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

        //$fizaPembekal->pembekal_cbp_approval_doc=$request->pembekal_cbp_approval_doc;//file
        if($request->hasFile('pembekal_cbp_approval_doc'))
        $pembekal_cbp_approval_doc=$request->file('pembekal_cbp_approval_doc')->store('pembekal_cbp_approval_doc');
        $fizaPembekal->pembekal_cbp_approval_doc = $pembekal_cbp_approval_doc;

        $fizaPembekal->pembekal_jenis_peniagaan=$request->pembekal_jenis_peniagaan;
        $fizaPembekal->pembekal_bank=$request->pembekal_bank;
        $fizaPembekal->pembekal_akaun_no=$request->pembekal_akaun_no;
        $fizaPembekal->pembekal_amaun_yuran=$request->pembekal_amaun_yuran;
        $fizaPembekal->pembekal_yuran_status=$request->pembekal_yuran_status;
        $fizaPembekal->user_id=$request->user_id;
        $fizaPembekal->pembekal_updated_by=$request->pembekal_updated_by;
        $fizaPembekal->kod_id=$request->kod_id;

    
        $fizaPembekal->save();
        return redirect('/Pembekal');
    }

    public function destroy(FizaPembekal $fizaPembekal)
    {
        //
    }

    public function insertfile(){
        // dd('test');
 
         $pembekal = FizaPembekal::all();
         $kod = FizaKodBidang::all();
 
         return view('1_pembekal.fileupload', [
             'pembekal' => $pembekal, 
             'kod'=>$kod
         ]);
 
     }

    public function dokumentambahan(Request $request)
    {

        $sijil_perakuan=$request->file('sijil_perakuan')->store('sijil_perakuan');
        $sijil_gred=$request->file('sijil_gred')->store('sijil_gred');

        $sijil_mof=$request->file('sijil_mof')->store('sijil_mof');
        $sijil_perbendaharaan=$request->file('sijil_perbendaharaan')->store('sijil_perbendaharaan');
        $sijil_bumiputera=$request->file('sijil_bumiputera')->store('sijil_bumiputera');
        $sijil_taraf=$request->file('sijil_taraf')->store('sijil_taraf');

        $dokumen->sijil_mof=$sijil_mof;
        $dokumen->sijil_perbendaharaan=$sijil_perbendaharaan;
        $dokumen->sijil_bumiputera=$sijil_bumiputera;
        $dokumen->sijil_taraf=$sijil_taraf;
        $dokumen->tarikh_sah=$request->tarikh_sah;
        $dokumen->rangkaian_perniagaan=$request->rangkaian_perniagaan;
        $dokumen->no_pendaftaran_cbp=$request->no_pendaftaran_cbp;
        $dokumen->tarikh_kuatkuasa=$request->tarikh_kuatkuasa;
        $dokumen->tarikh_tamat=$request->tarikh_tamat;
        $dokumen->salinan_kelulusan=$request->salinan_kelulusan;
        $dokumen->id_bidangkod=$request->id_bidangkod;

        $cidb->sijil_perakuan=$sijil_perakuan;
        $cidb->sijil_gred=$sijil_gred;
        $cidb->tarikh_sah=$request->tarikh_sah;
        $cidb->id_bidangkod=$request->id_bidangkod;
        
        $cidb->id_pembekal=$temp;
        $dokumen->id_pembekal=$temp;


        $fizaPembekal->save();

        // session(['id_pembekal' => '$pembekal->id']);
        // Session::put('id_pembekal', '$pembekal->id');
    
        return redirect('/Pembekal');

    }
}
