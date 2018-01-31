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
        <div class="row container">
            <div class="col-sm-12">
                <h1 class="categorytitle"> {{ $category->title }} </h1>
            </div>
        </div>
        @if(isset($page))
            <div class="container row">
                <div class="col-sm-12">
                    <h1>{{ $page->title }}</h1>
                    {!! $page->body !!}
                </div>
            </div>
        @else
            @foreach($category->pages as $page)
                <div class="container row category--page" id=" {{ $page->id }} ">
                    <div class="col-sm-12">
                        <h1>{{ $page->title }}</h1>
                        {!! $page->body !!}
                    </div>
                </div>
                <div class="totop container"><a href="#app"><span>Naar de top</span><img src="/img/top.svg" alt=""></a></div>
                @if (! $loop->last)
                    <hr>  
                @endif
            @endforeach
        @endif
    </div>
    <footer>
    </footer>
@endsection
