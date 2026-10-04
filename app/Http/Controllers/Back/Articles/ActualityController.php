<?php

namespace App\Http\Controllers\Back\Articles;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ActualityController extends Controller
{
    //
    public function actualityCreate() : View 
    {
        $categories = PostCategory::where('is_active', true)->orderBy('created_at', 'DESC')->get();
        return view('back.actualities.create', compact('categories'));
    }

    public function actualityStore(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'content' => ['required', 'string'],
            'lang' => ['required', 'in:fr,en'],
            'category_id' => ['required', 'exists:post_categories,id'],
            'is_published' => ['boolean'],
            'post_cover' => ['nullable', 'image', 'max:5120'],
        ]);

        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $suffix = 1;

        while (Post::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $isPublished = $request->boolean('is_published');
        $post = Post::create([
            'post_category_id' => $validated['category_id'],
            'author_id' => Auth::id(),
            'title' => $validated['title'],
            'slug' => $slug,
            'lang' => $validated['lang'],
            'content' => $validated['content'],
            'status' => $isPublished ? 'published' : 'draft',
            'published_at' => $isPublished ? now() : null,
        ]);

        $post->update(['trans_post_id' => $post->id]);

        if ($request->hasFile('post_cover')) {
            $post->addMediaFromRequest('post_cover')->toMediaCollection('post_images');
        }

        return to_route('admin.actualities.all')
            ->with('success', 'L’article a été enregistré avec succès.');
    }

    public function actualityTranslateAdd(Request $request) 
    {    
        $validated = $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'content' => ['required', 'string'],
            'lang' => ['required', 'in:fr,en'],
            'category_id' => ['required', 'exists:post_categories,id'],
            'is_published' => ['boolean'],
            'post_cover' => ['nullable', 'image', 'max:5120'],
        ]);

        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $suffix = 1;

        while (Post::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $postFr = Post::where('id', $request->post_id)->first();

        $isPublished = $request->boolean('is_published');
        $post = Post::create([
            'post_category_id' => $validated['category_id'],
            'author_id' => Auth::id(),
            'title' => $validated['title'],
            'slug' => $slug,
            'lang' => $validated['lang'],
            'trans_post_id' => $postFr->id,
            'content' => $validated['content'],
            'status' => $isPublished ? 'published' : 'draft',
            'published_at' => $isPublished ? now() : null,
        ]);

        if ($request->hasFile('post_cover')) {
            $post->addMediaFromRequest('post_cover')->toMediaCollection('post_images');
        }

        return to_route('admin.actualities.all')
            ->with('success', 'L’article a été enregistré avec succès.');
    }

    public function actualityEdit(int $post_id, string $slug) 
    {
        $categories = PostCategory::all();
        $post = Post::where('id', $post_id)->where('slug', $slug)->first();
        
        return view('back.actualities.edit', compact('post', 'categories'));
    }

    public function actualityUpdate(Request $request) 
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'content' => ['required', 'string'],
            'lang' => ['required', 'in:fr,en'],
            'category_id' => ['required', 'exists:post_categories,id'],
            'is_published' => ['boolean'],
            'post_cover' => ['nullable', 'image', 'max:5120'],
        ]);

        $post = Post::where('id', $request->post_id)->first();

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'lang' => $request->lang,
            'post_category_id' => $validated['category_id'],
            'status' => $request->boolean('is_published') ? 'published' : 'draft',
        ];

        $post->update($data);

        if ($request->hasFile('post_cover')) {
            $post->addMediaCover('post_cover');
        }

        return to_route('admin.actualities.all')
            ->with('success', 'L’article a été mise à jour avec succès.');
    }

    public function actualityTranslate(int $post_id, string $slug) {
        $post = Post::where('id', $post_id)->first();
        $categories = PostCategory::all();

        return view('back.actualities.translate', compact('post', 'categories'));
    }

    public function actualityDelete(Request $request)
    {
        $post = Post::findOrFail($request->integer('post_id'));
        
        $post->deleteMediaImage();
        $post->delete();

        return to_route('admin.actualities.all')
            ->with('success', 'L’article a été supprimé avec succès.');
    }
}
