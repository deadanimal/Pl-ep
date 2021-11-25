<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use App\Models\RoleUser;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{

    public function index()
    {
        return view('role_user.index');

    }

 
    public function create()
    {
        return view('role_user.create');

    }


    public function store(Request $request)
    {
        //
    }


    public function show(RoleUser $roleUser)
    {
        return view('role_user.show');

    }

 
    public function edit(RoleUser $roleUser)
    {
        return view('role_user.edit');

    }

    public function update(Request $request, RoleUser $roleUser)
    {
        //
    }


    public function destroy(RoleUser $roleUser)
    {
        //
    }
}
