<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eco Champ</title>

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/notification.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Ionicons -->
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/ionicons/ionicons.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        #social-links > ul {
            list-style: none;
        }

        #social-links > ul > li {
            float: left;
            margin-right: 1em;
            font-size: 1em;
        }
    </style>
</head>

<body>

    {{-- <div id="app" data-page="{{ json_encode($page) }}"></div> --}}
    @yield('content')

    <!-- JavaScript -->
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script src="{{ asset('js/profil.js') }}"></script>
    <script src="{{ asset('js/script_create.js') }}"></script>
    <script src="{{ asset('js/notification.js') }}"></script>

    @isset($total)
        <script 
            amount="{{ $total }}" 
            callback="{{ url('/facture') }}"
            data=""
            position="center" 
            theme="#0095ff"
            sandbox="true"
            key="2ee121605d3511eea596e938ae1c409a"
            src="https://cdn.kkiapay.me/k.js"
        ></script>
    @endisset

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const quantities = document.querySelectorAll('input[name="quantity"]');
            quantities.forEach(input => {
                input.addEventListener('input', e => {
                    if (e.target.value < 1) {
                        e.target.value = 1;
                    } else {
                        e.target.parentNode.parentNode.submit();
                        document.querySelector('#wrapper').classList.add('hide');
                        document.querySelector('#action').classList.add('hide');
                        document.querySelector('#loader').classList.remove('hide');
                    }
                });
            });

            const deletes = document.querySelectorAll('.deleteItem');
            deletes.forEach(icon => {
                icon.addEventListener('click', e => {
                    e.target.parentNode.parentNode.submit();
                    document.querySelector('#wrapper').classList.add('hide');
                    document.querySelector('#loader').classList.remove('hide');
                });
            });
        });

        function routeUrlStorage(file) {
            return `{{ url('/storage') }}/${file}`;
        }

        $(window).on('hashchange', function() {
            if (window.location.hash) {
                const page = window.location.hash.replace('#', '');
                if (!isNaN(page) && page > 0) {
                    getData(page);
                }
            }
        });

        $(document).ready(function(){
            $(document).on('click', '.pagination a', function(event){
                event.preventDefault();
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                const myurl = $(this).attr('href');
                const page = $(this).attr('href').split('page=')[1];
                getData(page);
            });
        });

        function getData(page) {
            $.ajax({
                url: `?page=${page}`,
                type: "get",
                datatype: "html"
            }).done(function(data) {
                $("#tag_container").empty().html(data);
                location.hash = page;
            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('No response from server');
            });
        }
    </script>
</body>

</html>
