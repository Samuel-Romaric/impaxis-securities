<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    //
    public function actualiteShow($slug) {
        $article = Post::where('slug', $slug)->first();

        return view('front.actualites.show', compact('article'));
    }
}
