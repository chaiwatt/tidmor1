<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'name' => "ข้อสอบเข้า ม.1 วิทยาศาสตร์ 3,000 ข้อ",
            'author_name' => "ณัฏฐพัชร์ ทวีจันทร์",
            'author_nickname' => "พี่โปรแกรม",
            'price' => 499,
            'promotion_price' => 299,
        ]);
    }
}
