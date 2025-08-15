<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('feature_articles')->insert([
            'article_id' => "ข้อสอบเข้า ม.1 วิทยาศาสตร์ 3,000 ข้อ"
        ]);
    }
}
