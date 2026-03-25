<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ PINDAH KE SINI
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('categories')->truncate();
        DB::table('services')->truncate();
        DB::table('portfolios')->truncate();
        DB::table('clients')->truncate();
        DB::table('galleries')->truncate();
        DB::table('pricings')->truncate();
        DB::table('pricing_items')->truncate();
        DB::table('settings')->truncate();
        DB::table('users')->truncate();
        DB::table('articles')->truncate();

        // ================= CATEGORY =================
        DB::table('categories')->insert([
            ['id'=>1,'name'=>'Bangunan','slug'=>'bangunan'],
            ['id'=>2,'name'=>'Regulasi','slug'=>'regulasi'],
            ['id'=>3,'name'=>'Lingkungan','slug'=>'lingkungan'],
            ['id'=>5,'name'=>'Tata Ruang','slug'=>'tata-ruang'],
        ]);

        // ================= SERVICES =================
        DB::table('services')->insert([
            ['id'=>1,'nama'=>'PBG','deskripsi'=>'INI PBG AJA','gambar'=>'1773170119.jpeg','slug'=>'pbg'],
            ['id'=>3,'nama'=>'SLF','deskripsi'=>'ini deskripsi SLF','gambar'=>'1773046562.jpeg','slug'=>'slf'],
            ['id'=>4,'nama'=>'DOKUMEN LINGKUNGAN','deskripsi'=>'ini DOKUMEN LINGKUNGAN','gambar'=>'1773169753.jpeg','slug'=>'dokumen-lingkungan'],
            ['id'=>5,'nama'=>'ANDALALIN','deskripsi'=>'ini andalalin','gambar'=>'1773170255.jpeg','slug'=>'andalalin'],
            ['id'=>6,'nama'=>'SEDOT WC','deskripsi'=>'CEPAT BANGERT','gambar'=>'1773405490.jpeg','slug'=>'sedot-wc'],
        ]);

        // (lanjutkan semua seperti punya kamu)

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}