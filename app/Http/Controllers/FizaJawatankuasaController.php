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


    public function create()
    {

        $user= User::where('jenis','pekerja')->get();
        // $fizaPembelianSebutTender= FizaPembelianSebutTender::find($id);
        return view ('1_jawatankuasa.create',[
        'user'=>$user, 
        ]);
    }

    public function store(Request $request)
    {
        $fizaJawatankuasa = new FizaJawatankuasa;

        $fizaJawatankuasa->jawatankuasa_spesifikasi=$request->jawatankuasa_spesifikasi;
        $fizaJawatankuasa->jawatankuasa_teknikal=$request->jawatankuasa_teknikal;
        $fizaJawatankuasa->jawatankuasa_kewangan=$request->jawatankuasa_kewangan;
        $fizaJawatankuasa->jawatankuasa_kerja=$request->jawatankuasa_kerja;
        $fizaJawatankuasa->jawatankuasa_terbuka=$request->jawatankuasa_terbuka;
        $fizaJawatankuasa->jawatankuasa_penilaian=$request->jawatankuasa_penilaian;
        // $fizaJawatankuasa->jenis_jawatankuasa=$request->jenis_jawatankuasa;
        // $fizaJawatankuasa->user_id=$request->user_id;
        // $fizaJawatankuasa->jawatankuasa_peranan=$request->jawatankuasa_peranan;
        // $fizaJawatankuasa->pst_id=$request->pst_id;
        // $fizaJawatankuasa->jawatankuasa_created_by=Auth::user()->user_name;

        // $temp = Session::put('pst_id');
        // $fizaJawatankuasa->pst_id=$temp;


        $receiver_spesifikasi= User::where('id',$request->jawatankuasa_spesifikasi)->first();
          
        $temp=Session::get('pst_id');
        $fizaJawatankuasa->pst_id=$temp; 

        $fizaJawatankuasa->save();


        // Mail::to($receiver->email)->send(new SebutHargaBaru);
        Mail::to($receiver_spesifikasi->email)->send(new PerlantikanJawatankuasaSpesifikasi);


        //System Notification
        $notification_obj = (object)[];
        $notification_obj->noti_type="Anda telah dilantik";
        $notification_obj->noti_template="Sebagai Jawatankuasa Spesifikasi";
        $notification_obj->noti_subject="Untuk Sebutharga";
        $notification_obj->noti_content="$fizaJawatankuasa->created_at";
        $notification_obj->noti_status='Menunggu Pengesahan';
                        
        app('App\Http\Controllers\FizaNotificationCenterController')->store($notification_obj);
    


        return redirect('/PembelianSebutTender');
        
    }

    public function show(FizaJawatankuasa $fizaJawatankuasa)
    {
        //
    }


    public function edit( $id)
    {
        $fizaJawatankuasa= fizaJawatankuasa::find($id);
        $user=User::where('jenis','pekerja')->get();

        return view ('1_jawatankuasa.edit',[
            'Jawatankuasa'=>$fizaJawatankuasa,
            'user'=>$user
        ]);
    }


    public function update($id, Request $request)
    {
        $fizaJawatankuasa= fizaJawatankuasa::find($id);
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
        $fizaJawatankuasa->jawatankuasa_updated_by=Auth::user()->user_name;

        $fizaJawatankuasa->save();

        Mail::to($receiver->email)->send(new SebutHargaBaru);


        // //audit log
        // $item ="Sebutharga";
        // $user_id= Auth::user()->id;
        // $description = "$fizaPembelianSebutTender->updated_by telah mengemaskini jawatankuasa untuk $fizaPembelianSebutTender->pst_item_panel";
        // $log_item = [$item, $description, $user_id];
        // app('App\Http\Controllers\AuditLogController')->log($log_item);

        return redirect('/Jawatankuasa');
    }



    public function destroy(FizaJawatankuasa $fizaJawatankuasa)
    {
        //
    }
}
