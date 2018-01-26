 <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Eindmonitor</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    </head>
    <body>
		<div id="app">
            <header>
                <div class="banner container">
                    <div class="banner--container">
                        <img src="/img/logo_icons.svg" alt="" class="left">
                        <img src="/img/eindmonitor.svg" alt="" class="right eighty">
                    </div>
                </div>
                <nav class="">
                    <ul class="row container">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/aanleiding">Aanleiding</a>
                        </li>
                        <li>
                            <a href="/samenwerking">Samenwerking</a>
                        </li>
                        <li>
                            <a href="/fasering">Fasering</a>
                        </li>
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                        <li>
                            <a href="/kopgroep">Kopgroep</a>
                        </li>
                    </ul>
                </nav>

            </header>
	        @yield('content')	

        </div>

         <!-- Scripts -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.js"></script>
         <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>   
         <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
