<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements HasMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia;
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'is_blocked',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'is_admin',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function addMediaCover(string $file): void 
    {
        $this->addMediaFromRequest($file)->toMediaCollection('avatar');
    }

    public function deleteMediaImage() : void
    {
        $this->getFirstMedia('avatar')->delete();
    }

    public function getCoverFullUrl() 
    {
        if (is_null($this->getFirstMedia('avatar'))) {
            return asset('/front/assets/images/services/service-1-conseil.png');
        }

        return $this->getFirstMedia('service_cover')->getFullUrl();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')
            ->useFallbackUrl('/images/default-user.jpg')
            ->useFallbackPath(public_path('/images/default-user.jpg'))
            ->singleFile();
    }

    public function posts() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Post::class, 'author_id');
    }

    public function Categories() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PostCategory::class, 'author_id');
    }

    public function isAdmin(): bool
    {
        if (is_null($this->is_admin)) {
            return false;
        }

        return (bool) $this->is_admin;
    }

    public function getRole() : string
    {
        return $this->isAdmin() ? 'Administrateur' : 'Utilisateur';
    }

    public function isBlocked() : bool 
    {
        if (is_null($this->is_blocked)) {
            return false;
        }

        return (bool) $this->is_blocked;
    }

    public function getStatus() : string
    {
        return $this->isBlocked() ? 'Actif' : 'Bloqué';
    }
}
