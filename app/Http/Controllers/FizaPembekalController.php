<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\FizaPembekal;
use Illuminate\Http\Request;
use App\Models\FizaKodBidang;
use App\Mail\PermohonanAkaunPembekal;
use App\Mail\PendaftaranPembekal;

class FizaPembekalController extends Controller
{

    public function index()
    {
        $role=Auth::user()->roles;
        //dd($role->id[0]);
        if($role[0]->id=='1'){
            $pembekal = FizaPembekal::all();
        return view ('1_pembekal.index',[
            'pembekal'=>$pembekal]);
        }

        else{
            $pembekal = FizaPembekal::where('pembekal_status','diluluskan')->get();
            return view ('1_pembekal.index',[
            'pembekal'=>$pembekal]);
        }

   
    }
        


    public function create()
    {
        $kod = FizaKodBidang::all();
        $pembekal=FizaPembekal::all();
        return view ('1_pembekal.create',[ 
            'kod'=>$kod,
            'pembekal'=>$pembekal
        ]);
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
        $fizaPembekal->pembekal_pej_no=$request->pembekal_pej_no;
        $fizaPembekal->pembekal_email=$request->pembekal_email;

        $fizaPembekal->pembekal_cbp_no=$request->pembekal_cbp_no;
        $fizaPembekal->pembekal_cbp_effective_date=$request->pembekal_cbp_effective_date;
        $fizaPembekal->pembekal_cbp_end_date=$request->pembekal_cbp_end_date;
        $fizaPembekal->pembekal_id_pengguna=$request->pembekal_id_pengguna;

        if ($request->hasFile('pembekal_sijil_ssm')) {
            $pembekal_sijil_ssm=$request->file('pembekal_sijil_ssm')->store('pembekal_sijil_ssm');
            $fizaPembekal->pembekal_sijil_ssm=$pembekal_sijil_ssm;
        }



        if ($request->hasFile('pembekal_cbp_approval_doc')) {
            $pembekal_cbp_approval_doc=$request->file('pembekal_cbp_approval_doc')->store('pembekal_cbp_approval_doc');
            $fizaPembekal->pembekal_cbp_approval_doc = $pembekal_cbp_approval_doc;
        }
    
        $fizaPembekal->pembekal_bank=$request->pembekal_bank;
        $fizaPembekal->pembekal_akaun_no=$request->pembekal_akaun_no;
        $fizaPembekal->pembekal_status="Menunggu Pengesahan";

        if(!empty($request->pembekal_jenis_akaun)){
            $fizaPembekal->pembekal_jenis_akaun = implode(" , " ,$request->pembekal_jenis_akaun);
        }else{
            $fizaPembekal->pembekal_jenis_akaun = "Akaun Asas";
        }


        $fizaPembekal->save();

            $receiver = User::whereHas("roles", function ($admin) {
                $admin->where('roles.id','1'); 
            })->get();

            foreach ($receiver as $receiver) 
                Mail::to($receiver->email)->send(new PendaftaranPembekal($fizaPembekal));

            // dd($receiver->id);

         //System Notification
            // $notification_obj = (object)[];
            // $notification_obj->noti_template='';
            // $notification_obj->noti_subject="Pendaftaran Pembekal";
            // $notification_obj->noti_status='Belum Dibaca';
            // $notification_obj->noti_content=$fizaPembekal->pembekal_company_name . 'telah menghantar permohonan sebagai pembekal.Sila ke laman Pembekal untuk menyemak dan membuat pengesahan maklumat pembekal';
            // $notification_obj->user_id=$receiver->id;
            // app('App\Http\Controllers\FizaNotificationCenterController')->store($notification_obj);
                    
        //dd($receiver);
    
        if (!is_null($request->pembekal_jenis_akaun)) {

            if (in_array('Kerja', $request->pembekal_jenis_akaun) && in_array('Perbendaharaan Malaysia Sabah', $request->pembekal_jenis_akaun)) {
                return redirect('/insertfile/'.$fizaPembekal->id);

            } elseif (in_array('Kerja', $request->pembekal_jenis_akaun)) {
                return redirect('/cidb/'.$fizaPembekal->id);

            } elseif (in_array('Perbendaharaan Malaysia Sabah', $request->pembekal_jenis_akaun)) {
                return redirect('/mof/'.$fizaPembekal->id);
            }
        } else {
                return redirect('/')->with('success','Permohonan anda telah dihantar dan perlu menunggu kelulusan daripada pegawai kami.Terima Kasih');

            }
        }
    
