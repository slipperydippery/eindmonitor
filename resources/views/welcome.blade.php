@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container row">
            <div class="page-highlight col-sm-12">
                <p >IJmond Bereikbaar is in 2015 gestart met als doel om de bereikbaarheid van de regio IJmond te verbeteren. Centraal staat structurele gedragsverandering in reisgedrag (woon/werkverkeer) van werknemers met werkbestemming in de IJmond. IJmond Bereikbaar wil hen stimuleren waar mogelijk de auto te laten staan en te kiezen voor de fiets of het OV om naar en van het werk te reizen. Deze eindmonitor laat u de de behaalde resultaten zien van de inspanningen.</p>
                <p>Kies hieronder een thema en specifiek onderwerp en bekijk de resultaten.</p>
            </div>
            
        </div>
        <generator></generator>
        <div class="container row">
            <div class="mapcontainer">
                <img src="/img/kaart-animatie.gif" alt="" class="welcome--img">
                <div class="mapoverlay">
                    <div class="overlay--block overlay--block__fiets">
                        <img src="/img/fiets.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                Gemeenten en provincie werken samen aan een snelfietsroute door de IJmond
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__pont">
                        <img src="/img/pont.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                Extra spitspont zorgt structureel voor 15% meer (brom)fietsers per dag
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__trein">
                        <img src="/img/trein.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                Goede dienstregeling Kennemerlijn voorwaarde voor overstap naar OV
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__gedragsverandering">
                        <img src="/img/picto_gedragsverandering.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                Werkgevers hebben sleutelrol bij gedrags&shy;verandering
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__bus">
                        <img src="/img/bus.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                IJB shuttle als last-mile OV-oplossing van NS-station naar bedrijventerrein
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__tunnel">
                        <img src="/img/picto_tunnel.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                Velsertunnel 9 maanden dicht voor renovatie. Succesvolle samenwerking met Rijkswaterstaat om verkeersoverlast te beperken.
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__plannen">
                        <img src="/img/picto_toekomst.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                Voortzetten en verbreden programma: Werkgeversaanpak & Gedragsverandering, Aanleg (kleinschalige) fietsinfra, Slimme en duurzame logistiek, Innovatieve pilots en projecten C-ITS.
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__auto">
                        <img src="/img/auto.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                Per werkweek 4250 auto’s uit de ochtendspits
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__fiets_twee">
                        <img src="/img/fiets.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                2600 werknemers actief op de fiets. 1800 nieuwe fietsers!
                            </span>
                        </div>
                    </div>
                    <div class="overlay--block overlay--block__euro">
                        <img src="/img/picto_euro.svg" alt="">
                        <div class="overlay--block--hover">
                            <span>
                                Fietskilometer&shy;vergoeding werkt en haalt werknemer uit de auto
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer>
    </footer>
@endsection
