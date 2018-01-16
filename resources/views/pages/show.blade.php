@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container row">
            <div class="page-highlight col-sm-12">
                <p>IJmond Bereikbaar is in 2015 gestart met als doel om de bereikbaarheid van de regio IJmond te verbeteren.Centraal staat structurele gedragsverandering in reisgedrag (woon/werkverkeer) van werknemers met werkbestemming in de IJmond. IJmond Bereikbaar wil hen stimuleren waar mogelijk de auto te laten staan en te kiezen voor de fiets of het OV om naar en van het werk te reizen. Deze eindmonitor laat u de de behaalde resultaten zien van de inspanningen.</p>
                <p>Kies hieronder een thema en specifiek onderwerp en bekijk de resultaten.</p>
            </div>
        </div>
        <generator
            :category="{{$category}}"
            :page="{{$page}}"
        >
        </generator>
        <div class="container row">
            <div class="col-sm-12">
                {!! $page->body !!}
            </div>
        </div>
    </div>
    <footer>
    </footer>
@endsection
