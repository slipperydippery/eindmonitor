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
                'description' => '<p>In de IJmond wonen en werken veel mensen dicht op elkaar. Er is veel bedrijvigheid en iedere ochtend en namiddag stromen de toegangswegen vol. Uit onderzoek blijkt dat veel mensen binnen een straal van 8 kilometer van hun werk wonen. Die afstand is prima te doen op de fiets. </p>

                <p><em>‘Waarom ga je eigenlijk met de auto naar je werk?’</em> Met deze vraag en een financiële prikkel van € 0,10 per fietskilometer voor het woon/werkverkeer is het gelukt om 2700 werknemers op de fiets te krijgen. Deze gedragsverandering is blijvend: In het voorjaar van 2017 is de kilometervergoeding gestopt, en toch stapt  95% van de deelnemers nog steeds op de fiets. </p>
'
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
            [
                'title' => 'Communicatie',
                'description' => 'This is the first description'
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
