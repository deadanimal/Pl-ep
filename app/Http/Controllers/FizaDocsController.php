<?php

namespace App\Http\Controllers;

use App\Models\FizaDocs;
use Illuminate\Http\Request;

class FizaDocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fizaDocs = FizaDocs::all();
        return view ('1_docs.index',[
            '$fizaDocs'=>$fizaDocs]);
    }


    public function create()
    {
        return view('1_docs.create');
    }


    public function store(Request $request)
    {
        $fizaDocs= new FizaDocs;
        $fizaDocs->doc_section=$request->doc_section;
        $fizaDocs->doc_name =$request->doc_name ;
        $fizaDocs->doc_description=$request->doc_description;
        $fizaDocs->doc_status=$request->doc_status;
        $fizaDocs->doc_created_by=$request->doc_created_by;
        $fizaDocs->user_id=$request->user_id;
        $fizaDocs->doc_section=$request->doc_section;
        $fizaDocs->doc_section=$request->doc_section;
        $fizaDocs->doc_section=$request->doc_section;
        $fizaDocs->doc_section=$request->doc_section;
         

        $fizaDocs->save();
        return redirect('/fizaDocs');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FizaDocs  $fizaDocs
     * @return \Illuminate\Http\Response
     */
    public function show(FizaDocs $fizaDocs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FizaDocs  $fizaDocs
     * @return \Illuminate\Http\Response
     */
    public function edit(FizaDocs $fizaDocs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaDocs  $fizaDocs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaDocs $fizaDocs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FizaDocs  $fizaDocs
     * @return \Illuminate\Http\Response
     */
    public function destroy(FizaDocs $fizaDocs)
    {
        //
    }
}
