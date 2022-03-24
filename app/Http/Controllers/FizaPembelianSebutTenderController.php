<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\FizaPembelianSebutTender;
use App\Mail\SebutHargaBaru;
use App\Models\FizaItemInfo;
use App\Models\FizaJawatankuasa;
use App\Models\FizaJadualPemenuhan;
use App\Models\FizaPenyediaanSpesifikasi;
use App\Mail\PermohonanSebutHarga;
use App\Mail\PerlantikanJawatankuasaSpesifikasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Session;

class FizaPembelianSebutTenderController extends Controller
{

    public function index(){

        $role=Auth::user()->roles;

        //     // dd($role[0]->id);

            if ($role[0]->id=='1') {
                $PembelianSebutTender = FizaPembelianSebutTender::all();


                // foreach ($PembelianSebutTender as $PembelianSebutTender) {
                //     $jawatankuasa=FizaJawatankuasa::where('pst_id', $PembelianSebutTender->id)->with('sebuthargatender')->first();
                //     $spesifikasi = FizaPenyediaanSpesifikasi::where('pst_id', $PembelianSebutTender->id)->first();
                //     // $jadual = FizaJadualPemenuhan::where('spesifikasi_id', $spesifikasi->id)->first();
                // }

                // dd($jawatankuasa);

                return view('1_pst.index-admin', [
                    'PembelianSebutTender'=>$PembelianSebutTender
                    // 'jawatankuasa'=>$jawatankuasa,
                    // 'spesifikasi'=>$spesifikasi,

                ]);
            }

            else{
                $PembelianSebutTender = FizaPembelianSebutTender::where('created_by', Auth::user()->id)
                ->orWhere('pst_pelulus', Auth::user()->id)->get();

                    foreach ($PembelianSebutTender as $PembelianSebutTender) {
                        $jawatankuasa=FizaJawatankuasa::where('pst_id', $PembelianSebutTender->id)->with('sebuthargatender')->first();
                        $spesifikasi = FizaPenyediaanSpesifikasi::where('pst_id', $PembelianSebutTender->id)->first();
                        $jadual = FizaJadualPemenuhan::where('spesifikasi_id', $spesifikasi->id)->first();
                    }

                    // dd($jawatankuasa);

                return view('1_pst.index2', [
                    'PembelianSebutTender'=>$PembelianSebutTender,
                    'jawatankuasa'=>$jawatankuasa,
                    'spesifikasi'=>$spesifikasi,
                    'jadual'=>$jadual
                ]);

            }

    }

    public function create()
    {
        $user=User::where('jenis', 'pekerja')->
        where('user_status','aktif')->get();

        return view('1_pst.create', [
            'user'=>$user,
        ]);
    }


