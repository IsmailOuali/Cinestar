<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "screening_date",
        "genre",
        "year",
        "duration",
        "country",
        "language",
        "actors",
        "category_id",
        "room_id",
    ];
    protected $with = ["category"];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
//    public function room(){
//        return $this->belongsTo(Room::class);
//    }
//    public function image(){
//        return $this->morphOne(Image::class, "imageable");
//    }
}
