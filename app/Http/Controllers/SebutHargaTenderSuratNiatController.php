<?php

namespace App\Http\Controllers;

use App\Models\SebutHargaTenderSuratNiat;
use Illuminate\Http\Request;

class SebutHargaTenderSuratNiatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tender_surat_niat.index');
        
    }


    public function create()
    {
        return view('tender_surat_niat.create');
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(SebutHargaTenderSuratNiat $sebutHargaTenderSuratNiat)
    {
        return view('tender_surat_niat.show');
        
    }

   
    public function edit(SebutHargaTenderSuratNiat $sebutHargaTenderSuratNiat)
    {
        return view('tender_surat_niat.edit');
        
    }


    public function update(Request $request, SebutHargaTenderSuratNiat $sebutHargaTenderSuratNiat)
    {
        //
    }


    public function destroy(SebutHargaTenderSuratNiat $sebutHargaTenderSuratNiat)
    {
        //
    }
}
