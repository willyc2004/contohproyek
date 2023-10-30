<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->insert([
            'publisher' => "Gramedia",
            'city' => "Jakarta"
        ]);
        DB::table('publishers')->insert([
            'publisher' => "Print.co",
            'city' => "Hanoi"
        ]);
        DB::table('publishers')->insert([
            'publisher' => "Best Book",
            'city' => "Manila"
        ]);
    }
}
