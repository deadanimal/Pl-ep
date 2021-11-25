<?php

namespace App\Http\Controllers;

use App\Models\FizaFaq;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FizaFaqController extends Controller
{
    
    public function index()
    {
        $Faq = FizaFaq::where('status','aktif');
        return view ('1_faq.index',[
            'Faq'=>$Faq]);
    }

    
    public function create()
    {
        $user=User::all();

        return view('1_faq.create', [
            'user'=>$user
        ]);
    }

    public function store(Request $request)
    {
        $fizaFaq = new FizaFaq;


        $fizaFaq->faq_section =$request->faq_section ;
        $fizaFaq->faq_question =$request->faq_question ;
        $fizaFaq->faq_answer =$request->faq_answer ;
        $fizaFaq->faq_status = "aktif" ;
        $fizaFaq->faq_created_by=Auth::user()->user_name;

        $fizaFaq->save();

        return redirect ('/faq');
    }

    public function show(FizaFaq $fizaFaq)
    {
        //
    }


    public function edit($id)
    {
        $Faq = FizaFaq::find($id);
        return view ('1_faq.edit',[
            'Faq'=>$Faq]);
    }


    public function update(Request $request, FizaFaq $fizaFaq,$id)
    {
        $fizaFaq = FizaFaq::find($id);

        $fizaFaq->faq_section =$request->faq_section ;
        $fizaFaq->faq_question =$request->faq_question ;
        $fizaFaq->faq_answer =$request->faq_answer ;
        $fizaFaq->faq_status =$request->faq_status ;
        // $fizaFaq->faq_updated_by=$request->faq_updated_by;
        // $fizaFaq->user_id =$request->user_id ;

        $fizaFaq->save();
        return redirect('/faq');
    }

    public function destroy(FizaFaq $fizaFaq)
    {
        //
    }
}
