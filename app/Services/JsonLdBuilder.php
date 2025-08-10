<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Book;

class JsonLdBuilder
{
    /**
     * สร้าง JSON-LD สำหรับหน้า Product
     *
     * @param object $school
     * @param string $currentUrl
     * @return string
     */

public function buildForProduct(object $school, string $currentUrl): string
{
    // จัดการเรื่องชื่อและคำอธิบายให้กระชับขึ้น
    $productName = "คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ เพื่อพิชิตสอบเข้า ม.1";
    $productDesc = "คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อสำหรับสอบเข้า ม.1";
    $book = Book::first();
    $price = $book->price;
    $promotionPrice = $book->promotion_price;

    if (!empty($school->province)) {
        $locationText = " " . $school->name . " " . $school->province . " และ";
        $productName .= $locationText;
        $productDesc .= $locationText;
    }else{
        $productName .= " ";
        $productDesc .= " ";
    }
    $productName .= "โรงเรียนดังทั่วประเทศ";
    $productDesc .= "โรงเรียนดังทั่วประเทศ ในรูปแบบ PDF กว่า 1,500 หน้า ครอบคลุมเนื้อหา 5 หมวดหลัก: ฟิสิกส์, เคมี, ชีววิทยา, วิทยาศาสตร์พื้นฐาน, และโลกและอวกาศ";

    // 2. สร้างวันที่ด้วย Carbon
    $priceValidUntilDate = Carbon::now()->addMonth()->endOfMonth()->toDateString();

    $validThroughDate = Carbon::now()->addYear()->endOfYear()->toDateString();

    $data = [
        "@context" => "https://schema.org",
        "@type" => "Product",
        "name" => $productName,
        "description" => $productDesc,
        "image" => "https://placehold.co/400x500/0ea5e9/ffffff?text=คลังข้อสอบวิทย์+3000+ข้อ",
        "brand" => [
            "@type" => "Brand",
            "name" => "TidMor1"
        ],
        "author" => [
            "@type" => "Person",
            "name" => "ณัฎฐพัชร์ ทวีจันทร์ (พี่โปรแกรม)"
        ],
        "about" => [
            "@type" => "EducationalOrganization",
            "name" => $school->name,
            "description" => $school->school_info,
            "address" => [
                "@type" => "PostalAddress",
                "addressRegion" => $school->province
            ]
        ],
        "offers" => [
            "@type" => "Offer",
            "url" => $currentUrl,
            "priceCurrency" => "THB",
            "price" => $promotionPrice,
            "priceValidUntil" => $priceValidUntilDate, // <-- โปรโมชั่นถึงวันที่
            "priceSpecification" => [
                "@type" => "PriceSpecification",
                "price" => $price,
                "priceCurrency" => "THB",
                "validThrough" => $validThroughDate // <-- ราคาเต็มถึงวันที่
            ],
            "availability" => "https://schema.org/InStock",
            "shippingDetails" => [
                "@type" => "OfferShippingDetails",
                "shippingRate" => [
                    "@type" => "MonetaryAmount",
                    "value" => "0",
                    "currency" => "THB"
                ]
            ],
            "hasMerchantReturnPolicy" => [
                "@type" => "MerchantReturnPolicy",
                "applicableCountry" => "TH",
                "returnPolicyCategory" => "https://schema.org/MerchantReturnNotPermitted"
            ]
        ],
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => "4.9",
            "reviewCount" => "125"
        ],
        "bookFormat" => "https://schema.org/EBook",
        "numberOfPages" => "1500",
        "learningResourceType" => "Book",
        "educationalLevel" => "Middle School"
    ];
    
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
}