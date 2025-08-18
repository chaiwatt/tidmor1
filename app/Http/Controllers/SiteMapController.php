<?php

namespace App\Http\Controllers;

use App\Models\School;
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

        $schools = School::all();

        return response()->view('sitemap',[
            'articles' =>$articles,
            'schools' => $schools
        ])->header('Content-Type','text/xml');
    }
}
