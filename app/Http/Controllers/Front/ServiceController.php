<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function serviceShow(string $locale, int $service_id ,string $slug)
    {
        $service = Service::where('lang', $locale)->where('translate_id', $service_id)->firstOrFail();
        // dd($service);

        // if (is_null($service)) {
        //     return back()->with('error', 'Aucune traduction pour ce article');
        // }
        return view('front.services.show', compact('service'));
    }
}
