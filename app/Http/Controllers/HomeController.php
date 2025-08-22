<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Book;
use App\Models\Rating;
use App\Models\School;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\JsonLdBuilder;
use App\Services\JsonLdArticleBuilder;

class HomeController extends Controller
{
  // ใช้ Dependency Injection เพื่อให้ Laravel สร้าง JsonLdBuilder ให้เราอัตโนมัติ
    public function show(?string $slug = null)
    {
        $jsonLdBuilder = new JsonLdBuilder();
        if ($slug) {
            $school = School::where('slug', $slug)->firstOrFail();
        } else {
            $school = new stdClass();
            $school->name = "โรงเรียนดังทั่วประเทศ";
            $school->province = "";
            $school->school_info = "";
        }

        $jsonLdString = $jsonLdBuilder->buildForProduct($school, url()->current());

        $ratings = Rating::all();
        $book = Book::first();

        return view('home', [
            'school' => $school,
            'jsonLdString' => $jsonLdString,
            'ratings' => $ratings,
            'book' => $book,
        ]);
    }

    public function detail(string $slug)
    {
        $jsonLdArticleBuilder = new JsonLdArticleBuilder();
        
        $article = Article::where('slug', $slug)
                        ->where('public_date', '<=', now())
                        ->firstOrFail();
        $bodyWithReplacedHomepage = str_replace('index.html', url('/'), $article->body);
        $allPublishedSlugs = Article::where('public_date', '<=', now())->pluck('slug')->toArray();
        $articleBody = preg_replace_callback(
            '/<a\s+[^>]*href=[\'"]\/บทความ\/([^\'"]+)[\'"][^>]*>(.*?)<\/a>/i',
            function ($matches) use ($allPublishedSlugs) {
                $foundSlug = $matches[1];
                
                if (in_array($foundSlug, $allPublishedSlugs)) {
                    return $matches[0];
                } else {
                    return $matches[2];
                }
            },
            $bodyWithReplacedHomepage // <-- ใช้ตัวแปรใหม่ตรงนี้
        );

        $jsonLdString = $jsonLdArticleBuilder->buildForProduct($article);
        
        // 5. ส่งข้อมูลไปยัง View
        return view('detail', [
            'article' => $article,
            'jsonLdString' => $jsonLdString,
            'articleBody' => $articleBody
        ]);
    }

    public function article()
    {
        // 1. สร้าง Query Builder ขึ้นมา
        $query = Article::where('public_date', '<=', now());

        // 2. (เพิ่มเข้ามา) โหลด Relationship ล่วงหน้าเพื่อประสิทธิภาพ
        $query->with('featureArticle');

        // 3. (โค้ดเดิมของคุณ) ใช้ subquery เพื่อเรียงบทความ Feature ขึ้นก่อน
        $query->orderByRaw("
            EXISTS (
                SELECT 1 FROM feature_articles
                WHERE feature_articles.article_id = articles.id
            ) DESC
        ");

        // 4. (โค้ดเดิมของคุณ) เรียงลำดับที่เหลือตามวันที่เผยแพร่
        $query->orderBy('public_date', 'desc');

        // 5. ทำการ paginate
        $articles = $query->paginate(10);

        // 6. ส่งข้อมูลไปยัง View
        return view('article', [
            'articles' => $articles
        ]);
    }


    public function showByTag(string $tag_slug)
    {
        $articles = Article::where('public_date', '<=', now())
            ->whereRaw(
                'JSON_SEARCH(tags, "one", ?, NULL, "$[*].tag_slug") IS NOT NULL',
                [$tag_slug]
            )
            ->orderBy('public_date', 'desc')
            ->paginate(10);

            $tagName = $tag_slug; 
            $firstArticle = $articles->first();
            if ($firstArticle) {
                foreach ($firstArticle->tags as $tag) {
                    if ($tag['tag_slug'] === $tag_slug) {
                        $tagName = $tag['tag'];
                        break;
                    }
                }
            }

            return view('article', [
                'articles' => $articles,
                'pageTitle' => 'บทความในแท็ก: ' . $tagName,
                'pageSubtitle' => 'รวมบทความทั้งหมดที่เกี่ยวกับ "' . $tagName . '"'
            ]);
    }

    public function legal()
    {
        return view('legal');
    }

    public function about()
    {
        return view('about');
    }
}
