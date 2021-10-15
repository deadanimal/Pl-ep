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

        $user = new User;
        $user->bla = $request->bla;
        $user->save();

        $role = Role::find($request->role_id);
        $user->roles()->attach($role);


    }
    public function show(Roles $roles)
    {
        //
    }


    public function edit(Roles $roles)
    {
       //
    }


    public function update(Request $request, Roles $roles)
    {
        //
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
