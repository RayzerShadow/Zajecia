<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
          [
            'name' => 'Laravel 8',
            'year' => 2021,
            'publication_place' => 'Polska',
            'pages' => 880,
            'price' => 100.99
          ]
        );

        DB::table('books')->insert(
          [
            'name' => 'Laravel 8.4',
            'year' => 2021,
            'publication_place' => 'Polska',
            'pages' => 700,
            'price' => 100.99
          ]
        );
    }
}
