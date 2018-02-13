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
                            <li>Kilometervergoeding voor gefietste woon/werkkilometers</li>
                            <li>Loyaliteitsprogramma ‘Blijf op weg’ met maandelijkse challenges</li>
                            <li>Fietsapp Ring-Ring met fietsinfo, korting bij lokale winkeliers en fietsen voor een goed doel</li>
                            <li>E-bike probeeracties bij bedrijven</li>
                            <li>Doorlichten abonnementen openbaar vervoer</li>
                            <li>Last-mile oplossingen met shuttlebussen en OV-fiets</li>

                        </ul>

                        <p>Lees meer over onze <a href="/category/2">werkgeversaanpak</a> en de acties die gedaan zijn om <a href="/category/3">werknemers</a> over de streep te trekken en vast te houden. </p>

                        <h2>Resultaten ontwikkeling fietsdeelnemers</h2>
                        <p>De grafiek hieronder laat per fase de ontwikkeling van het aantal fietsdeelnemers van 2014 t/m 2017 zien.</p>

                        <p16-graph></p16-graph>
                        <p>Toelichting op de grafiek:</p>

                        <strong>Pilotfase: eind 2014 – 1 mei 2015</strong>
                        <p>Startgroep van circa 50 fietsers</p>

                        <strong>Campagnefase: 1 mei 2015 – 1 april 2017</strong>
                        <p> Meer werknemers sluiten zich aan en het aantal fietsers stijgt. Veel aanmeldingen tijdens de renovatie en bijbehorende afsluiting van de Velsertunnel. Het aantal ambassadeurs dat zich wil aanmelden overstijgt alle verwachtingen en wordt ‘on hold’ gezet. In september 2016 is de database opgeschoond. Niet-actieve fietsers zijn uitgeschreven. </p>

                        <strong>Verankeringsfase: 1 april – 31 december 2017</strong>
                        <p>Het aantal actieve fietsers blijft stabiel. De fietschallenge op maat bij Tata Steel levert in oktober 2017 nieuwe aanmeldingen op.</p>
                    
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
                                <p>De doelstelling voor spitsmijdingen in de IJmond is voor 85% gehaald. Een groot aantal werknemers die in de spits naar hun werk reizen heeft de <a href="/category/4">overstap van de auto naar de fiets</a> gemaakt. In de IJmond werkt ten opzichte van andere regio’s echter een onevenredig groot aantal mensen in ploegendienst en/of parttime. Ook zij hebben de overstap van de auto naar de fiets gemaakt, maar tellen niet mee als spitsmijding zoals bedoeld door Beter Benutten.</p>
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

                    <p23-graph></p23-graph>
                    <p class="chart--subtext">Van september 2015 t/m september 2016 is een extra spitspont ingezet.  In september 2016 is de Velsertunnel gesloten. Met spitspont houdt in dat er gedurende de spits iedere 10 minuten een afvaart is. Zonder spitspont is er iedere 20 minuten een afvaart. </p>

                    <p>Het hoogtepunt van het aantal (brom)fietsers dat gebruik maakt van de pont ligt uiteraard in september 2016: door de tweede pont in de spits iedere 10 minuten een afvaart én de Velsertunnel afgesloten door de renovatie. We zien dan een toename van 40%. Structureel zorgt de tweede spitspont voor 15% extra (brom)fietsers die gebruik maken van ‘het blauwe fietspad’.</p>

                    <p>Voor en na de afsluiting van de Velsertunnel hebben de IJmondgemeenten een aantal fietspaden verbeterd, om met name de bereikbaarheid van een aantal bedrijventerreinen te verbeteren. Tijdens de afsluiting van de Velsertunnel hebben gemeenten zo min mogelijk wegwerkzaamheden uitgevoerd, om zodoende geen hinder te veroorzaken. </p>

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

                    <strong>Pilotfase</strong>
                    <p>In de pilotfase is vanuit het nationaal samenwerkingsprogramma luchtkwaliteit met 10 bedrijven gestart. Deze bedrijven hebben actief fietsdeelnemers geworven onder hun werknemers en de eerste shuttlelijn uitgetest tussen Beverwijk CS en bedrijventerrein Wijkermeer. </p>

                    <strong>Campagnefase</strong>
                    <p>Met indirecte werving via de werkgeversnetwerken in de IJmond en een actieve campagne over de bereikbaarheid van de regio tijdens <a href="/category/7#campagnerijkswaterstaat">de renovatie van de Velsertunnel</a> hebben ruim 150 werkgevers zich aangemeld als deelnemer aan het programma van IJmond Bereikbaar. Deelname was zeer laagdrempelig. Het bedrijfsleven werd volledig ontzorgd. Naast <a href="/category/4">fietsstimulering zijn op drie routes IJmond Bereikbaar shuttles ingezet</a>.</p>

                    <strong>Verankeringsfase</strong>
                    <p>Na 1 april 2017 zijn alle werkgevers gevraagd of zij bij de kopgroep of het peloton willen aansluiten. De kopgroep voert een actief fietsstimuleringsbeleid en wordt daarbij door IJmond Bereikbaar ondersteund. Inmiddels vormen 40 bedrijven de kopgroep. Met hen zijn voor 2017 afspraken gemaakt over de inzet van harde maatregelen (vergoeding werkgever) en zachte maatregelen (e-bike probeeractie, bedrijfschallenge op maat en meer). De stimulering voor het overstappen naar het openbaar vervoer en het aanbieden van de gratis shuttlediensten is in overleg met de werkgevers gestopt. </p>
                      
                    <p><a href="/kopgroep">Hier vindt u meer informatie over de resultaten van de kopgroep.</a></p>


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
                        <li>De campagnefase van het programma was zeer sterk aanbod gestuurd door IJmond Bereikbaar. Dit maakte deelname enerzijds aantrekkelijk en laagdrempelig. Anderzijds kostte het daardoor in de verankeringsfase meer tijd om het initiatief aan de werkgevers over te dragen.</li>
                        <li>De aandacht van ondernemers gaat logischerwijs vooral naar hun primaire bedrijfsvoering. De nasleep van de economische crisis heeft deze houding nog versterkt. De thema’s bereikbaarheid en luchtkwaliteit kregen daardoor minder prioriteit.</li>
                        <li>Het overnemen van fietsregelingen duurt soms langer dan gewenst door bijvoorbeeld langlopende CAO-afspraken.</li>
                        <li>De nieuwe regelgeving of subsidiemogelijkheden voor fietsstimulering, zoals bijv. het Nieuwe Fietsenplan zijn vaak onvoldoende bekend.</li>
                        <li>Werkgevers benutten niet alle mogelijkheden en zouden de promotie van regelingen bij hun werknemers kunnen verbeteren.</li>


                    </ul>
                    ',
                'category_id' => 2,
            ],
            [
                'title' => 'Enquête werkgevers - winter 2016',
                'description' => '',
                'body' => '
                    <div class="row">
                        <div class="col-sm-10">
                            <p><strong>Renovatie Velsertunnel in volle gang</strong></p>
                            <p>Het doel van de enquête was om inzicht te verkrijgen in wat de campagne ‘Goed op weg’ het bedrijfsleven in de IJmond heeft opgeleverd. Daarnaast waren we benieuwd welke thema’s op het gebied van mobiliteit en bereikbaarheid bij organisaties actueel zijn.  </p>
                            <p>Dit zijn enkele resultaten uit de enquête: </p>
                        </div>
                        <div class="col-sm-2">
                            <img src="/img/enquite-onder-werkgevers.gif" class="fullwidth" />
                        </div>
                    </div>
                     
                    <p><strong>Wat heeft deelname aan IJmond Bereikbaar uw bedrijf tot nu toe opgeleverd?</strong></p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    63%
                                </td>
                                <td>
                                    Als werkgever ben ik meer bewust bezig hoe ik mijn werknemers kan stimuleren om minder gebruik te maken van de auto voor het woon/werkverkeer
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    56%
                                </td>
                                <td>
                                    Als werkgever ben ik goed/beter geïnformeerd over de verkeersmaatregelen rondom de renovatie van de Velsertunnel
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    34%         
                                </td>
                                <td>
                                    Als werkgever ben ik meer bewust bezig met hoe ik kan bijdragen aan de bereikbaarheid van de regio
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    56%     
                                </td>
                                <td>
                                    Als werkgever heb ik op een makkelijke en prettige manier mijn werkgevers iets extra’s kunnen geven (km vergoeding, e-bike proberen)
                                </td>
                            </tr>
                        </tbody>
                    </table>      

                    <p><strong>Welke onderwerpen zijn, gerelateerd aan bereikbaarheid en mobiliteit, actueel bij uw organisatie?</strong></p>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    56%         
                                </td>
                                <td>
                                    Vitaliteit/duurzame inzetbaarheid van werknemers 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    53%         
                                </td>
                                <td>
                                    Bereikbaarheid van het bedrijf/bedrijventerrein 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    25%         
                                </td>
                                <td>
                                    Bereikbaarheid van de regio 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22%         
                                </td>
                                <td>
                                    Luchtkwaliteit van de regio 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    16%         
                                </td>
                                <td>
                                    Het nieuwe werken (in relatie tot spitsmijden) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p><strong>Op welke thema’s zou  IJmond Bereikbaar voor u ook in 2017 van toegevoegde waarde zijn?</strong></p>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    75%     
                                </td>
                                <td>
                                    Voortzetting van het huidige programma inclusief fietsstimuleringscampagne
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    63%         
                                </td>
                                <td>
                                    Samen met de gemeenten blijven zorgdragen voor goede infrastructuur op de fiets
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    34%     
                                </td>
                                <td>
                                    Communicatieve ondersteuning fietsstimulering
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    31%         
                                </td>
                                <td>
                                    Een platform blijven bieden voor de registratie van fietskilometers
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    25%     
                                </td>
                                <td>
                                    Aanspreekpunt/ondersteuning subsidiemogelijkheden op het gebied van spitsmijden
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    19%     
                                </td>
                                <td>
                                    Kennisinstituut m.b.t. mobiliteit en bereikbaarheid (mobiliteitsvisie IJmond)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    9%      
                                </td>
                                <td>
                                    Uitbreiding van het aantal thema’s met bijv. goederenvervoer en bereikbaarheid bedrijventerreinen
                                </td>
                            </tr>
                        </tbody>
                    </table>
                            
                    <p>88% van de bedrijven wil aandacht blijven geven aan het motiveren en stimuleren van de fietsende werknemers, maar weet nog niet hoe. Sommige bedrijven hebben aangegeven te stoppen met het programma, omdat de Velsertunnel weer open is. Zij vinden bereikbaarheid dan geen issue meer. Een enkel bedrijf trekt de conclusie dat er te weinig animo is bij de werknemers om de auto te laten staan voor het woon/werkverkeer.</p>

                    ',
                'category_id' => 2,
            ],
            [
                'title' => 'Pilotfase: eind 2014 – 1 mei 2015',
                'description' => '',
                'body' => '
                    <p>Met 10 bedrijven is eind 2014 gestart met fietsstimulering. 50 werknemers van deze bedrijven melden zich spontaan aan voor het fietsprogramma. Bestaande fietsers (ambassadeurs) zorgen ervoor dat ook niet-fietsers meedoen aan de pilot. Ook rijdt de eerste IJmond Bereikbaar shuttle.</p>
                    ',
                'category_id' => 3,
            ],
            [
                'title' => 'Campagnefase: 1 mei 2015 – 1 april 2017',
                'description' => '',
                'body' => '
                    <h2>Nieuwe fietsers en ambassadeurs </h2>
                    <img src="/img/mobiliteit_luchtkwaliteit_v2.svg" class="sixty_wide"/>
                    <p>Met de aankondiging in 2015 van de sluiting van de Velsertunnel komt het programma in een stroomversnelling. Werkgevers en hun werknemers zich spontaan aan voor het programma IJmond Bereikbaar. Tussen juni en september 2015 groeit het aantal werkgevers naar 30 en daarmee het aantal werknemers naar 500. </p>
                    <p17-graph></p17-graph>
                    <p>Medewerkers melden zich in de periode sept 2015-april 2016 massaal aan voor het fietsstimuleringsprogramma. De communicatie <a href="/category/7">van Rijkswaterstaat en IJmond Bereikbaar</a> over de sluiting van de Velsertunnel, de makkelijke aanmeldingsprocedure en de vergoeding voor fietskilometers zijn succesfactoren. Opmerkelijk is dat het aantal deelnemers ook blijft toenemen tijdens de afsluiting van de Velsertunnel. In deze periode is het aantal aanmeldingen in deze groep opgelopen tot 800. De ambitie was 500 aanmeldingen. Door deze snelle groei is een stop in het aantal ambassadeurs noodzakelijk. Nieuwe fietsers kunnen nog wel aanmelden.</p>

                    <p>Het aantal overstappers naar openbaar vervoer blijft beperkt tot circa 50 deelnemers. Ondanks het gratis beschikbaar stellen van shuttles en OV-fiets slaat dit aanbod slechts bij een beperkt deel van de autoforensen aan.</p>

                    
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
                'title' => 'Verankeringsfase',
                'description' => '',
                'body' => '
                    <p>Medio januari 2017 gaat de Velsertunnel weer open. IJmond Bereikbaar betaalt nog tot 31 maart een kilometervergoeding aan haar fietsers en start daarnaast met een afwisselend <a href="/category/5">loyaliteitsprogramma</a>. Ook wordt in april 2017 de <a href="/category/6/page/26">fietsapp van Ring-Ring</a> geïntroduceerd. Uit enquêteresultaten blijkt dat in 6 tot 9 maanden extrinsieke motivatie omgevormd kan worden naar intrinsieke motivatie. Ook zonder kilometervergoeding blijft 95% van de deelnemers fietsen. Het aantal actieve fietsdeelnemers blijft in deze fase stabiel op 2600. </p>

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
                    <h2>Pilotfase: eind 2014 – 1 mei 2015</h2>
                    <p>In de pilotfase wordt gepeild bij werknemers van 10 bedrijven of een financiële prikkel helpt om reisgedrag te veranderen. Het resultaat is een enthousiaste groep van 50 fietsers. </p>

                    <h2>Campagnefase: 1 mei 2015 - 1 april 2017</h2>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/img/reisgedrag_affichelisette.jpg" class="fullwidth"  />
                        </div>
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
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-3">
                            <a href="/img/reisgedrag_fietstijden.jpg" >
                                <img src="/img/reisgedrag_fietstijden.jpg" class="fullwidth" />
                            </a>
                        </div>
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
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/img/reisgedrag_frisfietsen.jpg" class="fullwidth " />
                        </div>
                        <div class="col-sm-9">
                            <strong>Ook in 2017 fris op je werk? Natuurlijk op de fiets </strong>
                            <ul>
                                <li>Het is goed voor je. Fietsen maakt fysiek fit en geeft ruimte in je hoofd.</li>
                                <li>Het is goed voor het milieu. Jij vermindert de uitstoot van CO2 door te fietsen én een betere doorstroming van het overige verkeer doet daar een schepje bovenop. </li>
                            </ul>
                        </div>
                    </div>

                    <strong>Introductie E-bike</strong>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/img/Probeer een ebike_beeld.jpg" class="fullwidth" />
                        </div>
                        <div class="col-sm-9">
                            <p>Om de actieradius van fietsers te vergroten, wordt de fietsstimuleringscampagne uitgebreid met de e-bike. De e-bike is, algemeen genomen, een geschikt alternatief voor de auto voor woon/werkafstanden tot 20 km. IJmond Bereikbaar biedt een probeer-actie aan via geïnteresseerde werkgevers. Alle medewerkers mogen de e-bike gratis uitproberen voor zowel woon/werkverkeer, als privégebruik. Hierna volgt een aanbod voor lease of koop van een nieuwe of gebruikte e-bike. We werken hiervoor samen met sQoot, die een divers aanbod heeft en de werkgevers ontzorgt.</p>
                        </div>
                    </div>
                    <p>18 bedrijven uit de kopgroep hebben gebruik gemaakt van de e-bike probeeractie van IJmond Bereikbaar. Tata Steel en Etos namen op dit thema zelf initiatief en boden hun medewerkers een e-bike-probeeractie aan via een andere leverancier. Werkgevers dragen zowel met harde als zachte maatregelen bij aan het stimuleren van de fiets als vervoersmiddel voor het woon/werkverkeer. Lees meer in de benchmark.</p>


                    <br>

                    <strong>Resultaat</strong>
                    <p>In de campagnefase groeit het aantal deelnemers snel : 800 ambassadeurs en 1800 nieuwe fietsers. Uit de fietsritregistraties (interne link maken) blijkt dat begin 2017 het reisgedrag van werknemers structureel is veranderd.  Het aantal autokilometers van de deelnemers ligt gemiddeld maandelijks 400.000 km lager dan bij de start van het programma.</p>
                    <p>Uit de enquêteresultaten blijkt dat, naast het financiële argument, gezondheid een belangrijke motivator is om te fietsen. In de loop van de tijd verschuift de campagneboodschap dan ook naar de intrinsieke motivatie.</p>     
                    <p>Blijft u fietsen na 31 maart 2017 als de campagne en daarmee ook de kilometervergoeding stopt? 96% zegt ja! Redenen om te blijven fietsen: gezondheid/conditie – goed voor het milieu – bereikbaarheid (sneller dan met de auto)</p>
                    <p>Motieven : gezondheid 82%, milieu 50% , km-vergoeding 46%</p>


                    <h2>Verankeringsfase: 1 april 2017 - 31 december 2017</h2>
                    <p>De verankeringsfase wordt gebruikt om de overstap te maken van harde naar zachte vormen van belonen.  De focus ligt nog steeds op fietsstimulering en e-bike gebruik.  Door de inzet van de <a href="/category/6/page/26">fietsapp Ring-Ring</a>, specifieke <a href="/category/5/page/21">fietschallenges</a> en een spaarpuntensysteem wordt de basis gelegd om het ontwikkelde fietsgedrag vast te houden.</p>

                    <strong>Resultaat</strong>
                    <p>Het aantal IJmond Bereikbaar fietsers en fietskilometers groeit gestaag. Om goed zicht te houden op het aantal actieve fietsers wordt het deelnemersbestand ieder kwartaal opgeschoond. Deelnemers die drie maanden geen kilometers registreren worden op non-actief gezet en tellen niet meer mee voor de aantallen fietsers in de community. Dit houdt de resultaten transparant en actueel. In hoeverre de inzet van de maandelijkse challenges en de fietsapp bijdragen aan het vasthouden van het fietsgedrag is vooralsnog niet eenduidig vast te stellen.</p>

                    <h2>Verandering in reisgedrag</h2>
                    <p>Fietsstimulering werkt. De grafiek over het reisgedrag zonder stimuleringsprogramma laat zien dat het merendeel van de werknemers voor de auto kiest. Met stimuleringsprogramma stapt men over op de fiets. </p>


                    <div class="row">
                        <div class="col-sm-6">
                            <p01-graph></p01-graph>
                        </div>
                        <div class="col-sm-6">
                            <p02-graph></p02-graph>
                        </div>
                    </div>

                    <br>
                    


                    ',
                'category_id' => 4,
            ],
            [
                'title' => 'IJmond Bereikbaar Shuttles en de OV-fiets ',
                'description' => '',
                'body' => '
                    <h2>Pilotfase: eind 2014 – 1 mei 2015</h2>

                    <p>Om het gebruik van het openbaar vervoer van het woon-werkverkeer te stimuleren heeft IJmond Bereikbaar een shuttle ingezet vanaf station Beverwijk naar bedrijventerrein Wijkermeer. Bij bewezen succes kan het aantal shuttles worden uitgebreid naar vijf stuks. De kosten van dit shuttlevervoer worden volledig betaald door IJmond Bereikbaar. Bedrijven en hun werknemers lijken in eerste instantie enthousiast over deze last-mile oplossing. Echter door de ingewikkelde aanmeld- en registratieprocedure wordt minimaal gebruik gemaakt van deze service.</p>

                    <h2>Campagnefase: 1 mei 2015 - 1 april 2017</h2>
                    <p>IJmond Bereikbaar heeft op 2 manieren het gebruik van het openbaar vervoer gestimuleerd. </p>
                    <ul>
                        <li>Advies op maat over aanbieders van OV-mobiliteitskaarten voor werknemers die in z’n geheel overstappen van auto naar het OV. De reiskosten zijn voor rekening van de werkgever.</li>
                        <li>De IJmond Bereikbaar Shuttle en OV-fiets: een last-mile oplossing voor werknemers die al met het openbaar vervoer reizen, maar waar de ‘last mile’ van NS- of busstation naar het bedrijf te wensen over laat. Juist door de last-mile te faciliteren, wordt het totale OV-gebruik versterkt.</li>
                    </ul>

                    <h2>Ambitie</h2>
                    <p>De ambitie van IJmond Bereikbaar was om 250 autoforensen structureel de overstap te laten maken naar het openbaar vervoer door de last-mile naar verschillende bedrijventerreinen te faciliteren. Dit door de inzet van 3-5 shuttles in de IJmond en dagelijks circa 50 gebruikers van de OV-fiets. </p>

                    <h2>Resultaten</h2>
                    <div class="row">
                        <div class="col-sm-9">
                            <p>Tussen 1 mei 2015 en 31 maart 2017 zijn drie IJmond Bereikbaar shuttles operationeel geweest. Twee van station Beverwijk naar de bedrijventerrein de Pijp en Wijkermeer en één vanaf station Driehuis naar bedrijventerrein Broekerwerf in Velserbroek. Een vierde shuttledienst van station Heemskerk naar bedrijventerrein Houtwegen is onderzocht, maar naar aanleiding van het verwachte resultaat niet uitgerold. In totaal hebben ca. 65 medewerkers gebruik gemaakt van de shuttles. Per 1 mei 2017 is in overleg met de betrokken werkgevers het aanbieden van de shuttledienst gestopt, met name doordat de kosten niet structureel overgenomen werden door werkgevers en/of werknemers.</p>

                        </div>
                        <div class="col-sm-3">
                            <img src="/img/ijb_shuttle.jpg" class="fullwidth" />
                        </div>
                    </div>
                    <p>Slechts een enkele medewerker heeft de OV-fiets aangevraagd als last-mile oplossing. Alle gebruikers van de last-mile oplossing zijn tot en met 31 maart 2017 gefaciliteerd.</p>

                    ',
                'category_id' => 4,
            ],
            [
                'title' => 'Succesfactoren ',
                'description' => '',
                'body' => '
                    <ul>
                        <li>Laagdrempelige campagne voor fietsstimulering trekt veel mensen over de streep.</li>
                        <li>De aankondiging van de sluiting van de Velsertunnel heeft als een sterke katalysator gewerkt voor werkgevers en werknemers om na te denken over hun reisgedrag/reiskeuze tijdens de sluiting van de Velsertunnel</li>
                        <li>Actieve promotie door de werkgevers en actieve ondersteuning door IJmond Bereikbaar hebben gericht bijgedragen aan de keuze van werknemers om anders te gaan reizen.</li>
                        <li>Door langdurige beloning heeft de extrinsieke prikkel voldoende effect opgeleverd om zonder grote uitval het fietsgedrag vast te houden en te verankeren met de inzet van “zachte beloningen”.</li>
                        <li>Door fietsstimulering langdurig te kunnen toepassen met inzet van kleine stappen heeft geholpen om met name in de campagnefase te komen tot stuctureel ander reisgedrag op basis van intrinsieke motivatie. De lengte van de sluiting van de Velsertunnel (9 maanden) was daarbij vanuit gedragsverandering bezien een gunstige randvoorwaarde. Na een langdurige ervaring door alle seizoenen heen bleek fietsen blijvend persoonlijke voordelen te bieden.</li>
                        <li>De mix van ambassadeurs en nieuwe fietsers heeft gezorgd voor een fietscommunity met grote omvang (per bedrijf, in IJmond totaal). Dit versterkt het intrinstiek gemotiveerd worden en blijven van de fietsdeelnemers.</li>
                        <li>Intrinsieke motivatie is gegroeid door de combinatie van goede persoonlijke informatie, competitie/uitdaging, kans op leuke prijzen en fun/plezier in het fietsen. Zowel uit de ritregistraties, enquêtes en het feit dat deelnemers zich nauwelijks afmelden, blijkt grote loyaliteit te zijn opgebouwd. </li>
                        <li>Vitaliteit en duurzame inzetbaarheid blijkt voor de werkgever en werknemer in de IJmond regio een belangrijke motivator. </li>
                        <li>De combinatie van fietsstimulering, aanleg en verbetering van fietsroutes, introductie van de fietsapp Ring-Ring en het gratis kunnen uitproberen van een e-bike zorgen voor bewustzijn bij forensen om ook over relatief grotere afstanden bewust te kiezen voor de fiets/e-bike. </li>

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
                                <li>Een financiële beloning blijkt ook in de IJmond een goede prikkel om overstap van auto naar fiets/e-bike op gang te krijgen. De beloning is over een lange periode (juni 2015-april 2017) verstrekt en identiek gebleken. Uit het reizigersgedrag blijkt dat de overstap van harde naar zachte beloning eerder ingezet had kunnen worden met behoud van de structurele gedragsverandering.</li>
                                <li>Het onderscheid in financiële beloning tussen ambassadeurs en nieuwe fietsers gaf onnodig veel discussie bij de deelnemers en veel extra administratief werk. </li>
                                <li>Werkgevers en werknemers vinden de e-bike een goed alternatief voor het woon/werkverkeer tot 20 kilometer. De aanschafprijs van een e-bike houdt werknemers echter tegen. Deze drempel kan makkelijk worden verlaagd wanneer werkgevers hun werkkostenregeling hiervoor willen inzetten. </li>
                                <li>De ambitie om autoforensen te laten overstappen naar het openbaar vervoer bleek te hoog gegrepen. Werkgevers en werknemers zagen wel het voordeel om over te stappen van de auto naar de fiets maar niet naar het openbaar vervoer. </li>
                                <li>De overstap van autogebruik naar OV stimuleren kan alleen als de randvoorwaarden goed zijn. Het afwaarderen van de Kennemerlijn (treinverbinding Haarlem-Alkmaar) zorgde voor een extra overstap en maakte de reistijd langer, waardoor werknemers voorkeur bleven houden voor de auto. Waar de afsluiting van de Velsertunnel juist een stimulans was om over te stappen op de fiets, werkte dit nadelig voor het overstappen naar het openbaar vervoer. De bussen die normaal snel en betrouwbaar door de Velsertunnel reden, werden nu via de pont omgeleid met langere reistijd en extra overstappen tot gevolg.</li>

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
                    <h2>Pilotfase: eind 2014 – 1 mei 2015</h2>
                    <p>Met 10 bedrijven is eind 2014 gestart met fietsstimulering. 50 werknemers van deze bedrijven melden zich spontaan aan voor deze pilot. Met een financiële prikkel worden zij gestimuleerd om de auto te laten staan en op de fiets naar het werk te komen. Bestaande fietsers (ambassadeurs) zorgen ervoor dat ook niet-fietsers meedoen aan de pilot. </p>

                    <h2>Campagnefase: 1 mei 2015 - 1 april 2017</h2>
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


                    <h2>Verankeringsfase: 1 april 2017 - 31 december 2017</h2>
                    <p>Nadruk op bewegen, saamhorigheid, het goede doen, volhouden. Voor de fietsers zijn de eigen gezondheid, het geluksgevoel en de goede invloed op het milieu de belangrijkste argumenten om te blijven fietsen.</p>

                    <div class="row">
                        <div class="col-sm-7">
                            <h2>Beloningssysteem fietsstimulering</h2>
                            <ul>
                                <li>Geen onderscheid meer tussen ambassadeurs en nieuwe fietsers. Alle deelnemers zijn vanaf de verankeringsfase actieve fietsers.</li>
                                <li>Financiële vergoeding en gratis pechhulpservice per 1 april 2017 stopgezet</li>
                                <li>Intensivering loyaliteitsprogramma</li>
                                <li>Per 1 mei 2017 introductie <a href="/category/6/page/24">fietsapp Ring-Ring</a>. </li>
                                <li>In tweede helft 2017 introductie van maatwerk bedrijfschallenges. Tata Steel heeft met goed resultaat de <a href="/category/5/page/22">eerste bedrijfschallenge</a> voor haar rekening genomen</li>
                            </ul>
                        </div>
                        <div class="col-sm-5">
                            <img src="/img/reisgedrag_beloning.svg" class="fullwidth" />
                        </div>
                    </div>
                    <img src="/img/grafiek_binden_boeien.svg" class="fullwidth" />


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

                    <strong>Resultaten maandelijkse challenges</strong>
                    <ul>
                        <li>Challenges worden positief gewaardeerd en helpen bij het vasthouden van de gedragsverandering.</li>
                        <li>Stoppen financiële beloningen + invoeren van challenges heeft niet geleid tot terugval in aantal deelnemers/ gedrag is verankerd (95% fietst door).</li>
                        <li>Challenges maken het mogelijk om bij te dragen aan een gezamenlijk doel en creëren een gezamenlijk gevoel.</li>
                        <li>Generieke challenges zijn succesvol als ze een echte uitdaging bevatten.        </li>
                    </ul>

                    ',
                'category_id' => 5,
            ],
            [
                'title' => 'Challenge op maat',
                'description' => '',
                'body' => '
                    <p>Om de fietsers bij een organisatie extra te motiveren en nieuwe fietsers te werven helpt het om een fietschallenge op maat te organiseren. Bij een challenge op maat verbinden we de prestatie van de fietsers aan een prijs en een goed doel. Een challenge op maat verhoogt het aantal fietskilometers en trekt nieuwe fietsers aan. In oktober 2017 heeft Tata Steel het spits afgebeten. </p>

                    <strong>Tata Steel fietschallenge</strong>
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
                    <img src="/img/belonen_ succesfactoren.svg" class="fourty_wide" />
                    <ul>
                        <li>Starten met een harde financiële beloning zorgt voor volume bij het aantal deelnemers</li>
                        <li>Extra stimulans in periode dat het minder aantrekkelijk is om op de fiets naar het werk te gaan: verhoging van vergoeding naar € 0,15 in de wintermaanden.</li>
                        <li>Beloning gebaseerd op service (pechhulp FietsNed) geeft gevoel van ‘ontzorgen’.</li>
                        <li>Tweede pont in de spits heeft drempel om over te stappen voor veel nieuwe fietsers verlaagd.</li>
                        <li>Directe aanleiding om gedrag te willen veranderen: verkeersproblemen door sluiting Velsertunnel.</li>
                        <li>Geleidelijke overgang van extrinsieke naar intrinsieke motivatie begeleiden middels challenges en communicatieboodschappen.</li>
                        <li>Uit de ritregistraties en enquêtes blijkt dat na 6-12 maanden harde beloning niet meer nodig is. De intrinsieke motivatie zorgt voor een blijvende gedragsverandering.</li>
                        <li>Reguliere challenges zijn een aantrekkelijk en direct communicatiemoment met de fietscommunity en de werkgevers. Deelnemers waarderen het dat zij op deze manier gestimuleerd worden. </li>
                        <li>Challenges op maat zorgen voor nieuw draagvlak en nieuwe fietsers.</li>
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
                    <p>Van 1 mei 2015 tot en met 31 maart 2017 heeft IJmond Bereikbaar een vergoeding voor gefietste woon/werkkilometers verstrekt aan de deelnemers van het fietsstimuleringsprogramma. Om in aanmerking te komen voor deze vergoeding waren zij verplicht om hun fietsritten maandelijks te registreren. </p>

                    <img src="/img/fietsregistratie-zo-werkt-het.gif" class="fullwidth" />

                    <p>Met het beëindigen van de fietskilometervergoeding per 1 april 2017 is het registreren van de ritten niet langer verplicht. Aan het verzoek om deze informatie wel te blijven verstrekken voor o.a. monitorings- en rapportagedoeleinden, heeft ca. 60% van de fietsers gehoor gegeven.</p>
                    ',
                'category_id' => 6,
            ],
            [
                'title' => 'Fietsapp Ring-Ring',
                'description' => '',
                'body' => '
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/img/ring-ring_logo.jpg" class="fullwidth" id="ringring"/>
                        </div>
                        <div class="col-sm-9">
                            <p>In mei 2017 heeft IJmond Bereikbaar als onderdeel van het loyaliteitsprogramma de fietsapp van Ring-Ring bij de werkgevers en werknemers geïntroduceerd. Ring-Ring timmert al een aantal jaar aan de weg. De app wordt door verschillende instanties op lokaal en regionaal niveau ingezet om fietsen te stimuleren.</p>
                        </div>
                    </div>

                    <strong>Informatie over fietsgedrag direct zichtbaar in de app</strong>
                    <div class="row">
                        <div class="col-sm-9">
                            <ul>
                                <li>Waar, hoe ver en hoe vaak je fietst</li>
                                <li>Hoeveel calorieën je verbrandt</li>
                                <li>Hoeveel CO2 uitstoot je bespaart</li>
                                <li>Hoe je presteert t.o.v. de andere fietsers van IJmond Bereikbaar</li>
                            </ul>
                            <p>Hoort een werkgever tot de kopgroep van IJmond Bereikbaar, dan wordt een specifieke bedrijfsgroep aangemaakt. Zo zien medewerkers hoe ze presteren t.o.v. hun collega’s. Eind december 2017 waren maar liefst 106.481 fietsritten en daarmee 592.220 fietskilometers met de app geregistreerd. Onze fietsers verbrandden 14577000 kilocalorieën en bespaarden 89 ton aan CO2.</p>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/ring-ring_screenshot.png" class="fullwidth" />
                        </div>
                    </div>  
                     <br><br>


                    <strong>Korting</strong>
                    <div class="row">
                        <div class="col-sm-9">
                            <p>Iedere fietskilometer is een punt waard. Deze punten geven je korting bij aangesloten bedrijven en winkeliers. In de IJmond hebben 10 winkeliers een actie in de fietsapp geplaatst. </p>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/fietsapp-kortingsacties.png" class="fullwidth"/>
                        </div>
                    </div>
                     
                    <p><strong>Fietsen voor het goede doel</strong></p>
                    <p>IJmond Bereikbaar koppelt fietskilometers aan een goed doel dat een relatie heeft met de regio. Zodra de fietskilometers door de gebruikers van de app bij elkaar zijn gefietst, doneert IJmond Bereikbaar namens hen € 1.000 aan het goede doel.</p>

                    <p>IJmond Bereikbaar heeft cheques uitgereikt aan de Dierenambulance Kennemerland, de KNRM in IJmuiden en de Stichting Vrienden van het Rode Kruis Ziekenhuis. </p>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="/img/rkz_cheque.jpg" class="fullwidth" />
                        </div>
                        <div class="col-sm-6">
                            <img src="/img/knrm_cheque.jpg" class="fullwidth" />
                        </div>
                    </div>
                    <br>

                    <img src="/img/fietsroutes.jpg" class="eighty_wide center" />
                    <br>
                    <p><strong>Fietsbewegingen in de IJmond</strong></p>
                    <p>Door het gebruik van gps verzamelt de fietsapp gegevens over de fietsbewegingen die in de regio worden gemaakt. Deze informatie kan onder meer worden gebruikt om te analyseren welke routes het meest worden afgelegd. Wanneer er infrastructurele verbeteringen doorgevoerd worden, is dit een handig hulpmiddel om de prioriteit te bepalen.</p> 
                    
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
                    <div class="row">
                        <div class="col-sm-9">
                            <ul>
                                <li>Introductie van een fietsapp werkt beter in combinatie met een harde beloning. </li>
                                <li>Fietsers hebben hoge verwachtingen van de technische kwaliteit van een fietsapp. Ze zijn vaak al gewend aan grote spelers op de markt zoals Strava en meten daar het niveau van andere apps aan af.</li>
                                <li>Waar privacy-gevoeligheid bij de online ritregistratie nauwelijks een rol speelt voor de deelnemers, is dit bij het al dan niet willen aanmelden voor de app wel een punt. </li>
                                <li>600 Deelnemers hebben de fietsapp gedownload. Slechts de helft gebruikt de app actief. Het is belangrijk om de juiste snaar te raken en de toegevoegde waarde van de app duidelijk te maken Onderdeel van de app is het puntenspaarsysteem voor korting bij lokale winkeliers.</li>
                                <li>Het is arbeidsintensief om voldoende aanbod te creëren in de app. Een gevarieerd aanbod van kortingsacties van lokale winkeliers maakt het gebruik van de app aantrekkelijker.</li>


                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/fietsritregistratie_aandachtspunten.svg" class="center"/>
                        </div>
                    </div>
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
                                <li>Ieder kwartaal persoonlijke mail over uitbetaling, verbrande calorieën en bespaard CO2</li>
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

                    <strong>LinkedIn </strong>
                    <p>Voor zakelijk ingestoken posts over het programma van IJmond Bereikbaar gebruikt IJmond Bereikbaar de persoonlijke LinkedIn-pagina’s van met name de programmamanager en communicatieadviseur. Informatie wordt zo gericht binnen het eigen netwerk verspreid.</p>

                    <h2 id="campagnerijkswaterstaat">Communicatiecampagne samen met Rijkswaterstaat</h2>
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
