<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use App\Models\RoleUser;
use App\Mail\RegisterUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PenggunaController extends Controller
{

    public function index()
    {
        $user = User::all();
    
        return view('role_list', [
            'users' => $user
        ]);
    }

    public function create()
    {
        $role= Roles::all();
        $user = User::all();

        return view('role_register',[
            'role'=>$role,
            'user' =>$user
        ]);
    }


    public function store(Request $request)
    {
        $user = new User;

        $user->user_name = $request->user_name;
        $user->user_identity_no = $request ->user_identity_no;
        $user->email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->password = Hash::make('password');
        $user->user_status="aktif";
        //$user->role_id = $request->role_id;
        $user->save();

        Mail::to($user->email)->send(new RegisterUser($user));

        // $role = Roles::find($request->role_id);
        $user->roles()->attach($request->role_id);

        return redirect('/Pengguna')->with('success','Pengguna telah berjaya didaftarkan!');
    
    }


    public function show($id)
    {
        $user = User::find($id);
        $role= Roles::all();

        return view('user_info',[
            'role'=>$role,
            'user' =>$user
        ]);
        
    }

    
    public function edit($id)
    {

    // dd($id);
        $user = User::find($id);
        $role= Roles::all();

        // $role = RoleUser::all();

        // dd($role);

        return view('role_update',[
            'role'=>$role,
            'user' =>$user
        ]);

    }


    public function update(Request $request, $id)
    {
        $user= User::find($request->get('id'));

        $user->user_name = $request->user_name;
        $user->user_identity_no = $request ->user_identity_no;
        $user->email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->user_status =$request->user_status;
        $user->roles()->attach($request->role_id);


        $user->save();

        return redirect('/Pengguna');
    }


    public function destroy($id)
    {
        // $user = User::find($id);
        // $role= Roles::all();

        $user = User::where('id',$id)->first();

        $user->delete();


        return redirect('/Pengguna');
    }
}