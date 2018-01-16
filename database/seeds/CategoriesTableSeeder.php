<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            [
                'title' => 'Ambities & Resultaten',
                'description' => 'This is the first description'
            ],
            [
                'title' => 'Werkgeversaanpak',
                'description' => 'This is the first description'
            ],
            [
                'title' => 'Werknemers',
                'description' => 'This is the first description'
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
