<?php

namespace App\Http\Controllers\Back\Reference;

use App\Http\Controllers\Controller;
use App\Models\References;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ReferenceController extends Controller
{
    //
    public function referenceCreate() : View
    {
        return view('back.references.create');
    }

    public function referenceStore(Request $request) 
    {
        // dd($request->file('logo_ref'));
        $validated = $request->validate([
            'projet_title' => ['required', 'string','min:5', 'max:255'],
            'projet_chef' => ['required', 'string','min:5', 'nullable'],
            'amount' => ['required', 'numeric', 'min:1'],
            'lang' => ['required', 'in:fr,en'],
            'devise' => ['required'],
            'is_published' => ['boolean'],
            'logo_ref' => ['nullable', 'image', 'max:5120'],
        ]);

        $baseSlug = Str::slug($validated['projet_title']);
        $slug = $baseSlug;
        $suffix = 1;

        while (References::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $isPublished = $request->boolean('is_published');
        $reference = References::create([
            'projet_title' => $validated['projet_title'],
            'slug' => $slug,
            'projet_chef' => $validated['projet_chef'],
            'amount' => $validated['amount'],
            'published_at' => $isPublished ? now() : null,
            'status' => $request->boolean('is_published') ? 'published' : 'draft',
            'devise' => $validated['devise'],
        ]);

        $reference->update(['translate_id' => $reference->id]);

        if ($request->hasFile('logo_ref')) {
            $reference->addMediaCover('logo_ref');
        }

        return to_route('admin.references.all')
            ->with('success', 'Enregistrément effectué avec succès');
    }

    public function referenceEdit(int $ref_id, string $slug) 
    {
        $reference = References::where('id', $ref_id)->where('slug', $slug)->first();
        return view('back.references.edit', compact('reference'));
    }

    public function referenceUpdate(Request $request) 
    {
        // dd($request->all());
        $validated = $request->validate([
            'projet_title' => ['required', 'string','min:5', 'max:255'],
            'projet_chef' => ['required', 'string','min:5', 'nullable'],
            'amount' => ['required', 'numeric', 'min:1'],
            'lang' => ['required', 'in:fr,en'],
            'devise' => ['required'],
            'is_published' => ['boolean'],
            'logo_ref' => ['nullable', 'image', 'max:5120'],
        ]);

        $baseSlug = Str::slug($validated['projet_title']);
        $slug = $baseSlug;
        $suffix = 1;

        while (References::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $reference = References::where('id', $request->ref_id)->first();

        $isPublished = $request->boolean('is_published');
        $reference->update([
            'projet_title' => $validated['projet_title'],
            'slug' => $slug,
            'projet_chef' => $validated['projet_chef'],
            'amount' => $validated['amount'],
            'published_at' => $isPublished ? now() : null,
            'status' => $request->boolean('is_published') ? 'published' : 'draft',
            'devise' => $validated['devise'],
        ]);

        if ($request->hasFile('logo_ref')) {
            $reference->addMediaCover('logo_ref');
        }

        return to_route('admin.references.all')
            ->with('success', 'Enregistrément modifié avec succès');
    }

    public function referenceTranslate(int $ref_id, string $slug) 
    {
        $reference = References::where('id', $ref_id)->where('slug', $slug)->first();
        return view('back.references.translate', compact('reference'));
    }

    public function referenceTranslateAdd(Request $request) 
    {
        // dd($request->ref_id);
        $validated = $request->validate([
            'projet_title' => ['required', 'string','min:5', 'max:255'],
            'projet_chef' => ['required', 'string','min:5', 'nullable'],
            'amount' => ['required', 'numeric', 'min:1'],
            'lang' => ['required', 'in:fr,en'],
            'devise' => ['required'],
            'is_published' => ['boolean'],
            'logo_ref' => ['nullable', 'image', 'max:5120'],
        ]);

        $baseSlug = Str::slug($validated['projet_title']);
        $slug = $baseSlug;
        $suffix = 1;

        while (References::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix++;
        }

        $isPublished = $request->boolean('is_published');
        $reference = References::create([
            'projet_title' => $validated['projet_title'],
            'slug' => $slug,
            'projet_chef' => $validated['projet_chef'],
            'amount' => $validated['amount'],
            'published_at' => $isPublished ? now() : null,
            'status' => $request->boolean('is_published') ? 'published' : 'draft',
            'devise' => $validated['devise'],
        ]);

        $reference->update(['translate_id' => $request->ref_id]);

        if ($request->hasFile('logo_ref')) {
            $reference->addMediaCover('logo_ref');
        }

        return to_route('admin.references.all')
            ->with('success', 'Enregistrément effectué avec succès');
    }

    public function referenceDelete(Request $request) 
    {
        $ref = References::where('id', $request->integer('ref_id'))->first();
        
        $ref->deleteMediaImage();
        $ref->delete();

        return to_route('admin.references.all')
            ->with('success', 'Suppression éffectuée avec succès');
    }
}
