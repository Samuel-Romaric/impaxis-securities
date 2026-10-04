<?php

namespace App\Http\Controllers\Back\Articles;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function categoriesAll() 
    {
        $categories = PostCategory::orderBy('created_at', 'desc')->get();
        return view('back.actualities.categories.index', compact('categories'));
    }

    public function categoriesCreate(): View 
    {
        return view('back.actualities.categories.create');
    }

    public function categoryStore(Request $request) 
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'description' => ['string', 'nullable'],
            'is_active' => ['boolean'],
        ]);

        $baseSlug = Str::slug($validated['name']);
        $slug = $baseSlug;
        $suffix = 1;

        while (PostCategory::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $isActive = $request->boolean('is_active');
        $postCategory = PostCategory::create([
            'name' => $validated['name'],
            'slug' => $slug,
            'description' => $validated['description'],
            'is_active' => $isActive ? 1 : 0,
        ]);

        return to_route('admin.actuality.categories.all')
            ->with('success', 'Catégorie enregistrée ave succès');
    }

    public function categoryEdit(int $postCategory_id)
    {
        $postCategory = PostCategory::where('id', $postCategory_id)->first();

        return view('back.actualities.categories.edit', compact('postCategory'));
    }

    public function categoryUpdate(Request $request) 
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'description' => ['string', 'nullable'],
            'is_active' => ['boolean'],
        ]);

        $baseSlug = Str::slug($validated['name']);
        $slug = $baseSlug;
        $suffix = 1;

        while (PostCategory::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $postCategory = PostCategory::where('id', $request->postCategory_id)->first();
        
        if (is_null($postCategory)) {
            return to_route('admin.actuality.categories.all')
                ->with('error', 'Catégorie introuvable, veillez rééssayer svp !');
        }

        $isActive = $request->boolean('is_active');
        $postCategory->update([
            'name' => $validated['name'],
            'slug' => $slug,
            'description' => $validated['description'],
            'is_active' => $isActive ? 1 : 0,
        ]);

        return to_route('admin.actuality.categories.all')
            ->with('success', 'Catégorie modifiée avec succès');
    }

    public function categoryDelete(Request $request) 
    {
        $postCategory = PostCategory::where('id', $request->postCategory_id)->first();
        $postCategory->delete();

        return to_route('admin.actuality.categories.all')
            ->with('success', 'Catégorie supprimée avec succès');
    }
}