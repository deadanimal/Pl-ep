<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use App\Models\FizaPembekal;
use App\Models\RoleUser;
use App\Mail\RegisterUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

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
        $pembekal = FizaPembekal::where('pembekal_status', 'diluluskan')->get();

        return view('role_register', [
            'role'=>$role,
            'user' =>$user,
            'pembekal'=>$pembekal
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
        if ($user->jenis == 'pembekal') {
            $user->pembekal_id = $request ->pembekal_id;
        }
        $user->user_status="aktif";
        // dd($user);
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

        return view('user_info', [
            'role'=>$role,
            'user' =>$user
        ]);
    }

    
    public function edit($id)
    {

    // dd($id);
        $user = User::find($id);
        $role= Roles::all();
        $pembekal=FizaPembekal::where('id',$user->pembekal_id)->first();

        // $role = RoleUser::all();

        // dd($role);

        return view('role_update', [
            'role'=>$role,
            'user' =>$user,
            'pembekal'=>$pembekal
        ]);
    }


    public function update(Request $request, $id)
    {
        $user= User::find($request->get('id'));

        // $user->user_name = $request->user_name;
        // $user->password = $request->password;
        // $user->user_identity_no = $request ->user_identity_no;
        // $user->email = $request ->email;
        // $user->jenis = $request ->jenis;
        // $user->user_status =$request->user_status;

        $user->user_jenis_pengenalan = $request->user_jenis_pengenalan;
        $user->user_kewarganegaraan = $request->user_kewarganegaraan;
        $user->user_phone = $request->user_phone;
        $user->user_fax = $request->user_fax;
        $user->user_alamat = $request->user_alamat;
        $user->user_poskod = $request->user_poskod;
        $user->user_negeri = $request->user_negeri;
        $user->user_fax = $request->user_fax;



        // $user->roles()->attach($request->role_id);


        $user->save();

        return redirect()->back()->with('success', 'Maklumat telah berjaya dikemaskini!');
    }


    public function destroy($id)
    {
        // $user = User::find($id);
        // $role= Roles::all();

        $user = User::where('id', $id)->first();
        $user->roles()->detach(); 
        $user->delete();



        return redirect('/Pengguna');
    }
    public function edit_user($id)
    {

    // dd($id);
        $user = User::find($id);
        $role= Roles::all();

        // $role = RoleUser::all();

        // dd($role);

        return view('user-edit', [
            'role'=>$role,
            'user' =>$user
        ]);
    }


    public function update_user(Request $request, $id)
    {
        $user= User::find($request->get('id'));

        $user->user_name = $request->user_name;
        $user->user_identity_no = $request ->user_identity_no;
        $user->email = $request ->email;
        $user->jenis = $request ->jenis;
        $user->user_status = $request->user_status;

        $user->roles()->attach($request->role_id);
        $user->save();

        return redirect('/Pengguna')->with('success', 'Maklumat telah berjaya dikemaskini!');
    }


    public function update_password(Request $request)
    {
        $user= User::where('id', Auth::user()->id)->first();

        // $user = Auth::user();
        $new_password = $request->password;

        //$user = User::find(auth()->user()->id)->update(['password' => Hash::make($request->password)]);
       
        if ($user->password!=$new_password) {
            $user->save();
            return redirect('/logout')->with('success', 'Katalaluan berjaya dikemaskini');
        } else {
            return redirect()->back()->with('warning', 'Katalaluan yang dimasukkan adalah sama dengan kata laluan semasa');
        }
    }

    public function padam_peranan(Request $request, $id)
    {
        $user = User::find($id);
        $user->roles()->detach($roles_id); //detach satu
        
        return redirect()->back();
    }

    public function kemaskini_password() 
    {
        // Check password where not updated  >90 days

        $user= User::where([
            ['user_status', '=', 'aktif'],
            ['updated_at', '>', date("Y-m-d H:i:s") - 2]
        ]);

      
        foreach ($user as $user) {
            Mail::to($user()->email)->send(new KemaskiniKatalaluan());
        }
    }
}
