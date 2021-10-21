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

        $user = User::get();
    

        return view('role_list', [
            'users' => $user
        ]);
    }

    // public function create_role(){

    //     return view('register_role', [
    //         'user' => $user,
    //     ]);
    // }


    public function register_roles(Request $request){

        $user = new User;

        $user->user_name = $request->user_name;
        $user->user_identity_no = $request ->user_identity_no;
        $user->user_email = $request ->user_email;
        $user->jenis = $request ->jenis;
        $user->user_password = Hash::make('password');
        $user->user_status="Aktif";
        //$user->role_id = $request->role_id;
        $user->save();

        // $role = Roles::find($request->role_id);
        $user->roles()->attach($request->role_id);

        return redirect('/list-role');

    
    }

    public function edit_roles($id){
        $user=User::find($id);

        return view('role_update',[
            'user' => $User]);
        

    }


    public function update_roles(Request $request, $user){

        $user = User::find($user);

        $user->roles()->detach([1, 2, 3, 4, 5, 6, 7, 8, 9]);

        $user->user_name = $request->user_name;
        $user->user_identity_no = $request ->user_identity_no;
        $user->user_email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->user_password = Hash::make('password');
        $user->user_status =$request->user_status;
        //$user->role_id = $request->role_id;
        $user->save();

        // $role = Roles::find($request->role_id);

       // $user->roles()->detach($role_jawatan); //detach satu
        $user->roles()->detach(); // detach semua

    
    }


}
