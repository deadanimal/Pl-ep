<?php

namespace App\Http\Controllers;

use App\Models\FizaKehadiranTaklimat;
use App\Models\FizaPembelianSebutTender;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaKehadiranTaklimatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $role=Auth::user()->roles;
        //dd($role->id[0]);
        if($role[0]->id=='1'){

            $pst = FizaPembelianSebutTender::where('pst_status','diluluskan')->get();
            $fizaKehadiranTaklimat = FizaKehadiranTaklimat::all();


            return view ('1_kehadiran_taklimat.index',[
                'KehadiranTaklimat'=>$fizaKehadiranTaklimat,
                'pst'=>$pst 
                ]);
        }

        else{

                $pst = FizaPembelianSebutTender::where('pst_status','diluluskan')
                ->where('kehadiran_created_by',Auth::user()->id)->get();
            //$fizaKehadiranTaklimat = FizaKehadiranTaklimat::where('pst_id',$pst->id)->first()->get();

                

                return view ('1_kehadiran_taklimat.index',[
                    'KehadiranTaklimat'=>$fizaKehadiranTaklimat,
                    'pst'=>$pst
                ]);
                }
    }

   
    public function create($id)
    {
        $pst = FizaPembelianSebutTender::find($id); 

        return view('/1_kehadiran_taklimat.create', [
            'pst'=>$pst
        ]);
    }

    public function store(Request $request)
    {
        $fizaKehadiranTaklimat = new FizaKehadiranTaklimat;

        $fizaKehadiranTaklimat->pst_id=$request->pst_id;
        $fizaKehadiranTaklimat->pembekal_id=$request->pembekal_id;
        $fizaKehadiranTaklimat->kehadiran_nama=$request->kehadiran_nama;
        $fizaKehadiranTaklimat->kehadiran_pengenalan_no=$request->kehadiran_pengenalan_no;
        $fizaKehadiranTaklimat->kehadiran_no_tel=$request->kehadiran_no_tel;
        $fizaKehadiranTaklimat->kehadiran_email=$request->kehadiran_email;
        $fizaKehadiranTaklimat->status=$request->status;
        $fizaKehadiranTaklimat->link=$request->link;
        $fizaKehadiranTaklimat->kehadiran_created_by=Auth::user()->id;

        $fizaKehadiranTaklimat->save();
        return redirect('/KehadiranTaklimat');
    }


    public function show(FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        //
    }


    public function edit($id)
    {
        $kehadiran = FizaKehadiranTaklimat::find($id);
        $pst=FizaPembelianSebutTender::where('id',$kehadiran->id)->get();

        return view ('1_kehadiran_taklimat.edit',[
            'kehadiran'=>$kehadiran,
            'pst'=>$pst
        ]);
    }

    public function update(Request $request, FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        $fizaKehadiranTaklimat->pst_id=$request->pst_id;
        $fizaKehadiranTaklimat->pembekal_id=$request->pembekal_id;
        $fizaKehadiranTaklimat->kehadiran_nama=$request->kehadiran_nama;
        $fizaKehadiranTaklimat->kehadiran_pengenalan_no=$request->kehadiran_pengenalan_no;
        $fizaKehadiranTaklimat->kehadiran_no_tel=$request->kehadiran_no_tel;
        $fizaKehadiranTaklimat->kehadiran_email=$request->kehadiran_email;
        $fizaKehadiranTaklimat->kehadiran_status=$request->kehadiran_status;
        $fizaKehadiranTaklimat->kehadiran_link=$request->kehadiran_link;
        $fizaKehadiranTaklimat->kehadiran_updated_by=Auth::user()->id;

        $fizaKehadiranTaklimat->save();
        return redirect('/fizaKehadiranTaklimat');
    }


    public function destroy(FizaKehadiranTaklimat $fizaKehadiranTaklimat)
    {
        //
    }
}
