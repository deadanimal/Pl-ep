<?php

namespace App\Http\Controllers;

use App\Models\FizaPembelianSebutTender;
use App\Models\FizaItemInfo;
use App\Models\FizaKatalog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FizaPembelianSebutTenderController extends Controller
{
  
    public function index()
    {
        $fizaPembelianSebutTender = FizaPembelianSebutTender::all();
        return view ('1_pst.index',[
            'fizaPembelianSebutTender'=>$fizaPembelianSebutTender]);
    }


    public function create()
    {
        $user=User::where('jenis','pekerja')->get();
        return view ('1_pst.create', [
            'user'=>$user
        ]);
    }


    public function store(Request $request)
    {
        $fizaPembelianSebutTender = new FizaPembelianSebutTender;

        $fizaPembelianSebutTender->pst_item_panel=$request->pst_item_panel;
        $fizaPembelianSebutTender->pst_sistem_panel=$request->pst_sistem_panel;
        $fizaPembelianSebutTender->pst_no1pp=$request->pst_no1pp;
        $fizaPembelianSebutTender->katalog_id=$request->katalog_id;
        $fizaPembelianSebutTender->pst_katalog_kumpulan=$request->pst_katalog_kumpulan;

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
        $fizaPembelianSebutTender->pst_status=$request->pst_status;
        $fizaPembelianSebutTender->pst_created_by=Auth::user()->user_name; 

        $fizaPembelianSebutTender->pst_jenis_potongan=$request->pst_jenis_potongan;
        $fizaPembelianSebutTender->pst_potongan_description=$request->pst_potongan_description;
        $fizaPembelianSebutTender->pst_amaun_potongan=$request->pst_amaun_potongan; 
        

        $fizaPembelianSebutTender->save();

        //audit log
        $item ="Sebutharga Tender";
        $user_id= Auth::user()->id;
        $description = "$fizaPembelianSebutTender->pst_created_by telah menghantar sebutharga untuk $fizaPembelianSebutTender->pst_item_panel";
        $log_item = [$item, $description, $user_id];
        app('App\Http\Controllers\AuditLogController')->log($log_item);


        return redirect('/PembelianSebutTender');
    }

    public function show(FizaPembelianSebutTender $fizaPembelianSebutTender)
    {
        //

    }


    public function edit($id)
    {
        $fizaPembelianSebutTender = FizaPembelianSebutTender::find($id);
        return view('1_pst.edit', [
            'PembelianSebutTender'=>$fizaPembelianSebutTender]);
    }


    public function update($id, Request $request)
    {
        $fizaPembelianSebutTender = FizaPembelianSebutTender::find($id);
        
        $fizaPembelianSebutTender->pst_item_panel=$request->pst_item_panel;
        $fizaPembelianSebutTender->pst_sistem_panel=$request->pst_sistem_panel;
        $fizaPembelianSebutTender->pst_no1pp=$request->pst_no1pp;
        $fizaPembelianSebutTender->katalog_id=$request->katalog_id;
        $fizaPembelianSebutTender->pst_katalog_kumpulan=$request->pst_katalog_kumpulan;

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
        $fizaPembelianSebutTender->pst_status=$request->pst_status;
        // $fizaPembelianSebutTender->pst_updated_by=$request->pst_updated_by;

        $fizaPembelianSebutTender->pst_jenis_potongan=$request->pst_jenis_potongan;
        $fizaPembelianSebutTender->pst_potongan_description=$request->pst_potongan_description;
        $fizaPembelianSebutTender->pst_amaun_potongan=$request->pst_amaun_potongan; 

       $fizaPembelianSebutTender->save();
        return redirect('/PembelianSebutTender');
    }

   
    public function destroy(FizaPembelianSebutTender $fizaPembelianSebutTender)
    {
        //
    }
}
