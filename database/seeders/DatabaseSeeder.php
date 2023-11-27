<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();

        $this->call([
            UserSeeder::class,
            PublisherSeeder::class,
            BukuSeeder::class,
            ShopSeeder::class,
            SalesSeeder::class,
        ]);

        Model::reguard();
    }
}
