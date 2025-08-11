<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class Rating extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 
        // สร้างข้อมูลจำลอง 20 รายการ
        for ($i = 0; $i < 20; $i++) {
            DB::table('ratings')->insert([
                'rating' => rand(4, 5), // สุ่มคะแนนระหว่าง 4 ถึง 5
                'ip_address' => $faker->ipv4, // สร้าง IP Address จำลอง
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
