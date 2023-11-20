<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Writer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "contact",
        "image_name",
    ];


    //gaguna
    protected $with = ['books'];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
