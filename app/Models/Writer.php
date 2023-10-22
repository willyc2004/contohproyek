<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    private static $writers = [
        [
            'id' => 1,
            'name' => 'Aquila',
            'contact' => '000888',
            'image_name' => 'Penulis1.png',
        ],
        [
            'id' => 2,
            'name' => 'Ashton',
            'contact' => '000555',
            'image_name' => 'Penulis2.jpeg',
        ],
        [
            'id' => 3,
            'name' => 'Eric',
            'contact' => '000444',
            'image_name' => 'Penulis3.jpeg',
        ]
    ];

    public static function index(){
        // return self::$writers;
        return collect(self::$writers);
    }

    public static function showWriter($id) {
        return self::index() -> firstWhere('id', $id);
        // foreach (self::$writers as $writer) {
        //     if ($writer['id'] == $id) {
        //         return $writer;
        //     }
        // }
    }
}
