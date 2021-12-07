<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FizaFaq;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function displayFaq()
    {
        $Faq = FizaFaq::where('status','aktif');
        $user = User::all();
        return view ('test',[
            'Faq'=>$Faq, 
            'user'=>$user
            ]);
    }
}
