<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class FilmRoom extends Model
{
    use HasFactory, QueryCacheable;
    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;
    protected $fillable = [
      "film_id",
      "room_id",
      "screening_date",
      "is_full"
    ];
    protected $with = ["film","room"];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
