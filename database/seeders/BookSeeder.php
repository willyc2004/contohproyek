<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Writer;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $fakerUS = Factory::create('en_US');
        $fakerRU = Factory::create('ru_RU');
        $fakerID = Factory::create('id_ID');

        $index = 0;

        foreach (Writer::all() as $writer) {
            if ($index == 0) {
                Book::factory()->create([
                    'title' => $fakerID->text,
                    'synopsis' => 'Synopsis Buku Penulis 1',
                    'coverphoto' => 'buku1.jpg',
                    'writer_id' => $writer
                ]);
            } else if ($index == 1) {
                Book::factory()->create([
                    'title' => $fakerRU->text,
                    'synopsis' => 'Synopsis Buku Penulis 2',
                    'coverphoto' => 'buku2.jpg',
                    'writer_id' => $writer
                ]);
            } else if ($index == 2) {
                Book::factory()->create([
                    'title' => $fakerUS->text,
                    'synopsis' => 'Synopsis Buku Penulis 3',
                    'coverphoto' => 'buku3.jpg',
                    'writer_id' => $writer
                ]);
            }
            $index++;
        }
    }
}
