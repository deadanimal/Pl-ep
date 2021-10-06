<?php

namespace App\Http\Controllers;

use App\Models\FizaSijilDigital;
use Illuminate\Http\Request;

class FizaSijilDigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaSijilDigital = FizaSijilDigital::all();
        return view ('1_sijil_digital.index',[
            'fizaSijilDigital'=>$fizaSijilDigital]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_sijil_digital.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $fizaSijilDigital->sijil_id=$request->sijil_id;
        $fizaSijilDigital->user_id=$request->user_id;
        $fizaSijilDigital->sijil_peranan=$request->sijil_peranan;
        $fizaSijilDigital->sijil_doc_id=$request->sijil_doc_id;
        $fizaSijilDigital->sijil_mode_yuran=$request->sijil_mode_yuran;

        $fizaSijilDigital->sijil_yuran=$request->sijil_yuran;
        $fizaSijilDigital->sijil_cbp=$request->sijil_cbp;
        $fizaSijilDigital->sijil_jumlah_yuran=$request->sijil_jumlah_yuran;
        $fizaSijilDigital->sijil_modsijil_yuran_statuse_yuran=$request->sijil_yuran_status;
        $fizaSijilDigital->sijil_created_by=$request->sijil_created_by;

        $fizaSijilDigital->save();
        return redirect('/fizaSijilDigital');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaSijilDigital  $fizaSijilDigital
     * @return \Illuminate\Http\Response
     */
    public function show(FizaSijilDigital $fizaSijilDigital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaSijilDigital  $fizaSijilDigital
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaSijilDigital $fizaSijilDigital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaSijilDigital  $fizaSijilDigital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaSijilDigital $fizaSijilDigital)
    {
        $fizaSijilDigital->sijil_id=$request->sijil_id;
        $fizaSijilDigital->user_id=$request->user_id;
        $fizaSijilDigital->sijil_peranan=$request->sijil_peranan;
        $fizaSijilDigital->sijil_doc_id=$request->sijil_doc_id;
        $fizaSijilDigital->sijil_mode_yuran=$request->sijil_mode_yuran;

        $fizaSijilDigital->sijil_yuran=$request->sijil_yuran;
        $fizaSijilDigital->sijil_cbp=$request->sijil_cbp;
        $fizaSijilDigital->sijil_jumlah_yuran=$request->sijil_jumlah_yuran;
        $fizaSijilDigital->sijil_modsijil_yuran_statuse_yuran=$request->sijil_yuran_status;
        $fizaSijilDigital->sijil_updated_by=$request->sijil_updated_by;

        $url = '/fizaSijilDigital'.$fizaSijilDigital->id;
        return redirect('/fizaSijilDigital');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaSijilDigital  $fizaSijilDigital
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaSijilDigital $fizaSijilDigital)
    {
        //
    }
}
