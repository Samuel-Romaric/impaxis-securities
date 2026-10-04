<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\References;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ManagerController extends Controller
{
    //
    public function dashboard() : View 
    {
        return view('back.dashboard');
    }

    public function actualitiesAll(Request $request): View
    {
        $query = Post::with('category')->latest();

            if ($request->filled('lang')) {
                $query->where('lang', $request->lang);
            }

            if ($request->filled('status')) {
                $query->where('status', $request->status);
            }

            if ($request->filled('q')) {
                $query->where('title', 'like', '%' . $request->q . '%');
            }

            $posts = $query->paginate(10)->withQueryString();

        return view('back.actualities.index', compact('posts'));
    }

    public function servicesAll(Request $request): View 
    {        
        $query = Service::orderBy('created_at', 'DESC')->latest();

            if ($request->filled('lang')) {
                $query->where('lang', $request->lang);
            }

            if ($request->filled('status')) {
                $query->where('status', $request->status);
            }

            if ($request->filled('q')) {
                $query->where('title', 'like', '%' . $request->q . '%');
            }

            $services = $query->paginate(10)->withQueryString();

        return view('back.services.index', compact('services'));
    }

    public function referencesAll(Request $request) : View 
    {
        // $references = References::orderBy('created_at', 'DESC')->get();
        
        $query = References::orderBy('created_at', 'DESC')->latest();

            if ($request->filled('lang')) {
                $query->where('lang', $request->lang);
            }

            if ($request->filled('status')) {
                $query->where('status', $request->status);
            }

            if ($request->filled('q')) {
                $query->where('projet_title', 'like', '%' . $request->q . '%')
                    ->OrWhere('projet_chef', 'like', '%' . $request->q . '%')
                    ->OrWhere('periode', 'like', '%' . $request->q . '%')
                    ->OrWhere('amount', 'like', '%' . $request->q . '%');
            }

            $references = $query->paginate(10)->withQueryString();

        return view('back.references.index', compact('references'));
    }

    public function usersAll() 
    {
        return "Print all user list";
    }

    public function showAccountSetting() : View 
    {
        $user = Auth::user();
        return view('back.account-setting.show', compact('user'));
    }
} 
