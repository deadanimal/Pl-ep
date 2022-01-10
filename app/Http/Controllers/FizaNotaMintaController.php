<?php

namespace App\Http\Controllers;

use App\Models\FizaNotaMinta;
use App\Models\FizaItemInfo;
use App\Models\FizaKatalog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class FizaNotaMintaController extends Controller
{
    public function index()
    {
        $role=Auth::user()->roles;
        //dd($role->id[0]);
        if($role[0]->id=='1'){
            $fizaNotaMinta = FizaNotaMinta::all();
            return view('1_nota_minta.index', [
                'fizaNotaMinta'=>$fizaNotaMinta
            ]);
        }

        else{
            $fizaNotaMinta = FizaNotaMinta::where('ro_created_by',Auth::user()->user_name)->get();
            return view('1_nota_minta.index', [
                'fizaNotaMinta'=>$fizaNotaMinta
            ]);
        }
    }


   
    


    public function create()
    {
        $user=User::where('jenis','pekerja')
        ->where('user_status','aktif')->get();
        // dd($user);
        return view('1_nota_minta.create', [
            'user'=>$user
        ]);

    }


    public function store(Request $request)
    {
        $fizaNotaMinta = new FizaNotaMinta;

        // $fizaNotaMinta->pembekal_id=$request->pembekal_id;
        $fizaNotaMinta->ro_kaedah=$request->ro_kaedah;
        $fizaNotaMinta->ro_jenis_perolehan=$request->ro_jenis_perolehan;
        $fizaNotaMinta->ro_tempoh_penghantaran=$request->ro_tempoh_penghantaran;
        $fizaNotaMinta->ro_jumlah=$request->ro_jumlah;
        $fizaNotaMinta->ro_pelulus=$request->ro_pelulus;
        // $fizaNotaMinta->ro_pelulus_catatan=$request->ro_pelulus_catatan;
        // $fizaNotaMinta->ro_pelulus_date=$request->ro_pelulus_date;
        $fizaNotaMinta->ro_status="Sedang di Proses";
        $fizaNotaMinta->ro_created_by=Auth::user()->user_name;
        // $fizaNotaMinta->kart_id=$request->kart_id;
        // $fizaNotaMinta->user_id=$request->user_id;

        // $value = $request->session()->put('id');
        // $temp = Session::get('id_pembekal');
        // $dokumen->id_pembekal=$temp;


        $fizaNotaMinta->save();

        // Session::put('pst_id',$fizaNotaMinta->id);//
        // $temp=Session::get('pst_id');

        $item ="Nota Minta";
        $user_id= Auth::user()->id;
        $description = "$fizaNotaMinta->ro_created_by telah menghantar nota minta untuk $fizaNotaMinta->ro_jenis_perolehan";
        $log_item = [$item, $description, $user_id];
        app('App\Http\Controllers\AuditLogController')->log($log_item);

        return redirect('/KatalogBelian/'.$fizaNotaMinta->id);
    }
    


    public function show(FizaNotaMinta $fizaNotaMinta)
    {
        //
    }

    public function edit($id)
    {
        $fizaNotaMinta = FizaNotaMinta::find($id);
        return view('1_nota_minta.edit', [
            'NotaMinta'=>$fizaNotaMinta]);
    }

    public function update(Request $request, $id)
    {
        $fizaNotaMinta = FizaNotaMinta::find($id);

        $fizaNotaMinta->pembekal_id=$request->pembekal_id;
        $fizaNotaMinta->ro_kaedah=$request->ro_kaedah;
        $fizaNotaMinta->ro_jenis_perolehan=$request->ro_jenis_perolehan;
        $fizaNotaMinta->ro_tempoh_penghantaran=$request->ro_tempoh_penghantaran;
        $fizaNotaMinta->ro_jumlah=$request->ro_jumlah;
        $fizaNotaMinta->ro_pelulus=$request->ro_pelulus;
        $fizaNotaMinta->ro_pelulus_catatan=$request->ro_pelulus_catatan;
        $fizaNotaMinta->ro_pelulus_date=$request->ro_pelulus_date;
        $fizaNotaMinta->ro_status=$request->ro_status;
        $fizaNotaMinta->ro_updated_by=Auth::user()->user_name;
        $fizaNotaMinta->kart_id=$request->kart_id;
        $fizaNotaMinta->user_id=$request->user_id;

        $fizaNotaMinta->save();
        return redirect('/NotaMinta');
    }

    public function destroy(FizaNotaMinta $fizaNotaMinta)
    {
        //
    }
}