    public function store(Request $request)
    {
        $fizaPembelianSebutTender = new FizaPembelianSebutTender;

        $fizaPembelianSebutTender->pst_item_panel=$request->pst_item_panel;
        $fizaPembelianSebutTender->pst_sistem_panel=$request->pst_sistem_panel;
        $fizaPembelianSebutTender->pst_no1pp=$request->pst_no1pp;
        $fizaPembelianSebutTender->pst_tajuk=$request->pst_tajuk;
        $fizaPembelianSebutTender->pst_jenis=$request->pst_jenis;
        $fizaPembelianSebutTender->pst_no_rujukan_fail=$request->pst_no_rujukan_fail;
        $fizaPembelianSebutTender->pst_total_harga_indikatif_jangkaan=$request->pst_total_harga_indikatif_jangkaan;
        $fizaPembelianSebutTender->pst_kaedah_perolehan=$request->pst_kaedah_perolehan;
        $fizaPembelianSebutTender->pst_terbuka_kepada=$request->pst_terbuka_kepada;
        $fizaPembelianSebutTender->pst_zon_lokasi=$request->pst_zon_lokasi;
        $fizaPembelianSebutTender->pst_kategori_jenis_perolehan=$request->pst_kategori_jenis_perolehan;
        $fizaPembelianSebutTender->pst_jenis_kontrak=$request->pst_jenis_kontrak;
        $fizaPembelianSebutTender->pst_jenis_pemenuhan=$request->pst_jenis_pemenuhan;
        $fizaPembelianSebutTender->pst_tempoh_kontrak=$request->pst_tempoh_kontrak;
        $fizaPembelianSebutTender->pst_jumlah_pembekal_layak=$request->pst_jumlah_pembekal_layak;
        $fizaPembelianSebutTender->created_by=Auth::user()->id;

        $fizaPembelianSebutTender->pst_pelulus=$request->pst_pelulus;

        // dd($fizaPembelianSebutTender);

        // Session::put('pst_id',$fizaPembelianSebutTender->id);


        if ($request->status_pst=="hantar"){
            $fizaPembelianSebutTender->pst_status="menunggu kelulusan";
            $fizaPembelianSebutTender->save();
            $receiver = User::where('id',$request->pst_pelulus)->first();
            Mail::to($receiver->email)->send(new SebutHargaBaru);
            return redirect('/Jawatankuasa/pst/'.$fizaPembelianSebutTender->id);

        }
        else if($request->status_pst=="draf"){
            $fizaPembelianSebutTender->pst_status="draf";
            $fizaPembelianSebutTender->save();
            return redirect('/PembelianSebutTender')->with('success', 'Data telah berjaya disimpan sebagai draf!');



        }


        //System Notification
        $notification_obj = (object)[];
        $notification_obj->noti_type="";
        $notification_obj->noti_template=$fizaPembelianSebutTender->pst_tajuk;
        $notification_obj->noti_subject="telah dihantar dan anda telah dilantik sebagai Pegawai Pelulus";
        $notification_obj->noti_status='Menunggu Pengesahan';
        $notification_obj->noti_content='';
        $notification_obj->user_id=User::where('id',$request->pst_pelulus)->first();
        app('App\Http\Controllers\FizaNotificationCenterController')->store($notification_obj);


        $creater = User::where('id',$fizaPembelianSebutTender->created_by)->first();
        //audit log
        $item ="Sebutharga Tender";
        $user_id= Auth::user()->id;
        $description =$creater->user_name . "telah menghantar sebutharga untuk" . $fizaPembelianSebutTender->pst_tajuk;
        $log_item = [$item, $description, $user_id];
        app('App\Http\Controllers\AuditLogController')->log($log_item);



    }

    public function show($id)
    {
        $PembelianSebutTender = FizaPembelianSebutTender::find($id);
        $pelulus = User::where('id',$PembelianSebutTender->pst_pelulus)->first();
        $penyelaras= User::where('id',$PembelianSebutTender->pst_penyelaras)->first();
        $jawatankuasa = FizaJawatankuasa::where('pst_id',$PembelianSebutTender->id)->first();
        $spesifikasi_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_spesifikasi_pengerusi)->first();
        $spesifikasi_ajk=User::where('id',$jawatankuasa->jawatankuasa_spesifikasi_ajk)->first();
        $spesifikasi_urusetia=User::where('id',$jawatankuasa->jawatankuasa_spesifikasi_urusetia)->first();

