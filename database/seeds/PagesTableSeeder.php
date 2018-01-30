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
                'title' => 'Stimuleringsprogramma ‘Goed op weg’',
                'description' => '',
                'body' => '
                        <p>Met het stimuleringsprogramma ‘Goed op weg’ heeft IJmond Bereikbaar bedrijven en hun werknemers ertoe gebracht om na te denken over hun manier van reizen naar het werk en hen gestimuleerd om, als het kan, de auto te laten staan en te kiezen voor de fiets of het openbaar vervoer. </p>
                        <p20-graph></p20-graph>
                        <p21-graph></p21-graph> <br>
                        <h2>Werkgeversaanpak en resultaten</h2>
                        
                        <ul>
                            <li>Van 10 pilotbedrijven met ongeveer 50 deelnemers in mei 2015, is ons fietsstimuleringsprogramma ‘Goed op weg – op de fiets’ uitgegroeid tot een betrokken en enthousiaste community.</li>
                            <li>Van 170 bedrijven hebben bijna 2700 werknemers zich aangemeld</li>
                            <li>Het bedrijfsleven geeft een 7.8 aan het programma en de fietsers die meedoen aan het programma geven een 8.1. Dat zijn resultaten waar we trots op zijn.</li>
                        </ul>


                        <p>De belangrijkste maatregelen die IJmond Bereikbaar heeft ingezet van 2015-2017 zijn:</p>
                        <ul>
                            <li>De fietsvergoeding</li>
                            <li>De fietsapp Ring-Ring</li>
                            <li>Shuttlebus</li>
                            <li>Stimuleren ov </li>
                        </ul>

                        <p>Lees meer over onze werkgeversaanpak en de acties die gedaan zijn om werknemers over de streep te trekken en vast te houden. </p>
                        <h2>Resultaten ontwikkeling fietsdeelnemers</h2>
                        <p>De grafiek hieronder laat zien dat er een toename van het aantal fietsdeelnemers is geweest van oktober 2015 tot en met maart 2017. In die periode heeft IJmond Bereikbaar een fietsvergoeding gegeven aan fietsdeelnemers. In de periode van maart 2016 tot en met januari 2017 was de Velsertunnel gesloten vanwege renovatie. Dit kan ook bijgedragen hebben tot een toename van fietsdeelnemers. </p>
                        <p16-graph></p16-graph>
                        <img src="/img/drie fases - lc.svg" class="fullwidth" />

                    
                        <h2>Ambassadeurs</h2>
                        <p>IJmond Bereikbaar heeft ambassadeurs ingezet om het fietsprogramma te stimuleren.</p>
                        <div class="page--intwo">
                            <div class="page--intwo--item">
                                <p24-graph></p24-graph>
                            </div>
                            <div class="page--intwo--item">
                                <img src="/img/ambities-en-resultaten-definitie-ambassadeur.gif" class="fullwidth" />
                            </div>
                        </div>

                    ',
                'category_id' => 1,
            ],
            [
                'title' => 'Spitsmijdingen',
                'description' => '',
                'body' => '
                        <p>Volgens de spelregels van het programma van BeterBenutten realiseer je een spitsmijding wanneer je niet met een personenauto, bestelbus of vrachtwagen in de spits rijdt, waar je dit vroeger wel deed. Thuiswerken tot na de spits, of niet-reizen in de spits vanwege een parttime baan of ploegendienst telt in deze definitie niet mee.</p>
                        <div class="page--intwo">
                            <div class="page--intwo--item">
                                <p22-graph></p22-graph>
                            </div>
                            <div class="page--intwo--item">
                                <p>De doelstelling voor spitsmijdingen in de IJmond is voor 85% gehaald. Een groot aantal werknemers die in de spits naar hun werk reizen heeft de overstap van de auto naar de fiets gemaakt. In de IJmond werkt ten opzichte van andere regio’s echter een onevenredig groot aantal mensen in ploegendienst en/of parttime. Ook zij hebben de overstap van de auto naar de fiets gemaakt, maar tellen niet mee als spitsmijding zoals bedoeld door Beter Benutten.</p>
                            </div>
                        </div>

                        ',
                'category_id' => 1,
            ],
            [
                'title' => 'De pont en overige infrastructurele maatregelen',
                'description' => '',
                'body' => '
                    <p>Mensen ertoe bewegen om de auto te laten staan en over te stappen op de fiets, is volgens gedragswetenschappers net zo moeilijk als mensen vragen te stoppen met roken. Om zo’n omslag voor elkaar te krijgen, is het heel belangrijk dat de randvoorwaarden om de overstap te maken bijzonder goed geregeld zijn. </p>

                    <p>Dwars door de IJmond loopt het Noordzeekanaal. Veel fietsende werknemers maken dagelijks de overocht met de pont: het blauwe fietspad tussen Velsen-Noord en Velsen-Zuid. Met subsidie van onder andere Beter Benutten 2 en Rijkswaterstaat en met financiële middelen van de IJmondgemeenten is het gelukt om tijdens de ochtend- en avondspits een tweede pont te laten varen en zo de wachttijd van 20 minuten te halveren. Hiermee is een forse toename van het aantal fietsers die de overtocht maken gerealiseerd. Deze snelle, regelmatige en betrouwbare oversteek heeft ervoor gezorgd dat voor werknemers de fiets een volwaardig alternatief is voor de auto. </p>

                    <div class="page--intwo">
                        <div class="page--intwo--item">
                            <p23-graph></p23-graph>
                            <p class="chart--subtext">Van september 2015 t/m september 2016 is een extra spitspont ingezet.  In september 2016 is de Velsertunnel gesloten. Met spitspont houdt in dat er gedurende de spits iedere 10 minuten een afvaart is. Zonder spitspont is er iedere 20 minuten een afvaart. </p>
                        </div>
                        <div class="page--intwo--item">
                            <p>Het hoogtepunt van het aantal (brom)fietsers dat gebruik maakt van de pont ligt uiteraard in september 2016: door de tweede pont in de spits iedere 10 minuten een afvaart én de Velsertunnel afgesloten door de renovatie. We zien dan een toename van 40%. Structureel zorgt de tweede spitspont voor 15% extra (brom)fietsers die gebruik maken van ‘het blauwe fietspad’.</p>

                            <p>Voor en na de afsluiting van de Velsertunnel hebben de IJmondgemeenten een aantal fietspaden verbeterd, om met name de bereikbaarheid van een aantal bedrijventerreinen te verbeteren. Tijdens de afsluiting van de Velsertunnel hebben gemeenten zo min mogelijk wegwerkzaamheden uitgevoerd, om zodoende geen hinder te veroorzaken. </p>
                        </div>
                    </div>


                        ',
                'category_id' => 1,
            ],
            [
                'title' => 'Succesfactoren ',
                'description' => '',
                'body' => '
                        <p>IJmond Bereikbaar heeft zeven verschillende succesfactoren weten te definiëren. Deze succesfactoren hebben te maken met de organisatorische aanpak en de maatregelen die zijn ingezet.</p>
	                	<img src="/img/ambities_succesfactoren.svg" class="eighty_wide center" />
	                ',
	            'category_id' => 1,
            ],
            [
                'title' => 'Aandachtspunten ',
                'description' => '',
                'body' => '
                        <div class="row">
                            <div class="col-sm-9">
                                <ul class="list--longli">
                                    <li>In de IJmond is behoefte aan last-mile OV-oplossingen voor werknemers. De verbinding van de NS-stations naar de verschillende bedrijventerreinen is onvoldoende. Om werknemers met resultaat te stimuleren om met het openbaar vervoer te reizen, moet echter ook de totale OV-infrastructuur goed op orde zijn. De afwaardering van de Kennemerlijn (treinverbinding tussen Haarlem en Alkmaar) per 1 januari 2016 en de noodzakelijke omleidingen van de regionale buslijnen vanwege de afsluiting van de Velsertunnel per 15 april 2016 hebben negatief effect gehad op de OV-resultaten van het programma.</li>
                                    <li>Een onderscheid maken tussen de beloningsstructuur van ambassadeurs (werknemers die al voor de start van de campagne op de fiets kwamen, dit blijven doen en ook uitdragen aan collega’s) en nieuwe fietsers (werknemers die naar aanleiding van de campagne starten met fietsen of wezenlijk vaker gaan fietsen) wekt wrevel op en zorgt voor zeer veel extra administratie.</li>
                                    <li>IJmond Bereikbaar heeft in 2017, als onderdeel van het loyaliteitsprogramma,  de fietsapp Ring-Ring bij haar deelnemers geïntroduceerd voor onder meer het registreren van de woon/werkfietskilometers. De kilometerregistratie was op dat moment niet meer gekoppeld aan de financiële beloning. De urgentie voor deelnemers om de app te gebruiken was daardoor sterk afgenomen. In de IJmond is het aantal gebruikers daardoor niet zo hoog als gewenst.</li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <img src="/img/ambities-en-resultaten-aandachtspunten.gif" class="fullwidth" />
                            </div>
                        </div>
                        <ul>

                        </ul>

                    ',
                'category_id' => 1,
            ],
            [
                'title' => 'Programma ‘Goed op weg’',
                'description' => '',
                'body' => '
                    <p>Eind 2014 zijn 10 bedrijven benaderd om mee te doen met een pilot-programma. Deze bedrijven hebben getest of zij hun medewerkers konden bewegen de auto vaker te laten staan en op de fiets of met het OV openbaar vervoer naar het werk te komen. En met succes. Vanaf 1 mei 2015 is het stimuleringsprogramma ‘IJmond Bereikbaar – Goed op weg’ in de hele IJmond geïntroduceerd.</p>

                    <img src="/img/werkgevers-aanpak.gif" class="fullwidth" />

                    <p>Nieuwsgierig naar de resultaten van de kopgroep? <a href="/kopgroep">Klik hier voor de benchmark.</a> </p>
                    ',
                'category_id' => 2,
            ],
            [
                'title' => 'Spelregels IJmond Bereikbaar',
                'description' => '',
                'body' => '
                    <p>Om aan het fietsprogramma mee te doen heeft IJmond Bereikbaar een aantal spelregels opgesteld voor de werkgever. </p>
                    <img src="/img/werkgevers-spelregels.gif" class="fullwidth" />
                    ',
                'category_id' => 2,
            ],
            [
                'title' => 'Succesfactoren',
                'description' => '',
                'body' => '
                    <div class="page--intwo">
                        <div class="page--intwo--item">
                            <ul>
                                <li>80% van de aanmeldingen gebeurde door mond-op-mond reclame. Opvolging en implementatie door de mobiliteitsmakelaar.</li>
                                <li>Laagdrempelige toegang tot het programma. IJmond Bereikbaar heeft het bedrijfsleven op hoog niveau ontzorgd.</li>
                                <li>De renovatie en afsluiting van de Velsertunnel is voor het bedrijfsleven een belangrijke aanjager geweest om actie te nemen op het thema mobiliteit.</li>
                                <li>Er is voldoende tijd geweest om extrinsieke motivatie (bereikbaarheidsprobleem, financiële vergoeding voor werknemers) om te buigen naar intrinsieke motivatie (vitaliteit, duurzame inzetbaarheid).</li>
                                <li>Slagkracht door de korte lijnen met de IJmondgemeenten, de Provincie Noord-Holland en Rijkswaterstaat.</li>
                                <li>Hands-on mentaliteit van werkgevers in de regio.</li>
                            </ul>
                        </div>
                        <div class="page--intwo--item sixty_wide">
                            <img src="/img/poppetje-succesfactoren.gif" class="fullwidth" />
                        </div>

                    </div>
                    ',
                'category_id' => 2,
            ],
            [
                'title' => 'Aandachtspunten',
                'description' => '',
                'body' => '
                    <ul>
                        <li>Ondernemers zijn eerst en vooral bezig met hun primaire bedrijfsvoering. Bereikbaarheid en luchtkwaliteit heeft hun aandacht, maar voldoende tijd en begeleiding is van cruciaal belang.</li>
                        <li>Het overnemen van fietsregelingen duurt soms langer dan gewenst door bijvoorbeeld langlopende CAO-afspraken.</li>
                        <li>De nieuwe regelgeving of subsidiemogelijkheden voor fietsstimulering, zoals bijv. het Nieuwe Fietsenplan zijn vaak onvoldoende bekend.</li>

                    </ul>
                    ',
                'category_id' => 2,
            ],
            [
                'title' => 'Fase 1: campagnefase',
                'description' => '',
                'body' => '
                    <img src="/img/campagne fase- lc.svg" class="fullwidth" />
                    <p>Werknemers van bedrijven en instellingen uit de IJmond die een samenwerkingsovereenkomst hebben met IJmond Bereikbaar kunnen zich aanmelden voor het mobiliteitsprogramma. </p>
                    <h2>Nieuwe fietsers en ambassadeurs </h2>
                    <img src="/img/mobiliteit_luchtkwaliteit_v2.svg" />
                    <p17-graph></p17-graph>
                    <p>Medewerkers melden zich massaal aan voor het fietsstimuleringsprogramma. De kilometervergoeding trekt veel mensen over de streep. Daarnaast is ook de sluiting van de Velsertunnel van 15 april 2016 tot 15 januari 2017 voor veel mensen aanleiding om van vervoersmiddel te veranderen. Slechts 2% is geïnteresseerd om over te stappen van de auto naar het openbaar vervoer. </p>
                    
                    <h2>Spelregels IJmond Bereikbaar – Goed op weg</h2>
                    <div class="row">
                        <div class="col-sm-8">
                            <ul>
                                <li>Medewerkers van werkgevers die een samenwerkingsovereenkomst hebben met IJmond Bereikbaar melden zich aan bij IJmond Bereikbaar en geven aan of zij overstappen van auto naar fiets of van auto naar openbaar vervoer.</li>
                                <li>Een medewerker mag binnen of buiten de IJmond wonen. Woon/werkafstand wordt berekend op basis van de makkelijke doorfietsroute van de routeplanner van de Fietsersbond.</li>
                                <li>In het geval van de overstap naar fiets, geeft de medewerker aan een ambassadeur of nieuwe fietser te zijn. Zij ontvangen van IJmond Bereikbaar een kilometervergoeding voor geregistreerde woon/werk-fietskilometers.</li>
                                <li>In het geval van overstap naar OV, rekent IJmond Bereikbaar uit welke mobiliteitskaart het meest voordelig is en verzorgt een last-mile-oplossing middels shuttles of gratis gebruik van de OV-fiets.</li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <img src="/img/spelregels.gif" class="fullwidth"/>
                        </div>
                    </div>
                    <img src="/img/werknemers-fase-1.gif" class="fullwidth" />

                    ',
                'category_id' => 3,
            ],
            [
                'title' => 'Fase 2: verankeringsfase',
                'description' => '',
                'body' => '
                    <img src="/img/verankering fase- lc.svg" class="fullwidth" />
                    <p>Medio januari 2017 gaat de Velsertunnel weer open. IJmond Bereikbaar betaalt nog tot 31 maart een kilometervergoeding aan haar fietsers en start daarnaast met een afwisselend loyaliteitsprogramma. Ook wordt in april 2017 de fietsapp van Ring-Ring geïntroduceerd. Uit enquêteresultaten blijkt dat in 6 tot 9 maanden extrinsieke motivatie omgevormd kan worden naar intrinsieke motivatie. Ook zonder kilometervergoeding blijft 95% van de deelnemers fietsen.</p>

                    <h2>Snelfietsroute</h2>
                    <img src="/img/trace fietsroute2.png" class="fullwidth" />

                    <h2>Enquêteresultaten deelnemende werknemers zomer 2017</h2>

                    <p>Vlak voor de zomervakantie hebben alle werknemers die ingeschreven staan bij het fietsstimuleringsprogramma ‘Goed op weg’ een enquête van IJmond Bereikbaar ontvangen. De Velsertunnel was alweer een paar maanden open en per 1 april 2017 kregen ze geen kilometervergoeding meer. We waren erg benieuwd hoe onze fietsers op deze veranderingen zouden reageren. Komen jullie nog  op de fiets naar je werk, vinden jullie het fietsprogramma nog steeds leuk en van toegevoegde waarde, gebruiken jullie de fietsapp?  Dit zijn de resultaten van de enquete:</p>

                    <div class="page--intwo">
                        <div class="page--intwo--item--fifty">
                            <p25-graph></p25-graph>
                        </div>
                        <div class="page--intwo--item--fifty">
                            <p26-graph></p26-graph>
                        </div>
                    </div>

                    <p><strong>Fietsgedrag</strong></p>
                    <ul>
                        <li>96% fietst nog minstens 1x per week naar het werk</li>
                        <li>79% 3x per week of vaker</li>
                        <li>26% 5x per week</li>
                    </ul>

                    <p><strong>Rapportcijfers</strong></p>
                    <ul>
                        <li>Het programma IJmond Bereikbaar krijgt een 7,8 (66% van de deelnemers geeft een 8 of hoger)</li>
                        <li>Het loyaliteitsprogramma ‘Blijf op weg’ scoort een 7,1</li>
                        <li>De fiets-app RingRing krijgt een 6,7 (67% geeft een 7 of hoger). </li>
                        <ul>
                            <li>De hoogste rapportcijfers worden gegeven voor het automatisch registreren, het meefietsen voor het goede doel en de basisinformatie over wanneer, hoe ver en hoe vaak je fietst.]</li>
                        </ul>
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
                    <img src="/img/werknemers-succesfactoren.gif" />
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
                    <h2>Fase 1: campagnefase</h2>
                    <img src="/img/campagne fase- lc.svg" class="fullwidth" />
                    <h2>Boodschap</h2>
                    <div class="row">
                        <div class="col-sm-9">
                            <p>Bij de start van de campagne ligt de nadruk op extrinsieke motivatie en bewustzijn creëren voor alternatieven voor de auto.</p>
                            <strong>Op de fiets naar je werk… Dat is besparen én verdienen.</strong>
                            <ul>
                                <li>Geen benzinekosten, geen parkeerkosten</li>
                                <li>Onderhoudskosten van een fiets zijn lager dan die van de auto</li>
                                <li>Tijd! Je bent op de fiets vaak sneller dan je denkt</li>
                                <li>Fietskilometervergoeding van IJmond Bereikbaar</li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/reisgedrag_affichelisette.jpg" class="fullwidth"  />
                        </div>
                    </div>


                    <br>

                    <div class="row">
                        <div class="col-sm-9">
                            <strong>Enquêteresultaten</strong>
                            <p>Uit de enquêteresultaten blijkt dat, naast het financiële argument, gezondheid een belangrijke motivator is om te fietsen. In de loop van de tijd verschuift de campagneboodschap dan ook naar de intrinsieke motivatie.</p>     
                            <p>Blijft u fietsen na 31 maart 2017 als de campagne en daarmee ook de kilometervergoeding stopt? 96% zegt ja! Redenen om te blijven fietsen: gezondheid/conditie – goed voor het milieu – bereikbaarheid (sneller dan met de auto)</p>
                            <p>Motieven : gezondheid 82%, milieu 50% , km-vergoeding 46%</p>

                            <p>Ook in 2017 fris op je werk? Natuurlijk op de fiets </p>
                            <ul>
                                <li>Het is goed voor je. Fietsen maakt fysiek fit en geeft ruimte in je hoofd.</li>
                                <li>Het is goed voor het milieu. Jij vermindert de uitstoot van CO2 door te fietsen én een betere doorstroming van het overige verkeer doet daar een schepje bovenop. </li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/reisgedrag_frisfietsen.jpg" class="fullwidth " />
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-9">
                            <strong>File of fietsen? </strong>
                            <ul>
                                <li>Je woont dichterbij dan je denkt.</li>
                                <li>Waarom aansluiten in de rij als je ook makkelijk kunt fietsen?</li>
                                <li>IJmond Bereikbaar heeft een fietsroutekaart die aangeeft wat de fietsafstand tussen de verschillende gemeenten is.</li>
                                <li>Daarop zijn de kortste fietsroutes in de IJmond te zien</li>
                                <li>Dat is besparen én verdienen’  Gratis abonnement op de pechhulpservice van FietsNed.</li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/reisgedrag_fietstijden.jpg" class="fullwidth" />
                        </div>
                    </div>

                    <h2>Fase 2: verankeringsfase</h2>
                    <img src="/img/verankering fase- lc.svg" class="fullwidth" />
                    <p>Om de actieradius van fietsers te vergroten, wordt de fietsstimuleringscampagne uitgebreid met de e-bike. De e-bike is, algemeen genomen, een geschikt alternatief voor de auto voor woon/werkafstanden tot 20 km. IJmond Bereikbaar biedt een probeer-actie aan via geïnteresseerde werkgevers. Alle medewerkers mogen de e-bike gratis uitproberen voor zowel woon/werkverkeer, als privégebruik. Hierna volgt een aanbod voor lease of koop van een nieuwe of gebruikte e-bike. We werken hiervoor samen met sQoot, die een divers aanbod heeft en de werkgevers ontzorgt.</p>

                    <h2>Beloning</h2>
                    <p>Resultaat</p>
                    <p>Het aantal IJmond Bereikbaar fietsers en fietskilometers groeit gestaag. Het deelnemersbestand wordt per kwartaal opgeschoond. Deelnemers die 3 maanden geen kilometers registreren worden op non-actief gezet en tellen niet meer mee voor de aantallen fietsers in de community. Dit houdt de resultaten transparant en actueel.</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <p01-graph></p01-graph>
                        </div>
                        <div class="col-sm-6">
                            <p02-graph></p02-graph>
                        </div>
                    </div>

                    <br>
                    
                    <div class="row">
                        <div class="col-sm-9">
                            <strong>E-bike probeeractie</strong>
                            <p>18 bedrijven uit de kopgroep hebben gebruik gemaakt van de e-bike probeeractie van IJmond Bereikbaar. </p>

                            <p>Tata Steel en Etos namen op dit thema zelf initiatief en boden hun medewerkers een e-bike-probeeractie aan via een andere leverancier. </p>

                            <p>Werkgevers dragen zowel met harde als zachte maatregelen bij aan het stimuleren van de fiets als vervoersmiddel voor het woon/werkverkeer.  Lees meer in de benchmark. </p>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/Probeer een ebike_beeld.jpg" class="fullwidth" />
                        </div>
                    </div>


                    ',
                'category_id' => 4,
            ],
            [
                'title' => 'IJmond Bereikbaar Shuttles en de OV-fiets ',
                'description' => '',
                'body' => '
                    <h2>Fase 1: campagnefase</h2>
                    <img src="/img/campagne fase- lc.svg" class="fullwidth" />
                            <p>IJmond Bereikbaar heeft op 2 manieren het gebruik van het openbaar vervoer gestimuleerd. </p>
                            <p>Advies op maat over aanbieders van OV-mobiliteitskaarten voor werknemers die in z’n geheel overstappen van auto naar het OV. De reiskosten zijn voor rekening van de werkgever.</p>
                            <p>De IJmond Bereikbaar Shuttle en OV-fiets: een last-mile oplossing voor werknemers die al met het openbaar vervoer reizen, maar waar de ‘last mile’ van NS- of busstation naar het bedrijf te wensen over laat. Gebruik van de shuttle en OV-fiets is gratis. IJmond Bereikbaar vergoedt de kosten.</p>

                    <h2>Ambitie</h2>
                    <p>De ambitie van IJmond Bereikbaar was het uitrollen van 5 shuttlediensten (gemiddeld 50 gebruikers per shuttle per dag). Op plaatsen waar een shuttledienst niet haalbaar of logisch was, is de OV-fiets als achtervang aangeboden. </p>

                    <h2>Resultaten</h2>
                    <div class="row">
                        <div class="col-sm-9">
                            <p>Tussen 1 mei 2015 en 31 maart 2017 zijn 3 IJmond Bereikbaar shuttles operationeel geweest. Twee van station Beverwijk naar de bedrijventerrein de Pijp en Wijkermeer en één vanaf station Driehuis naar bedrijventerrein Broekerwerf in Velserbroek. Een vierde shuttledienst van station Heemskerk naar bedrijventerrein Houtwegen is onderzocht, maar naar aanleiding van het verwachte resultaat niet tot uitgerold. In totaal hebben ca. 65 medewerkers gebruik gemaakt van de shuttles. Per 1 mei 2017 is in overleg met de betrokken werkgevers het aanbieden van de shuttledienst gestopt.</p>

                            <p>Slechts een enkele medewerker heeft de OV-fiets aangevraagd als last-mile oplossing. Deze deelnemers zijn tot en met 31 maart 2017 gefaciliteerd.</p>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/IJB-shuttle.jpg" class="fullwidth" />
                        </div>
                    </div>

                    ',
                'category_id' => 4,
            ],
            [
                'title' => 'Succesfactoren ',
                'description' => '',
                'body' => '
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
                    <div class="row">
                        <div class="col-sm-9">
                            <ul>
                                <li>De aanschafprijs van een e-bike is voor veel mensen een drempel. Het helpt wanneer werkgevers actief een fietsenplan voeren en waar mogelijk de financiële vergoeding voor de e-bike ophogen. Werkgevers zijn zelf nog vaak onvoldoende op de hoogte van wat zij hun medewerkers kunnen bieden.</li>
                                <li>De overstap van autogebruik naar OV stimuleren kan alleen als de randvoorwaarden goed zijn.</li>
                                <li>Het afwaarderen van de Kennemerlijn (treinverbinding Haarlem-Alkmaar) zorgde voor een extra overstap en maakte de reistijd langer, waardoor werknemers voorkeur bleven houden voor de auto.</li>
                                <li>Waar de afsluiting van de Velsertunnel juist een stimulans was om over te stappen op de fiets, werkte dit nadelig voor het overstappen naar het openbaar vervoer. De bussen die normaal snel en betrouwbaar door de Velsertunnel reden, werden nu via de pont omgeleid met langere reistijd en extra overstappen tot gevolg.</li>
                                <li>Het aanbieden van goede ‘last mile’ oplossingen heeft alleen kans van slagen als de totale OV-keten (trein/bus) goed is.</li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/reisgedrag-aandachtspunten.gif" class="fullwidth" />
                        </div>
                    </div>
                    ',
                'category_id' => 4,
            ],
            [
                'title' => 'Belonen en loyaliteit',
                'description' => '',
                'body' => '
                    <h2>Fase 1: campagnefase</h2>
                    <img src="/img/campagne fase- lc.svg" class="fullwidth" />
                    <p>In de campagnefase ligt de nadruk op financiële beloning: besparen en verdienen. Voor de werknemers die mee doen, zijn de financiële prikkel en de sluiting Velsertunnel de hoofdargumenten om hun reisgedrag te veranderen.</p>
                    <h2>Beloningssysteem Fietsstimulering</h2>
                    <div class="row">
                        <div class="col-sm-9">
                            <ul>
                                <li>Werknemers worden uitgenodigd om mee te doen met het fietsstimuleringsprogramma.</li>
                                <li>Ambassadeurs krijgen een financiële startvergoeding van € 0,05 per gefietste en geregistreerde woon/werkkilometer. Zij kunnen dit bedrag verhogen door binnen het eigen bedrijf nieuwe fietsers aan te dragen. Per aangedragen en geregistreerde nieuwe fietser ontvangt de ambassadeur € 0,05 extra p/km, tot een maximum van € 0,15 p/km.</li>
                                <li>Nieuwe fietsers krijgen een financiële vergoeding van € 0,10 per gefietste en geregistreerde woon/werkkilometer in de IJmondzomer (april t/m oktober) en € 0,15 p/km in de IJmondwinter (november t/m maart).</li>
                                <li>Alle deelnemers krijgen een gratis abonnement op de pechhulp van FietsNed, een mobiele fietsenmakersdienst.</li>
                                <li>Vanaf september 2016 de start van een licht aanvullend loyaliteitsprogramma met maandelijkse uitdagingen om vaker te fietsen.</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p40-graph></p40-graph>
                            </div>
                            <div class="col-sm-6">
                                <p41-graph></p41-graph>
                            </div>
                            <div class="col-sm-6">
                                <p42-graph></p42-graph>
                            </div>
                            <div class="col-sm-6">
                                <p43-graph></p43-graph>
                            </div>
                            <div class="col-sm-6">
                                <p44-graph></p44-graph>
                            </div>
                            <div class="col-sm-6">
                                <p45-graph></p45-graph>
                            </div>
                        </div>
                    </div>


                    <h2>Fase 2: verankeringsfase</h2>
                    <img src="/img/verankering fase- lc.svg" class="fullwidth" />
                    <p>Nadruk op bewegen, saamhorigheid, het goede doen, volhouden. Voor de fietsers zijn de eigen gezondheid, het geluksgevoel en de goede invloed op het milieu de belangrijkste argumenten om te blijven fietsen.</p>

                    <div class="row">
                        <div class="col-sm-7">
                            <h2>Beloningssysteem fietsstimulering</h2>
                            <ul>
                                <li>Geen onderscheid meer tussen ambassadeurs en nieuwe fietsers. Alle deelnemers zijn vanaf fase 2 actieve fietsers.</li>
                                <li>Financiële vergoeding en gratis pechhulpservice per 1 april 2017 stopgezet</li>
                                <li>Intensivering loyaliteitsprogramma</li>
                                <li>Per 1 mei 2017 introductie <a href="/category/6/page/24">fietsapp Ring-Ring</a>. </li>
                                <li>In tweede helft 2017 introductie van maatwerk bedrijfschallenges. Tata Steel heeft met goed resultaat de eerste bedrijfschallenge voor haar rekening genomen</li>
                            </ul>
                        </div>
                        <div class="col-sm-5">
                            <img src="/img/REISGEDRAG - BELONING NIEUW-.svg" class="fullwidth" />
                        </div>
                    </div>


                    ',
                'category_id' => 5,
            ],
            [
                'title' => 'Maandelijkse challenges',
                'description' => '',
                'body' => '
                    <p>De maandelijkse challenges zijn gericht op het vasthouden van de gedragsverandering: (regelmatig) op de fiets naar het werk gaan.  Daarnaast zijn de challenges gebruikt om het registreren via de fietsapp te promoten. </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="/img/belonen_collage1.jpg" class="fullwidth">
                        </div>
                        <div class="col-sm-6">
                            <img src="/img/belonen_collage2.jpg" class="fullwidth">
                        </div>
                    </div>
                    <div class="row row--marginone">
                        <div class="col-sm-6">
                            <img src="/img/belonen_collage3.jpg" class="fullwidth">
                        </div>
                        <div class="col-sm-6">
                            <img src="/img/belonen_collage4.jpg" class="fullwidth">
                        </div>
                    </div>
                    ',
                'category_id' => 5,
            ],
            [
                'title' => 'Challenge op maat',
                'description' => '',
                'body' => '
                    <p>Een groep enthousiaste fietsers, een fietsapp, het vooruitzicht op een mooie prijs én een donatie aan een goed doel. Dat zijn de ingrediënten van een goed geslaagde challenge op maat bij Tata Steel. Tata Steel en IJmond Bereikbaar daagden de werknemers uit om in de maand oktober minimaal 5x op de fiets naar het werk te komen. En dat is de meeste deelnemers gelukt. Maar liefst 20 afdelingen hadden teams gevormd die tegen elkaar streden.</p>
                    <img src="/img/belonen-challenge.gif" class="fulllwidth" />
                     

                    <h2>Motivatie Tata Steel</h2>
                    <p>Gezondheid is belangrijk en waardevol. Tata Steel weet dat en verzorgt intern een breed gedragen vitaliteitsprogramma. Daarnaast doen ruim 1.200 medewerkers van Tata Steel mee met het fietsstimuleringsprogramma van IJmond Bereikbaar. Een fietschallenge, waarbij collega’s onderling uitgedaagd worden om vaak/vaker op de fiets naar het werk te komen past goed binnen de filosofie van Tata Steel om mensen te enthousiasmeren en in beweging te houden.</p> 

                    <h2>Gezamenlijke inspanning</h2>
                    <p>De fietschallenge op maat is een gezamenlijke inspanning van het bedrijf en IJmond Bereikbaar. Het bedrijf zorgt voor de juiste ingang, voldoende potentieel, brede interne communicatie, een aantrekkelijk prijzenpakket en een geldbedrag voor een goed doel. IJmond Bereikbaar biedt waar nodig en gewenst ondersteuning in het proces en de communicatie. </p>
                    <img src="/img/werknemers-succesfactoren.gif" />

                    ',
                'category_id' => 5,
            ],
            [
                'title' => 'Succesfactoren',
                'description' => '',
                'body' => '
                    <img src="/img/belonen en loyaliteit - succesfactoren v2.svg" class="fourty_wide" />
                    <ul>
                        <li>Starten met een harde financiële beloning zorgt voor volume bij het aantal deelnemers</li>
                        <li>Extra stimulans in periode dat het minder aantrekkelijk is om op de fiets naar het werk te gaan: verhoging van vergoeding naar € 0,15 in de wintermaanden.</li>
                        <li>Beloning gebaseerd op service (pechhulp FietsNed) geeft gevoel van ‘ontzorgen’</li>
                        <li>Tweede pont in de spits heeft drempel om over te stappen voor veel nieuwe fietsers verlaagd</li>
                        <li>Directe aanleiding om gedrag te willen veranderen: verkeersproblemen door sluiting Velsertunnel</li>
                        <li>Geleidelijke overgang van extrinsieke naar intrinsieke motivatie begeleiden middels challenges en communicatieboodschappen.</li>
                        <li>Uit de ritregistraties en enquêtes blijkt dat na 6-12 maanden harde beloning niet meer nodig is. De intrinsieke motivatie zorgt voor een blijvende gedragsverandering.</li>
                        <li>Reguliere challenges zijn een aantrekkelijk en direct communicatiemoment met de fietscommunity en de werkgevers. Deelnemers waarderen het dat zij op deze manier gestimuleerd worden. Naar mate de intrinsieke motivatie sterker wordt, ziet men de challenges meer als positieve aandacht dan als aanjager. </li>
                        <li>Challenges op maat zorgen voor nieuw draagvlak en nieuwe fietsers</li>
                        <li>Challenges op maat kunnen snel en tegen relatief weinig kosten in praktijk worden gebracht.</li>

                    </ul>
                    ',
                'category_id' => 5,
            ],
            [
                'title' => 'Aandachtspunten',
                'description' => '',
                'body' => '
                    <ul>
                        <li>Het onderscheid in de financiële beloning voor ambassadeurs en nieuwe fietsers zorgde voor onbegrip en veel extra administratie voor de backoffice.</li>
                        <li>Iedere maand een generieke challenge is te arbeidsintensief voor zowel IJmond Bereikbaar als de werkgevers en levert niet het gewenste effect op. 4x per jaar met mogelijk het benutten van een speciale gelegenheid is voldoende om de aandacht van de deelnemers vast te houden.</li>

                    </ul>
                    ',
                'category_id' => 5,
            ],
            [
                'title' => 'Online fietsritregistratieformulier',
                'description' => '',
                'body' => '
                    <p>Van 1 mei 2015 t/m 31 maart 2017 heeft IJmond Bereikbaar een vergoeding voor gefietste woon/werkkilometers verstrekt aan de deelnemers van het fietsstimuleringsprogramma. Om in aanmerking te komen voor deze vergoeding waren zij verplicht om hun fietsritten maandelijks te registreren. </p>

                    <img src="/img/fietsregistratie-zo-werkt-het.gif" class="fullwidth" />

                    <p>Met het beëindigen van de fietskilometervergoeding per 1 april 2017 is het registreren van de ritten niet langer verplicht. Aan het verzoek om deze informatie wel te blijven verstrekken voor o.a. monitorings- en rapportagedoeleinden, heeft ca. 60% van de fietsers gehoor gegeven.</p>
                    ',
                'category_id' => 6,
            ],
            [
                'title' => 'Fietsapp Ring-Ring',
                'description' => '',
                'body' => '
                    <img src="/img/ring-ringlogo.jpg" class="fourty_wide center" id="ringring"/>
                    <p>In mei 2017 heeft IJmond Bereikbaar als onderdeel van het loyaliteitsprogramma de fietsapp van Ring-Ring bij de werkgevers en werknemers geïntroduceerd. Ring-Ring timmert al een aantal jaar aan de weg. De app wordt door verschillende instanties op lokaal en regionaal niveau ingezet om fietsen te stimuleren.</p>

                    <strong>Informatie over fietsgedrag direct zichtbaar in de app</strong>
                    <div class="row">
                        <div class="col-sm-9">
                            <ul>
                                <li>Waar, hoe ver en hoe vaak je fietst</li>
                                <li>Hoeveel calorieën je verbrandt</li>
                                <li>Hoeveel CO2 uitstoot je bespaart</li>
                                <li>Hoe je presteert t.o.v. de andere fietsers van IJmond Bereikbaar</li>
                            </ul>
                            <p>Hoort een werkgever tot de kopgroep van IJmond Bereikbaar, dan wordt een specifieke bedrijfsgroep aangemaakt. Zo zien medewerkers hoe ze presteren t.o.v. hun collega’s.</p>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/Ring-Ring-screenshot.png" class="fullwidth" />
                        </div>
                    </div>  
                     <br><br>


                    <strong>Korting</strong>
                    <div class="row">
                        <div class="col-sm-9">
                            <p>Iedere fietskilometer is een punt waard. Deze punten geven je korting bij aangesloten bedrijven en winkeliers. In de IJmond hebben 10 winkeliers een actie in de fietsapp geplaatst. </p>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/Fietsapp_kortingsacties.png" class="fullwidth"/>
                        </div>
                    </div>
                     
                    <p><strong>Fietsen voor het goede doel</strong></p>
                    <p>IJmond Bereikbaar koppelt fietskilometers aan een goed doel dat een relatie heeft met de regio. Zodra de fietskilometers door de gebruikers van de app bij elkaar zijn gefietst, doneert IJmond Bereikbaar namens hen € 1.000 aan het goede doel.</p>

                    <p>IJmond Bereikbaar heeft cheques uitgereikt aan de Dierenambulance Kennemerland, de KNRM in IJmuiden en de Stichting Vrienden van het Rode Kruis Ziekenhuis. </p>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="/img/Goede doel Vrienden van het RKZ_cheque.jpg" class="fullwidth" />
                        </div>
                        <div class="col-sm-6">
                            <img src="/img/Goede doel KNRM juli 2017_cheque.jpg" class="fullwidth" />
                        </div>
                    </div>

                    <br> <br> 
                    
                    <p><strong>Gebruikers fietsapp Ring-Ring</strong></p>
                    <p>Ambitie van IJmond Bereikbaar: eind 2017 zijn 75% van de fietsers actief gebruiker van de app. Het resultaat is blijven steken op slechts 11%.</p>  
                    <p>Mogelijke verklaringen hiervoor zijn:</p>
                    <ul>
                        <li>Het ontbreken van een noodzaak om de fietsapp te gebruiken, zoals bijvoorbeeld registratie vs. vergoeding.</li>
                        <li>Er zijn veel bekende en bewezen goed werkende apps (bijv. Strava) in de markt die fietsinformatie geven. Deelnemers vinden het niet prettig om een tweede vergelijkbare app te gebruiken.</li>
                        <li>De fietsapp Ring-Ring heeft even tijd nodig om het fietsgedrag van de gebruiker te analyseren en past de registratie daar op aan. Dat vraagt om wat geduld van de gebruiker.</li>
                        <li>De fietsapp Ring-Ring werkt niet op Windows Phones. De bedrijfstelefoon van Tata Steel, grootleverancier van fietsers in het IJmond Bereikbaar programma, is de Windows Phone.</li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-8">
                            <p04-graph></p04-graph>
                        </div>
                        <div class="col-sm-4">
                            <p27-graph></p27-graph>
                        </div>
                    </div>
                    ',
                'category_id' => 6,
            ],
            [
                'title' => 'Succesfactoren',
                'description' => '',
                'body' => '
                    <img src="/img/fietsregistratie-succesfactoren.gif" class="fullwidth" />
                    ',
                'category_id' => 6,
            ],
            [
                'title' => 'Aandachtspunten',
                'description' => '',
                'body' => '
                    <img src="/img/fietsritregistratie_aandachtspunten.svg" class="center"/>
                    <ul>
                        <li>Introductie van een fietsapp werkt beter in combinatie met een harde beloning. </li>
                        <li>Fietsers hebben hoge verwachtingen van de technische kwaliteit van een fietsapp. Ze zijn vaak al gewend aan grote spelers op de markt zoals Strava en meten daar het niveau van andere apps aan af.</li>
                        <li>Waar privacy-gevoeligheid bij de online ritregistratie nauwelijks een rol speelt voor de deelnemers, is dit bij het al dan niet willen aanmelden voor de app wel een punt. </li>

                    </ul>
                    ',
                'category_id' => 6,
            ],
            [
                'title' => 'Communicatiepieken',
                'description' => '',
                'body' => '
                    <img src="/img/communicatiepieken.svg" class="fullwidth" />
                    ',
                'category_id' => 7,
            ],
            [
                'title' => 'Communicatiemiddelen per doelgroep',
                'description' => '',
                'body' => '
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/img/communicatie_werkgevers.svg" class="fullwidth" />
                        </div>
                        <div class="col-sm-9">
                            <p>Werkgevers</p>
                            <ul>
                                <li>Persoonlijke intake met mobiliteitsmakelaar en waar nodig vervolgafspraken</li>
                                <li>Website: aanmelden en informatie </li>
                                <li>Informatiepakket</li>
                                <li>Menukaart waarin de concrete afspraken worden vastgelegd</li>
                                <li>Kwartaalnieuwsbrief: laatste nieuws over het programma en inzicht in het (fiets)gedrag van medewerkers die mee doen met de campagne ‘Goed op weg’.</li>
                                <li>Maandelijks digitale bestanden (beeldmateriaal en tekst) voor gerichte wervingsacties en challenges</li>
                                <li>Kennistafels</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/img/communicatie_werknemers.svg" class="fullwidth" />
                        </div>
                        <div class="col-sm-9">
                            <p>Werknemers</p>
                            <ul>
                                <li>Personeelsbijeenkomsten bij de werkgever om de campagne ‘Goed op weg’ toe te lichten</li>
                                <li>Website: aanmelden en informatie</li>
                                <li>Ieder kwartaal persoonlijke mail over uitbetaling, verbrande calorieën en bespaard CO2CO2</li>
                                <li>Actiegerichte digitale mailings, waaronder de maandelijkse challenges</li>
                                <li>Ludieke acties per post: bijv. de zomergroet met IJmond Bereikbaar strandbal</li>
                                <li>Helpdesk IJmond Bereikbaar</li>
                            </ul>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/img/communicatie_bestuurders.svg" class="fullwidth" />
                        </div>
                        <div class="col-sm-9">
                            <p>Bestuurders</p>
                            <ul>
                                <li>Digitale kwartaalnieuwsbrief: laatste nieuws over het programma</li>
                                <li>Overlegstructuur met het stichtingsbestuur, de Stuurgroep wegbeheerders en het Platform IJmond Bereikbaar</li>
                            </ul>
                        </div>
                    </div>
                    ',
                'category_id' => 7,
            ],
            [
                'title' => 'Media',
                'description' => '',
                'body' => '
                    <h2>Social Media</h2>
                    <strong>Facebook</strong>
                    <p>De Facebookpagina van IJmond Bereikbaar telt meer dan 600 volgers. IJmond Bereikbaar gebruikt de pagina voor informatieve en ludieke posts over activiteiten van IJmond Bereikbaar of vervoersgerelateerde onderwerpen in het algemeen. Ook afwijkingen in de dienstregeling van de pont worden zo snel mogelijk via Facebook bekend gemaakt. Het is een bewuste keuze geweest om alleen gebruik te maken van organisch (niet-betaald) gegenereerd bereik.</p>

                    <strong>LinkedIn: </strong>
                    <p>Voor zakelijk ingestoken posts over het programma van IJmond Bereikbaar gebruikt IJmond Bereikbaar de persoonlijke LinkedIn-pagina’s van met name de programmamanager en communicatieadviseur. Informatie wordt zo gericht binnen het eigen netwerk verspreid.</p>

                    <h2>Communicatiecampagne samen met Rijkswaterstaat</h2>
                    <strong>Reis bewust</strong>
                    <p>In de periode januari 2016 – februari 2017 zijn IJmond Bereikbaar en Rijkswaterstaat ook op communicatiegebied samen opgetrokken. De gezamenlijke boodschap: De sluiting van de Velsertunnel brengt verkeershinder met zich mee. Check daarom altijd je reistijd en route voor vertrek en pas je plannen daarop aan. En mijd de spits. Daar help je jezelf én anderen mee. </p>
                    <p>Berichtgeving over afsluitingen en omleidingen voorafgaand en tijdens de sluiting van de Velsertunnel vond zowel via online als offline communicatiekanalen plaats.</p>

                    <img src="/img/felicitatie.jpg" class="fullwidth margin--vertical" />

                    <strong>Goed op weg</strong>
                    <p>IJmond Bereikbaar sloot op de gezamenlijke boodschap aan door het communiceren van de campagne ‘IJmond Bereikbaar – Goed op weg’. Naast advertenties in de regionale en lokale kranten, is het stimuleringsprogrammaa ook met een  abricampagne en mottoborden in de IJmondgemeenten onder de aandacht gebracht. Bewoners van de IJmond werden zo geactiveerd om na te denken over alternatief vervoer: Laat als het kan de auto staan, en gebruik de fiets of het openbaar vervoer.</p>

                    <strong>www.ijmondverkeer.nl</strong>
                    <p>Een ander gezamenlijk initiatief is de website IJmondverkeer.nl. De website was bedoeld als service aan weggebruikers vanwege de duur van de tunnelsluiting en de verwachte hinder. De site hielp mensen de verkeersdrukte te omzeilen en bewuster te reizen. Bijvoorbeeld door eerder of later te vertrekken, een keertje thuis te werken, of te kiezen voor de fiets of het openbaar vervoer. De site, die getoond werd op de website van IJmond Bereikbaar liet veelgebruikte routes in de IJmond zien met realtime informatie over de vertragingen of files. Ook was in één oogopslag duidelijk welke alternatieve routes er waren, zodat mensen hun reis om de drukte heen konden plannen. Vanaf het moment dat de Velsertunnel werd afgesloten, werd de kaart automatisch aangepast met alle (tijdelijke) nieuwe routes. </p>

                    <p>Voor bedrijven was er een speciale variant van de website, waarop de specifieke aanrijroute in de IJmond naar de eigen organisatie werd getoond. Geïnteresseerde bedrijven konden zich aanmelden via de website van IJmond Bereikbaar. Het inregelen gebeurde kosteloos door Rijkswaterstaat. Meer dan 150 bedrijven, waaronder Tata Steel, het Rode Kruis en verschillende transportbedrijven hebben hier gebruik van gemaakt.  Zo kregen hun medewerkers, klanten, bezoekers en leveranciers verkeersinformatie die was toegespitst op de actuele bereikbaarheid van het bedrijf. </p>


                    ',
                'category_id' => 7,
            ],
            [
                'title' => 'Sponsoring Velsertunnelrun',
                'description' => '',
                'body' => '
                    <p>IJmond Bereikbaar was de trotse sponsorpartner van de Velsertunnelrun. Rijkswaterstaat stelde  hardloopliefhebbers in de IJmond op 27 november 2016 in de gelegenheid  om door de gerenoveerde Velsertunnel te rennen. Het evenement is georganiseerd door Sportsupport Haarlem. De animo was enorm. Binnen 24 uur waren de 6.000 startbewijzen voor de run uitverkocht. De Velsertunnelrun was 7,68 km, refererend aan de lengte van de tunnel: 768 meter, met als startpunt het Telstar-stadion in Velsen en als eindpunt de Breestraat in Beverwijk. IJmond Bereikbaar was onder meer zichtbaar aanwezig met 8 meter lange spandoeken in het Telstar Stadion, een eigen hardloopteam en met milieuvriendelijke krijtadvertenties op het parcours. </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="/img/velsertunnel_smiley.jpg" class="fullwidth" />
                        </div>
                        <div class="col-sm-6">
                            <img src="/img/velsertunnel_veelplezier.jpg" class="fullwidth" />
                        </div>
                    </div>
                    ',
                'category_id' => 7,
            ],
            [
                'title' => 'Pers',
                'description' => '',
                'body' => '
                    <p>Het programma van IJmond Bereikbaar ontvangt veel aandacht van de regionale, lokale en vakpers Er is veelvuldig positief gecommuniceerd over de activiteiten en resultaten van de campagne.</p>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="/img/pers_spitspont.jpg" class="fullwidth" />
                        </div>
                        <div class="col-sm-6">
                            <img src="/img/pers_fietssnelweg.jpg" class="fullwidth" />
                        </div>
                    </div>

                    <p>Dagblad Kennemerland, IJmuider Courant, Nieuwsblad de Kennemer, Nieuwsblad IJmuiden, De Beverwijker, De Jutter, Heemskerker Courant, De Kanaalgaver, De IJmondiaan,  Radio Beverwijk, TV251 Heemskerk, RTV Seaport, TV-NH, nieuwsbrieven Rijkswaterstaat en Beter Benutten en meer…</p>
                    ',
                'category_id' => 7,
            ],
            [
                'title' => 'Overige activiteiten',
                'description' => '',
                'body' => '
                    <div class="row">
                        <div class="col-sm-9">
                            <p>IJmond Bereikbaar geeft ieder jaar aandacht aan de Nationale Fietstelweek van de Fietsersbond en de Nationale Fiets naar je werk Dag. Ijmond Bereikbaar is veelvuldig in andere regio’s uitgenodigd om haar aanpak te presenteren. </p>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/opdefietsvandaag.jpg" class="fullwidth" />
                        </div>
                    </div>
                    ',
                'category_id' => 7,
            ],
            [
                'title' => 'Uitvoeringsprogramma 2018-2021',
                'description' => '',
                'body' => '
                    <p>Met vier programmalijnen en ongeveer 20 deelmaatregelen zet IJmond Bereikbaar met haar partners in op een slagvaardig, adaptief uitvoeringsprogramma.</p>
                    <img src="/img/thema-8-vier-programmalijnen.gif" class="fullwidth" />
                    <img src="/img/thema-8-programma.gif" class="fullwidth" />
                    ',
                'category_id' => 8,
            ]
        ];

        DB::table('pages')->insert($pages);
    }
}
