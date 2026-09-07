<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ManagerController extends Controller
{
    // 
    public function index()
    {
        $services = Service::all();
        return view('front.welcome', compact('services'));
    }

    public function notreSociete()
    {
        return view('front.notre-societe');
    }

    public function services()
    {
        $services = Service::all();
        return view('front.services', compact('services'));
    }

    public function marches()
    {
        return view('front.marches');
    }

    public function actualites()
    {
        return view('front.actualites');
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
}
