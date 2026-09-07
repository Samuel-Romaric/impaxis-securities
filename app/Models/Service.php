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
    ];

    public function getCoverFullUrl() {
        if (is_null($this->getFirstMedia('service_images'))) {
            return asset('/front/assets/images/services/service-1-conseil.png');
        }

        return $this->getFirstMedia('service_images')->getFullUrl();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('service_images')
            ->useFallbackUrl('/front/assets/images/services/service-1-conseil.png')
            ->useFallbackPath(public_path('front/assets/images/services/service-1-conseil.png'))
            ->singleFile();
    }
}
