<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = database_path('seeders/data');

        if (!File::exists($jsonPath)) {
            $this->command->info('Folder not found: ' . $jsonPath);
            return;
        }

        // [ปรับปรุง] อ่านไฟล์ทั้งหมดแล้วสุ่มลำดับก่อน
        $files = collect(File::files($jsonPath))->shuffle()->all();

        // [เพิ่ม] กำหนดวันเริ่มต้นและตัวนับสำหรับวัน
        $currentDate = Carbon::create(2025, 8, 14);
        $articleCountForDay = 0;

        foreach ($files as $file) { 
            if ($file->getExtension() == 'json') {
                $content = File::get($file->getPathname());
                $data = json_decode($content, true);

                // [เพิ่ม] สร้างวันที่และเวลาที่จะเผยแพร่
                // สุ่มเวลาในช่วง 8 โมงเช้า ถึง 6 โมงเย็น
                $publishDateTime = $currentDate->copy()->setTime(rand(8, 18), rand(0, 59), rand(0, 59));

                // [แก้ไข] แปลงโครงสร้างของ tags ให้ถูกต้องก่อนบันทึก
                $structuredTags = [];
                if (isset($data['tags']) && is_array($data['tags'])) {
                    foreach ($data['tags'] as $tagName) {
                        if (is_string($tagName)) {
                            $structuredTags[] = [
                                'tag' => $tagName,
                                'tag_slug' => str_replace(' ', '-', $tagName)
                                
                            ];
                        }
                    }
                }

                Article::updateOrCreate(
                    ['slug' => $data['slug']],
                    [
                        'title'               => $data['title'],
                        'meta_description'    => $data['meta_description'],
                        'json_ld_description' => $data['json_ld_description'],
                        'body'                => $data['body'],
                        'tags'                => $structuredTags, // [แก้ไข] ใช้ข้อมูล tags ที่แปลงโครงสร้างแล้ว
                        'public_date'         => $publishDateTime, // [ปรับปรุง] ใช้ค่าที่สร้างขึ้นมาใหม่
                    ]
                );
                
                // [เพิ่ม] อัปเดตตัวนับและเปลี่ยนวันเมื่อครบ 3 บทความ
                $articleCountForDay++;
                if ($articleCountForDay >= 3) {
                    $articleCountForDay = 0; // รีเซ็ตตัวนับ
                    $currentDate->addDay();   // เลื่อนไปวันถัดไป
                }
            }
        }
        
        $this->command->info('Article seeder completed successfully with randomized publish dates!');
        
    }
}
