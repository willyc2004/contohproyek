<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
            DB::table('writers')->insert([
                'name' => 'Aquila',
                'contact' => '000888',
                'image_name' => 'Penulis1.png'
            ]);

            DB::table('writers')->insert([
                'name' => 'Ashton',
                'contact' => '000555',
                'image_name' => 'Penulis2.jpeg'
            ]);

            DB::table('writers')->insert([
                'id' => 3,
                'name' => 'Eric',
                'contact' => '000444',
                'image_name' => 'Penulis3.jpeg'
            ]);
    }
}
