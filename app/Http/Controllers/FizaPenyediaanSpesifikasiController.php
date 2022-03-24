<?php

namespace App\Http\Controllers;

use App\Models\FizaPenyediaanSpesifikasi;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaJawatankuasa;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaPenyediaanSpesifikasiController extends Controller
{

    public function index(){

        $role=Auth::user()->roles;

        if ($role[0]->id=='1'){
            $spesifikasi = FizaPenyediaanSpesifikasi::all();
            // $pst=FizaPembelianSebutTender::where('id',$spesifikasi->pst_id)->get();

            // $pst = FizaPembelianSebutTender::table('fiza_pembelian_sebut_tenders')
            // ->join('fiza_penyediaan_spesifikasis', 'fiza_pembelian_sebut_tenders.id', '=', 'fiza_penyediaan_spesifikasis.pst_id')
            // ->select('fiza_penyediaan_spesifikasis.*', 'fiza_pembelian_sebut_tenders.pst_id')
            // ->get();


            foreach ($spesifikasi as $spesifikasi) {
                $pst = FizaPembelianSebutTender::where('id',$spesifikasi->pst_id)
                ->with('penyediaanSpesifikasi')
                ->first()->get();
            }

                // $jawatankuasa=FizaJawatankuasa::where('pst_id', $pst->id)->with('sebuthargatender')->first();
                // $urusetia = User::where('id', $jawatankuasa->jawatankuasa_spesikasi_urusetia)->first();
                // $pengerusi = User::where('id', $jawatankuasa->jawatankuasa_spesikasi_pengerusi)->first();
                // $ajk = User::where('id', $jawatankuasa->jawatankuasa_spesikasi_ajk)->first();
            // }


                return view('1_penyediaan_spesifikasi.index-admin', [
                // 'pst'=>$pst,
                // 'jawatankuasa'=>$jawatankuasa,
                'spesifikasi'=>$spesifikasi
                // 'urusetia'=>$urusetia,
                // 'ajk'=>$ajk,
                // 'pengerusi'=>$pengerusi
                 ]);
            }



        else {
            $spesifikasi = FizaPenyediaanSpesifikasi::where('spesifikasi_created_by', Auth::user()->id)->get();

            foreach ($spesifikasi as $spesifikasi) {
                $pst = FizaPembelianSebutTender::where('pst_status', 'diluluskan')
                ->where('id', $spesifikasi->pst_id)
                ->with('penyediaanSpesifikasi')
                ->first();
            }

                $jawatankuasa=FizaJawatankuasa::where('pst_id', $pst->id)->with('sebuthargatender')->first();
                $urusetia = User::where('id', $jawatankuasa->jawatankuasa_spesikasi_urusetia)->first();
                $pengerusi = User::where('id', $jawatankuasa->jawatankuasa_spesikasi_pengerusi)->first();
                $ajk = User::where('id', $jawatankuasa->jawatankuasa_spesikasi_ajk)->first();

                return view('1_penyediaan_spesifikasi.index', [
                'pst'=>$pst,
                'jawatankuasa'=>$jawatankuasa,
                'spesifikasi'=>$spesifikasi,
                'urusetia'=>$urusetia,
                'ajk'=>$ajk,
                'pengerusi'=>$pengerusi
                ]);
            }
        }





    public function create($id)
    {
        $pst = FizaPembelianSebutTender::find($id);
        $pelulus = User::where('id',$pst->pst_pelulus)->first();


            // dd($pelulus);
        return view ('1_penyediaan_spesifikasi.create',[
            'pst'=>$pst,
            'pelulus'=>$pelulus
            ]);
    }

    public function store(Request $request)
    {
        $fizaPenyediaanSpesifikasi = new FizaPenyediaanSpesifikasi;

        $fizaPenyediaanSpesifikasi->pst_id=$request->pst_id;
        $fizaPenyediaanSpesifikasi->spesifikasi_tajuk=$request->spesifikasi_tajuk;
        $fizaPenyediaanSpesifikasi->spesifikasi_jenis_barang=$request->spesifikasi_jenis_barang;
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


        $fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan=$request->spesifikasi_jumlah_skor_kewangan;
        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan=$request->spesifikasi_skor_lulus_kewangan;

        if ($request->hasFile('spesifikasi_skema_kewangan')) {
            $spesifikasi_skema_kewangan=$request->file('spesifikasi_skema_kewangan')->store('spesifikasi_skema_kewangan');
            $fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan=$spesifikasi_skema_kewangan;
        }

        $fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan=$request->spesifikasi_skor_lulus_keseluruhan;
        $fizaPenyediaanSpesifikasi->spesifikasi_alamat_penghantaran=$request->spesifikasi_alamat_penghantaran;
        $fizaPenyediaanSpesifikasi->spesifikasi_catatan=$request->spesifikasi_catatan;
        $fizaPenyediaanSpesifikasi->spesifikasi_created_by = Auth::user()->id;

        if ($request->status_spesifikasi=="hantar"){
            $fizaPenyediaanSpesifikasi->spesifikasi_status="menunggu semakan";

        }
        else if($request->status_spesifikasi=="draf"){
            $fizaPenyediaanSpesifikasi->spesifikasi_status="Draf";
        }

        $fizaPenyediaanSpesifikasi->save();


        // $jadual=new FizaJadualPemenuhan;

        // $jadual->spesifikasi_id = $request->spesifikasi_id




        return redirect('/PenyediaanSpesifikasi')->with('success','Data telah berjaya disimpan!');
    }


    public function show($id)
    {
        $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::findOrFail($id);
        $pst = FizaPembelianSebutTender::where('id',$PenyediaanSpesifikasi->id)->first();

        return view ('1_penyediaan_spesifikasi.show',[
            'PenyediaanSpesifikasi'=>$PenyediaanSpesifikasi,
            'pst'=>$pst]);
    }


    public function edit($id)

    {
        $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::findOrFail($id);

        $pst = FizaPembelianSebutTender::where('id',$PenyediaanSpesifikasi->id)->first();


        // dd($urusetia);
        if($PenyediaanSpesifikasi->spesifikasi_status=='menunggu semakan'){
        // dd($PenyediaanSpesifikasi);

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
        $penyediaanSpesifikasi = FizaPenyediaanSpesifikasi::find($id);

        $penyediaanSpesifikasi->pst_id=$request->pst_id;
        $penyediaanSpesifikasi->spesifikasi_tajuk=$request->spesifikasi_tajuk;
        $penyediaanSpesifikasi->spesifikasi_jenis_barang=$request->spesifikasi_jenis_barang;
        $penyediaanSpesifikasi->spesifikasi_description=$request->spesifikasi_description;
        $penyediaanSpesifikasi->spesifikasi_unit_ukuran=$request->spesifikasi_unit_ukuran;
        $penyediaanSpesifikasi->spesifikasi_jenis_harga=$request->spesifikasi_jenis_harga;
        $penyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif=$request->spesifikasi_jumlah_harga_indikatif;

        $penyediaanSpesifikasi->spesifikasi_jumlah_harga=$request->spesifikasi_jumlah_harga;
        $penyediaanSpesifikasi->spesifikasi_skor_maksima=$request->spesifikasi_skor_maksima;
        $penyediaanSpesifikasi->spesifikasi_jumlah_skor_teknikal=$request->spesifikasi_jumlah_skor_teknikal;
        $penyediaanSpesifikasi->spesifikasi_skor_lulus_teknikal=$request->spesifikasi_skor_lulus_teknikal;
        $penyediaanSpesifikasi->spesifikasi_updated_by = Auth::user()->id;


        if ($request->hasFile('spesifikasi_skema_teknikal')) {
            $spesifikasi_skema_teknikal=$request->file('spesifikasi_skema_teknikal')->store('spesifikasi_skema_teknikal');
            $penyediaanSpesifikasi->spesifikasi_skema_teknikal=$spesifikasi_skema_teknikal;
        }


        $penyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan=$request->spesifikasi_jumlah_skor_kewangan;
        $penyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan=$request->spesifikasi_skor_lulus_kewangan;

        if ($request->hasFile('spesifikasi_skema_kewangan')) {
            $spesifikasi_skema_kewangan=$request->file('spesifikasi_skema_kewangan')->store('spesifikasi_skema_kewangan');
            $penyediaanSpesifikasi->spesifikasi_skema_kewangan=$spesifikasi_skema_kewangan;
        }

        $penyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan=$request->spesifikasi_skor_lulus_keseluruhan;
        $penyediaanSpesifikasi->spesifikasi_alamat_penghantaran=$request->spesifikasi_alamat_penghantaran;
        $penyediaanSpesifikasi->spesifikasi_catatan=$request->spesifikasi_catatan;;

        $urusetia=User::where('id',$penyediaanSpesifikasi->spesifikasi_created_by)->first();

        if ($request->status_spesifikasi=="hantar"){
            $penyediaanSpesifikasi->spesifikasi_status="menunggu kelulusan spesifikasi";
            $penyediaanSpesifikasi->save();
            Mail::to($urusetia->email)->send(new PenyediaanSpesifikasiSebutHarga($penyediaanSpesifikasi));
            return redirect('/PenyediaanSpesifikasi')->with('success','Spesifikasi telah berjaya disahkan!');
        }

        elseif ($request->status_spesifikasi=="lulus"){
            $penyediaanSpesifikasi->spesifikasi_status="diluluskan";
            $penyediaanSpesifikasi->save();
            Mail::to($urusetia->email)->send(new PenyediaanSpesifikasiSebutHarga($penyediaanSpesifikasi));
            return redirect('/PenyediaanSpesifikasi')->with('success','Spesifikasi telah diluluskan');
        }

        elseif($request->status_spesfikasi=="ditolak"){
            $penyediaanSpesifikasi->spesifikasi_status="ditolak";
            $penyediaanSpesifikasi->save();
            Mail::to($urusetia->email)->send(new PenyediaanSpesifikasiSebutHarga($penyediaanSpesifikasi));

            return redirect('/PenyediaanSpesifikasi')->with('success','Data telah berjaya dikemaskini!');

        }




    }


    public function destroy($id)

    {
        $PenyediaanSpesifikasi = FizaPenyediaanSpesifikasi::where('id',$id)->first();

        $PenyediaanSpesifikasi->delete();

        return  redirect('/PenyediaanSpesifikasi')->with('message','Data telah berjaya dipadam!');
    }
}
