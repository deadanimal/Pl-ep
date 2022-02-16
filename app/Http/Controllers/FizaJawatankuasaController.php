<?php

namespace App\Http\Controllers;

use App\Models\FizaJawatankuasa;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FizaPembelianSebutTender;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Mail\PerlantikanJawatankuasaSpesifikasi;
use Illuminate\Support\Facades\Mail;

class FizaJawatankuasaController extends Controller
{

    public function index()
    {
        $fizaJawatankuasa = FizaJawatankuasa::all();
        return view ('1_jawatankuasa.index',[
            'Jawatankuasa'=>$fizaJawatankuasa, ]);
    }


    public function create($id)
    {
        $pst = FizaPembelianSebutTender::find($id);
        $user= User::where('jenis','pekerja')->where('user_status','aktif')->get();
        $penyelaras= User::where('jenis','pekerja')
        ->where('user_status','aktif')->get();

        // $fizaPembelianSebutTender= FizaPembelianSebutTender::find($id);
        return view ('1_jawatankuasa.create',[
            'pst'=>$pst,
            'user'=>$user,
            'penyelaras'=>$penyelaras
        ]);
    }

    public function store(Request $request)
    {
        // $pst = FizaPembelianSebutTender::find($id);
        $fizaJawatankuasa = new FizaJawatankuasa;

        $fizaJawatankuasa->jawatankuasa_spesifikasi=$request->jawatankuasa_spesifikasi;
        $fizaJawatankuasa->jawatankuasa_teknikal=$request->jawatankuasa_teknikal;
        $fizaJawatankuasa->jawatankuasa_kewangan=$request->jawatankuasa_kewangan;
        $fizaJawatankuasa->jawatankuasa_kerja=$request->jawatankuasa_kerja;
        $fizaJawatankuasa->jawatankuasa_terbuka=$request->jawatankuasa_terbuka;
        $fizaJawatankuasa->jawatankuasa_penilaian=$request->jawatankuasa_penilaian;
        $fizaJawatankuasa->pst_id=$request->pst_id;
        $fizaJawatankuasa->jawatankuasa_created_by=Auth::user()->id;

        // $fizaJawatankuasa->jenis_jawatankuasa=$request->jenis_jawatankuasa;
        // $fizaJawatankuasa->user_id=$request->user_id;
        // $fizaJawatankuasa->jawatankuasa_peranan=$request->jawatankuasa_peranan;



    
        $fizaJawatankuasa->save();
        // Mail::to($receiver->email)->send(new SebutHargaBaru);
        // Mail::to($receiver_spesifikasi->email)->send(new PerlantikanJawatankuasaSpesifikasi);


            //System Notification
            // $notification_obj = (object)[];
            // $notification_obj->noti_type="";
            // $notification_obj->noti_template="";
            // $notification_obj->noti_subject="Anda telah dilantik sebagai Jawatankuasa Spesifikasi";
            // $notification_obj->noti_status="";
            // $notification_obj->noti_content="untuk sebutharga";
            // $notification_obj->user_id=User::where('id',$request->jawatankuasa_spesifikasi)->first();
    
            //  app('App\Http\Controllers\FizaNotificationCenterController')->store($notification_obj);
        
          
            // //audit log
            // $item="Sebutharga Tender";
            // $user_id= Auth::user()->id;
            // $description = "$pst->created_by telah menghantar sebutharga untuk $pst->pst_item_panel";
            // $log_item = [$item, $description, $user_id];
            // app('App\Http\Controllers\AuditLogController')->log($log_item);

        return redirect('/PembelianSebutTender')->with('success','Data telah berjaya dihantar');
        
    }

    public function show(FizaJawatankuasa $fizaJawatankuasa)
    {
        //
    }


    public function edit( $id)
    {
        
        $pst = FizaPembelianSebutTender::find($id);
        
        $Jawatankuasa= FizaJawatankuasa::where('pst_id', $pst->id)->get()->first();
        $spesifikasi=User::where('id',$Jawatankuasa->jawatankuasa_spesifikasi)->get();
        $teknikal=User::where('id',$Jawatankuasa->jawatankuasa_teknikal)->get();
        $kewangan=User::where('id',$Jawatankuasa->jawatankuasa_kewangan)->get();
        $kerja=User::where('id',$Jawatankuasa->jawatankuasa_kerja)->get();
        $terbuka=User::where('id',$Jawatankuasa->jawatankuasa_terbuka)->get();
        $penilaian=User::where('id',$Jawatankuasa->jawatankuasa_penilaian)->get();


        return view ('1_jawatankuasa.edit',[
            'Jawatankuasa'=>$Jawatankuasa,
            'pst'=>$pst,
            'spesifikasi'=>$spesifikasi,
            'kerja'=>$kerja,
            'teknikal'=>$teknikal,
            'kewangan'=>$kewangan,
            'terbuka'=>$terbuka,
            'penilaian'=>$penilaian
        ]);

    
    }


    public function update(Request $request)
    {
        // dd($request->jawatankuasa_spesifikasi);
        // $fizaJawatankuasa= fizaJawatankuasa::find($id);
        // $fizaJawatankuasa->jenis_jawatankuasa=$request->jenis_jawatankuasa;
        $fizaJawatankuasa->jawatankuasa_spesifikasi=$request->jawatankuasa_spesifikasi;
        $fizaJawatankuasa->jawatankuasa_teknikal=$request->jawatankuasa_teknikal;
        $fizaJawatankuasa->jawatankuasa_kewangan=$request->jawatankuasa_kewangan;
        $fizaJawatankuasa->jawatankuasa_kerja=$request->jawatankuasa_kerja;
        $fizaJawatankuasa->jawatankuasa_terbuka=$request->jawatankuasa_terbuka;
        $fizaJawatankuasa->jawatankuasa_penilaian=$request->jawatankuasa_penilaian;

        // $fizaJawatankuasa->user_id=$request->user_id;
        // $fizaJawatankuasa->jawatankuasa_peranan=$request->jawatankuasa_peranan;
        $fizaJawatankuasa->pst_id=$request->pst_id;
        $fizaJawatankuasa->jawatankuasa_updated_by=Auth::user()->id;

        $fizaJawatankuasa->save();

        $receiver_spesifikasi= User::where('id',$request->jawatankuasa_spesifikasi)->first();
        Mail::to($receiver_spesifikasi->email)->send(new PerlantikanJawatankuasaSpesifikasi);



        // //audit log
        // $item ="Sebutharga";
        // $user_id= Auth::user()->id;
        // $description = "$fizaPembelianSebutTender->updated_by telah mengemaskini jawatankuasa untuk $fizaPembelianSebutTender->pst_item_panel";
        // $log_item = [$item, $description, $user_id];
        // app('App\Http\Controllers\AuditLogController')->log($log_item);

        return redirect('/PembelianSebutTender');
    }



    public function destroy(FizaJawatankuasa $fizaJawatankuasa)
    {
        //
    }
}
