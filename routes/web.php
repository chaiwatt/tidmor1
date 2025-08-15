<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteMapController;

// Route::get('/', function () {
//     return view('welcome');
// });

// routes/web.php

// 1. Route ที่เฉพาะเจาะจงที่สุดควรอยู่บนสุดเสมอ
// เปลี่ยน Route ของ sitemap มาไว้ตรงนี้
Route::get('sitemap/sitemap.xml', [SiteMapController::class, 'index'])->name('sitemap');

Route::get('/บทความ', [HomeController::class, 'article'])->name('article');

// 2. Route ที่มี Prefix หรือมีตัวแปรรองลงมา
Route::get('/บทความ/{slug}', [HomeController::class, 'detail'])->name('detail');
Route::get('/tags/{tag_slug}', [HomeController::class, 'showByTag'])->name('tags.show');

// 3. Route ที่เป็น 'catch-all' หรือกว้างที่สุด ต้องอยู่ล่างสุดเสมอ
Route::get('/{slug?}', [HomeController::class, 'show'])->name('home');
