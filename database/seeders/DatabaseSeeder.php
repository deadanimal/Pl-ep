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
            'user_name' => 'Abc',
            'email' => 'abc@gmail.com',
            'user_identity_no'=>'999',
            'jenis'=>'pembekal',
            'user_password' => Hash::make('password'),
            'user_status'=>'aktif',
          
        ]);
        
        DB::table('roles')->insert([
            'role_name'=>'Pegawai Perancang',
            'role_staff_status'=>'aktif'
        ]);

        DB::table('roles')->insert([
            'role_name'=>'Pegawai Pengesah',
            'role_staff_status'=>'aktif'
        ]);
        
        DB::table('roles')->insert([
            'role_name'=>'Pegawai Pelulus',
            'role_staff_status'=>'aktif'
        ]);

        DB::table('roles')->insert([
            'role_name'=>'Juru Audit',
            'role_staff_status'=>'aktif'
        ]);

        DB::table('fiza_katalogs')->insert([
            'katalog_kategori'=>'Alatan Pejabat',
            'katalog_kumpulan'=>'Mesin',
            'katalog_jenis'=>'Mesin Cetak',
            'user_id'=>'5'
        ]);


        DB::table('fiza_item_infos')->insert([
            'katalog_id'=>'1',
            'pembekal_id'=>'2',
            'item_name'=>'HP Printer DeskJet Ink Advantage 2336',
            'item_price'=>'450.60',
            'item_unit'=>'n/a',
            'start_date'=>'2021-01-01',
            'end_date'=>'2021-10-10'
        ]);

    }
}