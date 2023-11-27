<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'buku_id',
        'user_id',
        'book_amount',
    ];

    public function sold(): BelongsTo{
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }

    public function seller(): BelongsTo{
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }

    public function buyer(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
