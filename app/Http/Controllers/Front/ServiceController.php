<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function serviceShow($slug = '')
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('front.services.show', compact('service'));
    }
}
