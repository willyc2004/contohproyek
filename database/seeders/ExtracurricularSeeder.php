<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('extracurriculars')->insert([
            'name' => 'Extracurricular 1',
            'requirements' => 'Requirements for Extracurricular 1',
            'price' => 50.00,
            'tutor_name' => 'Tutor 1',
        ]);

        DB::table('extracurriculars')->insert([
            'name' => 'Extracurricular 2',
            'requirements' => 'Requirements for Extracurricular 2',
            'price' => 60.00,
            'tutor_name' => 'Tutor 2',
        ]);

        DB::table('extracurriculars')->insert([
            'name' => 'Extracurricular 3',
            'requirements' => 'Requirements for Extracurricular 3',
            'price' => 70.00,
            'tutor_name' => 'Tutor 3',
        ]);

        DB::table('extracurriculars')->insert([
            'name' => 'Extracurricular 4',
            'requirements' => 'Requirements for Extracurricular 4',
            'price' => 80.00,
            'tutor_name' => 'Tutor 4',
        ]);

        DB::table('extracurriculars')->insert([
            'name' => 'Extracurricular 5',
            'requirements' => 'Requirements for Extracurricular 5',
            'price' => 90.00,
            'tutor_name' => 'Tutor 5',
        ]);
    }
}
