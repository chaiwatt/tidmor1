<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คลังข้อสอบวิทย์ 3,000 ข้อ พิชิตสอบเข้า ม.1 {{ $school->name }} {{ $school->province }}</title>

    <!-- SEO: Meta Description (สำคัญมาก) -->
    <meta name="description" content="คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ พร้อมเฉลยละเอียด สำหรับเตรียมสอบเข้า ม.1 {{ $school->name }} {{ $school->province }}ครอบคลุมเนื้อหาฟิสิกส์ เคมี ชีวะ และโลกดาราศาสตร์">

    <!-- SEO: Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700;800&display=swap" rel="stylesheet"> --}}
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])




    <script type="application/ld+json">
        {!! $jsonLdString !!}
    </script>
    {{-- <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ เพื่อพิชิตสอบเข้า ม.1 โรงเรียน ",
      "description": "คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อสำหรับสอบเข้า ม.1 ในรูปแบบ PDF กว่า 1,500 หน้า ครอบคลุมเนื้อหา 5 หมวดหลัก: ฟิสิกส์, เคมี, ชีววิทยา, วิทยาศาสตร์พื้นฐาน, และโลกและอวกาศ",
      "image": "https://placehold.co/400x500/0ea5e9/ffffff?text=คลังข้อสอบวิทย์+3000+ข้อ",
      "brand": {
        "@type": "Brand",
        "name": "TidMor1"
      },
      "author": {
        "@type": "Person",
        "name": "ณัฎฐพัชร์ ทวีจันทร์ (พี่โปรแกรม)"
      },
      "about": {
        "@type": "EducationalOrganization",
        "name": ""
      },
      "offers": {
        "@type": "Offer",
        "url": "{{ url()->current() }}",
        "priceCurrency": "THB",
        "price": "199",
        "priceSpecification": {
            "@type": "PriceSpecification",
            "price": "299",
            "priceCurrency": "THB",
            "validThrough": "2025-12-31"
         }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "125"
      },
      "isbn": "978-1-2345-6789-0",
      "bookFormat": "https://schema.org/EBook",
      "numberOfPages": "1500",
      "learningResourceType": "Book",
      "educationalLevel": "Middle School"
    }
    </script>  --}}

