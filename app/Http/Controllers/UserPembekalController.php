<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPembekal;
use App\Models\FizaPembekal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;


class UserPembekalController extends Controller
{

    public function index()
    {
        //
    }

    public function create($id)
    {
        $pembekal=FizaPembekal::where([ 
            ['id',$id],
            ['pembekal_status','diluluskan']
        ])->get();
    }


    public function store(FizaPembekal $pembekal,$id )
    {
        $user = new User;
        // $pembekal=FizaPembekal::find($id);

        $user->id_pengguna = $pembekal->pembekal_id_pengguna;
        $user->user_name = $pembekal->pemilik;
        $user->user_identity_no = $pembekal->pembekal_identity_no;
        $user->email = $pembekal->email;
        $user->jenis = "pembekal";
        $user->password = Hash::make('password');
        $user->user_status="aktif";
        $user->jenis_pengenalan=$pembekal->pembekal_identity_type;
        $user->alamat=$pembekal->pembekal_company_address;
        $user->poskod=$pembekal->pembekal_postcode;
        $user->negeri=$pembekal->pembekal_state;
        $user->phone=$pembekal->pembekal_tel_no;
        $user->user_pej=$pembekal->pembekal_pej_no;
        $user->pembekal_id=$pembekal->id;

        $user->role()->attach($role_id=='6');

        $user->save();
    }

    public function show(UserPembekal $userPembekal)
    {
        //
    }

   
   
    public function edit(UserPembekal $userPembekal)
    {
        //
    }

 
    public function update(Request $request, UserPembekal $userPembekal)
    {
        //
    }

   
    public function destroy(UserPembekal $userPembekal)
    {
        //
    }
}
