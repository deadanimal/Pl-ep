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
        $role=Auth::user()->roles;
        //dd($role->id[0]);

        if($role[0]->id=='1'){
            $pelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::all();
            return view ('1_pelan_perancangan.index',[
                'pelanPerancanganPerolehan'=>$pelanPerancanganPerolehan
            ]);
    
        }

        else{

            $pelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::where('pelan_created_by',Auth::user()->user_name)->get();
            return view ('1_pelan_perancangan.index',[
                'pelanPerancanganPerolehan'=>$pelanPerancanganPerolehan
            ]);
        }
       
    }


    public function create()
    {
        $user=User::where('jenis','pekerja')
        ->where('user_status','aktif')->get();
        // ->orWhere('jenis','pembekal')->get();
        // dd($user);
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
        // $fizaPelanPerancanganPerolehan->pelan_category=$request->pelan_category;
        $fizaPelanPerancanganPerolehan->pelan_method=$request->pelan_method;

        $fizaPelanPerancanganPerolehan->pelan_invitation_date=$request->pelan_invitation_date;
        $fizaPelanPerancanganPerolehan->pelan_estimated_amount=$request->pelan_estimated_amount;
        $fizaPelanPerancanganPerolehan->pelan_catatan=$request->pelan_catatan;
        // $fizaPelanPerancanganPerolehan->pelan_status="Menunggu Pengesahan";
        $fizaPelanPerancanganPerolehan->pelan_pengesah=$request->pelan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pengesah=$request->pelan_catatan_pengesah;
        $fizaPelanPerancanganPerolehan->pelan_pelulus=$request->pelan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_catatan_pelulus=$request->pelan_catatan_pelulus;
        $fizaPelanPerancanganPerolehan->pelan_created_by=Auth::user()->id;
        // $fizaPelanPerancanganPerolehan->user_id=$request->user_id;

        $fizaPelanPerancanganPerolehan->pelan_peruntukan_tahunan=$request->pelan_peruntukan_tahunan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_spesifikasi=$request->pelan_tarikh_penyediaan_spesifikasi;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penilaian_tender=$request->pelan_tarikh_penilaian_tender;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_penyediaan_doc_tender=$request->pelan_tarikh_penyediaan_doc_tender;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_persidangan=$request->pelan_tarikh_perlaksanaan_persidangan;
        $fizaPelanPerancanganPerolehan->pelan_tarikh_sst_dikeluarkan=$request->pelan_tarikh_sst_dikeluarkan;

        $receiver = User::where('id',$request->pelan_pengesah)->first();

        if ($request->status_pelan=="hantar"){
            $fizaPelanPerancanganPerolehan->pelan_status="Menunggu pengesahan";

            Mail::to($receiver->email)->send(new PelanPerancangan($fizaPelanPerancanganPerolehan));
            //System Notification
            $notification_obj = (object)[];
            $notification_obj->noti_type ='';
            $notification_obj->noti_template='';
            $notification_obj->noti_subject='Pelan Perancangan Perolehan';
            $notification_obj->noti_content=$fizaPelanPerancanganPerolehan->pelan_created_by.' Telah Menghantar dan sedang menunggu pengesahan daripada anda ';
            $notification_obj->noti_status= $fizaPelanPerancanganPerolehan->pelan_status;
            $notification_obj->user_id = $receiver->id;

            app('App\Http\Controllers\FizaNotificationCenterController')->store($notification_obj);

            //audit log;
            $item ="Pelan Perancangan Perolehan";
            $user_id=Auth::user()->id;
            $description =$fizaPelanPerancanganPerolehan->pelan_created_by.' Telah Menghantar '. $item ;
            $log_item = [$item, $description, $user_id];

            app('App\Http\Controllers\AuditLogController')->log($log_item);

        }
        else if($request->status_pelan=="draf"){
            $fizaPelanPerancanganPerolehan->pelan_status="Draf";
            
        }

        $fizaPelanPerancanganPerolehan->save();
        $fizaPelanPerancanganPerolehan->pelan_no_siri='PL/PerancanganPerolehan/'.date('Y').'/'.$fizaPelanPerancanganPerolehan->id;
        $fizaPelanPerancanganPerolehan->save();


   
        return redirect('/PelanPerancanganPerolehan')->with('success', 'Data telah berjaya disimpan!');

    }
    
    public function show(FizaPelanPerancanganPerolehan $fizaPelanPerancanganPerolehan)
    {
        //
    }


    public function edit($id)
    {
        // $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $pengesah = User::where('id', $PelanPerancanganPerolehan->pelan_pelulus)->get()->first();
        $pelulus = User::where('id', $PelanPerancanganPerolehan->pelan_pengesah)->get()->first();
            
        return view ('1_pelan_perancangan.edit',[
            'PelanPerancanganPerolehan'=>$PelanPerancanganPerolehan,
            'pengesah'=>$pengesah,
            'pelulus'=>$pelulus
        ]);

    }


    public function update(Request $request,$id)
    {
        $fizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::find($id);

        $fizaPelanPerancanganPerolehan->pelan_jenis=$request->pelan_jenis;
        $fizaPelanPerancanganPerolehan->pelan_year=$request->pelan_year;
        $fizaPelanPerancanganPerolehan->pelan_title=$request->pelan_title;
        $fizaPelanPerancanganPerolehan->pelan_description=$request->pelan_description;
        // $fizaPelanPerancanganPerolehan->pelan_category=$request->pelan_category;
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
        // $receiver = User::where('id',$request->pelan_pengesah)->first();
        // Mail::to($receiver->email)->send(new PelanPerancangan);
        

        return redirect('/PelanPerancanganPerolehan')->with('success', 'Pelan Perancangan telah disimpan dan dihantar untuk pengesahan!');
    }


    public function destroy($id)
    {
        $PelanPerancanganPerolehan=FizaPelanPerancanganPerolehan::where('id',$id)->first();

        $PelanPerancanganPerolehan->delete();
        return redirect('/PelanPerancanganPerolehan')->with('success', 'Data telah dipadam!');

    }

    public function indexpengesah()
    {

        $fizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::where('pelan_pengesah',Auth::user()->id)->orWhere('pelan_status','Menunggu Pengesahan')->
        get();

        return view ('1_pelan_perancangan.index_pengesah',[
            'fizaPelanPerancanganPerolehan'=>$fizaPelanPerancanganPerolehan]);
            

    }

    public function editpengesah($id)
    {
        // $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::where('id',$id)->first();
        $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $pengesah = User::where('id', $PelanPerancanganPerolehan->pelan_pelulus)->get()->first();
        $pelulus = User::where('id', $PelanPerancanganPerolehan->pelan_pengesah)->get()->first();

        // dd($user,$user2);
        // dd($PelanPerancanganPerolehan);
        return view('1_pelan_perancangan.edit_pengesah', [
            'PelanPerancanganPerolehan'=>$PelanPerancanganPerolehan,
            // 'user'=>$user,
            'pengesah'=>$pengesah,
            'pelulus'=>$pelulus
        ]);
    }

    


    public function updatepengesah(Request $request,FizaPelanPerancanganPerolehan $pelanPerancanganPerolehan)
    {
       $PelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::where('id',$request->perancangan_id)->first();
    //    $fizaPelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
    //    $fizaPelanPerancanganPerolehan=FizaPelanPerancanganPerolehan::where('id',$request->perancangan_id)->first();

        $PelanPerancanganPerolehan->pelan_jenis=$request->pelan_jenis;
        $PelanPerancanganPerolehan->pelan_year=$request->pelan_year;
        $PelanPerancanganPerolehan->pelan_title=$request->pelan_title;
        $PelanPerancanganPerolehan->pelan_description=$request->pelan_description;
        // $PelanPerancanganPerolehan->pelan_category=$request->pelan_category;
        $PelanPerancanganPerolehan->pelan_method=$request->pelan_method;

        $PelanPerancanganPerolehan->pelan_invitation_date=$request->pelan_invitation_date;
        $PelanPerancanganPerolehan->pelan_estimated_amount=$request->pelan_estimated_amount;
        $PelanPerancanganPerolehan->pelan_catatan=$request->pelan_catatan;
        $PelanPerancanganPerolehan->pelan_status=$request->pelan_status;
        $PelanPerancanganPerolehan->pelan_pengesah=$request->pelan_pengesah;
        $PelanPerancanganPerolehan->pelan_catatan_pengesah=$request->pelan_catatan_pengesah;
        $PelanPerancanganPerolehan->pelan_pelulus=$request->pelan_pelulus;
        $PelanPerancanganPerolehan->pelan_catatan_pelulus=$request->pelan_catatan_pelulus;
        // $PelanPerancanganPerolehan->pelan_created_by=$request->pelan_created_by;
        // $PelanPerancanganPerolehan->user_id=$request->user_id;

        $PelanPerancanganPerolehan->pelan_peruntukan_tahunan=$request->pelan_peruntukan_tahunan;
        $PelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        $PelanPerancanganPerolehan->pelan_tarikh_penyediaan_spesifikasi=$request->pelan_tarikh_penyediaan_spesifikasi;
        $PelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan=$request->pelan_tarikh_perlaksanaan_iklan;
        // $PelanPerancanganPerolehan->pelan_penyediaan_doc_tender=$request->pelan_penyediaan_doc_tender;
        $PelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_persidangan=$request->pelan_tarikh_perlaksanaan_persidangan;
        $PelanPerancanganPerolehan->pelan_tarikh_sst_dikeluarkan=$request->pelan_tarikh_sst_dikeluarkan;
    

        // dd($request);

        if($request->status_pelan=="Menunggu Kelulusan"){
            $PelanPerancanganPerolehan->pelan_status="Menunggu Kelulusan";
            $receiver = User::where('id',$request->pelan_pelulus)->first();
            Mail::to($receiver->email)->send(new KelulusanPelanPerancangan);
           }
    
           else if($request->status_pelan=="Semak Semula"){
            $PelanPerancanganPerolehan->pelan_status="Semak Semula";
            $receiver2= User::where('user_name',$fizaPelanPerancanganPerolehan->pelan_created_by)->first();
            Mail::to($receiver2->email)->send(new SemakanPelanPerancangan);
            
           }
        $PelanPerancanganPerolehan->save();



       
       
    
        // dd($perancangan->status);

        return redirect('/indexpengesah')->with('success','Pelan telah berjaya dikemaskini!');

    }


    public function indexpelulus()
    {

        $fizaPelanPerancanganPerolehan = FizaPelanPerancanganPerolehan::where('pelan_status','Menunggu Kelulusan')   
        ->orWhere('pelan_pelulus',Auth::user()->id)->get();

        return view ('1_pelan_perancangan.index_pelulus',[
            'fizaPelanPerancanganPerolehan'=>$fizaPelanPerancanganPerolehan
        ]);

    }

    public function editpelulus($id)
    {
        // $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::where('id',$id)->first();
        $PelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $pengesah = User::where('id', $PelanPerancanganPerolehan->pelan_pengesah)->get()->first();
        $pelulus = User::where('id', $PelanPerancanganPerolehan->pelan_pelulus)->get()->first();


        return view ('1_pelan_perancangan.edit_pelulus',[
            'PelanPerancanganPerolehan'=>$PelanPerancanganPerolehan, 
            'pengesah'=>$pengesah,
            'pelulus'=>$pelulus
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
        // $fizaPelanPerancanganPerolehan->pelan_category=$request->pelan_category;
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

        // dd($request);

        if($request->status_pelan=="Diluluskan"){
            Mail::to($receiver->email)->send(new KelulusanPelanPerancangan);
           }
    
           else if($request->status_pelan=="Semak Semula"){
            Mail::to($receiver2->email)->send(new SemakanPelanPerancangan);
           }
        $fizaPelanPerancanganPerolehan->save();

        
        // dd($perancangan->status);

        return redirect('/indexpelulus')->with('success','Pelan telah dikemaskini!');
    }

    public function cetakpelan($id)
    {
        // dd($id);
        $fizaPelanPerancanganPerolehan= FizaPelanPerancanganPerolehan::find($id);
        $user = User::where('id', $fizaPelanPerancanganPerolehan->pelan_pengesah)->where
            ('id', $fizaPelanPerancanganPerolehan->pelan_pelulus)->get();
       

        $fizaPelanPerancanganPerolehan->pelan_status=$fizaPelanPerancanganPerolehan->pelan_status; 
        $fizaPelanPerancanganPerolehan->save();

        $pdf = PDF::loadView('pdf.pelanperancangan', [
            'fizaPelanPerancanganPerolehan' => $fizaPelanPerancanganPerolehan, 
            'user'=>$user]);
            return $pdf->download($fizaPelanPerancanganPerolehan->pelan_title.'.pdf');
    }




}
