<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Rating;

class JsonLdArticleBuilder
{
    /**
     * สร้าง JSON-LD สำหรับหน้า Product
     *
     * @param object $school
     * @param string $currentUrl
     * @return string
     */

public function buildForProduct($article): string
{
    $articleTagsArray = [];
    if (!empty($article->tags)) {
        // แปลง array ของ tags ให้เป็น array ของ string (ชื่อ tag)
        $articleTagsArray = array_column($article->tags, 'tag');
    }

    // สร้าง URL เต็มของบทความ
    // เช่น https://www.yourdomain.com/บทความ/this-is-a-slug
    $articleUrl = url('/บทความ/' . $article->slug); 

    $data = [
        "@context" => "https://schema.org",
        "@type" => "Article",
        "mainEntityOfPage" => [
            "@type" => "WebPage",
            "@id" => $articleUrl 
        ],
        "headline" => $article->title,
        "description" => $article->json_ld_description,
        "keywords" => implode(", ", $articleTagsArray),
        "author" => [
            "@type" => "Person",
            "name" => "ทีมงาน TidMor1"
        ],
        "publisher" => [
            "@type" => "Organization",
            "name" => "TidMor1",
            "logo" => [
                "@type" => "ImageObject",
                "url" => url('/images/logo.png')
            ]
        ],
        "datePublished" => $article->public_date->toIso8601String(),
        "dateModified" => $article->public_date->toIso8601String()
    ];
    
    // return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}
}