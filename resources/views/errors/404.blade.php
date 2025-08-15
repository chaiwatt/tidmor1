<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ไม่พบหน้าที่คุณค้นหา (404 Not Found) - TidMor1</title>

    <meta name="description" content="ขออภัย ไม่พบหน้าที่คุณกำลังค้นหา อาจเป็นเพราะลิงก์ไม่ถูกต้องหรือหน้านี้ถูกลบไปแล้ว กลับไปหน้าแรกเพื่อค้นหาข้อมูลที่เป็นประโยชน์ต่อไป">
    
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    </head>
<body>
    <div class="page-wrapper">
        <nav class="navbar">
            <div class="container">
                <a href="{{url('')}}" class="navbar__brand">TidMor1</a>
                
                <ul class="navbar__links">
                    <li class="navbar__link"><a href="{{url('')}}">หน้าแรก</a></li>
                    <li class="navbar__link"><a href="{{route('article')}}">บทความ</a></li>
                </ul>

                <button class="navbar__hamburger" id="hamburger-button" aria-label="เมนู">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>

        <div class="mobile-menu" id="mobile-menu">
            <ul class="mobile-menu__links">
                <li class="mobile-menu__link"><a href="{{url('')}}">หน้าแรก</a></li>
                <li class="mobile-menu__link"><a href="{{route('article')}}">บทความ</a></li>
            </ul>
        </div>


        <main class="main-content">
            <div class="container">
                <div class="not-found-container" style="text-align: center; padding: 4rem 1rem;">
                    
                    <h1 style="font-size: 6rem; font-weight: 800; color: #cbd5e1; margin-bottom: 0;">404</h1>
                    
                    <h2 style="font-size: 1.875rem; font-weight: 700; margin-top: 0.5rem; margin-bottom: 1rem;">ไม่พบหน้าที่คุณค้นหา</h2>
                    
                    <p style="max-width: 600px; margin: 0 auto 2rem auto; color: #64748b;">
                        ขออภัยครับ ดูเหมือนว่าหน้าที่คุณกำลังมองหาอาจจะถูกย้าย, ถูกลบ, หรือไม่เคยมีอยู่จริง ลองตรวจสอบ URL อีกครั้ง หรือกลับไปยังหน้าแรกของเรา
                    </p>
                    
                    <div class="back-link-wrapper">
                        <a href="{{url('/')}}" class="back-link" style="font-size: 1rem; padding: 0.75rem 1.5rem; background-color: #2563eb; color: white; border-radius: 0.5rem; text-decoration: none;">
                            &larr; กลับไปหน้าแรก
                        </a>
                    </div>
                </div>
            </div>
        </main>
        
        <footer class="footer">
            <p>
                &copy; {{ date('Y') }} TidMor1.
                <span class="footer__rights">All rights reserved.</span>
                <a href="{{route('article')}}">บทความ</a>
            </p>
        </footer>
    </div>
</body>
</html>