<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['nom'=>'comédie'],
            ['nom'=>'drame'],
            ['nom'=>'science-fiction'],
            ['nom'=>'aventure'],
        ];

        //Insertion
        DB::table('categories')->insert($categories);
    }
}
