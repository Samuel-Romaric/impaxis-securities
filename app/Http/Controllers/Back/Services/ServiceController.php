<?php

namespace App\Http\Controllers\Back\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ServiceController extends Controller
{
    //
    public function serviceCreate(Request $request)
    {
        return view('back.services.create');
    }

    public function serviceStore(Request $request) 
    {
        $validated = $request->validate([
            'title' => ['required', 'string','min:5', 'max:255'],
            'short_description' => ['required', 'string','min:20', 'nullable'],
            'description' => ['required', 'string'],
            'lang' => ['required', 'in:fr,en'],
            'class' => ['nullable'],
            'is_published' => ['boolean'],
            'service_cover' => ['nullable', 'image', 'max:5120'],
        ]);

        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $suffix = 1;

        while (Service::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $isPublished = $request->boolean('is_published');
        $service = Service::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'short_description' => $validated['short_description'],
            'description' => $validated['description'],
            'published_at' => $isPublished ? now() : null,
            'status' => $request->boolean('is_published') ? 'published' : 'draft',
            'class' => $validated['class'],
        ]);

        $service->update(['translate_id' => $service->id]);

        if ($request->hasFile('service_cover')) {
            $service->addMediaCover('service_cover');
        }

        return to_route('admin.services.all')
            ->with('success', 'Enregistrément effectué avec succès');
    }

    public function serviceEdit(int $service_id, string $slug) : View 
    {
        $service = Service::where('id', $service_id)->where('slug', $slug)->first();
        
        return view('back.services.edit', compact('service'));
    }

    public function serviceUpdate(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string','min:5', 'max:255'],
            'short_description' => ['required', 'string','min:20', 'nullable'],
            'description' => ['required', 'string'],
            'lang' => ['required', 'in:fr,en'],
            'class' => ['nullable'],
            'is_published' => ['boolean'],
            'service_cover' => ['nullable', 'image', 'max:5120'],
        ]);

        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $suffix = 1;

        while (Service::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $service = Service::where('id', $request->service_id)->first();

        $isPublished = $request->boolean('is_published');
        $serviceU = $service->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'lang' => $validated['lang'],
            'short_description' => $validated['short_description'],
            'description' => $validated['description'],
            'published_at' => $isPublished ? now() : null,
            'status' => $request->boolean('is_published') ? 'published' : 'draft',
            'class' => $validated['class'],
        ]);

        if ($request->hasFile('service_cover')) {
            $service->addMediaCover('service_cover');
        }

        return to_route('admin.services.all')
            ->with('success', 'Moodification éffectuée avec succès');
    }

    public function serviceTranslate(int $service_id, string $slug) 
    {
        $service = Service::where('id', $service_id)->where('slug', $slug)->first();
        
        return view('back.services.translate', compact('service'));
    }

    public function serviceTranslateAdd(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => ['required', 'string','min:5', 'max:255'],
            'short_description' => ['required', 'string','min:20', 'nullable'],
            'description' => ['required', 'string'],
            'lang' => ['required', 'in:fr,en'],
            'class' => ['nullable'],
            'is_published' => ['boolean'],
            'service_cover' => ['nullable', 'image', 'max:5120'],
        ]);

        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $suffix = 1;

        while (Service::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $isPublished = $request->boolean('is_published');
        $service = Service::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'short_description' => $validated['short_description'],
            'description' => $validated['description'],
            'published_at' => $isPublished ? now() : null,
            'status' => $request->boolean('is_published') ? 'published' : 'draft',
            'class' => $validated['class'],
        ]);

        $service->update(['translate_id' => $request->service_id]);

        if ($request->hasFile('service_cover')) {
            $service->addMediaCover('service_cover');
        }

        return to_route('admin.services.all')
            ->with('success', 'Service enregistré avec succès');
    }

    public function serviceDelete(Request $request) 
    {
        $service = Service::where('id', $request->service_id)->first();

        $service->deleteMediaImage();
        $service->delete();

        return to_route('admin.services.all')
            ->with('success', 'Suppression effectuée avec succès.');
    }
}
