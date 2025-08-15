<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });


// 1. Route ที่เฉพาะเจาะจงที่สุด (Static Routes) ควรอยู่บนสุด
Route::get('/บทความ', [HomeController::class, 'article'])->name('article');

// 2. Route ที่มีตัวแปร แต่ยังคงเฉพาะเจาะจง
Route::get('/บทความ/{slug}', [HomeController::class, 'detail'])->name('detail');

// 3. Route ที่เป็น 'catch-all' หรือกว้างที่สุด ควรอยู่ล่างสุดเสมอ
Route::get('/{slug?}', [HomeController::class, 'show'])->name('home');

// Route สำหรับแสดงบทความตาม Tag
Route::get('/tags/{tag_slug}', [HomeController::class, 'showByTag'])->name('tags.show');
