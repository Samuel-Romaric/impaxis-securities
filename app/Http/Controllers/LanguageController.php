<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function switch(Request $request) {
        $request->validate([
            'locale'       => 'required|in:fr,en',
            'current_path' => 'nullable|string',
        ]);

        $locale = $request->input('locale');
        session(['locale' => $locale]);

        $currentPath = trim($request->input('current_path', '/'), '/');
        $segments = $currentPath === '' ? [] : explode('/', $currentPath);

        if (isset($segments[0]) && in_array($segments[0], config('app.available_locales'))) {
            $segments[0] = $locale;
        } else {
            array_unshift($segments, $locale);
        }

        return response()->json([
            'redirect' => '/' . implode('/', $segments),
        ]);
    }
}
