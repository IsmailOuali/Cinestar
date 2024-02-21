<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "release_date",
        "screening_date",
        "duration",
        "category_id",
        "room_id",
    ];
    protected $with = ["category", "room", "image"];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function image(){
        return $this->morphOne(Image::class, "imageable");
    }
}
