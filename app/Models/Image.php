<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Image extends Model
{
    use HasFactory, QueryCacheable;

    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;
    protected $fillable = [
        "path",
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
