<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คลังข้อสอบวิทย์ 3,000 ข้อ พิชิตสอบเข้า ม.1 {{ $school->name }}</title>

    <!-- SEO: Meta Description (สำคัญมาก) -->
    <meta name="description" content="คลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ พร้อมเฉลยละเอียด สำหรับเตรียมสอบเข้า ม.1 โรงเรียน {{ $school->name }} ครอบคลุมเนื้อหาฟิสิกส์ เคมี ชีวะ และโลกดาราศาสตร์">

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
                <p class="hero__school-name">เพื่อพิชิตสอบเข้า ม.1 โรงเรียน {{ $school->name }}</p>
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
                        <h3 class="feature-card__title">แนวข้อสอบจริง</h3>
                        <p class="feature-card__text">3,000 ข้อแยกหัวเรื่อง</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-card__number">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                        </div>
                        <h3 class="feature-card__title">เนื้อหาอัพเดทล่าสุด</h3>
                        <p class="feature-card__text">อัพเดทล่าสุด พ.ศ. 2568</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-card__number">
                           <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 10H2v2h12v-2zm0-4H2v2h12V6zM2 16h8v-2H2v2zm19.5-4.5L23 13l-6.99 7-4.51-4.5L13 14l3.01 3 5.49-5.5z"/></svg>
                        </div>
                        <h3 class="feature-card__title">เฉลยละเอียด</h3>
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
                    <section class="book-preview-section">
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
                    </section>

                    <!-- Example 3: Upcoming Sale -->
                     <section class="book-preview-section">
                        <div class="book-preview-wrapper">
                            <img src="https://placehold.co/400x500/0ea5e9/ffffff?text=คลังข้อสอบวิทย์+3000+ข้อ" alt="หน้าปกหนังสือคลังข้อสอบวิทยาศาสตร์ 3,000 ข้อ" class="book-preview-image">
                            <!-- Countdown Banner (Upcoming Sale) -->
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
                    </section>

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
                                <h3 class="author-name">พี่โปรแกรม ณัฎฐพัชร์ ทวีจันทร์</h3>
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
                                    <li class="achievement-item">
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
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="pricing-section">
                    
                    <!-- Pricing Card Example 1: Standard Price -->
                    <div class="pricing-card">
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
                                ราคา <span>299</span> บาท
                            </p>
                        </div>
                        
                        <div class="qr-code-wrapper">
                            <img src="https://placehold.co/200x200/111827/ffffff?text=QR+CODE" alt="QR Code สำหรับสั่งซื้อทางไลน์" class="qr-code-image">
                            <p class="qr-code-text">สั่งซื้อทางไลน์และขอตัวอย่างฟรี</p>
                        </div>

                        <p class="pricing-card__footer-text">ออกแบบเพื่อความสำเร็จในสนามสอบแข่งขัน</p>
                    </div>

                    <!-- Pricing Card Example 2: Discounted Price with Active Sale -->
                    <div class="pricing-card">
                        <h2 class="pricing-card__title">เครื่องมือที่ดีที่สุดเพื่อเตรียมสอบเข้า ม.1</h2>
                        <p class="pricing-card__subtitle">เข้าถึงคลังข้อสอบคุณภาพกว่า 3,000 ข้อในราคาเดียว รูปแบบไฟล์ PDF</p>
                        
                        <div class="rating-wrapper">
                            <div class="rating-stars" id="rating-stars-container-2">
                                <!-- Stars will be generated by JavaScript -->
                            </div>
                            <p class="rating-score" id="rating-score-text-2">ให้คะแนนหนังสือเล่มนี้</p>
                        </div>

                        <!-- NEW: Countdown timer inside the card -->
                        <div class="sale-countdown-wrapper">
                            <div class="countdown-title">Flash Sale สิ้นสุดใน</div>
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
                        </div>

                        <div class="pricing-card__price-wrapper">
                            <div class="price-display">
                                <span class="original-price">299 บาท</span>
                                <span class="sale-price">199 บาท</span>
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
                <p>&copy; {{ date('Y') }} TidMor1. All rights reserved. <a href="{{route('article')}}">บทความ</a></p>
            </footer>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // --- Star Rating Logic ---
            function setupStarRating(containerId, scoreTextId) {
                const starsContainer = document.getElementById(containerId);
                const scoreText = document.getElementById(scoreTextId);
                if (!starsContainer || !scoreText) return;

                const starCount = 5;
                let currentRating = 0;

                for (let i = 1; i <= starCount; i++) {
                    const star = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                    star.setAttribute('class', 'rating-star');
                    star.setAttribute('viewBox', '0 0 24 24');
                    star.setAttribute('fill', 'currentColor');
                    star.dataset.value = i;

                    const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                    path.setAttribute('d', 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z');
                    
                    star.appendChild(path);
                    starsContainer.appendChild(star);
                }

                const stars = starsContainer.querySelectorAll('.rating-star');

                function updateStars(rating) {
                    stars.forEach(star => {
                        star.classList.toggle('filled', star.dataset.value <= rating);
                    });
                }

                stars.forEach(star => {
                    star.addEventListener('mouseover', () => updateStars(star.dataset.value));
                    star.addEventListener('mouseout', () => updateStars(currentRating));
                    star.addEventListener('click', () => {
                        currentRating = star.dataset.value;
                        updateStars(currentRating);
                        scoreText.textContent = `ขอบคุณสำหรับ ${currentRating} คะแนน!`;
                    });
                });
            }

            setupStarRating('rating-stars-container-1', 'rating-score-text-1');
            setupStarRating('rating-stars-container-2', 'rating-score-text-2');


            // --- Countdown Timer Logic ---

            // 1. Active Sale Countdown on Book Image
            function setupActiveCountdown() {
                const countdownElement = document.getElementById('countdown-active');
                if (!countdownElement) return;

                const countdownDate = new Date();
                countdownDate.setDate(countdownDate.getDate() + 3);

                const daysEl = document.getElementById('days-active');
                const hoursEl = document.getElementById('hours-active');
                const minutesEl = document.getElementById('minutes-active');
                const secondsEl = document.getElementById('seconds-active');

                const updateCountdown = () => {
                    const now = new Date().getTime();
                    const distance = countdownDate - now;

                    if (distance < 0) {
                        clearInterval(interval);
                        if (countdownElement.parentElement) {
                           countdownElement.parentElement.innerHTML = "<div class='countdown-title' style='padding: 2rem 0;'>โปรโมชั่นสิ้นสุดแล้ว</div>";
                        }
                        return;
                    }

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    if(daysEl) daysEl.textContent = String(days).padStart(2, '0');
                    if(hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
                    if(minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
                    if(secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');
                };

                const interval = setInterval(updateCountdown, 1000);
                updateCountdown();
            }

            // 2. Upcoming Sale Countdown on Book Image
            function setupUpcomingCountdown() {
                const countdownElement = document.getElementById('countdown-upcoming');
                if (!countdownElement) return;

                const countdownDate = new Date();
                countdownDate.setDate(countdownDate.getDate() + 5);

                const daysEl = document.getElementById('days-upcoming');
                const hoursEl = document.getElementById('hours-upcoming');
                const minutesEl = document.getElementById('minutes-upcoming');
                const secondsEl = document.getElementById('seconds-upcoming');

                const updateCountdown = () => {
                    const now = new Date().getTime();
                    const distance = countdownDate - now;

                    if (distance < 0) {
                        clearInterval(interval);
                        if (countdownElement.parentElement) {
                           countdownElement.parentElement.innerHTML = "<div class='countdown-title' style='padding: 2rem 0;'>Flash Sale เริ่มแล้ว!</div>";
                        }
                        return;
                    }

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    if(daysEl) daysEl.textContent = String(days).padStart(2, '0');
                    if(hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
                    if(minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
                    if(secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');
                };

                const interval = setInterval(updateCountdown, 1000);
                updateCountdown();
            }
            
            // 3. Active Sale Countdown in Price Card
            function setupPriceCardCountdown() {
                const countdownElement = document.getElementById('price-card-countdown');
                if (!countdownElement) return;

                const countdownDate = new Date();
                countdownDate.setHours(countdownDate.getHours() + 12); // Sale ends in 12 hours for this example

                const daysEl = document.getElementById('days-price-card');
                const hoursEl = document.getElementById('hours-price-card');
                const minutesEl = document.getElementById('minutes-price-card');
                const secondsEl = document.getElementById('seconds-price-card');

                const updateCountdown = () => {
                    const now = new Date().getTime();
                    const distance = countdownDate - now;

                    if (distance < 0) {
                        clearInterval(interval);
                        if (countdownElement.parentElement) {
                           countdownElement.parentElement.innerHTML = "<div class='countdown-title'>โปรโมชั่นนี้สิ้นสุดแล้ว</div>";
                        }
                        return;
                    }

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    if(daysEl) daysEl.textContent = String(days).padStart(2, '0');
                    if(hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
                    if(minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
                    if(secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');
                };

                const interval = setInterval(updateCountdown, 1000);
                updateCountdown();
            }


            // Initialize all countdowns
            setupActiveCountdown();
            setupUpcomingCountdown();
            setupPriceCardCountdown();
        });
    </script>
</body>
</html>
