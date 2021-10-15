<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Roles;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'identity_no' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'identity_no' => $request->identity_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // $user->fizaroles()->attach(1);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function list_role(){

        return view('list_role', [
            'user' => $user
        ]);
    }

    // public function create_role(){

    //     return view('register_role', [
    //         'user' => $user,
    //     ]);
    // }


    public function register_roles(Request $request){

        $user = new User;

        $user->name = $request->name;
        $user->identity_no = $request ->identity_no;
        $user->email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->password = Hash::make('password');
        //$user->role_id = $request->role_id;
        $user->save();

        // $role = Roles::find($request->role_id);
        $user->roles()->attach($request->role_id);

    
    }


    public function update_roles(Request $request, $user){

        $user = User::find($user);

        $user->roles()->detach([1, 2, 3, 4, 5, 6, 7, 8, 9]);

        $user->name = $request->name;
        $user->identity_no = $request ->identity_no;
        $user->email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->password = Hash::make('password');
        //$user->role_id = $request->role_id;
        $user->save();

        // $role = Roles::find($request->role_id);

        $user->roles()->attach($request->role_id);
       // $user->roles()->detach($role_jawatan); //detach satu
        $user->roles()->detach(); // detach semua

    
    }


}
