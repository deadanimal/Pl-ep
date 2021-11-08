<?php

namespace App\Http\Controllers;

use App\Models\FizaNotaMinta;
use App\Models\FizaItemInfo;
use App\Models\FizaKatalog;
use Illuminate\Http\Request;

class FizaNotaMintaController extends Controller
{

    public function index()
    {
        $fizaNotaMinta = FizaNotaMinta::all();
        return view ('1_nota_minta.index',[
            'fizaNotaMinta'=>$fizaNotaMinta]);

    }


    public function create()
    {
        return view('1_nota_minta.create');
    }


    public function store(Request $request)
    {
        
        $fizaNotaMinta = new FizaNotaMinta;

        $fizaNotaMinta->pembekal_id=$request->pembekal_id;
        $fizaNotaMinta->ro_kaedah=$request->ro_kaedah;
        $fizaNotaMinta->ro_jenis_perolehan=$request->ro_jenis_perolehan;
        $fizaNotaMinta->ro_tempoh_penghantaran=$request->ro_tempoh_penghantaran;
        $fizaNotaMinta->ro_jumlah=$request->ro_jumlah;
        $fizaNotaMinta->ro_pelulus=$request->ro_pelulus;
        $fizaNotaMinta->ro_pelulus_catatan=$request->ro_pelulus_catatan;
        $fizaNotaMinta->ro_pelulus_date=$request->ro_pelulus_date;
        $fizaNotaMinta->ro_status="Sedang di Proses";
        // $fizaNotaMinta->ro_created_by=$request->ro_created_by;
        $fizaNotaMinta->kart_id=$request->kart_id;
        $fizaNotaMinta->user_id=$request->user_id;

        $fizaNotaMinta->save();
        return redirect('/ItemInfo');
    }
    


    public function show(FizaNotaMinta $fizaNotaMinta)
    {
        //
    }

    public function edit($id)
    {
        $fizaNotaMinta = FizaNotaMinta::find($id);
        return view ('1_nota_minta.edit',[
            'NotaMinta'=>$fizaNotaMinta]);
    }

    public function update(Request $request,$id)
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
        // $fizaNotaMinta->ro_updated_by=$request->ro_updated_by;
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
