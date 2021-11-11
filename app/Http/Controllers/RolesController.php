<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public function index()
    {
        $user =User::all();
        $user->Roles();
        return view('role_list',[
            'user'=>$user, 
            'roles'=>$Roles
        ]);


    }
    
    public function create()
    {
        return view('role_register');
    }


    public function store(Request $request)
    {
        // $role_name = Role::where('role_name', 'Pegawai Perancang')->first();
        // $user->roles()->attach($role_name);

        // $role_name = Role::where('role_name', 'Pegawai Pengesah')->first();
        // $user->roles()->attach($role_name);

        // $role_name = Role::where('role_name', 'Pegawai Pelulus')->first();
        // $user->roles()->attach($role_name);

        // $role_name = Role::where('role_name', 'Ahli Jawatankuasa')->first();
        // $user->roles()->attach($role_name);

        
        // $user->email = $request->email;
        // $user->user_name = $request->user_name;
        // $user->password = $request->password;
        // $user->user_identity_no = $request->user_identity_no;
        // $user->save();
        
        // $role = Role::find($request->role_id);
        // $user->roles()->attach($role);

        // $role = new Roles();



    }
    public function show(Roles $roles)
    {
         //dd($id);
        // $user =User::find($id);
        // $user->Roles();

        // return view('1_role.show',[
        //     'user'=>$user, 
        //     'roles'=>$Roles]);
    }


    public function edit($id)
    {
        $user =User::find($id);
        return view('1_role.show',[
            'user'=>$user, 
            'roles'=>$Roles
        ]);
    }


    public function update($id)
    {
        $user =User::find($id);
        

        //$user->Roles();


    }

    public function destroy(Roles $roles)
    {
        //
    }

    public function set_role_pembekal(Request $request) {

        $role_name = $request->role_name;
        $user_id = $request->user_id;
        $user = User::find($user_id);

        $role_name = Role::where('role_name', $role_name)->first();
        $user->roles()->attach($role_name);
    }
}
