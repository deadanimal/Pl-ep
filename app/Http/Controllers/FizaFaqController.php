<?php

namespace App\Http\Controllers;

use App\Models\FizaFaq;
use Illuminate\Http\Request;

class FizaFaqController extends Controller
{
    
    public function index()
    {
        $fizaFaq = FizaFaq::all();
        return view ('1_faq.index',[
            'fizaFaq'=>$fizaFaq]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('1_faq.create');
    }

    public function store(Request $request)
    {
        $fizaFaq = new FizaFaq;
        $fizaFaq->faq_section =$request->faq_section ;
        $fizaFaq->faq_question =$request->faq_question ;
        $fizaFaq->faq_answer =$request->faq_answer ;
        $fizaFaq->faq_status =$request->faq_status ;
        $fizaFaq->faq_created_by=$request->faq_created_by;
        $fizaFaq->user_id =$request->user_id ;

        $fizaFaq->save();
        return redirect('/fizaFaq');
    }

    public function show(FizaFaq $fizaFaq)
    {
        //
    }


    public function edit(FizaFaq $fizaFaq)
    {
        $fizaFaq = FizaFaq::all();
        return view ('1_faq.edit',[
            'fizaFaq'=>$fizaFaq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FizaFaq  $fizaFaq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FizaFaq $fizaFaq)
    {
        $fizaFaq = new FizaFaq;
        $fizaFaq->faq_section =$request->faq_section ;
        $fizaFaq->faq_question =$request->faq_question ;
        $fizaFaq->faq_answer =$request->faq_answer ;
        $fizaFaq->faq_status =$request->faq_status ;
        $fizaFaq->faq_updated_by=$request->faq_updated_by;
        $fizaFaq->user_id =$request->user_id ;

        $fizaFaq->save();
        return redirect('/fizaFaq');
    }

    public function destroy(FizaFaq $fizaFaq)
    {
        //
    }
}