    public function show($id)
    {
        $pembekal = FizaPembekal::find($id);

        return view('1_pembekal.show',[
            'pembekal'=>$pembekal
        ]);
    }

  
    public function edit($id)
    {
        $pembekal = FizaPembekal::find($id);
        return view ('1_pembekal.edit',[
            'pembekal'=>$pembekal, 
        ]);
    }

    public function update(Request $request,$id)
    {

        $fizaPembekal = FizaPembekal::find($id);

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
      $fizaPembekal->pembekal_pej_no=$request->pembekal_pej_no;
      $fizaPembekal->pembekal_email=$request->pembekal_email;


      $fizaPembekal->pembekal_cbp_no=$request->pembekal_cbp_no;
      $fizaPembekal->pembekal_cbp_effective_date=$request->pembekal_cbp_effective_date;
      $fizaPembekal->pembekal_cbp_end_date=$request->pembekal_cbp_end_date;

      if ($request->hasFile('pembekal_sijil_ssm')) {
          $pembekal_sijil_ssm=$request->file('pembekal_sijil_ssm')->store('pembekal_sijil_ssm');
          $fizaPembekal->pembekal_sijil_ssm=$pembekal_sijil_ssm;
      }


      if ($request->hasFile('pembekal_cbp_approval_doc')) {
          $pembekal_cbp_approval_doc=$request->file('pembekal_cbp_approval_doc')->store('pembekal_cbp_approval_doc');
          $fizaPembekal->pembekal_cbp_approval_doc = $pembekal_cbp_approval_doc;
      }
    
      $fizaPembekal->pembekal_bank=$request->pembekal_bank;
      $fizaPembekal->pembekal_akaun_no=$request->pembekal_akaun_no;

     
    //  dd($pembekal);
      // $fizaPembekal->kod_id=$request->kod_id;

      if ($request->status_pembekal=="Diluluskan"){
        $fizaPembekal->pembekal_status="diluluskan";
        app('App\Http\Controllers\UserPembekalController')->create($id);
    }
    else if($request->status_pembekal=="Ditolak"){
        $fizaPembekal->pembekal_status="ditolak";
        
    }
    
        $fizaPembekal->save();
        $pembekal = FizaPembekal::where('pembekal_email',$request->pembekal_email)->get()->first();
        Mail::to($request->pembekal_email)->send(new PermohonanAkaunPembekal($pembekal));

        return redirect('/Pembekal');
    }

    public function destroy($id)
    {
        $pembekal=FizaPembekal::where('id',$id)->first();
        $pembekal->delete();
        
        return redirect('/Pembekal')->with('message','Data telah berjaya dipadam!');
    }
 
    public function insertfile($id){
        $pembekal = FizaPembekal::where('id', $id)->first();
        $kod = FizaKodBidang::all();
        return view('1_pembekal.fileupload', [
             'pembekal' => $pembekal,
             'kod'=>$kod,
             'id'=>$id
         ]);
    }

    public function dokumentambahan(Request $request)
    {
        // $pembekal = FizaPembekal::where('id',$id)->first();
        
        
        $fizaPembekal = FizaPembekal::where('id', $request->id_pembekal)->first();
        // $kod = FizaKodBidang::all();

        $sijil_mof=$request->file('pembekal_sijil_mof')->store('sijil_mof');
        $fizaPembekal->pembekal_sijil_mof=$sijil_mof;

        $sijil_bumiputera=$request->file('pembekal_sijil_perakuan_bumiputera')->store('sijil_bumiputera');
        $fizaPembekal->pembekal_sijil_perakuan_bumiputera=$sijil_bumiputera;

        $sijil_pendaftaran_syarikat=$request->file('pembekal_sijil_pendaftaran_syarikat')->store('sijil_bumiputera');
        $fizaPembekal->pembekal_sijil_pendaftaran_syarikat=$sijil_pendaftaran_syarikat;




        $sijil_gred_cidb=$request->file('pembekal_sijil_gred')->store('sijil_gred');
        $fizaPembekal->pembekal_sijil_gred=$sijil_gred_cidb;
        
        $fizaPembekal->pembekal_no_sijil_mof=$request->pembekal_no_sijil_mof;
        $fizaPembekal->pembekal_no_rujukan_pendaftaran=$request->pembekal_no_rujukan_pendaftaran;
        $fizaPembekal->pembekal_tarikh_sah_mof=$request->pembekal_tarikh_sah_mof;
        $fizaPembekal->pembekal_no_pendaftaran_ppk=$request->pembekal_no_pendaftaran_ppk;
        $fizaPembekal->pembekal_tarikh_sah_ppk=$request->pembekal_tarikh_sah_ppk;
        $fizaPembekal->pembekal_pengkhususan=$request->pembekal_pengkhususan;
        $fizaPembekal->pembekal_pegawai_bertauliah=$request->pembekal_pegawai_bertauliah;
        $fizaPembekal->pembekal_tarikh_sah_gred=$request->pembekal_tarikh_sah_gred;
        // $pembekal->kod_id =$request->kod_id;
        // $fizaPembekal->id_kod=$request->id_kod[];

        $fizaPembekal->save();

        // $receiver = User::whereHas("roles", function ($admin) {
        //     $admin->where('roles.id','1'); 
        // })->get();

        // foreach ($receiver as $receiver) 
        // Mail::to($receiver->email)->send(new PendaftaranPembekal($fizaPembekal));
    

        
        // session(['id_pembekal' => '$fizaPembekal->id']);
        // Session::put('id_pembekal', '$fizaPembekal->id');
    
        return redirect('/')->with('success','Pendaftaran anda telah dihantar dan perlu menunggu kelulusan daripada pegawai kami. Terima Kasih ');

    }

