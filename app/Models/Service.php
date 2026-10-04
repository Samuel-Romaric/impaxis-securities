<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class Service extends Model implements HasMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia;
    //
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'class',
        'lang',
        'translate_id',
        'status',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getStatus() {
        if ($this->status === 'published') {
            return 'Publier';
        }

        return 'Brouillon';
    }

    public function addMediaCover(string $file): void 
    {
        if ($this->hasMedia('post_images')) {
            $this->deleteFirstMedia();
            $this->addMediaFromRequest($file)->toMediaCollection('service_cover');
        } else {
            $this->addMediaFromRequest($file)->toMediaCollection('service_cover');
        }
    }

    protected function deleteFirstMedia(): void
    {
        $this->getFirstMedia('post_images')->delete();
    }

    public function deleteMediaImage()
    {
        // $this->getFirstMedia('post_images')->delete();
        $this->clearMediaCollection('service_cover');
    }

    public function getCoverFullUrl() 
    {
        if (is_null($this->getFirstMedia('service_cover'))) {
            return asset('/front/assets/images/services/service-1-conseil.png');
        }

        return $this->getFirstMedia('service_cover')->getFullUrl();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('service_cover')
            ->useFallbackUrl('/front/assets/images/services/service-1-conseil.png')
            ->useFallbackPath(public_path('front/assets/images/services/service-1-conseil.png'))
            ->singleFile();
    }
}
