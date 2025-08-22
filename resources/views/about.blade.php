<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา - TidMor1</title>
    <meta name="description" content="Tidmor1.com แหล่งรวมข้อสอบเข้า ม.1 วิทยาศาสตร์คุณภาพสูง พร้อมเฉลยละเอียด จัดทำโดยผู้มีประสบการณ์ในสนามสอบโอลิมปิกโดยตรง">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- JSON-LD for SEO -->
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AboutPage",
      "name": "เกี่ยวกับเรา - TidMor1",
      "url": "{{ url()->current() }}",
      "description": "Tidmor1.com มุ่งมั่นที่จะเป็นแหล่งรวมข้อสอบและสื่อการเรียนรู้ด้านวิทยาศาสตร์คุณภาพสูงสำหรับสอบเข้า ม.1 เพื่อช่วยให้นักเรียนเตรียมความพร้อมเข้าสู่สนามสอบได้อย่างมั่นใจ",
      "publisher": {
        "@type": "Organization",
        "name": "TidMor1",
        "founder": {
            "@type": "Person",
            "name": "ณัฎฐพัชร์ ทวีจันทร์ (พี่โปรแกรม)",
            "award": [
                "IJSO รอบ 3 (30 คนสุดท้าย) รอบคัดตัวแทนประเทศไทย",
                "ค่าย 2 สสวท. เคมีโอลิมปิก ครั้งที่ 20 รอบคัดตัวแทนประเทศไทย"
            ],
            "knowsAbout": [
                "เคมี",
                "ฟิสิกส์",
                "ชีววิทยา",
                "โอลิมปิกวิชาการ"
            ]
        }
      }
    }
    </script>
     @endverbatim

    <style>
        /* === Page-Specific Styles === */
        body {
            line-height: 1.8;
            font-size: 16px;
        }

        .hero {
            padding-top: 3rem;
            padding-bottom: 4rem;
        }

        .content-card {
            background-color: var(--color-white);
            border: 1px solid var(--color-border);
            border-radius: 1rem;
            padding: 2rem 2.5rem;
            margin-top: -2.5rem;
            box-shadow: 0 10px 25px -5px rgb(0 0 0 / 0.07), 0 8px 10px -6px rgb(0 0 0 / 0.07);
            position: relative;
            z-index: 10;
        }
        
        @media (max-width: 640px) {
            .content-card {
                padding: 1.5rem;
            }
        }

        .content-section section {
            margin-top: 3.5rem; /* Added margin-top to the section tag */
        }

        .content-section section:first-of-type {
            margin-top: 0; /* Remove margin from the first section */
        }

        .content-section h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--color-primary);
            /* margin-top is now on the section element */
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--color-border);
            display: flex;
            align-items: center;
        }
        
        .content-section h2 .icon {
            font-size: 1.5rem;
            margin-right: 0.75rem;
        }

        .content-section ul {
            list-style-position: outside;
            padding-left: 1.25rem;
        }

        .content-section li {
            margin-bottom: 0.75rem;
            padding-left: 0.5rem;
        }
        
        /* Re-using author-card style from _home.css for consistency */
        .author-section {
             padding: 0; /* Override padding from _home.css */
             margin-top: 3rem;
        }
        .author-card {
            box-shadow: none;
            padding: 0;
        }

        .footer {
            padding: 4rem 1rem 2rem;
        }
        
        .footer a {
            color: var(--color-heading);
        }
    </style>
