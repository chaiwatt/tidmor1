<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{url('/')}}</loc>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{url('/')}}/บทความ</loc>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($articles as $article)
    <url>
        <loc>{{url('/')}}/บทความ/{{$article->slug}}</loc>
        <lastmod>{{$article->public_date->tz('Asia/Bangkok')->toAtomString()}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    @foreach ($schools as $school)
    <url>
        <loc>{{url('/')}}/{{$school->slug}}</loc>
        <lastmod>{{$article->public_date->tz('Asia/Bangkok')->toAtomString()}}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

</urlset>