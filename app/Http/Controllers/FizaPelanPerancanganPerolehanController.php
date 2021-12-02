<?php

namespace App\Http\Controllers;

use App\Models\FizaPelanPerancanganPerolehan;
use App\Mail\PelanPerancangan;
use App\Mail\KelulusanPelanPerancangan;
use App\Mail\SemakanPelanPerancangan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use \PDF;

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
        $user=User::where('jenis','pekerja')->get();
        return view ('/1_pelan_perancangan.create', [
            'user'=>$user
        ]);

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
        // $fizaPelanPerancanganPerolehan->pelan_status="Menunggu Pengesahan";
        $fizaPelanPerancanganPerolehan->pelan_pengesah=$request->pelan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pengesah=$request->pelan_catatan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_pelulus=$request->pelan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pelulus=$request->pelan_catatan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_created_by=Auth::user()->user_name;
        // $fizaPelanPerancanganPerolehan->user_id=$request->user_id;

        $fizaPelanPerancanganPerolehan->pelan_peruntukan_tahunan=$request->pelan_peruntukan_tahunan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_spesifikasi=$request->pelan_tarikh_penyediaan_spesifikasi;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penilaian_tender=$request->pelan_penilaian_tender;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_doc_tender=$request->pelan_tarikh_penyediaan_doc_tender;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_persidangan=$request->pelan_tarikh_perlaksanaan_persidangan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_sst_dikeluarkan=$request->pelan_tarikh_sst_dikeluarkan;

        $receiver = User::where('id',$request->pelan_pengesah)->first();

        if ($request->status_pelan=="hantar"){
            $fizaPelanPerancanganPerolehan->pelan_status="Menunggu Pengesahan";
         Mail::to($receiver->email)->send(new PelanPerancangan);
        }
        else if($request->status_pelan=="draf"){
            $fizaPelanPerancanganPerolehan->pelan_status="Draf";
            
        }

        $fizaPelanPerancanganPerolehan->save();

        $notification_obj = (object)[];
        $notification_obj->noti_type='$fizaPelanPerancanganPerolehan->pelan_created_by';
        $notification_obj->noti_template='Telah Mencipta';
        $notification_obj->noti_subject='Pelan Perancangan';
        $notification_obj->noti_content='dan';
        $notification_obj->noti_status='Menunggu Pengesahan';
                        
        app('App\Http\Controllers\FizaNotificationCenterController')->store($notification_obj);
        return redirect('/PelanPerancanganPerolehan');

    }
    
    public function show(FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan)
    {
        //
    }


    public function edit($id)
    {
        // $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $user = User::where([['id', $PelanPerancanganPerolehan->pelan_pengesah],
            ['id', $PelanPerancanganPerolehan->pelan_pelulus]])->get();
            
        return view ('1_pelan_perancangan.edit',[
            'PelanPerancanganPerolehan'=>$PelanPerancanganPerolehan,
            'user'=>$user
        ]);

    }


    public function update(Request $request,$id)
    {
        $fizaPelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);

        $fizaPelanPerancanganPerolehan->pelan_jenis=$request->pelan_jenis;
        $fizaPelanPerancanganPerolehan->pelan_year=$request->pelan_year;
        $fizaPelanPerancanganPerolehan->pelan_title=$request->pelan_title;
        $fizaPelanPerancanganPerolehan->pelan_description=$request->pelan_description;
        $fizaPelanPerancanganPerolehan->pelan_category=$request->pelan_category;
        $fizaPelanPerancanganPerolehan->pelan_method=$request->pelan_method;

        $fizaPelanPerancanganPerolehan->pelan_invitation_date=$request->pelan_invitation_date;
        $fizaPelanPerancanganPerolehan->pelan_estimated_amount=$request->pelan_estimated_amount;
        $fizaPelanPerancanganPerolehan->pelan_catatan=$request->pelan_catatan;
        $fizaPelanPerancanganPerolehan->pelan_status="Menunggu pengesahan";
        $fizaPelanPerancanganPerolehan->pelan_pengesah=$request->pelan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pengesah=$request->pelan_catatan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_pelulus=$request->pelan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pelulus=$request->pelan_catatan_pelulus;
        // $fizaPelanPerancanganPerolehan->pelan_created_by=$request->pelan_created_by;
        $fizaPelanPerancanganPerolehan->user_id=$request->user_id;

        $fizaPelanPerancanganPerolehan->pelan_peruntukan_tahunan=$request->pelan_peruntukan_tahunan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_spesifikasi=$request->pelan_tarikh_penyediaan_spesifikasi;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penilaian_tender=$request->pelan_tarikh_penilaian_tender;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_doc_tender=$request->pelan_tarikh_penyediaan_doc_tender;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_persidangan=$request->pelan_tarikh_perlaksanaan_persidangan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_sst_dikeluarkan=$request->pelan_tarikh_sst_dikeluarkan;


        $fizaPelanPerancanganPerolehan->save();
        $receiver = User::where('id',$request->pelan_pengesah)->first();
        Mail::to($receiver->email)->send(new PelanPerancangan);

        return redirect('/PelanPerancanganPerolehan');
    }


    public function destroy(FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan)
    {
        //
    }

    public function indexpengesah()
    {

        $fizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::where('pelan_status','Menunggu Pengesahan')->get();
        return view ('1_pelan_perancangan.index_pengesah',[
            'fizaPelanPerancanganPerolehan'=>$fizaPelanPerancanganPerolehan]);

    }

    public function editpengesah(FizaPelanPerancanganPerolehan $pelanPerancanganPerolehan, $id)
    {
        // $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::where('id',$id)->first();
        $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $user = User::where([['id', $PelanPerancanganPerolehan->pelan_pengesah],
            ['id', $PelanPerancanganPerolehan->pelan_pelulus]])->get();

        return view ('1_pelan_perancangan.edit_pengesah',[
            'PelanPerancanganPerolehan'=>$PelanPerancanganPerolehan, 
            'user'=>$user
        ]);

    }


    public function updatepengesah(Request $request,FizaPelanPerancanganPerolehan $pelanPerancanganPerolehan)
    {
       // $FizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::where('id',$request->perancangan_id)->first();
    //    $fizaPelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
       $fizaPelanPerancanganPerolehan=FizaPelanPerancanganPerolehan::where('id',$request->perancangan_id)->first();

        // $fizaPelanPerancanganPerolehan->pelan_jenis=$request->pelan_jenis;
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
        // $fizaPelanPerancanganPerolehan->pelan_created_by=$request->pelan_created_by;
        // $fizaPelanPerancanganPerolehan->user_id=$request->user_id;

        $fizaPelanPerancanganPerolehan->pelan_peruntukan_tahunan=$request->pelan_peruntukan_tahunan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_spesifikasi=$request->pelan_tarikh_penyediaan_spesifikasi;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        // $fizaPelanPerancanganPerolehan->pelan_penyediaan_doc_tender=$request->pelan_penyediaan_doc_tender;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_persidangan=$request->pelan_tarikh_perlaksanaan_persidangan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_sst_dikeluarkan=$request->pelan_tarikh_sst_dikeluarkan;
    
        $fizaPelanPerancanganPerolehan->save();



       if($request->status_pelan=="Menunggu Kelulusan"){
        $receiver = User::where('id',$request->pelan_pelulus)->first();
        Mail::to($receiver->email)->send(new KelulusanPelanPerancangan);
       }

       else if($request->status_pelan=="Semak Semula"){
        $receiver2= User::where('id',$fizaPelanPerancanganPerolehan->pelan_created_by)->first();
        Mail::to($receiver2->email)->send(new SemakanPelanPerancangan);
        
       }
       
    
        // dd($perancangan->status);

        return redirect('/indexpengesah');

    }


    public function indexpelulus()
    {

        $fizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::where('pelan_status','Menunggu Kelulusan')->get();
        return view ('1_pelan_perancangan.index_pelulus',[
            'fizaPelanPerancanganPerolehan'=>$fizaPelanPerancanganPerolehan]);

    }

    public function editpelulus(FizaPelanPerancanganPerolehan $PelanPerancanganPerolehan, $id)
    {
        // $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::where('id',$id)->first();
        $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $user = User::where([['id', $PelanPerancanganPerolehan->pelan_pengesah],
            ['id', $PelanPerancanganPerolehan->pelan_pelulus]])->get();

        return view ('1_pelan_perancangan.edit_pelulus',[
            'PelanPerancanganPerolehan'=>$PelanPerancanganPerolehan, 
            'user'=>$user
        ]);

    }


    public function updatepelulus(Request $request, FizaPelanPerancanganPerolehan $pelanPerancanganPerolehan)
    {
       $fizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::where('id', $request->perancangan_id)->first();
    //    $fizaPelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);

        // $fizaPelanPerancanganPerolehan->pelan_jenis=$request->pelan_jenis;
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
        // $fizaPelanPerancanganPerolehan->pelan_created_by=$request->pelan_created_by;
        // $fizaPelanPerancanganPerolehan->user_id=$request->user_id;

        $fizaPelanPerancanganPerolehan->pelan_peruntukan_tahunan=$request->pelan_peruntukan_tahunan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_spesifikasi=$request->pelan_tarikh_penyediaan_spesifikasi;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_doc_tender=$request->pelan_tarikh_penyediaan_doc_tender;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_persidangan=$request->pelan_tarikh_perlaksanaan_persidangan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_sst_dikeluarkan=$request->pelan_tarikh_sst_dikeluarkan;
        // $perancangan->id=$request->perancangan_id;

        $fizaPelanPerancanganPerolehan->save();

        if($request->status_pelan=="Diluluskan"){
            Mail::to($receiver->email)->send(new KelulusanPelanPerancangan);
           }
    
           else if($request->status_pelan=="Semak Semula"){
            Mail::to($receiver2->email)->send(new SemakanPelanPerancangan);
           }
        // dd($perancangan->status);

        return redirect('/indexpelulus');
    }

    public function cetakpelan($id)
    {
        // dd($id);
        $fizaPelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $user = User::where([['id', $fizaPelanPerancanganPerolehan->pelan_pengesah],
            ['id', $fizaPelanPerancanganPerolehan->pelan_pelulus]])->get();
       

        $fizaPelanPerancanganPerolehan->pelan_status=$fizaPelanPerancanganPerolehan->pelan_status; 
        $fizaPelanPerancanganPerolehan->save();

        $pdf = PDF::loadView('pdf.pelanperancangan', [
            'fizaPelanPerancanganPerolehan' => $fizaPelanPerancanganPerolehan, 
            'user'=>$user]);
            return $pdf->download($fizaPelanPerancanganPerolehan->pelan_title.'.pdf');
    }
    



}
