<?php

namespace App\Http\Controllers;

use App\Models\FizaPembelianSebutTender;
use App\Mail\SebutHargaBaru;
use App\Models\FizaItemInfo;
use App\Models\FizaKatalog;
use App\Models\FizaJawatankuasa;
use App\Models\FizaPenyediaanSpesifikasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class FizaPembelianSebutTenderController extends Controller
{
    public function index()
    {
     
        $role=Auth::user()->roles;
        
        // dd($role[0]->id);

        if($role[0]->id=='1'){
            $PembelianSebutTender = FizaPembelianSebutTender::all();
            return view('1_pst.index', [
                'PembelianSebutTender'=>$PembelianSebutTender
            ]);
        }

        else{
            $PembelianSebutTender = FizaPembelianSebutTender::where('created_by',Auth::user()->id)
            ->orWhere('pst_pelulus',Auth::user()->id)
            ->orWhere('pst_penyelaras',Auth::user()->id)
            ->get();
        


        return view('1_pst.index', [ 
            'PembelianSebutTender'=>$PembelianSebutTender   
        ]);


        }
     
    }


    public function create()
    {
        $katalog = FizaKatalog::all();
        $user=User::where('jenis', 'pekerja')->
        where('user_status','aktif')->get();

        $penyelaras=User::where('jenis', 'pekerja')->
        where('user_status','aktif')->get();

        return view('1_pst.create', [
            'user'=>$user,
            'katalog'=>$katalog,
            'penyelaras'=>$penyelaras
        ]);
    }


    public function store(Request $request)
    {
        $fizaPembelianSebutTender = new FizaPembelianSebutTender;

        $fizaPembelianSebutTender->pst_item_panel=$request->pst_item_panel;
        $fizaPembelianSebutTender->pst_sistem_panel=$request->pst_sistem_panel;
        $fizaPembelianSebutTender->pst_no1pp=$request->pst_no1pp;
        $fizaPembelianSebutTender->katalog_id=$request->katalog_id;
        // $fizaPembelianSebutTender->pst_katalog_kumpulan=$request->pst_katalog_kumpulan;

        $fizaPembelianSebutTender->pst_tajuk=$request->pst_tajuk;
        $fizaPembelianSebutTender->pst_no_rujukan_fail=$request->pst_no_rujukan_fail;
        $fizaPembelianSebutTender->pst_total_harga_indikatif_jangkaan=$request->pst_total_harga_indikatif_jangkaan;
        $fizaPembelianSebutTender->pst_kaedah_perolehan=$request->pst_kaedah_perolehan;
        $fizaPembelianSebutTender->pst_jenis=$request->pst_jenis;
        $fizaPembelianSebutTender->pst_terbuka_kepada=$request->pst_terbuka_kepada;
        $fizaPembelianSebutTender->pst_zon_lokasi=$request->pst_zon_lokasi;
        $fizaPembelianSebutTender->pst_kategori_perolehan=$request->pst_kategori_perolehan;
        $fizaPembelianSebutTender->pst_jenis_kontrak=$request->pst_jenis_kontrak;
        $fizaPembelianSebutTender->pst_jenis_pemenuhan=$request->pst_jenis_pemenuhan;
        $fizaPembelianSebutTender->pst_tempoh_kontrak=$request->pst_tempoh_kontrak;
        // $fizaPembelianSebutTender->item_id=$request->item_id;
        // $fizaPembelianSebutTender->kod_id=$request->kod_id;
        $fizaPembelianSebutTender->pembekal_id=$request->pembekal_id;
        $fizaPembelianSebutTender->pst_jumlah_pembekal_layak=$request->pst_jumlah_pembekal_layak;
        $fizaPembelianSebutTender->ro_id=$request->ro_id;
        $fizaPembelianSebutTender->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaPembelianSebutTender->user_id=$request->user_id;
        $fizaPembelianSebutTender->pst_pelulus=$request->pst_pelulus;
        $fizaPembelianSebutTender->pst_catatan_pelulus=$request->pst_catatan_pelulus;
        $fizaPembelianSebutTender->pst_perihal_taklimat=$request->pst_perihal_taklimat;
        $fizaPembelianSebutTender->pst_taklimat_date=$request->pst_taklimat_date;
        $fizaPembelianSebutTender->pst_taklimat_alamat=$request->pst_taklimat_alamat;
        $fizaPembelianSebutTender->pst_link=$request->pst_link;
        $fizaPembelianSebutTender->pst_penyelaras=$request->pst_penyelaras;
        $fizaPembelianSebutTender->pst_kehadiran_max=$request->pst_kehadiran_max;
        // $fizaPembelianSebutTender->pst_status=$request->pst_status;
        $fizaPembelianSebutTender->created_by=Auth::user()->id;

        $fizaPembelianSebutTender->pst_jenis_potongan=$request->pst_jenis_potongan;
        $fizaPembelianSebutTender->pst_potongan_description=$request->pst_potongan_description;
        $fizaPembelianSebutTender->pst_amaun_potongan=$request->pst_amaun_potongan;
        

        // dd($fizaPembelianSebutTender);

        // Session::put('pst_id',$fizaPembelianSebutTender->id);

        $receiver = User::where('id',$request->pst_pelulus)->first();
        
        if ($request->status_pst=="hantar"){
            $fizaPembelianSebutTender->pst_status="menunggu kelulusan";
            Mail::to($receiver->email)->send(new SebutHargaBaru);
            $fizaPembelianSebutTender->save();
            return redirect('/Jawatankuasa/pst/'.$fizaPembelianSebutTender->id);
           
        }
        else if($request->status_pst=="draf"){
            $fizaPembelianSebutTender->pst_status="draf";
            $fizaPembelianSebutTender->save();
            return redirect('/PembelianSebutTender')->with('success', 'Data telah berjaya disimpan sebagai draf!');
           

            
        }

        // dd($temp);

        //System Notification
        // $notification_obj = (object)[];
        // $notification_obj->noti_type="";
        // $notification_obj->noti_template=$fizaPembelianSebutTender->pst_kaedah_perolehan;
        // $notification_obj->noti_subject="telah dihantar dan anda telah dilantik sebagai Pegawai Pelulus";
        // $notification_obj->noti_status='Menunggu Pengesahan';
        // $notification_obj->noti_content='';
        // $notification_obj->user_id=User::where('id',$request->pst_pelulus)->first();

                        
        // app('App\Http\Controllers\FizaNotificationCenterController')->store($notification_obj);
    
      
        //audit log
        // $item ="Sebutharga Tender";
        // $user_id= Auth::user()->id;
        // $description = "$fizaPembelianSebutTender->created_by telah menghantar sebutharga untuk $fizaPembelianSebutTender->pst_item_panel";
        // $log_item = [$item, $description, $user_id];
        // app('App\Http\Controllers\AuditLogController')->log($log_item);

        

    }

    public function show(FizaPembelianSebutTender $fizaPembelianSebutTender)
    {
        //
    }


    public function edit($id)
    {
        $PembelianSebutTender = FizaPembelianSebutTender::find($id);

        $katalog = FizaKatalog::where('id',$PembelianSebutTender->pst_katalog_kumpulan)->get();
        $user = User::where('jenis', 'pekerja')->
        where('user_status','aktif')->get();
        // dd($user);
        $penyelaras= User::where('jenis','pekerja')
        ->where('user_status','aktif')->get();
        $jawatankuasa = FizaJawatankuasa::where('pst_id',$PembelianSebutTender->id)->get();

        $spesifikasi=FizaPenyediaanSpesifikasi::where('pst_id',$PembelianSebutTender->id)->get();

        // if($spesifikasi->status_spesifikasi=="diluluskan"){

        //     return view('1_pst.lawatan_tapak',[
        //         'PembelianSebutTender'=>$PembelianSebutTender,
        //         'katalog'=>$katalog,
        //         'user'=>$user,
        //         'penyelaras'=>$penyelaras,
        //         'jawatankuasa'=>$jawatankuasa,
        //         'spesifikasi'=>$spesifikasi
        //     ]);
        // }

        // else{

            return view( '1_pst.edit',[
                'PembelianSebutTender'=>$PembelianSebutTender,
                'katalog'=>$katalog,
                'user'=>$user,
                'penyelaras'=>$penyelaras,
                'jawatankuasa'=>$jawatankuasa
            ]);
        
           
    }


    public function update($id, Request $request)
    {
        $fizaPembelianSebutTender = FizaPembelianSebutTender::find($id);

    

        $fizaPembelianSebutTender->pst_item_panel=$request->pst_item_panel;
        $fizaPembelianSebutTender->pst_sistem_panel=$request->pst_sistem_panel;
        $fizaPembelianSebutTender->pst_no1pp=$request->pst_no1pp;
        $fizaPembelianSebutTender->katalog_id=$request->katalog_id;
        // $fizaPembelianSebutTender->pst_katalog_kumpulan=$request->pst_katalog_kumpulan;

        $fizaPembelianSebutTender->pst_tajuk=$request->pst_tajuk;
        $fizaPembelianSebutTender->pst_no_rujukan_fail=$request->pst_no_rujukan_fail;
        $fizaPembelianSebutTender->pst_total_harga_indikatif_jangkaan=$request->pst_total_harga_indikatif_jangkaan;
        $fizaPembelianSebutTender->pst_kaedah_perolehan=$request->pst_kaedah_perolehan;
        $fizaPembelianSebutTender->pst_jenis=$request->pst_jenis;
        $fizaPembelianSebutTender->pst_terbuka_kepada=$request->pst_terbuka_kepada;
        $fizaPembelianSebutTender->pst_zon_lokasi=$request->pst_zon_lokasi;
        $fizaPembelianSebutTender->pst_kategori_perolehan=$request->pst_kategori_perolehan;
        $fizaPembelianSebutTender->pst_jenis_kontrak=$request->pst_jenis_kontrak;
        $fizaPembelianSebutTender->pst_jenis_pemenuhan=$request->pst_jenis_pemenuhan;
        $fizaPembelianSebutTender->pst_tempoh_kontrak=$request->pst_tempoh_kontrak;
        // $fizaPembelianSebutTender->item_id=$request->item_id;
        $fizaPembelianSebutTender->kod_id=$request->kod_id;
        $fizaPembelianSebutTender->pembekal_id=$request->pembekal_id;
        $fizaPembelianSebutTender->pst_jumlah_pembekal_layak=$request->pst_jumlah_pembekal_layak;
        $fizaPembelianSebutTender->ro_id=$request->ro_id;
        $fizaPembelianSebutTender->jawatankuasa_id=$request->jawatankuasa_id;
        $fizaPembelianSebutTender->user_id=$request->user_id;
        $fizaPembelianSebutTender->pst_pelulus=$request->pst_pelulus;
        $fizaPembelianSebutTender->pst_catatan_pelulus=$request->pst_catatan_pelulus;
        $fizaPembelianSebutTender->pst_perihal_taklimat=$request->pst_perihal_taklimat;
        $fizaPembelianSebutTender->pst_taklimat_date=$request->pst_taklimat_date;
        $fizaPembelianSebutTender->pst_taklimat_alamat=$request->pst_taklimat_alamat;
        $fizaPembelianSebutTender->pst_link=$request->pst_link;
        $fizaPembelianSebutTender->pst_penyelaras=$request->pst_penyelaras;
        $fizaPembelianSebutTender->pst_kehadiran_max=$request->pst_kehadiran_max;
        // $fizaPembelianSebutTender->pst_status="Menunggu Pengesahan";
        $fizaPembelianSebutTender->updated_by=Auth::user()->id;

        $fizaPembelianSebutTender->pst_jenis_potongan=$request->pst_jenis_potongan;
        $fizaPembelianSebutTender->pst_potongan_description=$request->pst_potongan_description;
        $fizaPembelianSebutTender->pst_amaun_potongan=$request->pst_amaun_potongan;


        $fizaPembelianSebutTender->save();

        // $temp=session()->get($fizaPembelianSebutTender->id);

        if ($request->status_pst=="hantar"){
            $fizaPembelianSebutTender->pst_status="diluluskan";
            $receiver= User::where('id',$request->pst_pelulus)->first();
            $urusetia_pst = User::where('id',$fizaPembelianSebutTender->created_by)->first();
            Mail::to($receiver->email)->send(new SebutHargaBaru);
            Mail::to($urusetia_pst->email)->send(new SebutHargaBaru);
            $fizaPembelianSebutTender->save();

           
        }
        else if($request->status_pst=="draf"){
            $fizaPembelianSebutTender->pst_status="ditolak";
            $fizaPembelianSebutTender->save();
           
        
        }

        return redirect('/Jawatankuasa/'.$fizaPembelianSebutTender->id.'/edit');
    }

   
    public function destroy($id)
    {
        $PembelianSebutTender = FizaPembelianSebutTender::where('id',$id)->first();
        $PembelianSebutTender->delete();


        return redirect('/PembelianSebutTender');
    }

    // public function verify_signature(Request $request)
    // {
    //     $PembelianSebutTender= FizaPembelianSebutTender::where('id', $request->id)->first();
    //     $pst_pelulus = $request->pst_pelulus;
    //     $ic_diletakkan = $request->ic_diletakkan;

    //     if($pst_pelulus->ic == $ic_diletakkan) {
    //         $permohonan->status = 'Diluluskan';

    //         $permohonan->save();
    //         return view('lulus');
    //     } else {
    //         return view('gagal');
    //     }
    // }
}
