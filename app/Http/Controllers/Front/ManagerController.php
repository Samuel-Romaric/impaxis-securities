<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\References;
use Illuminate\Http\Request;
use App\Models\Service;

class ManagerController extends Controller
{
    // 
    public function index(string $locale)
    {
        $services = Service::where('lang', $locale)->where('status', 'published')->take(4)->get();
        $articles = Post::where('lang', $locale)->where('status', 'published')->orderBy('published_at', 'desc')->take(3)->get();
        $reference = References::where('lang', $locale)->where('status', 'published')->get();
        // dd($reference);
        
        return view('front.welcome', compact('services', 'articles', 'reference'));
    }

    public function notreSociete()
    {
        return view('front.notre-societe');
    }

    public function services(string $locale)
    {
        $services = Service::where('lang', $locale)->where('status', 'published')->get();

        return view('front.services.index', compact('services'));
    }

    public function marches()
    {
        return view('front.marches');
    }

    public function actualites(string $locale)
    {
        $articles = Post::where('lang', $locale)->where('status', 'published')->orderBy('published_at', 'desc')->get();

        return view('front.actualites.index', compact('articles'));
    }

    public function documentation()
    {
        return view('front.documentation');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function contact()
    {
        return view('front.contact');
    }

    // public function devenirClient() {
    //     return view('front.devenir-client');
    // }
}
