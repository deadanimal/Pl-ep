<?php

namespace App\Http\Controllers;

use App\Models\FizaRoles;
use App\Models\User;
use Illuminate\Http\Request;

class FizaRolesController extends Controller
{

    public function index()
    {
        $user = EpUser::all();
        $user->Roles();
    }


    public function create()
    {
        return view('1_role.create');
    }

    public function store(Request $request)
    {
        // $fizaRole = new FizaRole;

        // $fizaRole->role_name=$request->role_name;
        // $fizaRole->role_staff_status=$request->role_staff_status;
        // $fizaRole->role_created_by=$request->role_created_by;

        // $fizaRole->save();
        // return redirect('/fizaRole');

        $role_name = FizaRole::where('role_name', 'Pegawai Perancang')->first();
        $user->Fizaroles()->attach($role_name);

        $role_name = FizaRole::where('role_name', 'Pegawai Pengesah')->first();
        $user->Fizaroles()->attach($role_name);

        $role_name = FizaRole::where('role_name', 'Pegawai Pelulus')->first();
        $user->Fizaroles()->attach($role_name);

        $role_name = FizaRole::where('role_name', 'Ahli Jawatankuasa')->first();
        $user->Fizaroles()->attach($role_name);

        $role_name = FizaRole::where('role_name', 'Juruaudit')->first();
        $user->Fizaroles()->attach($role_name);

        $role_name = FizaRole::where('role_name', 'Pemilik Pembekal')->first();
        $user->Fizaroles()->attach($role_name);

        $role_name = FizaRole::where('role_name', 'Staf Pembekal')->first();
        $user->Fizaroles()->attach($role_name);


    }

    public function show(FizaRoles $fizaRoles)
    {
        //
    }

    public function edit(FizaRoles $fizaRoles)
    {
        $fizaRole = FizaRole::all();
        return view ('1_role.edit',[
            'fizaRole'=>$fizaRole]);
    }

    public function update(Request $request, FizaRoles $fizaRoles)
    {
        $fizaRole->role_name=$request->role_name;
        $fizaRole->role_staff_status=$request->role_staff_status;
        $fizaRole->role_updated_by=$request->role_updated_by;


        $fizaKatalog->save();
        return redirect('/fizaRole');
    }

    public function destroy(FizaRoles $fizaRoles)
    {
        //
    }
}
