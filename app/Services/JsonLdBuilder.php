<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Rating;

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
    $productName = "ข้อสอบเข้า ม.1 วิทยาศาสตร์ 3,000 ข้อ";
    $productDesc = "ข้อสอบเข้า ม.1 วิทยาศาสตร์ 3,000 ข้อ";
    $ratings = Rating::all();
    $reviewCount = $ratings->count();
    $ratingValue = $ratings->avg('rating');
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
    // $data = [
    //     "@context" => "https://schema.org",
    //     "@type" => "Product",
    //     "name" => $productName,
    //     "description" => $productDesc,
    //     "image" => $currentUrl . '/assets/images/book.webp',
    //     "brand" => [
    //         "@type" => "Brand",
    //         "name" => "TidMor1"
    //     ],
    //     "author" => [
    //         "@type" => "Person",
    //         "name" => "ณัฎฐพัชร์ ทวีจันทร์ (พี่โปรแกรม)",
    //         "award" => [
    //             "IJSO รอบ 3 (30 คนสุดท้าย) รอบคัดตัวแทนประเทศไทย ",
    //             "ค่าย 2 สสวท. เคมีโอลิมปิก ครั้งที่ 20 รอบคัดตัวแทนประเทศไทย"
    //             ],
    //         "knowsAbout" =>  [
    //             "เคมี",
    //             "ฟิสิกส์",
    //             "ชีววิทยา",
    //             "โอลิมปิกวิชาการ"
    //             ],
    //     ],
    //     "about" => [
    //         "@type" => "EducationalOrganization",
    //         "name" => $school->name,
    //         "description" => $school->school_info,
    //         "address" => [
    //             "@type" => "PostalAddress",
    //             "addressRegion" => $school->province
    //         ]
    //     ],
    //     "offers" => [
    //         "@type" => "Offer",
    //         "url" => $currentUrl,
    //         "priceCurrency" => "THB",
    //         "price" => $promotionPrice,
    //         "priceValidUntil" => $priceValidUntilDate, // <-- โปรโมชั่นถึงวันที่
    //         "priceSpecification" => [
    //             "@type" => "PriceSpecification",
    //             "price" => $price,
    //             "priceCurrency" => "THB",
    //             "validThrough" => $validThroughDate // <-- ราคาเต็มถึงวันที่
    //         ],
    //         "availability" => "https://schema.org/InStock",
    //         "shippingDetails" => [
    //             "@type" => "OfferShippingDetails",
    //             "shippingRate" => [
    //                 "@type" => "MonetaryAmount",
    //                 "value" => "0",
    //                 "currency" => "THB"
    //             ],
    //             "deliveryTime" => [
    //                 "@type" => "ShippingDeliveryTime",
    //                 "handlingTime" => [
    //                     "@type" => "QuantitativeValue",
    //                     "minValue" => 0,
    //                     "maxValue" => 0,
    //                     "unitCode" => "DAY"
    //                 ],
    //                 "transitTime" => [
    //                     "@type" => "QuantitativeValue",
    //                     "minValue" => 0,
    //                     "maxValue" => 0,
    //                     "unitCode" => "DAY"
    //                 ]
    //             ],
    //             "shippingDestination" => [
    //                 "@type" => "DefinedRegion",
    //                 "addressCountry" => "TH"
    //             ]
    //         ],
    //         "hasMerchantReturnPolicy" => [
    //             "@type" => "MerchantReturnPolicy",
    //             "applicableCountry" => "TH",
    //             "returnPolicyCategory" => "https://schema.org/MerchantReturnNotPermitted"
    //         ]
    //     ],
    //     "aggregateRating" => [
    //         "@type" => "AggregateRating",
    //         "ratingValue" => $ratingValue,
    //         "reviewCount" => $reviewCount
    //     ],
    //     "bookFormat" => "https://schema.org/EBook",
    //     "numberOfPages" => "1500",
    //     "learningResourceType" => "Book",
    //     "educationalLevel" => "Middle School"
    // ];
    $data = [
        "@context" => "https://schema.org",
        "@type" => "Product",
        "name" => $productName,
        "description" => $productDesc,
        "image" => $currentUrl . '/assets/images/book.webp',
        "brand" => [
            "@type" => "Brand",
            "name" => "TidMor1"
        ],
        "author" => [
            "@type" => "Person",
            "name" => "ณัฎฐพัชร์ ทวีจันทร์ (พี่โปรแกรม)",
            "award" => [
                "IJSO รอบ 3 (30 คนสุดท้าย) รอบคัดตัวแทนประเทศไทย ",
                "ค่าย 2 สสวท. เคมีโอลิมปิก ครั้งที่ 20 รอบคัดตัวแทนประเทศไทย"
                ],
            "knowsAbout" =>  [
                "เคมี",
                "ฟิสิกส์",
                "ชีววิทยา",
                "โอลิมปิกวิชาการ"
                ],
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
            "availability" => "https://schema.org/InStock",
            "shippingDetails" => [
                "@type" => "OfferShippingDetails",
                "shippingRate" => [
                    "@type" => "MonetaryAmount",
                    "value" => "0",
                    "currency" => "THB"
                ],
                "deliveryTime" => [
                    "@type" => "ShippingDeliveryTime",
                    "handlingTime" => [
                        "@type" => "QuantitativeValue",
                        "minValue" => 0,
                        "maxValue" => 0,
                        "unitCode" => "DAY"
                    ],
                    "transitTime" => [
                        "@type" => "QuantitativeValue",
                        "minValue" => 0,
                        "maxValue" => 0,
                        "unitCode" => "DAY"
                    ]
                ],
                "shippingDestination" => [
                    "@type" => "DefinedRegion",
                    "addressCountry" => "TH"
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
            "ratingValue" => $ratingValue,
            "reviewCount" => $reviewCount
        ],
        "bookFormat" => "https://schema.org/EBook",
        "numberOfPages" => "1500",
        "learningResourceType" => "Book",
        "educationalLevel" => "Middle School"
    ];
    
    
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}
}
