<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eco Champ</title>

        <!-- css files -->
        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

        <!-- Ionicons -->
        <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/ionicons/ionicons.js"></script>

    </head>
    <body >

        @isset ($status)
            <div class="alert alert-success" role="alert">
                {{ $status }}
            </div>
        @endisset

        {{-- <div id="app" data-page="{{ json_encode($page) }}"></div> --}}
        @yield('content')

        <!-- Javascript  -->
        <script src="{{asset('js/uikit.min.js')}}"></script>
        <script src="{{asset('js/simplebar.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>

    </body>
</html>
