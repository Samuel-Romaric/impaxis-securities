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
        return $this->belongsTo(PostCategory::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('post_images')
            ->useFallbackUrl('/images/default-post.jpg')
            ->useFallbackPath(public_path('/images/default-post.jpg'))
            ->singleFile();
    }
}
