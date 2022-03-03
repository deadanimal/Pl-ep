<?php

namespace App\Http\Controllers;

use App\Models\FizaPenyediaanSpesifikasi;
use App\Models\FizaPembelianSebutTender;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPenyediaanSpesifikasiController extends Controller
{

    public function index()

    {   
            $role=Auth::user()->roles;
            
            //dd($role->id[0]);
            if($role[0]->id=='1'){
                $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::all();
                $pst = FizaPembelianSebutTender::where('pst_status','diluluskan')->get();


                return view ('1_penyediaan_spesifikasi.index',[
                    'PenyediaanSpesifikasi'=>$PenyediaanSpesifikasi
                ]);
            }
    
            else{

                $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::where('spesifikasi_created_by',Auth::user()->id)->get();
                $ajk = FizaJawatankuasa::where($jawatankuasa->jawatankuasa_spesifikasi_ajk,Auth::user()->id)->get();
                $pengerusi= FizaJawatankuasa::where($jawatankuasa->jawatankuasa_spesifikasi_pengerusi,Auth::user()->id)->get();
                $urusetia= FizaJawatankuasa::where($jawatankuasa->jawatankuasa_spesifikasi_urusetia,Auth::user()->id)->get();

                return view ('1_penyediaan_spesifikasi.index',[
                    'PenyediaanSpesifikasi'=>$PenyediaanSpesifikasi,
                    'ajk'=>$ajk,
                    'pengerusi'=>$pengerusi,
                    'urusetia'=>$urusetia
                ]);
            }
            
                
       

                // if($PenyediaanSpesifikasi->spesifikasi_status=='menunggu semakan')
                // {
                //     $pst=FizaPembelianSebutTender::where('pst_status','diluluskan')->get();
                //     $jawatankuasa=FizaJawatankuasa::where('pst_id',$pst->id)
                //     ->where('jawatankuasa_spesifikasi_pengerusi',Auth::user()->id)
                //     ->orWhere('jawatankuasa_spesifikasi_ajk',Auth::user()->id)
                //     ->orWhere('jawatankuasa_spesifikasi_urusetia',Auth::user()->id)->get();

                //     $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::where([
                //         ['pst_id',$pst->id],
                //         ['pst_id',$jawatankuasa->pst_id]
                //         ])->get();



                //     return view ('1_penyediaan_spesifikasi.index',[
                //     'PenyediaanSpesifikasi'=>$PenyediaanSpesifikasi]);
                // }

                // elseif($PenyediaanSpesifikasi->spesifikasi_status=='menunggu kelulusan spesifikasi')
                // {
                //     $pst=FizaPembelianSebutTender::where('pst_status','diluluskan')->get();
                //     $jawatankuasa=FizaJawatankuasa::where('pst_id',$pst->id)
                //     ->where('jawatankuasa_spesifikasi_pengerusi',Auth::user()->id)
                //     ->orWhere('jawatankuasa_spesifikasi_ajk',Auth::user()->id)
                //     ->orWhere('jawatankuasa_spesifikasi_urusetia',Auth::user()->id)->get();

                //     $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::where('spesifikasi_status','diluluskan')
                //     ->where([
                //         ['pst_id',$pst->id],
                //         ['pst_id',$jawatankuasa->pst_id]
                //         ])->get();



                //     return view ('1_penyediaan_spesifikasi.index_kelulusan',[
                //     'PenyediaanSpesifikasi'=>$PenyediaanSpesifikasi]);
                // }
    
    }


    public function create($id)
    {
        $pst = FizaPembelianSebutTender::find($id);

        return view ('1_penyediaan_spesifikasi.create',[
            'pst'=>$pst
            ]);
    }

    public function store(Request $request)
    {
        $fizaPenyediaanSpesifikasi = new FizaPenyediaanSpesifikasi;

        $fizaPenyediaanSpesifikasi->pst_id=$request->pst_id;
        // $fizaPenyediaanSpesifikasi->sss_id=$request->sss_id;
        $fizaPenyediaanSpesifikasi->spesifikasi_tajuk=$request->spesifikasi_tajuk;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_barang=$request->spesifikasi_jenis_barang;
        // $fizaPenyediaanSpesifikasi->spesifikasi_status="Draf";
        $fizaPenyediaanSpesifikasi->spesifikasi_description=$request->spesifikasi_description;
        $fizaPenyediaanSpesifikasi->spesifikasi_unit_ukuran=$request->spesifikasi_unit_ukuran;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_harga=$request->spesifikasi_jenis_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif=$request->spesifikasi_jumlah_harga_indikatif;

        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga=$request->spesifikasi_jumlah_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_maksima=$request->spesifikasi_skor_maksima;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_teknikal=$request->spesifikasi_jumlah_skor_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_teknikal=$request->spesifikasi_skor_lulus_teknikal;

        if ($request->hasFile('spesifikasi_skema_teknikal')) {
            $spesifikasi_skema_teknikal=$request->file('spesifikasi_skema_teknikal')->store('spesifikasi_skema_teknikal');
            $fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal=$spesifikasi_skema_teknikal;
        }


        // $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan=$request->spesifikasi_jumlah_skor_kewangan;
        // $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan=$request->spesifikasi_skor_lulus_kewangan;
        if ($request->hasFile('spesifikasi_skema_kewangan')) {
            $spesifikasi_skema_kewangan=$request->file('spesifikasi_skema_kewangan')->store('spesifikasi_skema_kewangan');
            $fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$spesifikasi_skema_kewangan;
        }
        // $fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$request->spesifikasi_skema_kewangan;
        
        // $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan=$request->spesifikasi_skor_lulus_keseluruhan;
        $fizaPenyediaanSpesifikasi->spesifikasi_alamat_penghantaran=$request->spesifikasi_alamat_penghantaran;
        $fizaPenyediaanSpesifikasi->spesifikasi_catatan=$request->spesifikasi_catatan;
        $fizaPenyediaanSpesifikasi->spesifikasi_created_by = Auth::user()->id;

        if ($request->status_spesifikasi=="hantar"){
            $fizaPenyediaanSpesifikasi->spesifikasi_status="Menunggu semakan";

        }
        else if($request->status_spesifikasi=="draf"){
            $fizaPelanPerancanganPerolehan->spesifikasi_status="Draf";
        }

        $fizaPenyediaanSpesifikasi->save();
        return redirect('/PenyediaanSpesifikasi')->with('success','Data telah berjaya disimpan!');
    }


    public function show(FizaPenyediaanSpesifikasi $fizaPenyediaanSpesifikasi)
    {
        //
    }


    public function edit($id)

    {
        // $pst = FizaPembelianSebutTender::find($id);
        // $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::where('pst_id',$pst->id)->first();

        $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::find($id);
        $pst = FizaPembelianSebutTender::where('id',$PenyediaanSpesifikasi->pst_id)->first();


        // dd($PenyediaanSpesifikasi);
        if($PenyediaanSpesifikasi->spesifikasi_status=='menunggu semakan'){
            return view ('1_penyediaan_spesifikasi.edit',[
                'PenyediaanSpesifikasi'=>$PenyediaanSpesifikasi,
                'pst'=>$pst
            ]);
        }

        elseif($PenyediaanSpesifikasi->spesifikasi_status=='menunggu kelulusan spesifikasi'){
            return view ('1_penyediaan_spesifikasi.edit_kelulusan',[
                'PenyediaanSpesifikasi'=>$PenyediaanSpesifikasi,
                'pst'=>$pst
            ]);
        }
        
    }

    public function update(Request $request, $id)
    {
        $fizaPenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::find($id);


        $fizaPenyediaanSpesifikasi->pst_id=$request->pst_id;
        $fizaPenyediaanSpesifikasi->sss_id=$request->sss_id;
        $fizaPenyediaanSpesifikasi->spesifikasi_tajuk=$request->spesifikasi_tajuk;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_barang=$request->spesifikasi_jenis_barang;
        $fizaPenyediaanSpesifikasi->spesifikasi_status=$request->spesifikasi_status;
        $fizaPenyediaanSpesifikasi->spesifikasi_description=$request->spesifikasi_description;
        $fizaPenyediaanSpesifikasi->spesifikasi_unit_ukuran=$request->spesifikasi_unit_ukuran;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_harga=$request->spesifikasi_jenis_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif=$request->spesifikasi_jumlah_harga_indikatif;

        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga=$request->spesifikasi_jumlah_harga;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_maksima=$request->spesifikasi_skor_maksima;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_teknikal=$request->spesifikasi_jumlah_skor_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_teknikal=$request->spesifikasi_skor_lulus_teknikal;

        if ($request->hasFile('spesifikasi_skema_teknikal')) {
            $spesifikasi_skema_teknikal=$request->file('spesifikasi_skema_teknikal')->store('spesifikasi_skema_teknikal');
            $fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal=$spesifikasi_skema_teknikal;
        }

       // $fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal=$request->spesifikasi_skema_teknikal;
        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan=$request->spesifikasi_jumlah_skor_kewangan;

        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan=$request->spesifikasi_skor_lulus_kewangan;

        if ($request->hasFile('spesifikasi_skema_kewangan')) {
            $spesifikasi_skema_kewangan=$request->file('spesifikasi_skema_kewangan')->store('spesifikasi_skema_kewangan');
            $fizaPenyediaanKewangan->spesifikasi_skema_kewangan=$spesifikasi_skema_kewangan;
        }

        //$fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$request->spesifikasi_skema_kewangan;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan=$request->spesifikasi_skor_lulus_keseluruhan;
        $fizaPenyediaanSpesifikasi->spesifikasi_alamat_penghantaran=$request->spesifikasi_alamat_penghantaran;
        $fizaPenyediaanSpesifikasi->spesifikasi_catatan=$request->spesifikasi_catatan;


        if ($request->status_spesifikasi=="hantar"){
            $fizaPenyediaanSpesifikasi->spesifikasi_status="menunggu kelulusan spesifikasi";
            $fizaPenyediaanSpesifikasi->save();
            return redirect('/PenyediaanSpesifikasi')->with('success','Spesifikasi telah berjaya disahkan!');

        }

        elseif ($request->status_spesifikasi=="lulus"){
            $fizaPenyediaanSpesifikasi->spesifikasi_status="diluluskan";
            $fizaPenyediaanSpesifikasi->save();
            return redirect('/PenyediaanSpesifikasi')->with('success','Spesifikasi telah diluluskan');
        }

       
     

    }


    public function destroy($id)

    {
        $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::where('id',$id)->first();

        $PenyediaanSpesifikasi->delete();

        return  redirect('/PenyediaanSpesifikasi')->with('message','Data telah berjaya dipadam!');
    }
}
