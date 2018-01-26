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
                <p>Samen werken aan een betere bereikbaarheid en luchtkwaliteit in de regio. Dat is het doel van IJmond Bereikbaar. Hoe? Door met structurele gedragsverandering in reisgedrag voor het woon/werkverkeer de spits minder drukt te maken. Want hoe minder personenvervoer in de auto in de spits, hoe beter de doorstroming van en bereikbaarheid voor het bedrijfsmatig vervoer. Dat scheelt tijd en geld en draagt bovendien positief bij aan de luchtkwaliteit. En niet te vergeten aan de gezondheid van de mensen zelf.  </p>
'
            ],
            [
                'title' => 'Werkgeversaanpak',
                'description' => 'Werkgeversaanpak, het woord zegt het al: de gezamenlijke aanpak van  overheid en bedrijfsleven om regionale knelpunten op te lossen. De IJmond kent een hands-on mentaliteit. Is er een idee en draagvlak? Laten we dat op kleine schaal uitproberen, waar nodig aanpassen en bij succes breed uitzetten.'
            ],
            [
                'title' => 'Werknemers',
                'description' => '<p>In de IJmond wonen en werken veel mensen dicht op elkaar. Er is veel bedrijvigheid en iedere ochtend en namiddag stromen de toegangswegen vol. Uit onderzoek blijkt dat veel mensen binnen een straal van 8 kilometer van hun werk wonen. Die afstand is prima te doen op de fiets. </p>

                <p><em>‘Waarom ga je eigenlijk met de auto naar je werk?’</em> Met deze vraag en een financiële prikkel van € 0,10 per fietskilometer voor het woon/werkverkeer is het gelukt om 2700 werknemers op de fiets te krijgen. Deze gedragsverandering is blijvend: In het voorjaar van 2017 is de kilometervergoeding gestopt, en toch stapt  95% van de deelnemers nog steeds op de fiets. </p>
'
            ],
            [
                'title' => 'Reisgedrag',
                'description' => '<p>Er zijn verschillende manieren om de spits te ontlasten. Zoals bijvoorbeeld flexibele kantoortijden (reizen buiten de spits), carpoolen of telewerken. In het programma van IJmond Bereikbaar is de nadruk gelegd op het motiveren van de werknemers om, wanneer het kan, voor het woon/werkverkeer de auto te laten staan en over te stappen naar de fiets of het openbaar vervoer. Werkgevers kiezen welke programmaonderdelen van IJmond Bereikbaar ze willen promoten bij hun medewerkers. Fietsstimulering scoort 100%. 17% van de deelnemende bedrijven heeft ook het OV-aanbod van IJmond Bereikbaar actief gestimuleerd. </p> '
            ],
            [
                'title' => 'Belonen en Loyaliteit',
                'description' => 'IJmond Bereikbaar wil de bereikbaarheid van de regio en doorstroming van het verkeer verbeteren. Met als bijkomend effect een positieve bijdrage op de luchtkwaliteit. Daarvoor is gedragsverandering nodig van bedrijven en werknemers. Voor veel bedrijven zijn vervoer en milieu thema’s waar ze regelmatig mee in aanraking komen. Voor werknemers liggen deze onderwerpen vaak buiten hun interessegebied, terwijl juist van hen de gedragsverandering werd verwacht. Toch is het IJmond Bereikbaar gelukt om gedurende de campagneperiode de motivatie voor de gewenste gedragsverandering teweeg te brengen.'
            ],
            [
                'title' => 'Fietsritregistratie',
                'description' => 'Deelnemers aan het fietsstimuleringsprogramma van IJmond Bereikbaar ontvingen tussen 1 mei 2015 tot en met 31 maart 2017 een financiële vergoeding voor iedere gefietste én geregistreerde woon/werkkilometer. Fietsers werd gevraagd één keer per maand een online fietsritregistratieformulier in te vullen. Sinds mei 2017 kunnen deelnemers hun ritten ook automatisch registreren met de fietsapp van Ring-Ring. De fietsapp geeft daarnaast ook leuke weetjes over het fietsgedrag en is een effectief loyaliteitsinstrument.'
            ],
            [
                'title' => 'Communicatie',
                'description' => 'IJmond Bereikbaar heeft gedurende de hele periode 2015-2017 gecommuniceerd met alle doelgroepen het bedrijfsleven, de werknemers, overheden en overige stakeholders. De toon van de communicatie is positief en stimulerend. Werkgevers en hun werknemers worden bewust gemaakt van de mogelijkheden die er zijn om de auto te laten staan voor het woon/werkverkeer en te kiezen voor de fiets of het openbaar vervoer. De werkgevers krijgen bovendien inzicht in de <a href="/kopgroep">stimuleringsmaatregelen</a> die zij zelf kunnen nemen en worden geholpen met het aanvragen van subsidie voor kleine infrastructurele maatregelen.'
            ],
            [
                'title' => '2018 – 2021 Slimme & Duurzame Mobiliteit IJmond',
                'description' => 'In de IJmond zijn nu en in 2030 duidelijke bereikbaarheidsproblemen. De aantrekkende economie zorgt voor meer vervoersbewegingen dan ooit. Daarnaast is de IJmond nog steeds een aandachtsgebied als het gaat om de luchtkwaliteit en is de CO2-uitstoot door het wegverkeer relatief hoog. Vanuit die invalshoek is – met het succesvolle programma IJmond Bereikbaar 2015-2017 als fundament – een integraal programma Slimme & Duurzame Mobiliteit IJmond 2018 – 2021 opgezet.'
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
