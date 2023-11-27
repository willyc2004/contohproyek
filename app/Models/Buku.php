<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'synopsis',
        'writer_name',
        'publisher_id',
    ];

    public function publisher(): BelongsTo {
        return $this->belongsTo(Publisher::class, 'publishertid', 'id');
    }

    public function sold(): HasMany {
        return $this->hasMany(Sales::class, 'buku_id', 'id');
    }
}
