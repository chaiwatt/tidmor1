<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทความและเทคนิคพิชิตสอบเข้า ม.1 - TidMor1</title>

    <meta name="description" content="รวมบทความ เทคนิคการเตรียมตัว และเคล็ดลับสำหรับผู้ปกครองและนักเรียนเพื่อพิชิตสนามสอบเข้า ม.1 โรงเรียนชั้นนำ">

    <link rel="canonical" href="/articles"> <!-- URL ควรเป็น URL จริงของหน้านี้ -->

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* === CSS ทั้งหมดจากไฟล์เดิม === */
        :root {
            --color-primary: #3b82f6; /* blue-600 */
            --color-primary-dark: #2563eb; /* blue-700 */
            --color-secondary: #64748b; /* slate-500 */
            --color-text: #334155; /* slate-700 */
            --color-heading: #0f172a; /* slate-900 */
            --color-background: #f8fafc; /* slate-50 */
            --color-white: #ffffff;
            --color-border: #e2e8f0; /* slate-200 */
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Sarabun', sans-serif; background-color: var(--color-background); color: var(--color-text); line-height: 1.6; }
        .container { max-width: 1280px; margin-left: auto; margin-right: auto; padding-left: 1.5rem; padding-right: 1.5rem; }
        .btn { display: inline-block; background-color: var(--color-primary); color: var(--color-white); font-weight: 700; font-size: 1.125rem; padding: 0.75rem 1.5rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); transition: all 0.3s ease; text-align: center; border: 2px solid transparent; }
        .btn:hover { background-color: var(--color-primary-dark); transform: scale(1.05); }
        .main-content { padding-top: 4rem; padding-bottom: 4rem; }
        .navbar { background-color: var(--color-white); padding: 1rem 0; border-bottom: 1px solid var(--color-border); box-shadow: 0 2px 4px rgb(0 0 0 / 0.05); position: sticky; top: 0; z-index: 50; }
        .navbar .container { display: flex; justify-content: space-between; align-items: center; }
        .navbar__brand { font-weight: 800; font-size: 1.5rem; color: var(--color-heading); text-decoration: none; }
        .navbar__links { list-style: none; display: flex; gap: 2rem; }
        .navbar__link a { text-decoration: none; color: var(--color-text); font-weight: 600; font-size: 1rem; transition: color 0.2s ease; }
        .navbar__link a:hover { color: var(--color-primary); }
        .hero { background: linear-gradient(170deg, #f0f9ff 0%, #ffffff 100%); padding-top: 4rem; padding-bottom: 4rem; text-align: center; }
        .hero__title { font-size: 2.75rem; font-weight: 800; color: var(--color-heading); line-height: 1.2; }
        .hero__subtitle { margin-top: 1rem; font-size: 1.25rem; max-width: 48rem; margin-left: auto; margin-right: auto; color: var(--color-secondary); }
        .article-list { display: grid; grid-template-columns: 1fr; gap: 2rem; max-width: 56rem; margin-left: auto; margin-right: auto; }
        .article-card { background-color: var(--color-white); border: 1px solid var(--color-border); border-radius: 1rem; padding: 2rem; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05), 0 2px 4px -2px rgb(0 0 0 / 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .article-card:hover { transform: translateY(-5px); box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1); }
        .article-card__title { font-size: 1.75rem; font-weight: 700; color: var(--color-heading); margin-bottom: 0.75rem; }
        .article-card__title a { text-decoration: none; color: inherit; }
        .article-card__title a:hover { color: var(--color-primary); }
        .article-card__meta { font-size: 0.9rem; color: var(--color-secondary); margin-bottom: 1rem; }
        .article-card__description { font-size: 1.1rem; color: var(--color-text); margin-bottom: 1.5rem; line-height: 1.7; }
        .article-card__readmore { text-align: right; }
        
        /* === Article Tags (เพิ่มใหม่) === */
        .article-card__tags {
            margin-bottom: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .article-card__tag {
            background-color: #eef2ff; /* indigo-100 */
            color: #4338ca; /* indigo-800 */
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.2s ease;
        }
        .article-card__tag:hover {
            background-color: #e0e7ff; /* indigo-200 */
        }

        /* === Footer === */
        .footer { 
            margin-top: 5rem; 
            text-align: center; 
            font-size: 1rem; 
            color: var(--color-secondary); 
            padding: 2rem 0; 
            border-top: 1px solid var(--color-border); 
        }
        .footer p {
            margin-bottom: 0.75rem;
        }
        .footer a {
            color: var(--color-text);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }
        .footer a:hover {
            color: var(--color-primary);
        }

        @media (min-width: 768px) { .hero__title { font-size: 3.5rem; } }
    </style>

    <!-- ========== JSON-LD for Article List (อัปเดตแล้ว) ========== -->
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "name": "บทความและเทคนิคพิชิตสอบเข้า ม.1",
      "description": "รวมบทความ เทคนิคการเตรียมตัว และเคล็ดลับสำหรับผู้ปกครองและนักเรียนเพื่อพิชิตสนามสอบเข้า ม.1 โรงเรียนชั้นนำ",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@type": "Article",
            "url": "https://www.yourwebsite.com/article-detail.html",
            "headline": "5 เทคนิคเตรียมตัวโค้งสุดท้ายก่อนสอบเข้า ม.1 ที่ได้ผลจริง",
            "description": "เวลางวดเข้ามาทุกที! มาดู 5 เทคนิคสำคัญที่จะช่วยให้น้องๆ ทบทวนเนื้อหาได้อย่างมีประสิทธิภาพและพร้อมที่สุดสำหรับวันสอบจริง ตั้งแต่การจัดตารางเวลาไปจนถึงการดูแลสุขภาพ",
            "keywords": ["เทคนิคเตรียมสอบ", "สอบเข้า ม.1", "โค้งสุดท้าย"],
            "datePublished": "2025-08-05T08:00:00+07:00",
            "author": {
              "@type": "Person",
              "name": "ทีมงาน TidMor1"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@type": "Article",
            "url": "https://www.yourwebsite.com/article-detail.html",
            "headline": "เจาะลึกวิชาวิทยาศาสตร์: บทไหนควรเน้นเป็นพิเศษสำหรับสนามสอบ ม.1",
            "description": "วิชาวิทยาศาสตร์มีเนื้อหาหลากหลาย แต่บทไหนกันแน่ที่มักจะออกสอบบ่อยที่สุด? บทความนี้จะวิเคราะห์แนวข้อสอบย้อนหลังและชี้เป้าหัวข้อที่ต้องเก็บคะแนนให้ได้",
            "keywords": ["วิทยาศาสตร์", "แนวข้อสอบ", "สอบเข้า ม.1"],
            "datePublished": "2025-07-28T08:00:00+07:00",
             "author": {
              "@type": "Person",
              "name": "ทีมงาน TidMor1"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@type": "Article",
            "url": "https://www.yourwebsite.com/article-detail.html",
            "headline": "บทบาทผู้ปกครอง: จะสนับสนุนลูกอย่างไรในช่วงเตรียมสอบ?",
            "description": "การสนับสนุนจากครอบครัวเป็นสิ่งสำคัญ ค้นพบวิธีให้กำลังใจ จัดสภาพแวดล้อมที่เหมาะสม และช่วยลูกจัดการความเครียด เพื่อให้พวกเขาทำข้อสอบได้อย่างเต็มศักยภาพ",
            "keywords": ["ผู้ปกครอง", "เคล็ดลับ", "จิตวิทยาเด็ก"],
            "datePublished": "2025-07-15T08:00:00+07:00",
             "author": {
              "@type": "Person",
              "name": "ทีมงาน TidMor1"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 4,
          "item": {
            "@type": "Article",
            "url": "https://www.yourwebsite.com/article-detail.html",
            "headline": "สร้างสมาธิในห้องสอบ: วิธีรับมือกับความตื่นเต้นและข้อสอบที่ไม่คาดคิด",
            "description": "ความตื่นเต้นเป็นเรื่องปกติ แต่เราจัดการได้ เรียนรู้เทคนิคการหายใจ การบริหารเวลา และวิธีคิดเมื่อเจอข้อสอบที่ทำไม่ได้ เพื่อไม่ให้เสียคะแนนไปอย่างน่าเสียดาย",
            "keywords": ["เทคนิคเตรียมสอบ", "สมาธิ", "ห้องสอบ"],
            "datePublished": "2025-07-05T08:00:00+07:00",
             "author": {
              "@type": "Person",
              "name": "ทีมงาน TidMor1"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 5,
          "item": {
            "@type": "Article",
            "url": "https://www.yourwebsite.com/article-detail.html",
            "headline": "รีวิวหนังสือ \"คลังข้อสอบวิทย์ 3,000 ข้อ\" ใช้จริงแล้วเป็นอย่างไร?",
            "description": "ทำไมคลังข้อสอบชุดนี้ถึงเป็นเครื่องมือที่ได้รับความนิยม? เราจะมาเจาะลึกถึงจุดเด่น ความครอบคลุมของเนื้อหา และวิธีใช้หนังสือให้เกิดประโยชน์สูงสุด",
            "keywords": ["รีวิว", "หนังสือ", "คลังข้อสอบ"],
            "datePublished": "2025-06-25T08:00:00+07:00",
             "author": {
              "@type": "Person",
              "name": "ทีมงาน TidMor1"
            }
          }
        }
      ]
    }
    </script>
    @endverbatim
</head>
<body>
    <div class="page-wrapper">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="container">
                <a href="{{url('')}}" class="navbar__brand">TidMor1</a>
                <ul class="navbar__links">
                    <li class="navbar__link"><a href="{{url('')}}">หน้าแรก (สินค้า)</a></li>
                    <li class="navbar__link"><a href="{{route('article')}}">บทความ</a></li>
                </ul>
            </div>
        </nav>

        <!-- Header -->
        <header class="hero">
            <div class="container">
                <h1 class="hero__title">บทความและเทคนิค</h1>
                <p class="hero__subtitle">เคล็ดลับการเรียน การเตรียมตัวสอบ และสาระน่ารู้สำหรับผู้ปกครองและนักเรียน</p>
            </div>
        </header>
    
        <main class="main-content">
            <div class="container">
                <div class="article-list">
                    <!-- Article 1 -->
                    <article class="article-card">
                        <h2 class="article-card__title"><a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}">5 เทคนิคเตรียมตัวโค้งสุดท้ายก่อนสอบเข้า ม.1 ที่ได้ผลจริง</a></h2>
                        <p class="article-card__meta">โดย ทีมงาน TidMor1 | 5 สิงหาคม 2568</p>
                        <div class="article-card__tags">
                            <a href="#" class="article-card__tag">เทคนิคเตรียมสอบ</a>
                            <a href="#" class="article-card__tag">สอบเข้า ม.1</a>
                            <a href="#" class="article-card__tag">โค้งสุดท้าย</a>
                        </div>
                        <p class="article-card__description">เวลางวดเข้ามาทุกที! มาดู 5 เทคนิคสำคัญที่จะช่วยให้น้องๆ ทบทวนเนื้อหาได้อย่างมีประสิทธิภาพและพร้อมที่สุดสำหรับวันสอบจริง ตั้งแต่การจัดตารางเวลาไปจนถึงการดูแลสุขภาพ</p>
                        <div class="article-card__readmore">
                            <a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}" class="btn">อ่านต่อ &rarr;</a>
                        </div>
                    </article>
                    <!-- Article 2 -->
                    <article class="article-card">
                        <h2 class="article-card__title"><a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}">เจาะลึกวิชาวิทยาศาสตร์: บทไหนควรเน้นเป็นพิเศษสำหรับสนามสอบ ม.1</a></h2>
                        <p class="article-card__meta">โดย ทีมงาน TidMor1 | 28 กรกฎาคม 2568</p>
                        <div class="article-card__tags">
                            <a href="#" class="article-card__tag">วิทยาศาสตร์</a>
                            <a href="#" class="article-card__tag">แนวข้อสอบ</a>
                            <a href="#" class="article-card__tag">สอบเข้า ม.1</a>
                        </div>
                        <p class="article-card__description">วิชาวิทยาศาสตร์มีเนื้อหาหลากหลาย แต่บทไหนกันแน่ที่มักจะออกสอบบ่อยที่สุด? บทความนี้จะวิเคราะห์แนวข้อสอบย้อนหลังและชี้เป้าหัวข้อที่ต้องเก็บคะแนนให้ได้</p>
                        <div class="article-card__readmore">
                            <a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}" class="btn">อ่านต่อ &rarr;</a>
                        </div>
                    </article>
                    <!-- Article 3 -->
                    <article class="article-card">
                        <h2 class="article-card__title"><a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}">บทบาทผู้ปกครอง: จะสนับสนุนลูกอย่างไรในช่วงเตรียมสอบ?</a></h2>
                        <p class="article-card__meta">โดย ทีมงาน TidMor1 | 15 กรกฎาคม 2568</p>
                        <div class="article-card__tags">
                            <a href="#" class="article-card__tag">ผู้ปกครอง</a>
                            <a href="#" class="article-card__tag">เคล็ดลับ</a>
                            <a href="#" class="article-card__tag">จิตวิทยาเด็ก</a>
                        </div>
                        <p class="article-card__description">การสนับสนุนจากครอบครัวเป็นสิ่งสำคัญ ค้นพบวิธีให้กำลังใจ จัดสภาพแวดล้อมที่เหมาะสม และช่วยลูกจัดการความเครียด เพื่อให้พวกเขาทำข้อสอบได้อย่างเต็มศักยภาพ</p>
                        <div class="article-card__readmore">
                            <a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}" class="btn">อ่านต่อ &rarr;</a>
                        </div>
                    </article>
                    <!-- Article 4 -->
                    <article class="article-card">
                        <h2 class="article-card__title"><a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}">สร้างสมาธิในห้องสอบ: วิธีรับมือกับความตื่นเต้นและข้อสอบที่ไม่คาดคิด</a></h2>
                        <p class="article-card__meta">โดย ทีมงาน TidMor1 | 5 กรกฎาคม 2568</p>
                        <div class="article-card__tags">
                            <a href="#" class="article-card__tag">เทคนิคเตรียมสอบ</a>
                            <a href="#" class="article-card__tag">สมาธิ</a>
                            <a href="#" class="article-card__tag">ห้องสอบ</a>
                        </div>
                        <p class="article-card__description">ความตื่นเต้นเป็นเรื่องปกติ แต่เราจัดการได้ เรียนรู้เทคนิคการหายใจ การบริหารเวลา และวิธีคิดเมื่อเจอข้อสอบที่ทำไม่ได้ เพื่อไม่ให้เสียคะแนนไปอย่างน่าเสียดาย</p>
                        <div class="article-card__readmore">
                            <a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}" class="btn">อ่านต่อ &rarr;</a>
                        </div>
                    </article>
                    <!-- Article 5 -->
                    <article class="article-card">
                        <h2 class="article-card__title"><a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}">รีวิวหนังสือ "คลังข้อสอบวิทย์ 3,000 ข้อ" ใช้จริงแล้วเป็นอย่างไร?</a></h2>
                        <p class="article-card__meta">โดย ทีมงาน TidMor1 | 25 มิถุนายน 2568</p>
                        <div class="article-card__tags">
                            <a href="#" class="article-card__tag">รีวิว</a>
                            <a href="#" class="article-card__tag">หนังสือ</a>
                            <a href="#" class="article-card__tag">คลังข้อสอบ</a>
                        </div>
                        <p class="article-card__description">ทำไมคลังข้อสอบชุดนี้ถึงเป็นเครื่องมือที่ได้รับความนิยม? เราจะมาเจาะลึกถึงจุดเด่น ความครอบคลุมของเนื้อหา และวิธีใช้หนังสือให้เกิดประโยชน์สูงสุด</p>
                        <div class="article-card__readmore">
                            <a href="{{route('detail',['slug' => 'ชื่อบทความ'])}}" class="btn">อ่านต่อ &rarr;</a>
                        </div>
                    </article>
                </div>
            </div>
        </main>
        
        <!-- Footer (ปรับปรุงแล้ว) -->
        <footer class="footer">
            <p><a href="{{route("article")}}">บทความทั้งหมด</a></p>
            <p>&copy; 2025 TidMor1. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>