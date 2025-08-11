<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Rating extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // สร้างข้อมูลจำลอง 20 รายการ
        for ($i = 0; $i < 20; $i++) {
            DB::table('ratings')->insert([
                'rating' => rand(4, 5), // สุ่มคะแนนระหว่าง 4 ถึง 5
                'ip_address' => fake()->ipv4(), // สร้าง IP Address จำลอง
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
