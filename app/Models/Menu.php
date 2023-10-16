<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    private static $menus = [
        [
            'nama_menu' => 'Nasi Goreng',
            'harga' => 25000,
            'tipe_menu' => 'Makanan',
        ],
        [
            'nama_menu' => 'Mie Ayam',
            'harga' => 20000,
            'tipe_menu' => 'Makanan',
        ],
        [
            'nama_menu' => 'Es Teh Manis',
            'harga' => 5000,
            'tipe_menu' => 'Minuman',
        ],
        [
            'nama_menu' => 'Ayam Bakar',
            'harga' => 30000,
            'tipe_menu' => 'Makanan',
        ],
        [
            'nama_menu' => 'Es Jeruk',
            'harga' => 6000,
            'tipe_menu' => 'Minuman',
        ],
        [
            'nama_menu' => 'Nasi Padang',
            'harga' => 28000,
            'tipe_menu' => 'Makanan',
        ],
        [
            'nama_menu' => 'Teh Hangat',
            'harga' => 4000,
            'tipe_menu' => 'Minuman',
        ],
        [
            'nama_menu' => 'Sate Ayam',
            'harga' => 30000,
            'tipe_menu' => 'Makanan',
        ],
        [
            'nama_menu' => 'Jus Alpukat',
            'harga' => 8000,
            'tipe_menu' => 'Minuman',
        ],
        [
            'nama_menu' => 'Soto Ayam',
            'harga' => 22000,
            'tipe_menu' => 'Makanan',
        ],
    ];

    public static function allData() {
        return self::$menus;
    }
}
