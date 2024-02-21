<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description"
    ];

    public function films()
    {
        return $this->hasMany(Film::class);
    }
//
//    public function image(): MorphOne
//    {
//        return $this->morphOne(Image::class, "imageable");
//    }
}
