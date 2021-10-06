<?php

namespace App\Http\Controllers;

use App\Models\FizaSupportingDocumentSijilDigital;
use Illuminate\Http\Request;

class FizaSupportingDocumentSijilDigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaSupportingDocumentSijilDigital = FizaSupportingDocumentSijilDigital::all();
        return view ('1_docs_sijil.index',[
            'fizaSupportingDocumentSijilDigital'=>$fizaSupportingDocumentSijilDigital]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('1_docs_sijil.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fizaSupportingDocumentSijilDigital = new FizaSupportingDocumentSijilDigital;

        $fizaSupportingDocumentSijilDigital->sijil_id=$request->sijil_id;
        $fizaSupportingDocumentSijilDigital->sd_name=$request->sd_name;
        $fizaSupportingDocumentSijilDigital->sd_created_by=$request->sd_created_by;

        $fizaSupportingDocumentSijilDigital->save();
        return redirect('/fizaSupportingDocumentSijilDigital');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaSupportingDocumentSijilDigital  $fizaSupportingDocumentSijilDigital
     * @return \Illuminate\Http\Response
     */
    public function show(FizaSupportingDocumentSijilDigital $fizaSupportingDocumentSijilDigital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaSupportingDocumentSijilDigital  $fizaSupportingDocumentSijilDigital
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaSupportingDocumentSijilDigital $fizaSupportingDocumentSijilDigital)
    {
        $fizaSupportingDocumentSijilDigital = FizaSupportingDocumentSijilDigital::all();
        return view ('1_docs_sijil.edit',[
            'fizaSupportingDocumentSijilDigital'=>$fizaSupportingDocumentSijilDigital]);
    }


    public function update(Request $request, FizaSupportingDocumentSijilDigital $fizaSupportingDocumentSijilDigital)
    {
        $fizaSupportingDocumentSijilDigital->sijil_id=$request->sijil_id;
        $fizaSupportingDocumentSijilDigital->sd_name=$request->sd_name;
        $fizaSupportingDocumentSijilDigital->sd_updated_by=$request->sd_updated_by;

        $url = '/fizaSupportingDocumentSijilDigital'.$fizaSupportingDocumentSijilDigital->id;
        return redirect('/fizaSupportingDocumentSijilDigital');
    }


    public function destroy(FizaSupportingDocumentSijilDigital $fizaSupportingDocumentSijilDigital)
    {
        //
    }
}
