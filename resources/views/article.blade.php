<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทความและเทคนิคพิชิตสอบเข้า ม.1 - TidMor1</title>
    <meta name="description" content="รวมบทความ เทคนิคการเตรียมตัว และเคล็ดลับสำหรับผู้ปกครองและนักเรียนเพื่อพิชิตสนามสอบเข้า ม.1 โรงเรียนชั้นนำ">
    <link rel="canonical" href="{{ route('article') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">

    </script>
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
                    <span></span><span></span><span></span>
                </button>
            </div>
        </nav>
        <div class="mobile-menu" id="mobile-menu">
            <ul class="mobile-menu__links">
                <li class="mobile-menu__link"><a href="{{url('')}}">หน้าแรก</a></li>
                <li class="mobile-menu__link"><a href="{{route('article')}}">บทความ</a></li>
            </ul>
        </div>


        <header class="hero">
            <div class="container">
                <h1 class="hero__title">บทความและเทคนิค</h1>
                <p class="hero__subtitle">เคล็ดลับการเรียน การเตรียมตัวสอบ และสาระน่ารู้สำหรับผู้ปกครองและนักเรียน</p>
            </div>
        </header>
            
        <main class="main-content">
            <div class="container">
                <div class="article-list">

                    @forelse($articles as $article)
                        <article class="article-card">
                            {{-- Title --}}
                            <h2 class="article-card__title">
                                <a href="{{ route('detail', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                            </h2>

                            {{-- Meta (Author & Date) --}}
                            <p class="article-card__meta">โดย ทีมงาน TidMor1 | {{ $article->thai_date }}</p>
                            
                            {{-- Tags --}}
                            @if(!empty($article->tags))
                                <div class="article-card__tags">
                                    @foreach($article->tags as $tag)
                                        <a href="/tags/{{ $tag['tag_slug'] }}" class="article-card__tag">{{ $tag['tag'] }}</a>
                                    @endforeach
                                </div>
                            @endif

                            {{-- Description / Snippet --}}
                            <p class="article-card__description">{{ $article->meta_description }}</p>
                            
                            {{-- Read More Button --}}
                            <div class="article-card__readmore">
                                <a href="{{ route('detail', ['slug' => $article->slug]) }}" class="btn">อ่านต่อ &rarr;</a>
                            </div>
                        </article>
                    @empty
                        <p style="text-align: center; padding: 3rem 0;">ยังไม่มีบทความในขณะนี้</p>
                    @endforelse

                </div>

                {{-- Pagination Links --}}
                <div class="pagination-wrapper">
                    {{ $articles->links() }}
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