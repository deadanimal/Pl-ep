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
            'user_name' => 'Syafiza Senin',
            'email' => 'syafiza.senin@pipeline.com.my',
            'user_identity_no'=>'9999',
            'jenis'=>'pekerja',
            'password' => Hash::make('password'),
            'user_status'=>'aktif',
            'user_jenis_pengenalan'=>'Kad Pengenalan',
            'user_kewarganegaraan'=>'Malaysia',
            'user_phone'=>'0123456789',
            'user_pej'=>'1800882525',
            'user_alamat'=>'No 91, Jalan Kenanga',
            'user_poskod'=>'839390',
            'user_negeri'=>'Melaka'
          
        ]);

        DB::table('roles_user')->insert([
            'user_id'=>'1',
            'roles_id'=>'1',
        ]);

        DB::table('roles')->insert([
            'role_name'=>'Admin',
            'role_staff_status'=>'aktif'
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

        DB::table('roles')->insert([
            'role_name'=>'Pembekal',
            'role_staff_status'=>'aktif'
        ]);


        DB::table('fiza_item_infos')->insert([
            'katalog_id'=>'1',
            'pembekal_id'=>'1',
            'item_name'=>'HP Printer DeskJet Ink Advantage 2336',
            'item_price'=>'450.60',
            'item_unit'=>'n/a',
            'start_date'=>'2021-01-01',
            'end_date'=>'2021-10-10'
        ]);

        DB::table('fiza_faqs')->insert([
            'faq_section'=>'Pembekal',
            'faq_question'=>'Adakah perolehan kerja boleh dilaksanakan dengan mengguna pakai Sistem ePerolehan Baharu?',
            'faq_answer'=>'Tidak. Sistem ePerolehan Baharu hanya memberi perkhidmatan perolehan untuk bekalan dan perkhidmatan sahaja',
            'faq_status'=>'aktif',
            'user_id'=>'1',
            'faq_created_by'=>'syafiza senin',
            'faq_updated_by'=>'syafiza senin'
        ]);

        DB::table('fiza_faqs')->insert([
            'faq_section'=>'Pembekal',
            'faq_question'=>'Bagaimana jika PTJ tidak memenuhi infrastruktur minima yang telah ditetapkan? Adakah pihak Kementerian masing-masing, Kementerian Kewangan atau pihak Commerce Dot Com Sdn Bhd akan menyediakan kemudahan komputer kepada pihak PTJ?',
            'faq_answer'=>'Aktiviti pengumpulan maklumat komputer telah dijalankan oleh pihak Commerce Dot Com Sdn Bhd bermula 3 Mac 2014. Maklumat tersebut telah diserahkan kepada pihak Jabatan Akauntan Negara Malaysia (JANM) AG melalui Seksyen ePerolehan pada 18 April 2014 untuk tindakan selanjutnya. Walau bagaimanapun, PTJ masih boleh mengakses sistem ePerolehan Baharu tetapi terdapat kemungkinan menghadapi beberapa masalah seperti akses rangkaian yang perlahan dari luar bandar. Talian (1Govnet) yang tidak ditambah atau kurang dari keperluan minima juga akan memberi impak kepada kelancaran pengunaan sistem ePerolehan Baharu.',
            'faq_status'=>'aktif',
            'user_id'=>'1',
            'faq_created_by'=>'syafiza senin',
            'faq_updated_by'=>'syafiza senin'
        ]);

        DB::table('fiza_kod_bidangs')->insert([
            'kod_type'=>'02',
            'kod_category'=>'PERABOT, PERALATAN PEJABAT, HIASAN DALAMAN DAN DOMESTIK',
            'kod_pengkhususan'=>'BAHAN TARPAULIN DAN KANVAS',
            'kod_description'=>'PEMBUAT'
        ]);

    }
}