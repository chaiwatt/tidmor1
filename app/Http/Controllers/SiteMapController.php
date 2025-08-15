<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SiteMapController extends Controller
{
    public function index(): Response
    {
        $articles = Article::where('public_date', '<=', now())
                ->orderBy('public_date', 'desc')
                ->get();

        return response()->view('sitemap',[
            'articles' =>$articles
        ])->header('Content-Type','text/xml');
    }
}
