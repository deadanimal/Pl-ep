<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Mail\RegisterUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $role= Role::all();
        $request->validate([
            'user_identity_no' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $user = User::create([
        // 'user_name' => $request->user_name,
        // 'user_identity_no' => $request->user_identity_no,
        // 'email' => $request->email,
        // 'password' => Hash::make('password'),
        // //'user_status'=>'aktif'
        // //'user_role' =>$request->user_role
        // //'role'=>roles()->attach($request->role_id)
        // ]);
        //$user->role_id = $request->role_id;
       
        $user = new User;

        $user->user_name = $request->user_name;
        $user->user_identity_no = $request ->user_identity_no;
        $user->email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->password = Hash::make('password');
        $user->user_status="aktif";
        //$user->roles_id = $request->roles_id;
        $user->role()->attach($request->role_id);
        $user->save();
        Mail::to($user->email)->send(new RegisterUser);
    
        return redirect('/list-role');
    

        // $user->fizaroles()->attach(1);
        event(new Registered($user));

        Auth::login($user);
        //return redirect(RouteServiceProvider::HOME);
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
        $user->email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->password = Hash::make('password');
        $user->user_status="aktif";
        //$user->role_id = $request->role_id;
        $user->save();

        Mail::to($user->email)->send(new RegisterUser);

        // $role = Roles::find($request->role_id);
        $user->roles()->attach($request->role_id);

        return redirect('/list-role');

    
    }

    // public function edit_roles($id){
    //     $user=User::find($id);

    //     return view('role_update',[
    //         'user' => $User]);
        

    // }


    public function update_roles(Request $request, $user,$id){

        dd($user->id);
        $user = User::find($id);
        $user->roles()->detach([1, 2, 3, 4, 5]);

        $user->user_name = $request->user_name;
        $user->user_identity_no = $request ->user_identity_no;
        $user->email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->password = $request->password;
        $user->user_status =$request->user_status;
        //$user->role_id = $request->role_id;
        $user->save();

        // $role = Roles::find($request->role_id);

       // $user->roles()->detach($role_jawatan); //detach satu
        $user->roles()->detach(); // detach semua

    
    }


}