        $teknikal_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_teknikal_pengerusi)->first();
        $teknikal_ajk=User::where('id',$jawatankuasa->jawatankuasa_teknikal_ajk)->first();

        $kewangan_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_kewangan_pengerusi)->first();
        $kewangan_ajk=User::where('id',$jawatankuasa->jawatankuasa_kewangan_ajk)->first();

        $kerja_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_kerja_pengerusi)->first();
        $kerja_ajk=User::where('id',$jawatankuasa->jawatankuasa_kerja_ajk)->first();

        $terbuka_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_terbuka_pengerusi)->first();
        $terbuka_ajk=User::where('id',$jawatankuasa->jawatankuasa_terbuka_ajk)->first();

        $penilaian_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_penilaian_pengerusi)->first();
        $penilaian_ajk=User::where('id',$jawatankuasa->jawatankuasa_penilaian_ajk)->first();

            return view( '1_pst.show',[
                'PembelianSebutTender'=>$PembelianSebutTender,
                'pelulus'=>$pelulus,
                'penyelaras'=>$penyelaras,
                'jawatankuasa'=>$jawatankuasa,
                'spesifikasi_pengerusi'=>$spesifikasi_pengerusi,
                'spesifikasi_urusetia'=>$spesifikasi_urusetia,
                'spesifikasi_ajk'=>$spesifikasi_ajk,
                'kerja_pengerusi'=>$kerja_pengerusi,
                'kerja_ajk'=>$kerja_ajk,
                'teknikal_pengerusi'=>$teknikal_pengerusi,
                'teknikal_ajk'=>$teknikal_ajk,
                'kewangan_pengerusi'=>$kewangan_pengerusi,
                'kewangan_ajk'=>$kewangan_ajk,
                'terbuka_pengerusi'=>$terbuka_pengerusi,
                'terbuka_ajk'=>$terbuka_ajk,
                'penilaian_pengerusi'=>$penilaian_pengerusi,
                'penilaian_ajk'=>$penilaian_ajk
            ]);
    }


    public function edit($id)
    {

        $PembelianSebutTender = FizaPembelianSebutTender::find($id);
        $pelulus = User::where('id',$PembelianSebutTender->pst_pelulus)->first();
        // dd($user);
        $penyelaras= User::where('id',$PembelianSebutTender->pst_penyelaras)->first();

        $jawatankuasa = FizaJawatankuasa::where('pst_id',$PembelianSebutTender->id)->first();
        // $spesifikasi=FizaPenyediaanSpesifikasi::where('pst_id',$PembelianSebutTender->id)->get();


        $spesifikasi_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_spesifikasi_pengerusi)->first();
        $spesifikasi_ajk=User::where('id',$jawatankuasa->jawatankuasa_spesifikasi_ajk)->first();
        $spesifikasi_urusetia=User::where('id',$jawatankuasa->jawatankuasa_spesifikasi_urusetia)->first();

        $teknikal_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_teknikal_pengerusi)->first();
        $teknikal_ajk=User::where('id',$jawatankuasa->jawatankuasa_teknikal_ajk)->first();

        $kewangan_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_kewangan_pengerusi)->first();
        $kewangan_ajk=User::where('id',$jawatankuasa->jawatankuasa_kewangan_ajk)->first();

        $kerja_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_kerja_pengerusi)->first();
        $kerja_ajk=User::where('id',$jawatankuasa->jawatankuasa_kerja_ajk)->first();

        $terbuka_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_terbuka_pengerusi)->first();
        $terbuka_ajk=User::where('id',$jawatankuasa->jawatankuasa_terbuka_ajk)->first();

        $penilaian_pengerusi=User::where('id',$jawatankuasa->jawatankuasa_penilaian_pengerusi)->first();
        $penilaian_ajk=User::where('id',$jawatankuasa->jawatankuasa_penilaian_ajk)->first();

            return view( '1_pst.edit',[
                'PembelianSebutTender'=>$PembelianSebutTender,
                'pelulus'=>$pelulus,
                'penyelaras'=>$penyelaras,
                'jawatankuasa'=>$jawatankuasa,
                'spesifikasi_pengerusi'=>$spesifikasi_pengerusi,
                'spesifikasi_urusetia'=>$spesifikasi_urusetia,
                'spesifikasi_ajk'=>$spesifikasi_ajk,
                'kerja_pengerusi'=>$kerja_pengerusi,
                'kerja_ajk'=>$kerja_ajk,
                'teknikal_pengerusi'=>$teknikal_pengerusi,
                'teknikal_ajk'=>$teknikal_ajk,
                'kewangan_pengerusi'=>$kewangan_pengerusi,
                'kewangan_ajk'=>$kewangan_ajk,
                'terbuka_pengerusi'=>$terbuka_pengerusi,
                'terbuka_ajk'=>$terbuka_ajk,
                'penilaian_pengerusi'=>$penilaian_pengerusi,
                'penilaian_ajk'=>$penilaian_ajk
            ]);


    }


    public function update($id, Request $request)
    {
        $PembelianSebutTender = FizaPembelianSebutTender::find($id);
        $jawatankuasa = FizaJawatankuasa::where('pst_id',$PembelianSebutTender->id)->first();

        // dd($request);
        $PembelianSebutTender->pst_item_panel=$request->pst_item_panel;
        $PembelianSebutTender->pst_sistem_panel=$request->pst_sistem_panel;
        $PembelianSebutTender->pst_no1pp=$request->pst_no1pp;
        $PembelianSebutTender->pst_tajuk=$request->pst_tajuk;
        $PembelianSebutTender->pst_jenis=$request->pst_jenis;
        $PembelianSebutTender->pst_no_rujukan_fail=$request->pst_no_rujukan_fail;
        $PembelianSebutTender->pst_total_harga_indikatif_jangkaan=$request->pst_total_harga_indikatif_jangkaan;
        $PembelianSebutTender->pst_kaedah_perolehan=$request->pst_kaedah_perolehan;
        $PembelianSebutTender->pst_terbuka_kepada=$request->pst_terbuka_kepada;
        $PembelianSebutTender->pst_zon_lokasi=$request->pst_zon_lokasi;
        $PembelianSebutTender->pst_kategori_jenis_perolehan=$request->pst_kategori_jenis_perolehan;
        $PembelianSebutTender->pst_jenis_kontrak=$request->pst_jenis_kontrak;
        $PembelianSebutTender->pst_jenis_pemenuhan=$request->pst_jenis_pemenuhan;
        $PembelianSebutTender->pst_tempoh_kontrak=$request->pst_tempoh_kontrak;
        $PembelianSebutTender->pst_jumlah_pembekal_layak=$request->pst_jumlah_pembekal_layak;
        $PembelianSebutTender->pst_pelulus=$request->pst_pelulus;
        $PembelianSebutTender->updated_by=Auth::user()->id;

        if ($request->status_pst=="diluluskan"){
            $PembelianSebutTender->pst_status="diluluskan";
            // $jawatankuasa->kelulusan="diluluskan";

            // $receiver= User::where('id',$request->pst_pelulus)->first();
            $urusetia_pst = User::where('id',$PembelianSebutTender->created_by)->first();
            $urusetia_spesifikasi=User::where('id', $jawatankuasa->jawatankuasa_spesifikasi_urusetia)->first();
            $PembelianSebutTender->save();

            Mail::to($urusetia_pst->email)->send(new PermohonanSebutHarga($PembelianSebutTender));
            Mail::to($urusetia_spesifikasi->email)->send(new PerlantikanJawatankuasaSpesifikasi($PembelianSebutTender));



        }
        else if($request->status_pst=="ditolak"){
            $PembelianSebutTender->pst_status="ditolak";
            $urusetia_pst = User::where('id',$PembelianSebutTender->created_by)->first();
            $PembelianSebutTender->save();

            Mail::to($urusetia_pst->email)->send(new PermohonanSebutHarga($PembelianSebutTender));


        }

        // dd($request);

        return redirect('/PembelianSebutTender')->with('success','Data anda telah berjaya dikemaskini!');
    }


    public function destroy($id)
    {
        $PembelianSebutTender = FizaPembelianSebutTender::where('id',$id)->first();
        $PembelianSebutTender->delete();


        return redirect('/PembelianSebutTender')->with('success','Data telah berjaya dipadam!');
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
