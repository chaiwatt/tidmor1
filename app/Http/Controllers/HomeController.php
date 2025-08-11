<?php

namespace App\Http\Controllers;

use App\Models\Book;
use stdClass;
use App\Models\Rating;
use App\Models\School;
use Illuminate\Http\Request;
use App\Services\JsonLdBuilder;

class HomeController extends Controller
{
  // ใช้ Dependency Injection เพื่อให้ Laravel สร้าง JsonLdBuilder ให้เราอัตโนมัติ
    public function show(?string $slug = null)
    {
        $jsonLdBuilder = new JsonLdBuilder();
        // 2. Logic การหา school ของคุณยังคงเหมือนเดิม
        if ($slug) {
            $school = School::where('slug', $slug)->firstOrFail();
        } else {
            $school = new stdClass();
            $school->name = "โรงเรียนดังทั่วประเทศ";
            $school->province = "";
            $school->school_info = "";
        }

        // 3. เรียกใช้ Builder เพื่อสร้าง JSON (Controller มี Logic แค่นี้)
        $jsonLdString = $jsonLdBuilder->buildForProduct($school, url()->current());

        // 4. ส่งข้อมูลทั้งหมดไปที่ View

        $ratings = Rating::all();
        $book = Book::first();

        return view('home', [
            'school' => $school,
            'jsonLdString' => $jsonLdString,
            'ratings' => $ratings,
            'book' => $book,
        ]);
    }

    public function article()
    {
        return view('article'); 
    }

    public function detail(string $slug)
    {
        return view('detail'); 
    }
}