</head>
<body>

    <div class="page-wrapper">
        <header class="hero">
            <div class="container">
                <h1 class="hero__title">เกี่ยวกับเรา</h1>
                <p class="hero__subtitle">วิสัยทัศน์ และพันธกิจของ TidMor1</p>
            </div>
        </header>

        <main class="main-content">
            <div class="container">
                <div class="content-card">
                    <div class="content-section">
                        
                        <section id="about">
                            <h2><span class="icon">🚀</span>เกี่ยวกับ Tidmor1</h2>
                            <p>
                                <strong>ข้อสอบเข้า ม.1 วิทยาศาสตร์ 3,000 ข้อ</strong> เพื่อพิชิตสอบเข้า ม.1 โรงเรียนดังทั่วประเทศ ออกแบบตามหลักสูตรแกนกลาง (สสวท.) และข้อสอบวิทยาศาสตร์โอลิมปิก ระดับมัธยมศึกษาตอนต้น (IJSO) ครอบคลุมทุกเนื้อหาที่ต้องรู้สำหรับสนามสอบเข้า ม.1 โรงเรียนดังโดยเฉพาะ
                            </p>
                        </section>

                        <section id="vision">
                            <h2><span class="icon">🎯</span>วิสัยทัศน์ (Vision)</h2>
                            <p>
                                เรามุ่งมั่นที่จะเป็นแหล่งรวมข้อสอบและสื่อการเรียนรู้ด้านวิทยาศาสตร์ที่มีคุณภาพสูง ครอบคลุม และเชื่อถือได้
                            </p>
                        </section>

                        <section id="mission">
                            <h2><span class="icon">🧭</span>พันธกิจ (Mission)</h2>
                            <ul>
                                <li>จัดทำสื่อการเรียนรู้ที่ถูกต้อง อัปเดต และมีคุณภาพ</li>
                                <li>สนับสนุนให้นักเรียนได้เข้าถึงข้อสอบจริงและการวิเคราะห์เชิงสถิติ</li>
                                <li>ช่วยผู้ปกครองและนักเรียนประหยัดเวลาในการค้นหาแหล่งเรียนรู้ที่เชื่อถือได้</li>
                            </ul>
                        </section>
                    </div>

                    <!-- Author Section (Re-using styles from home) -->
                    <section class="author-section">
                        <h2 class="content-section__title" style="font-size: 1.75rem; color: var(--color-primary); border-bottom: 2px solid var(--color-border); padding-bottom: 0.75rem; margin-top: 3.5rem;">ผู้จัดทำ</h2>
                        <div class="author-card">
                            <div class="author-image-wrapper">
                                <img src="https://placehold.co/400x400/e0f2fe/0ea5e9?text=PProgram" alt="พี่โปรแกรม ณัฎฐพัชร์ ทวีจันทร์" class="author-image">
                            </div>
                            <div class="author-info">
                                <h3 class="author-name">
                                    <span class="author-name__prefix">พี่โปรแกรม</span>
                                    <span class="author-name__main">ณัฎฐพัชร์ ทวีจันทร์</span>
                                </h3>
                                <p class="author-title">จากประสบการณ์ในสนามสอบ สู่คู่มือพิชิตข้อสอบวิทยาศาสตร์</p>
                                <ul class="achievements-list">
                                    <li class="achievement-item">
                                        <span class="achievement-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                                        </span>
                                        <span>ผ่านการสอบแข่งขันเคมีโอลิมปิกวิชาการ ค่าย 2 สสวท. รอบคัดตัวแทนประเทศไทย</span>
                                    </li>
                                    <li class="achievement-item">
                                        <span class="achievement-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                                        </span>
                                        <span>ผ่านการสอบแข่งขันวิทยาศาสตร์โอลิมปิก ระดับมัธยมศึกษาตอนต้น (IJSO) รอบ 3 คัดตัวแทนประเทศไทย (30 คนสุดท้าย)</span>
                                    </li>
                                     <li class="achievement-item">
                                        <span class="achievement-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                                        </span>
                                        <span>มีความตั้งใจในการพัฒนาและถ่ายทอดเนื้อหาที่เป็นประโยชน์ต่อการศึกษา</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </main>
        
       <footer class="footer">
            <p>&copy; {{ date('Y') }} TidMor1. All rights reserved.</p>
            <p style="margin-top: 0.5rem;">
                <a href="/">กลับสู่หน้าหลัก</a>
            </p>
        </footer>
    </div>

</body>
</html>
