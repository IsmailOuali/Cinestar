<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Zone extends Model
{
    use HasFactory, Sluggable, QueryCacheable;

    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;

    protected $fillable = [
        "name",
        "number_of_seats",
        "price",
        "room_id"
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function sluggable(): array
    {
        return [
            "slug" => [
                "source" => "name",
            ]
        ];
    }
}