    public function cidb($id){

        $pembekal = FizaPembekal::where('id', $id)->first();
        $kod = FizaKodBidang::all();
        return view('1_pembekal.fileupload', [
             'pembekal' => $pembekal,
             'kod'=>$kod,
             'id'=>$id
         ]);
    }

    public function doccidb(Request $request)
    {
        // dd($request);
        $pembekal = FizaPembekal::where('id', $request->id_pembekal)->first();

        $pembekal->pembekal_no_pendaftaran_ppk=$request->pembekal_no_pendaftaran_ppk;
        $pembekal->pembekal_tarikh_sah_ppk=$request->pembekal_tarikh_sah_ppk;
        $pembekal->pembekal_pengkhususan=$request->pembekal_pengkhususan;
        $pembekal->pembekal_pegawai_bertauliah=$request->pembekal_pegawai_bertauliah;
        $pembekal->pembekal_tarikh_sah_gred=$request->pembekal_tarikh_sah_gred;

        $pembekal_sijil_gred=$request->file('pembekal_sijil_gred')->store('pembekal_sijil_gred');
        $pembekal->pembekal_sijil_gred=$pembekal_sijil_gred;
        // $pembekal->kod_id =$request->kod_id;

        $pembekal->save();
        // foreach ($user()->role as $role) {
        //     $receiver = User::where($role_id[0]=='1')->get();
        //     Mail::to($receiver->email)->send(new PendaftaranPembekal);
        // }

        return redirect('/')->with('success','Pendaftaran anda telah dihantar dan perlu menunggu kelulusan daripada pegawai kami. Terima Kasih ');
    }
        

    public function mof($id){

        $pembekal = FizaPembekal::where('id', $id)->first();
        $kod = FizaKodBidang::all();
        return view('1_pembekal.mof', [
             'pembekal' => $pembekal,
             'kod'=>$kod,
             'id'=>$id
         ]);
    }

    public function docmof(Request $request)
    {
        $pembekal = FizaPembekal::where('id', $request->id_pembekal)->first();

        $pembekal->pembekal_no_sijil_mof=$request->pembekal_no_sijil_mof;
        $pembekal->pembekal_no_rujukan_pendaftaran=$request->pembekal_no_rujukan_pendaftaran;
        $pembekal->pembekal_tarikh_sah_mof=$request->pembekal_tarikh_sah_mof;

        $pembekal_sijil_mof=$request->file('pembekal_sijil_mof')->store('pembekal_sijil_mof');
        $pembekal->pembekal_sijil_mof=$pembekal_sijil_mof;

        $pembekal_sijil_perakuan_bumiputera=$request->file('pembekal_sijil_perakuan_bumiputera')->store('pembekal_sijil_perakuan_bumiputera');
        $pembekal->pembekal_sijil_perakuan_bumiputera=$pembekal_sijil_perakuan_bumiputera;

        $pembekal_sijil_pendaftaran_syarikat=$request->file('pembekal_sijil_pendaftaran_syarikat')->store('pembekal_sijil_pendaftaran_syarikat');
        $pembekal->pembekal_sijil_pendaftaran_syarikat=$pembekal_sijil_pendaftaran_syarikat;


        // $pembekal->kod_id =$request->kod_id;


        $pembekal->save();

        // foreach ($user->role as $role) {
        //     $receiver = User::where($role_id[0]=='1')->get();
        //     Mail::to($receiver->email)->send(new PendaftaranPembekal);
        // }

        return redirect('/')->with('success','Permohonan anda telah dihantar dan perlu menunggu kelulusan daripada pegawai kami.Terima Kasih');
    }

    



      
}