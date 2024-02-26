<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory, Sluggable;

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
