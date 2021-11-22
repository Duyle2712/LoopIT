<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('tbl_tkquantrivien')->insert([
            [
                'id_qtv' => 'qtv01',
                'tenqtv' => 'Lê Duy',
                'email' => 'admin@gmail.com',
                'matkhau' => bcrypt('admin123'),
                'sdt' =>'0376435527',
                'ngaysinh' => '27/12/1999',
                'id_chucvu' => 'admin',
            ]
        ]);
        DB::table('tbl_tkquantrivien')->insert([
            [
                'id_qtv' => 'qtv02',
                'tenqtv' => 'Quốc Bảo',
                'email' => 'admin2@gmail.com',
                'matkhau' => bcrypt('admin1234'),
                'sdt' =>'0388888888',
                'ngaysinh' => '1/1/1999',
                'id_chucvu' => 'admin',
            ]
        ]);
    }
}
