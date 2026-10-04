<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    //
    public function actualiteShow(string $locale, int $post_id, string $slug)
    {
        $article = Post::where('lang', $locale)->where('trans_post_id', $post_id)->firstOrFail();

        return view('front.actualites.show', compact('article'));
    }
}
