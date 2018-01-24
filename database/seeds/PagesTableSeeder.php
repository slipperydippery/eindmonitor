<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        $pages = [
            [
                'title' => 'Introductie ',
                'description' => '',
                'body' => '
	                	<p>Samen werken aan een betere bereikbaarheid en luchtkwaliteit in de regio. Dat is het doel van IJmond Bereikbaar.</p> 
	                	<p>Hoe? Door met structurele verandering  in reisgedrag voor het woon/werkverkeer de spits minder druk te maken. </p>
	                	<p>Want? Hoe minder personenvervoer in de auto in de spits, hoe beter de doorstroming van en bereikbaarheid voor het bedrijfsmatig vervoer. Dat scheelt tijd en geld en draagt bovendien positief bij aan de luchtkwaliteit.  En niet te vergeten aan de gezondheid van de mensen zelf.  </p>
	                	<p>Met het stimuleringsprogramma ‘Goed op weg’ heeft IJmond Bereikbaar bedrijven en hun werknemers ertoe gebracht om na te denken over hun manier van reizen naar het werk en hen gestimuleerd om, als het kan, de auto te laten staan en te kiezen voor de fiets of het openbaar vervoer.</p>
	                	<p01-graph></p01-graph>
	                	<p>Van 10 pilot-bedrijven met ongeveer 50 deelnemers in mei 2015,  is ons fietsstimuleringsprogramma ‘Goed op weg – op de fiets’ uitgegroeid tot een betrokken, enthousiaste community van 170 bedrijven die samen bijna 2700 werknemers hebben aangemeld. </p>
	                	<p>Lees meer over onze werkgeversaanpak en de acties die gedaan zijn om werknemers over de streep te trekken en vast te houden.</p>
	                	<p>Van het bedrijfsleven krijgt IJmond Bereikbaar een 7,8. Van de fietsers die mee doen aan het programma een 8,1. Resultaten waar we trots op zijn.</p>
	                ',
	            'category_id' => 1,
            ],
            [
                'title' => 'Spitsmijdingen',
                'description' => '',
                'body' => '
	                	<p>De definitie van een spitsmijding in het programma van BeterBenutten  is wanneer je nu niet meer met een personenauto, bestelbus of vrachtwagen in de spits rijdt, daar waar je dit vroeger wel deed. Thuiswerken tot na de spits, of niet-reizen in de spits vanwege een parttime baan of ploegendienst telt in deze definitie niet mee.</p>
						<p02-graph></p02-graph>
						<p>De doelstelling voor spitsmijdingen in de IJmond is voor 85% gehaald. Een groot aantal werknemers die in de spits naar hun werk reizen hebben de overstap van de auto naar de fiets gemaakt. In de IJmond werkt echter een onevenredig groot aantal mensen in ploegendienst en/of parttime. Ook zij hebben de overstap van de auto naar de fiets gemaakt, maar tellen niet mee als spitsmijding zoals bedoeld door Beter Benutten.</p>
						',
	            'category_id' => 1,
            ],
            [
                'title' => 'Succesfactoren ',
                'description' => '',
                'body' => '
	                	<ul>
	                		<li>Vroegtijdig samenwerken met overheden en bedrijfsleven is essentieel.</li>
	                		<li>Belangrijkste fietsroutes en fietsinfra rondom bedrijventerreinen moeten op orde zijn of op orde worden gebracht.</li>
	                		<li>In de IJmond is een betrouwbare en snelle oversteek over het Noordzeekanaal voor fietsers noodzakelijk. De inzet van een 2e spitspont heeft voor significant meer fietsende werknemers gezorgd.</li>
	                		<li>Laagdrempelige toegang tot een stimuleringsprogramma is voor zowel werkgevers als hun medewerkers een must. Werkgevers laten graag goed werkgeverschap zien en zijn gevoelig voor besparingen.</li>
	                		<li>Kies bewust voor diverse vormen van belonen: van intrinsieke motivatie – een fietskilometervergoeding -  naar extrinsieke motivatie – challenges en groepsgevoel.</li>
	                		<li>Communicatie met korte, directe lijnen naar de werkgevers en hun medewerkers zorgt voor een breed draagvlak.</li>

	                	</ul>

	                ',
	            'category_id' => 1,
            ],
            [
                'title' => 'Aandachtspunten ',
                'description' => '',
                'body' => '
                        <ul>
                            <li>In de IJmond is behoefte aan last-mile OV-oplossingen voor werknemers. De verbinding van de NS-stations naar de verschillende bedrijventerreinen is onvoldoende. Om werknemers met resultaat te stimuleren om met het openbaar vervoer te reizen, moet echter ook de totale OV-infrastructuur goed op orde zijn. De afwaardering van de Kennemerlijn (treinverbinding tussen Haarlem en Alkmaar) per 1 januari 2016 en de noodzakelijke omleidingen van de regionale buslijnen vanwege de afsluiting van de Velsertunnel per 15 april 2016 hebben negatief effect gehad op de OV-resultaten van het programma.</li>
                            <li>Een onderscheid maken tussen de beloningsstructuur van ambassadeurs (werknemers die al voor de start van de campagne op de fiets kwamen, dit blijven doen en ook uitdragen aan collega’s) en nieuwe fietsers (werknemers die naar aanleiding van de campagne starten met fietsen of wezenlijk vaker gaan fietsen) wekt wrevel op en zorgt voor zeer veel extra administratie.</li>
                            <li>IJmond Bereikbaar heeft in 2017, als onderdeel van het loyaliteitsprogramma,  de fietsapp Ring-Ring bij haar deelnemers geïntroduceerd voor onder meer het registreren van de woon/werkfietskilometers. De kilometerregistratie was op dat moment niet meer gekoppeld aan de financiële beloning. De urgentie voor deelnemers om de app te gebruiken was daardoor sterk afgenomen. In de IJmond is het aantal gebruikers daardoor niet zo hoog als gewenst.</li>
                        </ul>

                    ',
                'category_id' => 1,
            ],
            [
                'title' => ' ',
                'description' => '',
                'body' => '
                    ',
                'category_id' => 2,
            ],
            [
                'title' => 'Fase 1: 1 mei 2015 – 31 maart 2017',
                'description' => '',
                'body' => '
                    <p>Werknemers van bedrijven en instellingen uit de IJmond die een samenwerkingsovereenkomst hebben met IJmond Bereikbaar kunnen zich aanmelden voor het mobiliteitsprogramma. </p>
                    <p17-graph></p17-graph>
                    <p>Medewerkers melden zich massaal aan voor het fietsstimuleringsprogramma. De kilometervergoeding trekt veel mensen over de streep. Daarnaast is ook de sluiting van de Velsertunnel van 15 april 2016 tot 15 januari 2017 voor veel mensen aanleiding om van vervoersmiddel te veranderen. Slechts 2% is geïnteresseerd om over te stappen van de auto naar het openbaar vervoer. </p>
                    <img src="/img/fase1-werknemers.svg" />

                    ',
                'category_id' => 3,
            ],
            [
                'title' => 'Fase 2: 1 april – 31 december 2017 ',
                'description' => '',
                'body' => '
                    <p>Medio januari 2017 gaat de Velsertunnel weer open. IJmond Bereikbaar betaalt nog tot 31 maart een kilometervergoeding aan haar fietsers en start daarnaast met een afwisselend loyaliteitsprogramma. Ook wordt in april 2017 de fietsapp van Ring-Ring geïntroduceerd. Uit enquêteresultaten blijkt dat in 6 tot 9 maanden extrinsieke motivatie omgevormd kan worden naar intrinsieke motivatie. Ook zonder kilometervergoeding blijft 95% van de deelnemers fietsen.</p>
                    ',
                'category_id' => 3,
            ],
            [
                'title' => 'Spelregels IJmond Bereikbaar – Goed op weg',
                'description' => '',
                'body' => '
                        <img src="/img/spelregels.gif" class="thirty"/>
                    <ul>
                        <li>Medewerkers van werkgevers die een samenwerkingsovereenkomst hebben met IJmond Bereikbaar melden zich aan bij IJmond Bereikbaar en geven aan of zij overstappen van auto naar fiets of van auto naar openbaar vervoer.</li>
                        <li>Een medewerker mag binnen of buiten de IJmond wonen. Woon/werkafstand wordt berekend op basis van de makkelijke doorfietsroute van de routeplanner van de Fietsersbond.</li>
                        <li>In het geval van de overstap naar fiets, geeft de medewerker aan een ambassadeur of nieuwe fietser te zijn. Zij ontvangen van IJmond Bereikbaar een kilometervergoeding voor geregistreerde woon/werk-fietskilometers.</li>
                        <li>In het geval van overstap naar OV, rekent IJmond Bereikbaar uit welke mobiliteitskaart het meest voordelig is en verzorgt een last-mile-oplossing middels shuttles of gratis gebruik van de OV-fiets.</li>
                    </ul>
                    ',
                'category_id' => 3,
            ],
            [
                'title' => 'Succesfactoren ',
                'description' => '',
                'body' => '
                    <ul>
                        <li>IJmond Bereikbaar heeft bij aangesloten grote werkgevers en een aantal MKB-bedrijven in de regio een personeelsbijeenkomst georganiseerd om het programma toe te lichten.</li>
                        <li>Laagdrempelige aanmeldingsprocedure en klantvriendelijke backoffice.</li>
                        <li>Zowel ambassadeurs als nieuwe fietsers voelen zich aangetrokken tot het fietsprogramma van IJmond Bereikbaar.</li>
                        <li>De renovatie en daarmee 9 maanden durende sluiting van de Velsertunnel is voor veel werknemers een reden om de auto te laten staan.</li>
                        <li>Door onder meer Beter Benutten, Rijkswaterstaat en de IJmondgemeenten wordt een tweede pont in de spits gefinancierd. Dit zorgt voor een betrouwbare en snelle overtocht van het Noordzeekanaal. Fietsers vinden een wachttijd van 10 minuten acceptabel. Een wachttijd van 20 minuten is dat niet.</li>
                        <li>Fietsers krijgen in de ‘IJmond-zomer’ (aprilt/m oktober) € 0,10 per fietskilometer en in de ‘IJmond-winter’ (novembert/m maart) € 0,15 per fietskilometer. Dit houdt veel fietsers ook in de donkere winterperiode op de fiets. </li>
                        <li>Met voldoende tijd en motivatie lukt het om extrinsieke motivatie om te buigen naar intrinsieke motivatie. Fietsers blijven fietsen omdat ze zich fitter voelen, geld besparen en in veel gevallen zelfs sneller op het werk zijn.</li>
                    </ul>
                    <img src="/img/succesfactoren-werknemer.jpg" />
                    ',
                'category_id' => 3,
            ],
            [
                'title' => 'Aandachtspunten',
                'description' => '',
                'body' => '
                    <ul>
                        <li>Het is belangrijk processen voor aanmelden, kilometerregistratie en uitbetalingen van vergoedingen van het begin af aan goed te automatiseren.</li>
                        <li>IJmond Bereikbaar heeft initieel gekozen voor verschillende vergoedingen voor ambassadeurs en nieuwe fietsers. Dit veroorzaakte niet alleen veel extra administratie, maar ook gemengde gevoelens onder de fietsers.</li>
                        <li>IJmond Bereikbaar heeft tot aan december 2016 gewerkt met persoonsgebonden IJB-passen in het kader van het loyaliteitsprogramma. Inmiddels is het veel praktischer en gebruiksvriendelijker om een loyaliteitsprogramma aan te bieden met een app.</li>
                        <li>In de IJmond was bij de werknemers nauwelijks animo voor overstappen naar het openbaar vervoer. De aangeboden shuttledienst naar de verschillende bedrijventerreinen werd op zichzelf wel op waarde geschat. Echter de afwaardering van de Kennemerlijn (treinverbinding tussen Haarlem en Alkmaar) per 1 januari 2016 en de noodzakelijke omleidingen van de regionale buslijnen vanwege de afsluiting van de Velsertunnel per 15 april 2016 hebben negatief effect gehad op de OV-resultaten van het programma.</li>

                    </ul>
                    ',
                'category_id' => 3,
            ],
            [
                'title' => 'Fiets en e-bike ',
                'description' => '',
                'body' => '
                    <h2>Fase 1: 1 mei 2015 – 31 maart 2017</h2>
                    <img src="/img/reisgedrag-fase-1.gif" class="fourty_wide center" />
                    <h2>Boodschap</h2>
                    <p>Bij de start van de campagne ligt de nadruk op extrinsieke motivatie en bewustzijn creëren voor alternatieven voor de auto.</p>
                    <img src="/img/reisgedrag_affichelisette.jpg" class="sixty_wide center"  />

                    <p>Op de fiets naar je werk… Dat is besparen én verdienen.</p>
                    <ul>
                        <li>Geen benzinekosten, geen parkeerkosten</li>
                        <li>Onderhoudskosten van een fiets zijn lager dan die van de auto</li>
                        <li>Tijd! Je bent op de fiets vaak sneller dan je denkt</li>
                        <li>Fietskilometervergoeding van IJmond Bereikbaar</li>
                    </ul>

                    <p>File of fietsen? </p>
                    <img src="/img/reisgedrag_fietstijden.jpg" class="fourty_wide" />
                    <ul>
                        <li>Je woont dichterbij dan je denkt</li>
                        <li>Waarom aansluiten in de rij als je ook makkelijk kunt fietsen</li>
                    </ul>

                    <p>Uit de enquêteresultaten blijkt dat, naast het financiële argument, gezondheid een belangrijke motivator is om te fietsen. In de loop van de tijd verschuift de campagneboodschap dan ook naar de intrinsieke motivatie.</p>
                    <img src="/img/reisgedrag_frisfietsen.jpg" class="sixty_wide center" />

                    <p>Ook in 2017 fris op je werk? Natuurlijk op de fiets </p>
                    <ul>
                        <li>Het is goed voor je. Fietsen maakt fysiek fit en geeft ruimte in je hoofd.</li>
                        <li>Het is goed voor het milieu. Jij vermindert de uitstoot van CO2 door te fietsen én een betere doorstroming van het overige verkeer doet daar een schepje bovenop. </li>
                    </ul>

                    <h2>Beloning</h2>
                    <ul>
                        <li>IJmond Bereikbaar beloont de fietsers financieel met een vergoeding voor geregistreerde fietskilometers van € 0,10 p/km in de zomer en € 0,15 p/km in de winter.</li>
                        <li>Fietsers krijgen een gratis jaarabonnement op de pechservice van FietsNed. </li>
                        <li>Vanaf september 2016 starten de loyaliteitscampagnes om fietsers uit te dagen om een tandje bij te zetten en vol te houden.</li>
                    </ul>
                    <h2>Fase 2: 1 april – 31 december 2017</h2>
                    <p>Om de actieradius van fietsers te vergroten, wordt de fietsstimuleringscampagne uitgebreid met de e-bike. De e-bike is, algemeen genomen, een geschikt alternatief voor de auto voor woon/werkafstanden tot 20 km. IJmond Bereikbaar biedt een probeer-actie aan via geïnteresseerde werkgevers. Alle medewerkers mogen de e-bike gratis uitproberen voor zowel woon/werkverkeer, als privégebruik. Hierna volgt een aanbod voor lease of koop van een nieuwe of gebruikte e-bike. We werken hiervoor samen met sQoot, die een divers aanbod heeft en de werkgevers ontzorgt.</p>

                    <h2>Beloning</h2>
                    <p>Resultaat</p>
                    <p>Het aantal IJmond Bereikbaar fietsers en fietskilometers groeit gestaag. Het deelnemersbestand wordt per kwartaal opgeschoond. Deelnemers die 3 maanden geen kilometers registreren worden op non-actief gezet en tellen niet meer mee voor de aantallen fietsers in de community. Dit houdt de resultaten transparant en actueel.</p>

                    <p01-graph></p01-graph>
                    <p02-graph></p02-graph>

                    <img src="/img/reisgedrag_flyer.jpg" class="sixty_wide center" />

                    <img src="/img/Probeer een ebike_beeld.jpg" class="fourty_wide" />
                    <p>18 bedrijven uit de kopgroep hebben gebruik gemaakt van de e-bike probeeractie van IJmond Bereikbaar. </p>

                    <p>Tata Steel en Etos namen op dit thema zelf initiatief en boden hun medewerkers een e-bike-probeeractie aan via een andere leverancier. </p>

                    <p>Werkgevers dragen zowel met harde als zachte maatregelen bij aan het stimuleren van de fiets als vervoersmiddel voor het woon/werkverkeer.  Lees meer in de benchmark. </p>
                    ',
                'category_id' => 4,
            ],
            [
                'title' => 'IJmond Bereikbaar Shuttles en de OV-fiets ',
                'description' => '',
                'body' => '
                    <h2>Fase 1: 1 mei 2015 – 31 maart 2017</h2>
                    <p>IJmond Bereikbaar heeft op 2 manieren het gebruik van het openbaar vervoer gestimuleerd. </p>
                    <p>Advies op maat over aanbieders van OV-mobiliteitskaarten voor werknemers die in z’n geheel overstappen van auto naar het OV. De reiskosten zijn voor rekening van de werkgever.</p>
                    <p>De IJmond Bereikbaar Shuttle en OV-fiets: een last-mile oplossing voor werknemers die al met het openbaar vervoer reizen, maar waar de ‘last mile’ van NS- of busstation naar het bedrijf te wensen over laat. Gebruik van de shuttle en OV-fiets is gratis. IJmond Bereikbaar vergoedt de kosten.</p>
                    <img src="/img/reisgedrag_shuttle.jpg" class="fourty_wide" />

                    <h2>Ambitie</h2>
                    <p>De ambitie van IJmond Bereikbaar was het uitrollen van 5 shuttlediensten (gemiddeld 50 gebruikers per shuttle per dag). Op plaatsen waar een shuttledienst niet haalbaar of logisch was, is de OV-fiets als achtervang aangeboden. </p>

                    <h2>Resultaten</h2>
                    <p>Tussen 1 mei 2015 en 31 maart 2017 zijn 3 IJmond Bereikbaar shuttles operationeel geweest. Twee van station Beverwijk naar de bedrijventerrein de Pijp en Wijkermeer en één vanaf station Driehuis naar bedrijventerrein Broekerwerf in Velserbroek. Een vierde shuttledienst van station Heemskerk naar bedrijventerrein Houtwegen is onderzocht, maar naar aanleiding van het verwachte resultaat niet tot uitgerold. In totaal hebben ca. 65 medewerkers gebruik gemaakt van de shuttles. Per 1 mei 2017 is in overleg met de betrokken werkgevers het aanbieden van de shuttledienst gestopt.</p>

                    <p>Slechts een enkele medewerker heeft de OV-fiets aangevraagd als last-mile oplossing. Deze deelnemers zijn tot en met 31 maart 2017 gefaciliteerd.</p>

                    ',
                'category_id' => 4,
            ],
            [
                'title' => 'Succesfactoren ',
                'description' => '',
                'body' => '
                    <img src="/img/reisgedrag-succes-factoren.gif" class="fourty_wide" />
                    <ul>
                        <li>Laagdrempelige campagne voor fietsstimulering trekt veel mensen over de streep.</li>
                        <li>Opbouw boodschap van extrinsieke naar intrinsieke motivatie maakt reisgedrag structureel.</li>
                        <li>Door een substantieel aantal fietsers, krijgen de behaalde resultaten ook betekenis. Fietsers ervaren dat zij echt bijdragen aan een verbetering van de bereikbaarheid van hun directe omgeving.</li>
                        <li>Het gratis uitproberen van een e-bike, creëert bewustzijn van de mogelijkheden voor een relatief grotere woon/werkafstand, zowel bij de werkgever als de werknemer.</li>

                    </ul>
                    ',
                'category_id' => 4,
            ],
            [
                'title' => 'Aandachtspunten',
                'description' => '',
                'body' => '
                    <ul>
                        <li>De aanschafprijs van een e-bike is voor veel mensen een drempel. Het helpt wanneer werkgevers actief een fietsenplan voeren en waar mogelijk de financiële vergoeding voor de e-bike ophogen. Werkgevers zijn zelf nog vaak onvoldoende op de hoogte van wat zij hun medewerkers kunnen bieden.</li>
                        <li>De overstap van autogebruik naar OV stimuleren kan alleen als de randvoorwaarden goed zijn.</li>
                        <li>Het afwaarderen van de Kennemerlijn (treinverbinding Haarlem-Alkmaar) zorgde voor een extra overstap en maakte de reistijd langer, waardoor werknemers voorkeur bleven houden voor de auto.</li>
                        <li>Waar de afsluiting van de Velsertunnel juist een stimulans was om over te stappen op de fiets, werkte dit nadelig voor het overstappen naar het openbaar vervoer. De bussen die normaal snel en betrouwbaar door de Velsertunnel reden, werden nu via de pont omgeleid met langere reistijd en extra overstappen tot gevolg.</li>
                        <li>Het aanbieden van goede ‘last mile’ oplossingen heeft alleen kans van slagen als de totale OV-keten (trein/bus) goed is.</li>

                    </ul>
                    ',
                'category_id' => 4,
            ],
            [
                'title' => ' ',
                'description' => '',
                'body' => '
                    ',
                'category_id' => 4,
            ],
            [
                'title' => ' ',
                'description' => '',
                'body' => '
                    ',
                'category_id' => 4,
            ],
            [
                'title' => ' ',
                'description' => '',
                'body' => '
                    ',
                'category_id' => 4,
            ],
        ];

        DB::table('pages')->insert($pages);
    }
}
