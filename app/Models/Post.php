<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;

class Post extends Model implements HasMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia;
    //
    protected $fillable = [
        'post_category_id',
        'author_id',    
        'title',
        'slug',
        'lang',
        'trans_post_id',
        'excerpt',
        'short_description',
        'content',
        'status',
        'published_at',
        'views',
        'published_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
    ];

    /**
     * Un article appartient à une catégorie.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    /**
     * Retourne l'ID de la version "racine" (toujours la version FR)
     */
    // public function getRootIdAttribute(): int
    // {
    //     return $this->lang === 'fr' ? $this->id : $this->trans_id;
    // }

    /**
     * Retourne la traduction de cet article dans la langue demandée,
     * ou null si elle n'existe pas.
     */
    // public function getTranslation2(string $locale): ?self
    // {
    //     if ($this->lang === $locale) {
    //         return $this;
    //     }

    //     $rootId = $this->root_id;

    //     if (!$rootId) {
    //         return null;
    //     }

    //     if ($locale === 'fr') {
    //         return self::where('id', $rootId)->where('lang', 'fr')->first();
    //     }

    //     return self::where('trans_id', $rootId)->where('lang', $locale)->first();
    // }

    // public function getTranslationPost(string $locale): ?self
    // {
    //     if ($this->lang === $locale) {
    //         return $this;
    //     }

    //     $rootId = $this->id;

    //     if (!$rootId) {
    //         return null;
    //     }

    //     if ($locale === 'fr') {
    //         return self::where('id', $rootId)->where('lang', 'fr')->firstOrFail();
    //     }

    //     return self::where('trans_post_id', $rootId)->where('lang', $locale)->firstOrFail();
    // }

    /**
     * Vérifie si une traduction existe dans une langue donnée
     */
    // public function hasTranslation(string $locale): bool
    // {
    //     return $this->getTranslation($locale) !== null;
    // }

    public function addMediaCover(string $file): void 
    {
        $this->addMediaFromRequest($file)->toMediaCollection('post_images');
    }

    public function deleteMediaImage()
    {
        // $this->getFirstMedia('post_images')->delete();
        $this->clearMediaCollection('post_images');
    }

    public function getCoverFullUrl()  
    {
        if (is_null($this->getFirstMedia('post_images'))) {
            return asset('/front/assets/images/services/service-1-conseil.png');
        }

        return $this->getFirstMedia('post_images')->getFullUrl();
    }

    public function getStatus() {
        if ($this->status === 'published') {
            return 'Publier';
        }

        return 'Brouillon';
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('post_images')
            ->useFallbackUrl('/images/default-post.jpg')
            ->useFallbackPath(public_path('/images/default-post.jpg'))
            ->singleFile();
    }
}
