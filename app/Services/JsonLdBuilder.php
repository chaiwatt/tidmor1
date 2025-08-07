<?php

namespace App\Services;

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
        // ย้าย Array ทั้งหมดมาไว้ที่นี่
        $data = [
            "@context" => "https://schema.org",
            "@type" => "Product",
            "name" => "คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ เพื่อพิชิตสอบเข้า ม.1 โรงเรียน " . $school->name,
            "description" => "คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อสำหรับสอบเข้า ม.1 ในรูปแบบ PDF กว่า 1,500 หน้า ครอบคลุมเนื้อหา 5 หมวดหลัก: ฟิสิกส์, เคมี, ชีววิทยา, วิทยาศาสตร์พื้นฐาน, และโลกและอวกาศ",
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
                "name" => $school->name
            ],
            "offers" => [
                "@type" => "Offer",
                "url" => $currentUrl,
                "priceCurrency" => "THB",
                "price" => "199",
                "priceSpecification" => [
                    "@type" => "PriceSpecification",
                    "price" => "299",
                    "priceCurrency" => "THB",
                    "validThrough" => "2025-12-31"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.9",
                "reviewCount" => "125"
            ],
            "isbn" => "978-1-2345-6789-0",
            "bookFormat" => "https://schema.org/EBook",
            "numberOfPages" => "1500",
            "learningResourceType" => "Book",
            "educationalLevel" => "Middle School"
        ];

        return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}