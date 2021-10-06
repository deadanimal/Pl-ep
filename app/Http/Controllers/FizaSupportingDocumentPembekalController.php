<?php

namespace App\Http\Controllers;

use App\Models\FizaSupportingDocumentPembekal;
use Illuminate\Http\Request;

class FizaSupportingDocumentPembekalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaSupportingDocumentPembekal = FizaSupportingDocumentPembekal::all();
        return view ('1_doc_pembekal.index',[
            'fizaSupportingDocumentPembekal'=>$fizaSupportingDocumentPembekal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('1_doc_pembekal.create');
    }


    public function store(Request $request)
    {

        $fizaSupportingDocumentPembekal = new FizaSupportingDocumentPembekal;

        $fizaSupportingDocumentPembekal->pembekal_id=$request->pembekal_id;
        $fizaSupportingDocumentPembekal->sdoc_name=$request->sdoc_name;
        $fizaSupportingDocumentPembekal->sdoc_created_by=$request->sdoc_created_by;

        $fizaSupportingDocumentPembekal->save();
        return redirect('/fizaSupportingDocumentPembekal');
    }

    public function show(FizaSupportingDocumentPembekal $fizaSupportingDocumentPembekal)
    {
        //
    }


    public function edit(FizaSupportingDocumentPembekal $fizaSupportingDocumentPembekal)
    {
        $fizaSupportingDocumentPembekal = FizaSupportingDocumentPembekal::all();
        return view ('1_docs_pembekal.edit',[
            'fizaSupportingDocumentPembekal'=>$fizaSupportingDocumentPembekal
        ]);
    }


    public function update(Request $request, FizaSupportingDocumentPembekal $fizaSupportingDocumentPembekal)
    {
        $fizaSupportingDocumentPembekal->pembekal_id=$request->pembekal_id;
        $fizaSupportingDocumentPembekal->sdoc_name=$request->sdoc_name;
        $fizaSupportingDocumentPembekal->sdoc_created_by=$request->sdoc_created_by;

        $url = '/fizaSupportingDocumentPembekal'.$fizaSupportingDocumentPembekal->id;
        return redirect('/fizaSupportingDocumentPembekal');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaSupportingDocumentPembekal  $fizaSupportingDocumentPembekal
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaSupportingDocumentPembekal $fizaSupportingDocumentPembekal)
    {
        //
    }
}
