<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Film extends Model
{
    use HasFactory, Sluggable, QueryCacheable;

    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;
    /**
     * @var string[]
     */
    protected $fillable = [
        "title",
        "description",
        "genre",
        "year",
        "duration",
        "country",
        "language",
        "actors",
        "category_id",
    ];
    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            "slug" => [
                "source" => "title"
            ]
        ];

    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne(Image::class, "imageable");
    }
    public function filmRooms()
    {
        return $this->hasMany(FilmRoom::class);
    }

}
