@extends('layouts.app')

@section('content')
    <header>
        <div class="banner">
            <div class="container">
                <img src="/img/logo_icons.svg" alt="" class="left">
                <img src="/img/eindmonitor.svg" alt="" class="right eighty">
            </div>
        </div>
        <nav class="container">
            <ul class="row">
                <li>
                    <a href="#">Aanleiding</a>
                </li>
                <li>
                    <a href="#">Samenwerking</a>
                </li>
                <li>
                    <a href="#">Fasering</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>

    </header>
    <div class="content">
        <div class="page-highlight container">
            <p>IJmond Bereikbaar is in 2015 gestart met als doel om de bereikbaarheid van de regio IJmond te verbeteren.Centraal staat structurele gedragsverandering in reisgedrag (woon/werkverkeer) van werknemers met werkbestemming in de IJmond. IJmond Bereikbaar wil hen stimuleren waar mogelijk de auto te laten staan en te kiezen voor de fiets of het OV om naar en van het werk te reizen. Deze eindmonitor laat u de de behaalde resultaten zien van de inspanningen.</p>
            <p>Kies hieronder een thema en specifiek onderwerp en bekijk de resultaten.</p>
        </div>
        <generator></generator>

        <div class="container row">
            <div class="col-sm-12">
                <graph
                    :labels="['January', 'Febuary', 'March', 'April', 'May', 'June']" 
                    :values="[10, 42, 4, 20, 22, 50]"   
                    color="blue"
                >
                </graph>
            </div>
        </div>
    </div>
    <footer>
        footer
    </footer>
@endsection
