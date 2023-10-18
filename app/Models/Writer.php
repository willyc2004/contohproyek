<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    private static $writers = [
        [
            'name' => 'Aquila',
            'contact' => '000888',
            'image_name' => 'Penulis1.png',
        ],
        [
            'name' => 'Ashton',
            'contact' => '000555',
            'image_name' => 'Penulis2.jpeg',
        ],
        [
            'name' => 'Eric',
            'contact' => '000444',
            'image_name' => 'Penulis3.jpeg',
        ]
    ];

    public static function index(){
        return self::$writers;
    }
}
