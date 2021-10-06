<?php

namespace App\Http\Controllers;

use App\Models\FizaPesananTempatan;
use Illuminate\Http\Request;

class FizaPesananTempatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $fizaPesananTempatan = FizaPesananTempatan::all();
        return view ('1_pesanan_tempatan.edit',[
            'fizaPesananTempatan'=>$fizaPesananTempatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_pesanan_tempatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaPesananTempatan = new FizaPesananTempatan;

        $fizaPesananTempatan->user_id=$request->user_id;
        $fizaPesananTempatan->pembekal_id=$request->pembekal_id;
        $fizaPesananTempatan->pesanan_perihal=$request->pesanan_perihal;
        $fizaPesananTempatan->pesanan_kategori_jenis_perolehan=$request->pesanan_kategori_jenis_perolehan;
        $fizaPesananTempatan->pesanan_tempoh_penghantaran=$request->pesanan_tempoh_penghantaran;
        $fizaPesananTempatan->pesanan_tarikh_mula=$request->pesanan_tarikh_mula;
        $fizaPesananTempatan->pesanan_tarikh_akhir=$request->pesanan_tarikh_akhir;
        $fizaPesananTempatan->pesanan_tarikh_lulus=$request->pesanan_tarikh_lulus;
        $fizaPesananTempatan->pesanan_alamat_pengantaran=$request->pesanan_alamat_pengantaran;

        $fizaPesananTempatan->kart_id=$request->kart_id;
        $fizaPesananTempatan->pesanan_created_by =$request->pesanan_created_by;


        $fizafizaPesananTempatan->save();
        return redirect('/fizafizaPesananTempatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaPesananTempatan  $fizaPesananTempatan
     * @return \Illuminate\Http\Response
     */
    public function show(FizaPesananTempatan $fizaPesananTempatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaPesananTempatan  $fizaPesananTempatan
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaPesananTempatan $fizaPesananTempatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaPesananTempatan  $fizaPesananTempatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaPesananTempatan $fizaPesananTempatan)
    {
        $fizaPesananTempatan->user_id=$request->user_id;
        $fizaPesananTempatan->pembekal_id=$request->pembekal_id;
        $fizaPesananTempatan->pesanan_perihal=$request->pesanan_perihal;
        $fizaPesananTempatan->pesanan_kategori_jenis_perolehan=$request->pesanan_kategori_jenis_perolehan;
        $fizaPesananTempatan->pesanan_tempoh_penghantaran=$request->pesanan_tempoh_penghantaran;
        $fizaPesananTempatan->pesanan_tarikh_mula=$request->pesanan_tarikh_mula;
        $fizaPesananTempatan->pesanan_tarikh_akhir=$request->pesanan_tarikh_akhir;
        $fizaPesananTempatan->pesanan_tarikh_lulus=$request->pesanan_tarikh_lulus;
        $fizaPesananTempatan->pesanan_alamat_pengantaran=$request->pesanan_alamat_pengantaran;

        $fizaPesananTempatan->kart_id=$request->kart_id;
        $fizaPesananTempatan->pesanan_updated_by =$request->pesanan_updated_by;

        $url = '/fizaPesananTempatan'.$fizaPesananTempatan->id;
        return redirect('/fizaPesananTempatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaPesananTempatan  $fizaPesananTempatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaPesananTempatan $fizaPesananTempatan)
    {
        //
    }
}
