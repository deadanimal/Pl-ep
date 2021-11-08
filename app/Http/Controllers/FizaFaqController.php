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
        return redirect('/Faq');
    }

    public function show(FizaFaq $fizaFaq)
    {
        //
    }


    public function edit($id)
    {
        $fizaFaq = FizaFaq::find($id);
        return view ('1_faq.edit',[
            'Faq'=>$fizaFaq]);
    }


    public function update(Request $request, FizaFaq $fizaFaq,$id)
    {
        $fizaFaq = FizaFaq::find($id);

        $fizaFaq->faq_section =$request->faq_section ;
        $fizaFaq->faq_question =$request->faq_question ;
        $fizaFaq->faq_answer =$request->faq_answer ;
        $fizaFaq->faq_status =$request->faq_status ;
        $fizaFaq->faq_updated_by=$request->faq_updated_by;
        $fizaFaq->user_id =$request->user_id ;

        $fizaFaq->save();
        return redirect('/Faq');
    }

    public function destroy(FizaFaq $fizaFaq)
    {
        //
    }
}