</head>
<body>

    <div class="page-wrapper">

        <header class="hero">
            <div class="container">
                <h1 class="hero__title">คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ</h1>
                <p class="hero__school-name">เพื่อพิชิตสอบเข้า ม.1 {{ $school->name }}</p>
                <p class="hero__subtitle">ออกแบบตามหลักสูตรแกนกลาง (สสวท.) และข้อสอบวิทยาศาสตร์โอลิมปิก ระดับมัธยมศึกษาตอนต้น (IJSO) ครอบคลุมทุกเนื้อหาที่ต้องรู้สำหรับสนามสอบเข้า ม.1 โรงเรียนดังโดยเฉพาะ</p>
                <div class="hero__cta-wrapper">
                    <a href="#content-details" class="btn">ดูรายละเอียดเนื้อหา</a>
                </div>
            </div>
        </header>
    
        <main class="main-content">
            <div class="container">

                <section class="features">
                    <div class="feature-card">
                        <div class="feature-card__number">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zM6 20V4h7v5h5v11H6z"/></svg>
                        </div>
                        <h2 class="feature-card__title">แนวข้อสอบจริง</h2>
                        <p class="feature-card__text">3,000 ข้อแยกเรื่อง</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-card__number">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                        </div>
                        <h2 class="feature-card__title">เนื้อหาอัพเดทล่าสุด</h2>
                        <p class="feature-card__text">อัพเดทล่าสุด พ.ศ. 2568</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-card__number">
                           <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 10H2v2h12v-2zm0-4H2v2h12V6zM2 16h8v-2H2v2zm19.5-4.5L23 13l-6.99 7-4.51-4.5L13 14l3.01 3 5.49-5.5z"/></svg>
                        </div>
                        <h2 class="feature-card__title">เฉลยละเอียด</h2>
                        <p class="feature-card__text">อธิบายเข้าใจง่ายทุกข้อ</p>
                    </div>
                </section>

                <section id="content-details">
                    <h2 class="content-section__title">เจาะลึกเนื้อหาในคลังข้อสอบ</h2>

                    <!-- Example 1 -->
                    <section class="book-preview-section">
                        <div class="book-preview-wrapper">
                            <img src="https://placehold.co/400x500/0ea5e9/ffffff?text=คลังข้อสอบวิทย์+3000+ข้อ" alt="หน้าปกหนังสือคลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ" class="book-preview-image">
                        </div>
                    </section>
                    
                    <!-- Example 2: Sale is Active -->
                    {{-- <section class="book-preview-section">
                        <div class="book-preview-wrapper">
                            <img src="https://placehold.co/400x500/0ea5e9/ffffff?text=คลังข้อสอบวิทย์+3000+ข้อ" alt="หน้าปกหนังสือคลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ" class="book-preview-image">
                            <!-- Countdown Banner (Active Sale) -->
                            <div class="countdown-banner">
                                <div class="countdown-title">Flash Sale สิ้นสุดใน</div>
                                <div id="countdown-active" class="countdown-timer">
                                    <div class="countdown-item">
                                        <span id="days-active" class="countdown-number">00</span>
                                        <span class="countdown-label">วัน</span>
                                    </div>
                                    <div class="countdown-item">
                                        <span id="hours-active" class="countdown-number">00</span>
                                        <span class="countdown-label">ชั่วโมง</span>
                                    </div>
                                    <div class="countdown-item">
                                        <span id="minutes-active" class="countdown-number">00</span>
                                        <span class="countdown-label">นาที</span>
                                    </div>
                                    <div class="countdown-item">
                                        <span id="seconds-active" class="countdown-number">00</span>
                                        <span class="countdown-label">วินาที</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --}}

                    <!-- Example 3: Upcoming Sale -->
                     {{-- <section class="book-preview-section">
                        <div class="book-preview-wrapper">
                            <img src="https://placehold.co/400x500/0ea5e9/ffffff?text=คลังข้อสอบวิทย์+3000+ข้อ" alt="หน้าปกหนังสือคลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ" class="book-preview-image">
                            <div class="countdown-banner countdown-banner-upcoming">
                                <div class="countdown-title">Flash Sale เริ่มในอีก</div>
                                <div id="countdown-upcoming" class="countdown-timer">
                                    <div class="countdown-item">
                                        <span id="days-upcoming" class="countdown-number">00</span>
                                        <span class="countdown-label">วัน</span>
                                    </div>
                                    <div class="countdown-item">
                                        <span id="hours-upcoming" class="countdown-number">00</span>
                                        <span class="countdown-label">ชั่วโมง</span>
                                    </div>
                                    <div class="countdown-item">
                                        <span id="minutes-upcoming" class="countdown-number">00</span>
                                        <span class="countdown-label">นาที</span>
                                    </div>
                                    <div class="countdown-item">
                                        <span id="seconds-upcoming" class="countdown-number">00</span>
                                        <span class="countdown-label">วินาที</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --}}

                    <div class="content-blocks-wrapper">
                        
                        <!-- Block 1: ฟิสิกส์ -->
                        <div class="content-block">
                            <div class="content-block__header">
                                <span class="content-block__icon">🧲</span>
                                <div>
                                    <h3 class="content-block__title" style="color: #2563eb;">ฟิสิกส์</h3>
                                    <p class="content-block__subtitle">รวม 800 ข้อ (16 ชุด)</p>
                                </div>
                            </div>
                            <div class="content-block__body">
                                <div>
                                    <h4 class="content-block__topic-title">1. แรงและการเคลื่อนที่</h4>
                                    <ul class="content-block__topic-list">
                                        <li>ชนิดของแรง (แรงโน้มถ่วง, แรงเสียดทาน, แรงแม่เหล็ก)</li>
                                        <li>ผลของแรงต่อวัตถุ (เปลี่ยนทิศ, ความเร็ว, รูปร่าง)</li>
                                        <li>ความเร็ว, ความเร่ง, การเคลื่อนที่แนวเส้นตรง, แรงลัพธ์</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">2. พลังงาน</h4>
                                    <ul class="content-block__topic-list">
                                        <li>ชนิดของพลังงาน (พลังงานศักย์, พลังงานจลน์)</li>
                                        <li>การเปลี่ยนรูปของพลังงาน และการอนุรักษ์พลังงาน</li>
                                        <li>แหล่งพลังงาน (หมุนเวียนและไม่หมุนเวียน)</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">3. แสงและเสียง</h4>
                                    <ul class="content-block__topic-list">
                                        <li>การสะท้อนและการหักเหของแสง, การเห็นภาพและเงา</li>
                                        <li>การเกิดเสียง, การสะท้อนเสียง, ความเร็วของเสียง</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">4. ไฟฟ้าและแม่เหล็ก</h4>
                                    <ul class="content-block__topic-list">
                                        <li>วงจรไฟฟ้า (อนุกรม/ขนาน), สื่อนำไฟฟ้า</li>
                                        <li>แม่เหล็กและสนามแม่เหล็ก</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Block 2: เคมี -->
                        <div class="content-block">
                            <div class="content-block__header">
                                <span class="content-block__icon">⚗️</span>
                                <div>
                                    <h3 class="content-block__title" style="color: #c2410c;">เคมี</h3>
                                    <p class="content-block__subtitle">รวม 600 ข้อ (12 ชุด)</p>
                                </div>
                            </div>
                            <div class="content-block__body">
                                <div>
                                    <h4 class="content-block__topic-title">1. สารและสมบัติของสาร</h4>
                                    <ul class="content-block__topic-list">
                                        <li>สารบริสุทธิ์/สารผสม, สถานะและการเปลี่ยนแปลง</li>
                                        <li>สมบัติทางกายภาพและเคมีของสาร</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">2. การจำแนกและการแยกสาร</h4>
                                    <ul class="content-block__topic-list">
                                        <li>สารเนื้อเดียว/สารเนื้อผสม</li>
                                        <li>การแยกสาร (กรอง, ระเหย, ตกตะกอน)</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">3. กรด-เบส</h4>
                                    <ul class="content-block__topic-list">
                                        <li>ลักษณะของกรด-เบส และการทดสอบ</li>
                                        <li>การวัดค่าความเป็นกรด-เบส (pH)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Block 3: ชีววิทยา -->
                        <div class="content-block">
                            <div class="content-block__header">
                                <span class="content-block__icon">🧬</span>
                                <div>
                                    <h3 class="content-block__title" style="color: #16a34a;">ชีววิทยา</h3>
                                    <p class="content-block__subtitle">รวม 800 ข้อ (16 ชุด)</p>
                                </div>
                            </div>
                            <div class="content-block__body">
                                <div>
                                    <h4 class="content-block__topic-title">1. สิ่งมีชีวิตและสิ่งแวดล้อม</h4>
                                    <ul class="content-block__topic-list">
                                        <li>ความสัมพันธ์ในระบบนิเวศ, ห่วงโซ่อาหาร</li>
                                        <li>การปรับตัวของสิ่งมีชีวิต</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">2. พืชและสัตว์</h4>
                                    <ul class="content-block__topic-list">
                                        <li>โครงสร้างและหน้าที่ของพืช, การสืบพันธุ์ของพืชดอก</li>
                                        <li>การสืบพันธุ์และการเจริญเติบโตของสัตว์</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">3. ระบบร่างกายมนุษย์</h4>
                                    <ul class="content-block__topic-list">
                                        <li>อาหารและสารอาหาร, ระบบย่อยอาหาร, ระบบหายใจ</li>
                                        <li>ระบบไหลเวียนโลหิต, ระบบขับถ่าย, ระบบประสาทเบื้องต้น</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Block 4: วิทยาศาสตร์พื้นฐาน -->
                        <div class="content-block">
                            <div class="content-block__header">
                                <span class="content-block__icon">🔬</span>
                                <div>
                                    <h3 class="content-block__title" style="color: #475569;">วิทยาศาสตร์พื้นฐานและเทคโนโลยี</h3>
                                    <p class="content-block__subtitle">รวม 300 ข้อ (6 ชุด)</p>
                                </div>
                            </div>
                            <div class="content-block__body">
                                <div>
                                    <h4 class="content-block__topic-title">1. การทดลองทางวิทยาศาสตร์</h4>
                                    <ul class="content-block__topic-list">
                                        <li>ขั้นตอนกระบวนการทางวิทยาศาสตร์, ตัวแปร</li>
                                        <li>การบันทึกและแปลผลข้อมูล</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">2. หน่วยการวัด</h4>
                                    <ul class="content-block__topic-list">
                                        <li>หน่วยของมวล, ความยาว, เวลา, ปริมาตร</li>
                                        <li>การแปลงหน่วยและการใช้เครื่องมือวัด</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Block 5: โลกและอวกาศ -->
                        <div class="content-block">
                            <div class="content-block__header">
                                <span class="content-block__icon">🌍</span>
                                <div>
                                    <h3 class="content-block__title" style="color: #7e22ce;">โลกและอวกาศ</h3>
                                    <p class="content-block__subtitle">รวม 500 ข้อ (10 ชุด)</p>
                                </div>
                            </div>
                            <div class="content-block__body">
                                <div>
                                    <h4 class="content-block__topic-title">1. โลกและการเปลี่ยนแปลง</h4>
                                    <ul class="content-block__topic-list">
                                        <li>ชั้นของโลก, หินและแร่, วัฏจักรหิน</li>
                                        <li>การกร่อน, ทรัพยากรธรรมชาติ</li>
                                    </ul>
                                </div>
                                 <div>
                                    <h4 class="content-block__topic-title">2. ดิน น้ำ และอากาศ</h4>
                                    <ul class="content-block__topic-list">
                                        <li>ชนิดและสมบัติของดิน, น้ำ, อากาศ</li>
                                        <li>วัฏจักรน้ำ</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="content-block__topic-title">3. ระบบสุริยะและดาราศาสตร์</h4>
                                    <ul class="content-block__topic-list">
                                        <li>ดวงอาทิตย์, ดาวเคราะห์, ดวงจันทร์</li>
                                        <li>การเกิดกลางวัน-กลางคืน, สุริยุปราคา/จันทรุปราคา</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="author-section">
                    <div class="container">
                        <h2 class="content-section__title">เกี่ยวกับผู้เขียน</h2>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M15.188 8.122a.75.75 0 01.062 1.058l-5.25 6.5a.75.75 0 01-1.112.075l-3.25-3.5a.75.75 0 011.125-.975l2.616 2.828 4.76-5.95a.75.75 0 011.058-.062z" clip-rule="evenodd" /></svg>
                                        </span>
                                        <span><strong>IJSO รอบ 3</strong> คัดตัวแทนประเทศไทย (30 คนสุดท้าย)</span>
                                    </li>
                                    <li class="achievement-item">
                                        <span class="achievement-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M15.188 8.122a.75.75 0 01.062 1.058l-5.25 6.5a.75.75 0 01-1.112.075l-3.25-3.5a.75.75 0 011.125-.975l2.616 2.828 4.76-5.95a.75.75 0 011.058-.062z" clip-rule="evenodd" /></svg>
                                        </span>
                                        <span><strong>เคมีโอลิมปิก ค่าย 2 สสวท.</strong> รอบคัดตัวแทนประเทศไทย</span>
                                    </li>
                                    {{-- <li class="achievement-item">
                                        <span class="achievement-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M15.188 8.122a.75.75 0 01.062 1.058l-5.25 6.5a.75.75 0 01-1.112.075l-3.25-3.5a.75.75 0 011.125-.975l2.616 2.828 4.76-5.95a.75.75 0 011.058-.062z" clip-rule="evenodd" /></svg>
                                        </span>
                                        <span><strong>คณะแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</strong> (โครงการเรียนดีโอลิมปิก)</span>
                                    </li>
                                    <li class="achievement-item">
                                        <span class="achievement-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M15.188 8.122a.75.75 0 01.062 1.058l-5.25 6.5a.75.75 0 01-1.112.075l-3.25-3.5a.75.75 0 011.125-.975l2.616 2.828 4.76-5.95a.75.75 0 011.058-.062z" clip-rule="evenodd" /></svg>
                                        </span>
                                        <span><strong>คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล</strong> (โครงการเรียนดีโอลิมปิก)</span>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="pricing-section">
                    
                    <!-- Pricing Card Example 1: Standard Price -->
                    {{-- <div class="pricing-card">
                        <h2 class="pricing-card__title">เครื่องมือที่ดีที่สุดเพื่อเตรียมสอบเข้า ม.1</h2>
                        <p class="pricing-card__subtitle">เข้าถึงคลังข้อสอบคุณภาพกว่า 3,000 ข้อในราคาเดียว รูปแบบไฟล์ PDF</p>
                        
                        <div class="rating-wrapper">
                            <div class="rating-stars" id="rating-stars-container-1">
                                <!-- Stars will be generated by JavaScript -->
                            </div>
                            <p class="rating-score" id="rating-score-text-1">ให้คะแนนหนังสือเล่มนี้</p>
                        </div>

                        <div class="pricing-card__price-wrapper">
                            <p class="pricing-card__price">
                                ราคา <span>{{$book->promotion_price}}</span> บาท
                            </p>
                        </div>
                        
                        <div class="qr-code-wrapper">
                            <img src="https://placehold.co/200x200/111827/ffffff?text=QR+CODE" alt="QR Code สำหรับสั่งซื้อทางไลน์" class="qr-code-image">
                            <p class="qr-code-text">สั่งซื้อทางไลน์และขอตัวอย่างฟรี</p>
                        </div>

                        <p class="pricing-card__footer-text">ออกแบบเพื่อความสำเร็จในสนามสอบแข่งขัน</p>
                    </div> --}}

                    <div class="pricing-card">
                        <h2 class="pricing-card__title">เครื่องมือที่ดีที่สุดเพื่อเตรียมสอบเข้า ม.1</h2>
                        <p class="pricing-card__subtitle">เข้าถึงคลังข้อสอบคุณภาพกว่า 3,000 ข้อในราคาเดียว รูปแบบไฟล์ PDF</p>
                        

                         <div class="rating-wrapper">
                            <!-- เพิ่ม data-rating attribute และส่งค่าจาก server -->
                             <div class="rating-stars" 
                                 id="rating-stars-container-2" 
                                 data-rating="{{ $ratings->avg('rating') ?? 0 }}"
                                 data-count="{{ $ratings->count() ?? 0 }}">
                            </div>
                            <p class="rating-score" id="rating-score-text-2">ให้คะแนนหนังสือเล่มนี้</p>
                        </div>

                        {{-- <div class="sale-countdown-wrapper">
                            <div class="countdown-title">โปรโมชั่นจะสิ้นสุดใน</div>
                            <div id="price-card-countdown" class="countdown-timer">
                                <div class="countdown-item">
                                    <span id="days-price-card" class="countdown-number">00</span>
                                    <span class="countdown-label">วัน</span>
                                </div>
                                <div class="countdown-item">
                                    <span id="hours-price-card" class="countdown-number">00</span>
                                    <span class="countdown-label">ชั่วโมง</span>
                                </div>
                                <div class="countdown-item">
                                    <span id="minutes-price-card" class="countdown-number">00</span>
                                    <span class="countdown-label">นาที</span>
                                </div>
                                <div class="countdown-item">
                                    <span id="seconds-price-card" class="countdown-number">00</span>
                                    <span class="countdown-label">วินาที</span>
                                </div>
                            </div>
                        </div> --}}

                        <div class="pricing-card__price-wrapper">
                            <div class="price-display">
                                <span class="original-price">{{$book->price}} บาท</span>
                                <span class="sale-price">{{$book->promotion_price}} บาท</span>
                            </div>
                        </div>
                        
                        <div class="qr-code-wrapper">
                            <img src="https://placehold.co/200x200/111827/ffffff?text=QR+CODE" alt="QR Code สำหรับสั่งซื้อทางไลน์" class="qr-code-image">
                            <p class="qr-code-text">สั่งซื้อทางไลน์และขอตัวอย่างฟรี</p>
                        </div>

                        <p class="pricing-card__footer-text">ออกแบบเพื่อความสำเร็จในสนามสอบแข่งขัน</p>
                    </div>

                </section>
            </main>
            
        <footer class="footer">
            <p>
                &copy; {{ date('Y') }} TidMor1.
                <span class="footer__rights">All rights reserved.</span>
                <a href="{{route('article')}}">บทความ</a>
            </p>
        </footer>
        </div>
    </div>

    <!-- Floating Action Button -->
    <div class="fab-container" id="fab-container">
        <!-- ปุ่มปิด -->
        <button class="fab fab--close" id="fab-close" aria-label="ปิด">
            <svg viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="26" cy="26" rx="26" ry="26" fill="#FF6060"/>
                <rect width="27.1433" height="3.89857" rx="1.94928" transform="matrix(0.707107 -0.707107 -0.707107 -0.707107 18.35 37.5059)" fill="white"/>
                <rect width="27.1433" height="3.89857" rx="1.94928" transform="matrix(0.707107 0.707107 0.707107 -0.707107 15.6001 18.422)" fill="white"/>
            </svg>
        </button>
        <!-- ปุ่ม LINE -->
        <a href="https://page.line.me/875fdwhp" target="_blank" class="fab fab--line" aria-label="ติดต่อทาง LINE">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="19.4395" cy="19.4395" r="19.4395" fill="#38B900"/>
                <path d="M24 9.36561C24 4.19474 18.6178 0 12 0C5.38215 0 0 4.19474 0 9.36561C0 13.9825 4.25629 17.8606 10.0229 18.5993C10.4073 18.6785 10.9565 18.8368 11.0664 19.1797C11.1762 19.4699 11.1487 19.9184 11.0938 20.235C11.0938 20.235 10.9565 21.0528 10.9291 21.2111C10.8741 21.5013 10.6819 22.3456 11.9725 21.8443C13.2632 21.3167 18.8924 17.9398 21.3913 15.1433C23.1487 13.2702 24 11.4234 24 9.36561Z" transform="translate(7 10)" fill="white"/>
                <path d="M1.0984 0H0.24714C0.10984 0 -2.09503e-07 0.105528 -2.09503e-07 0.211056V5.22364C-2.09503e-07 5.35555 0.10984 5.43469 0.24714 5.43469H1.0984C1.2357 5.43469 1.34554 5.32917 1.34554 5.22364V0.211056C1.34554 0.105528 1.2357 0 1.0984 0Z" transform="translate(15.4577 16.8593)" fill="#38B900"/>
                <path d="M4.66819 0H3.81693C3.67963 0 3.56979 0.105528 3.56979 0.211056V3.19222L1.18078 0.0791458C1.18078 0.0791458 1.18078 0.0527642 1.15332 0.0527642C1.15332 0.0527642 1.15332 0.0527641 1.12586 0.0263821C1.12586 0.0263821 1.12586 0.0263821 1.0984 0.0263821H0.247139C0.10984 0.0263821 4.19006e-07 0.13191 4.19006e-07 0.237438V5.25002C4.19006e-07 5.38193 0.10984 5.46108 0.247139 5.46108H1.0984C1.2357 5.46108 1.34554 5.35555 1.34554 5.25002V2.26885L3.73455 5.38193C3.76201 5.40831 3.76201 5.43469 3.78947 5.43469C3.78947 5.43469 3.78947 5.43469 3.81693 5.43469C3.81693 5.43469 3.81693 5.43469 3.84439 5.43469C3.87185 5.43469 3.87185 5.43469 3.89931 5.43469H4.75057C4.88787 5.43469 4.99771 5.32917 4.99771 5.22364V0.211056C4.91533 0.105528 4.80549 0 4.66819 0Z" transform="translate(17.6819 16.8593)" fill="#38B900"/>
                <path d="M3.62471 4.22112H1.34554V0.237438C1.34554 0.105528 1.2357 0 1.0984 0H0.24714C0.10984 0 -5.23757e-08 0.105528 -5.23757e-08 0.237438V5.25002C-5.23757e-08 5.30278 0.0274599 5.35555 0.0549198 5.40831C0.10984 5.43469 0.16476 5.46108 0.21968 5.46108H3.56979C3.70709 5.46108 3.78947 5.35555 3.78947 5.22364V4.4058C3.87185 4.32665 3.76201 4.22112 3.62471 4.22112Z" transform="translate(10.8993 16.8593)" fill="#38B900"/>
                <path d="M3.56979 1.29272C3.70709 1.29272 3.78947 1.18719 3.78947 1.05528V0.237438C3.78947 0.105528 3.67963 -1.00639e-07 3.56979 -1.00639e-07H0.219679C0.164759 -1.00639e-07 0.10984 0.0263821 0.0549199 0.0527641C0.02746 0.105528 -2.09503e-07 0.158292 -2.09503e-07 0.211056V5.22364C-2.09503e-07 5.2764 0.02746 5.32917 0.0549199 5.38193C0.10984 5.40831 0.164759 5.43469 0.219679 5.43469H3.56979C3.70709 5.43469 3.78947 5.32917 3.78947 5.19726V4.37941C3.78947 4.2475 3.67963 4.14198 3.56979 4.14198H1.29062V3.29775H3.56979C3.70709 3.29775 3.78947 3.19222 3.78947 3.06031V2.24247C3.78947 2.11056 3.67963 2.00503 3.56979 2.00503H1.29062V1.16081H3.56979V1.29272Z" transform="translate(23.421 16.8329)" fill="#38B900"/>
            </svg>
        </a>
    </div>


</body>
</html>
