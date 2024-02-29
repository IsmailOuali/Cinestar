<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Notification extends Model
{
    use HasFactory, QueryCacheable;

    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;
    protected $fillable = [
        "member_id",
        "body",
        "head"
    ];
}
