<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class References extends Model implements HasMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia;

    protected $fillable = [
        'projet_chef',
        'slug',
        'projet_title',
        'amount',
        'devise',
        'periode',
        'translate_id',
        'lang',
        'status'
    ];

    public function getStatus()
    {
        if ($this->isPublished()) {
            return 'Publié';
        }

        return 'Brouillon';
    }

    protected function isPublished() 
    {
        if ($this->status === 'published') {
            return true;
        }

        return  false;
    }

    public function addMediaCover(string $file): void 
    {
        $this->addMediaFromRequest($file)->toMediaCollection('logo_ref');
    }

    public function deleteMediaImage()
    {
        $this->clearMediaCollection('logo_ref');
    }

    public function getCoverFullUrl() 
    {
        if (is_null($this->getFirstMedia('logo_ref'))) {
            return asset('/front/assets/images/services/service-1-conseil.png');
        }

        return $this->getFirstMedia('logo_ref')->getFullUrl();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo_ref')
            ->useFallbackUrl('/images/default-post.jpg')
            ->useFallbackPath(public_path('/images/default-post.jpg'))
            ->singleFile();
    }
}
