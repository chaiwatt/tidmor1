<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$article->title}} - TidMor1</title>

    <meta name="description" content="{{$article->meta_description}}">

    <link rel="canonical" href="{{url('/')}}/บทความ/{{$article->slug}}"> 

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- ========== JSON-LD for Article (ปรับปรุงแล้ว) ========== -->

    <script type="application/ld+json">
        {!! $jsonLdString !!}
    </script>
        </script>
</head>
<body>
    <div class="page-wrapper">
        <!-- Navigation Bar -->
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="container">
                <a href="{{url('')}}" class="navbar__brand">TidMor1</a>
                
                <!-- Desktop Menu -->
                <ul class="navbar__links">
                    <li class="navbar__link"><a href="{{url('')}}">หน้าแรก</a></li>
                    <li class="navbar__link"><a href="{{route('article')}}">บทความ</a></li>
                </ul>

                <!-- Hamburger Menu Button (for mobile) -->
                <button class="navbar__hamburger" id="hamburger-button" aria-label="เมนู">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu (Fullscreen Overlay) -->
        <div class="mobile-menu" id="mobile-menu">
            <ul class="mobile-menu__links">
                <li class="mobile-menu__link"><a href="{{url('')}}">หน้าแรก</a></li>
                <li class="mobile-menu__link"><a href="{{route('article')}}">บทความ</a></li>
            </ul>
        </div>


        <main class="main-content">
            <div class="container">
                <article class="article-container">
                    <header class="article-header">
                        <h1 class="article-header__title">{{$article->title}}</h1>
                        <p class="article-header__meta">เขียนโดย: ทีมงาน TidMor1 | เผยแพร่เมื่อ: {{$article->thaiDate}}</p>
                        @if($article->tags)
                            <div class="article-header__tags">
                                @foreach($article->tags as $tag)
                                    <a href="/tags/{{ $tag['tag_slug'] }}" class="article-header__tag">
                                        {{ $tag['tag'] }}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </header>
                 <div class="article-content">
                    {!! $articleBody !!}
                    <div class="back-link-wrapper">
                        <a href="{{route('article')}}" class="back-link">&larr; กลับไปหน้ารวมบทความ</a>
                    </div>
                </article>
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