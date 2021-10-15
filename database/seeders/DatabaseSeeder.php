<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Abc',
            'email' => 'abc@gmail.com',
            'identity_no'=>'999',
            'jenis'=>'pembekal',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('roles')->insert([
            'role_name'=>'pegawai perancang',
            'role_staff_status'=>'aktif'
        ]);

        DB::table('roles')->insert([
            'role_name'=>'pegawai pengesah',
            'role_staff_status'=>'aktif'
        ]);
        
        DB::table('roles')->insert([
            'role_name'=>'pegawai pelulus',
            'role_staff_status'=>'aktif'
        ]);

        DB::table('roles')->insert([
            'role_name'=>'Juru Audit',
            'role_staff_status'=>'aktif'
        ]);
    }
}