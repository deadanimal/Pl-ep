<?php

namespace App\Http\Controllers;

use App\Models\FizaEpUser;
use Illuminate\Http\Request;

class FizaEpUserController extends Controller
{

    public function index()
    {
        $fizaEpUser = FizaEpUser::all();
        return view ('1_user.index',[
            'fizaEpUser'=>$fizaEpUser]);
    }


    public function create()
    {
        return view('1_user.create');
    }

    public function store(Request $request)
    {
        $fizaEpUser = new FizaEpUser;
        
        $fizaEpUser->role_id=$request->role_id;
        $fizaEpUser->user_identity_type=$request->user_identity_type;
        $fizaEpUser->user_identity_no =$request->user_identity_no ;
        $fizaEpUser->user_title=$request->user_title;
        $fizaEpUser->user_name =$request->user_name ;
        $fizaEpUser->user_role =$request->user_role ;
        $fizaEpUser->user_status=$request->user_status;
        $fizaEpUser->user_citizenship =$request->user_citizenship ;
        $fizaEpUser->user_position=$request->user_position;
        $fizaEpUser->user_grade=$request->user_grade;
        $fizaEpUser->user_email=$request->user_email;
        $fizaEpUser->user_contact_no =$request->user_contact_no ;
        $fizaEpUser->user_fax_no =$request->user_fax_no ;
        
        $user_image=$request->file('user_image')->store('user_img');
        $fizaEpUser->user_image =$user_image ;//file

        $fizaEpUser->user_address=$request->user_address  ;
        $fizaEpUser->user_postalcode =$request-> user_postalcode ;
        $fizaEpUser->user_city =$request->user_city ;
        $fizaEpUser->user_current_password =$request->user_current_password ;
        $fizaEpUser->user_new_password=$request->user_new_password;
        $fizaEpUser->user_new_password2=$request->user_new_password2  ;
        $fizaEpUser->user_created_by  =$request->user_created_by  ; 
        
        $fizaEpUser->save();
        return redirect('/fizaEpUser'); 
    }

    public function show(FizaEpUser $fizaEpUser)
    {
        //
    }


    public function edit(FizaEpUser $fizaEpUser)
    {
        return redirect('1_user.edit', [
            'FizaEpUser'=>$fizaEpUser
        ]); 
    }


    public function update(Request $request, FizaEpUser $fizaEpUser)
    {
        $fizaEpUser->role_id=$request->role_id;
        $fizaEpUser->user_identity_type=$request->user_identity_type;
        $fizaEpUser->user_identity_no =$request->user_identity_no ;
        $fizaEpUser->user_title=$request->user_title;
        $fizaEpUser->user_name =$request->user_name ;
        $fizaEpUser->user_role =$request->user_role ;
        $fizaEpUser->user_status=$request->user_status;
        $fizaEpUser->user_citizenship =$request->user_citizenship ;
        $fizaEpUser->user_position=$request->user_position;
        $fizaEpUser->user_grade=$request->user_grade;
        $fizaEpUser->user_email=$request->user_email;
        $fizaEpUser->user_contact_no =$request->user_contact_no ;
        $fizaEpUser->user_fax_no =$request->user_fax_no ;
        
        // $fizaEpUser->user_image =$request->user_image ;

        if($request->hasFile('user_image')){
            $user_image = $request->file('user_image')->store('user_img');
            $fizaEpUser->user_image=$user_image;
        }
        
        $fizaEpUser->user_address  =$request->user_address  ;
        $fizaEpUser->user_postalcode =$request-> user_postalcode ;
        $fizaEpUser->user_city =$request->user_city ;
        $fizaEpUser->user_current_password =$request->user_current_password ;
        $fizaEpUser->user_new_password =$request->user_new_password;
        $fizaEpUser->user_new_password2 =$request->user_new_password2  ;
        $fizaEpUser->user_updated_by  =$request->user_created_by  ; 
        

       $fizaEpUser->save();
        return redirect('/fizaEpUser');
    }


    public function destroy(FizaEpUser $fizaEpUser)
    {
        //
    }
}
