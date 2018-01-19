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
                'description' => '
                <p>Samen werken aan een betere bereikbaarheid en luchtkwaliteit in de regio. Dat is het doel van IJmond Bereikbaar. Hoe? Door de spits minder drukt te maken met structurele verandering in reisgedrag voor het  woon/ werkverkeer. Want? Hoe minder personenvervoer in de auto in de spits, hoe beter de doorstroming van en bereikbaarheid voor het bedrijfsmatig vervoer. Dat scheelt tijd en geld en draagt bovendien positief bij aan de luchtkwaliteit. En niet te vergeten aan de gezondheid van de mensen zelf.  </p> 
'
            ],
            [
                'title' => 'Werkgeversaanpak',
                'description' => 'This is the first description'
            ],
            [
                'title' => 'Werknemers',
                'description' => 'This is the first description'
            ],
            [
                'title' => 'Reisgedrag',
                'description' => 'This is the first description'
            ],
            [
                'title' => 'Belonen en Loyaliteit',
                'description' => 'This is the first description'
            ],
            [
                'title' => 'Fietsritregistratie',
                'description' => 'This is the first description'
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
