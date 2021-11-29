<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\FizaPembekal;
use Illuminate\Http\Request;
use App\Models\FizaKodBidang;

class FizaPembekalController extends Controller
{

    public function index()
    {
        $pembekal = FizaPembekal::all();
        return view ('1_pembekal.index',[
            'pembekal'=>$pembekal]);
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
        // $fizaPembekal->kod_id=$request->kod_id;

        if(!empty($request->pembekal_jenis_akaun)){
            $fizaPembekal->pembekal_jenis_akaun = implode("&" ,$request->pembekal_jenis_akaun);
        }else{
            $fizapembekal->pembekal_jenis_akaun = "Akaun Asas";
        }

        $fizaPembekal->save();
        $lastId = $fizaPembekal->id;

        if (!is_null($request->pembekal_jenis_akaun)) {
            if (in_array('Kerja', $request->pembekal_jenis_akaun) && in_array('Bekalan & Perkhidmatan(MOF)', $request->pembekal_jenis_akaun)) {
                return redirect('/insertfile')->with('fizaPembekal', $fizaPembekal->id);
                // return view ('1_pembekal.fileupload')->with('fizaPembekal', $fizaPembekal->id);

            }elseif (in_array('Kerja', $request->pembekal_jenis_akaun)) {
                return redirect('/cidb');

            } elseif (in_array('Bekalan & Perkhidmatan(MOF)', $request->pembekal_jenis_akaun)) {
                return redirect('/dokumen');
            }
        }

    }

    public function show(FizaPembekal $fizaPembekal)
    {
        //
    }

  
    public function edit($id)
    {
        $pembekal = FizaPembekal::find($id);
        return view ('1_pembekal.edit',[
            'pembekal'=>$pembekal, 
        ]);
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
        if ($request->hasFile('pembekal_cbp_approval_doc')) {
            $pembekal_cbp_approval_doc=$request->file('pembekal_cbp_approval_doc')->store('pembekal_cbp_approval_doc');
            $fizaPembekal->pembekal_cbp_approval_doc = $pembekal_cbp_approval_doc;
        }

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
        // // dd('test');
        // $fizaPembekal = FizaPembekal::first($id)->get();
         $pembekal = FizaPembekal::all();
         $kod = FizaKodBidang::all();
 
         return view('1_pembekal.fileupload', [
             'pembekal' => $pembekal, 
             'kod'=>$kod
         ]);
 
     }

    public function dokumentambahan(Request $request)
    {
        $pembekal_sijil_mof=$request->file('pembekal_sijil_mof')->store('pembekal_sijil_mof');
        $fizaPembekal->pembekal_sijil_mof=$pembekal_sijil_mof;

        $sijil_bumiputera=$request->file('pembekal_sijil_perakuan_bumiputera')->store('sijil_bumiputera');
        $fizaPembekal->pembekal_sijil_perakuan_bumiputera=$sijil_bumiputera;

        $sijil_pendaftaran_syarikat=$request->file('pembekal_sijil_pendaftaran_syarikat')->store('sijil_bumiputera');
        $fizaPembekal->pembekal_sijil_pendaftaran_syarikat=$sijil_pendaftaran_syarikat;


        $sijil_taraf=$request->file('pembekal_sijil_taraf_bumi')->store('sijil_taraf');
        $fizaPembekal->pembekal_sijil_taraf_bumi=$sijil_taraf;

        $sijil_gred_cidb=$request->file('pembekal_sijil_gred')->store('sijil_gred');
        $fizaPembekal->pembekal_sijil_gred=$sijil_gred_cidb;

        $fizaPembekal->id_pembekal=$request->$fizaPembekal->id;
        $fizaPembekal->pembekal_no_sijil_mof=$request->no_sijil_mof;
        $fizaPembekal->pembekal_no_rujukan_pendaftaran=$request->no_rujukan_pendaftaran;
        $fizaPembekal->pembekal_tarikh_sah_mof=$request->tarikh_sah_mof;
        $fizaPembekal->pembekal_no_pendaftaran_ppk=$request->no_pendaftaran_ppk;
        $fizaPembekal->pembekal_tarikh_sah_ppk=$request->tarikh_sah_ppk;
        $fizaPembekal->pembekal_pengkhususan=$request->pembekal_pengkhususan;
        $fizaPembekal->pembekal_pegawai_bertauliah=$request->pembekal_pegawai_bertauliah;
        $fizaPembekal->pembekal_tarikh_sah_gred=$request->pembekal_tarikh_sah_gred;
  
        $fizaPembekal->id_kod=$request->id_kod;

        
        // $fizaPembekal->id_pembekal=$temp;
        // $fizaPembekal->id_pembekal=$temp;


        $fizaPembekal->save();

        // session(['id_pembekal' => '$pembekal->id']);
        // Session::put('id_pembekal', '$pembekal->id');
    
        return redirect('/Pembekal');

    }
}
