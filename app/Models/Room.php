<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ["name"];
    protected $with = ["image"];

    public function zones(): HasMany
    {
        return $this->hasMany(Zone::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, "imageable");
    }


}
