<?php

namespace App\Http\Controllers;

use App\Models\FizaCadangan;
use App\Models\FizaPenyediaanSpesifikasi;
use App\Models\FizaPembelianSebutTender;
use App\Models\FizaJawatankuasa;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaCadanganController extends Controller
{

    public function index()
    {
        $role=Auth::user()->roles;
        if($role[0]->id=='1'){

            $cadangan=FizaCadangan::all();
            $spesifikasi=FizaPenyediaanSpesifikasi::where('spesifikasi_status','diluluskan')->get();

                foreach($spesifikasi as $spesifikasi){
                    $pst=FizaPembelianSebutTender::where('id',$spesifikasi->pst_id)->get()->first();
                    $jawatankuasa=FizaJawatankuasa::where('pst_id',$pst->id)->get()->first();
                }

            return view ('1_cadangan.index',[
                'cadangan'=>$cadangan,
                'spesifikasi'=>$spesifikasi,
                'pst'=>$pst,
                'jawatankuasa'=>$jawatankuasa
            ]);
        }

        else{
            $spesifikasi=FizaPenyediaanSpesifikasi::where('spesifikasi_status', 'diluluskan')->get();
            foreach ($spesifikasi as $spesifikasi) {
                $cadangan = FizaCadangan::where('cadangan_created_by', Auth::user()->id)->first();
                $pst=FizaPembelianSebutTender::where('id', $spesifikasi->pst_id)->first();
                $jawatankuasa=FizaJawatankuasa::where('pst_id', $pst->id)->first();
            }

            return view('1_cadangan.index', [

                'cadangan'=>$cadangan,
                'spesifikasi'=>$spesifikasi,
                'pst'=>$pst,
                'jawatankuasa'=>$jawatankuasa

            ]);
        }





    }

    public function create($id)
    {

        $spesifikasi=FizaPenyediaanSpesifikasi::find($id);

        $pst=FizaPembelianSebutTender::where('id',$spesifikasi->pst_id)->first();

        return view('1_cadangan.create',[
            'spesifikasi'=>$spesifikasi,
            'pst'=>$pst
        ]);
    }


    public function store(Request $request)
    {
        $fizaCadangan = new FizaCadangan;

        $fizaCadangan->pembekal_id =Auth::user()->pembekal_id;
        $fizaCadangan->spesifikasi_id =$request->spesifikasi_id;
        $fizaCadangan->cadangan_mesyuarat_date=$request->cadangan_mesyuarat_date;
        $fizaCadangan->cadangan_mesyuarat_place =$request->cadangan_mesyuarat_place ;
        $fizaCadangan->cadangan_created_by=Auth::user()->id;
        $fizaCadangan->cadangan_mesyuarat_status="dalam semakan";

        $fizaCadangan->save();
        return redirect('/Cadangan')->with('success','Cadangan telah berjaya disimpan!');
    }


    public function show(FizaCadangan $fizaCadangan)
    {
        //
    }


    public function edit($id)
    {
        $cadangan = FizaCadangan::find($id);
        $spesifikasi=FizaPenyediaanSpesifikasi::where('id',$cadangan->spesifikasi_id)->first();
        $pst=FizaPembelianSebutTender::where('id',$spesifikasi->pst_id)->first();
        $pelulus=User::where('id',$pst->pst_pelulus)->first();
        // dd($fizaCadangan);

        if($cadangan->cadangan_mesyuarat_status=="dalam semakan"){
            return view('1_cadangan.edit2', [
                'cadangan'=>$cadangan,
                'spesifikasi'=>$spesifikasi,
                'pst'=>$pst,
                'pelulus'=>$pelulus
            ]);
        }

        else {
            return view('1_cadangan.edit-kelulusan', [
                'cadangan'=>$cadangan,
                'spesifikasi'=>$spesifikasi,
                'pst'=>$pst,
                'pelulus'=>$pelulus
            ]);
         }


    }


    public function update(Request $request, FizaCadangan $cadangan,$id)
    {
        $cadangan = FizaCadangan::find($id);

        $cadangan->pembekal_id =$request->pembekal_id ;
        $cadangan->spesifikasi_id =$request->spesifikasi_id ;
        $cadangan->cadangan_mesyuarat_date=$request->cadangan_mesyuarat_date;
        $cadangan->cadangan_mesyuarat_place =$request->cadangan_mesyuarat_place ;
        $cadangan->cadangan_updated_by=Auth::user()->id;
        $cadangan->cadangan_mesyuarat_status=$request->cadangan_mesyuarat_status;
        $cadangan->cadangan_kehadiran=$request->cadangan_kehadiran;
        $cadangan->cadangan_bil_pembekal_lulus_teknikal=$request->cadangan_bil_pembekal_lulus_teknikal;
        $cadangan->cadangan_bil_pembekal_lulus_kewangan=$request->cadangan_bil_pembekal_lulus_kewangan;
        $cadangan->cadangan_ulasan_penilaian=$request->cadangan_ulasan_penilaian;

        if ($request->status_cadangan=="lulus"){
            $cadangan->cadangan_mesyuarat_status="diluluskan";
            $cadangan->save();
        }

        elseif($request->status_cadangan=="sahkan"){
            $cadangan->cadangan_mesyuarat_status="menunggu pengesahan";

        }



   $cadangan->save();
        return redirect('/Cadangan')->with('success','Cadangan telah berjaya dikemaskini!');
    }


    public function destroy($id)
    {
        $Cadangan = FizaCadangan::where('id',$id)->first();
        $Cadangan->delete();

        return redirect('/Cadangan')->with('success','Cadangan telah berjaya dipadam!');
    }
}
