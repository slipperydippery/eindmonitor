@extends('layouts.app')

<?php
    $activepage = json_encode(['id' => 0, 'title' => '--- selecteer een hoofdstuk ---']);
    if( isset($page) ){
        $activepage = $page;
    }
?>

@section('content')
    <div class="content">
        <div class="container row">
            <div class="page-highlight col-sm-12">
                {!! $category->description !!}
            </div>
        </div>
        <generator
            :category = " {{ $category }} "
            :page = " {{ $activepage }} "
        >
        </generator>

        @if(isset($page))
            <div class="container row">
                <div class="col-sm-12">
                    <h1>{{ $page->title }}</h1>
                    {!! $page->body !!}
                </div>
            </div>
        @else
            @foreach($category->pages as $page)
                <div class="container row category--page">
                    <div class="col-sm-12">
                        <h1>{{ $page->title }}</h1>
                        {!! $page->body !!}
                    </div>
                </div>
                <hr>  
            @endforeach
        @endif
    </div>
    <footer>
    </footer>
@endsection
