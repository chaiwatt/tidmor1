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
        // จัดการเรื่องชื่อและคำอธิบายให้กระชับขึ้น
        $productName = "คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ เพื่อพิชิตสอบเข้า ม.1";
        $productDesc = "คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อสำหรับสอบเข้า ม.1";

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
                "address" => [ // <-- แก้ไขเป็น address
                    "@type" => "PostalAddress",
                    "addressRegion" => $school->province
                ]
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
            "bookFormat" => "https://schema.org/EBook",
            "numberOfPages" => "1500",
            "learningResourceType" => "Book",
            "educationalLevel" => "Middle School"
        ];
        
        // แปลง Array เป็น JSON string แล้วคืนค่าออกไป (สำคัญมาก)
        return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}