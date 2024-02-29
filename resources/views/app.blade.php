<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eco Champ</title>

        <!-- css files -->
        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

        <!-- Ionicons -->
        <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/ionicons/ionicons.js"></script>
        <style> #social-links > ul { list-style: none; }

            #social-links > ul > li { float: left; margin-right: 1em; font-size: 1em; }
            
        </style>
    </head>
    <body >
        {{-- {{dd(asset('public/js/script.js'))}} --}}


        {{-- <div id="app" data-page="{{ json_encode($page) }}"></div> --}}
        @yield('content')

        <!-- Javascript  -->
        <script src="{{asset('js/uikit.min.js')}}"></script>
        <script src="{{asset('js/simplebar.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="<https://code.jquery.com/jquery-3.5.1.slim.min.js>" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
        
        <script src="{{ asset('js/share.js') }}"></script>
        <script src="{{ asset('js/profil.js') }}"></script>
        <script src="{{ asset('js/script_create.js') }}"></script>
        <script type="text/javascript">
            function routeUrlStorage(file) {
                val routeUrlStorage = "{{url('/storage', "+ file +")}}";
                return routeUrlStorage;
            }
        </script>
        <script type="text/javascript">
            
            $(".submit-form").click(function(e){
                e.preventDefault();
                var formLike = e.target;
                var comment = '';
                var test = ''; 
                var res; 
                var data;
                var value_post;
                var value_alert;
                var value_activite;
                var pair;
                var textarea = document.getElementById('text_new'); 

                for (let i = 0; i < 8; i++) {
                    if (formLike.tagName === "FORM") {
                        data = $('#'+formLike.id).serialize();
                        break;
                    } 
                    formLike = formLike.parentElement
                }
                console.log(data);
                
                var dataArray = data.split('&');

                for (var i = 0; i < dataArray.length; i++) {
                    pair = dataArray[i].split('=');
                    if (pair[0] === 'post_id') { 
                        value_post = pair[1];
                        console.log('La valeur de la clé spécifiée est : ' + value_post); 
                    }
                    if (pair[0] === 'alert_id') { 
                        value_alert = pair[1];
                        console.log('La valeur de la clé spécifiée est : ' + decodeURIComponent(value_alert)); 
                    }
                    if (pair[0] === 'activite_id') { 
                        value_activite = pair[1];
                        console.log('La valeur de la clé spécifiée est : ' + decodeURIComponent(value_activite)); 
                    }
                }

                $.ajax({
                    type: formLike.method,
                    url: formLike.action,
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function(){
                        // $('#'+formLike.id+' #create_new').html('....Veuillez patienter');
                    },
                    success: function(response){
                        res = response;
                        console.log(response);
                        alert(response.success);
                        if(!response.connect){
                            return;
                        }

                        if (response.action === 'addComment') {
                            
                            var comment = formLike.parentElement
                            $('#'+formLike.id+' #create_new').html('Envoyer');
                            if(pair[0] === 'post_id'){
                                $('#addComment_post'+value_post).append(addComment(response.comment));
                                console.log(document.getElementById('countComment_post'+value_post).innerText);
                                let count = +document.getElementById('countComment_post'+value_post).innerText + 1; 
                                console.log(count);
                                $('#'+comment.id+' #countComment_post'+value_post).html(count);
                            }
                            if(pair[0] === 'alert_id'){
                                $('#addComment_alert'+value_alert).append(addComment(response.comment));
                            }
                            if(pair[0] === 'activite_id'){
                                $('#addComment_activite'+value_activite).append(addComment(response.comment));
                            }
                            console.log(textarea);
                            textarea.value = '';
                        } 
                        if(response.action === 'joinActivity'){
                            $('#'+formLike.id+' #create_new').html('<ion-icon name="checkmark-done-sharp"></ion-icon> Jointe');
                            formLike.id='';
                        }
                        if(response.action === 'devenirActivity'){
                            $('#'+formLike.id+' #create_new').html('Devenir');
                            const morceaux = response.participation.split(',');
                            morceaux.forEach(function(element) {
                                if(element != ''){
                                    test += '<div class="p-2 inline-flex rounded-full mb-2 bg-primary text-white self-center"> <li class="list-group-item" style="margin-right: 25px;"><span> ' + element + ' </span></li></div>';
                                }
                            });
                            $('#text_devenir').html(test);
                            
                        }
                        if(response.action === 'liked') {
                            $('#'+formLike.id+' #create_new').html('👍');
                            $('#'+formLike.id+' #liked-post').html(response.like);
                        }
                    },
                    complete: function(response){
                        //alert(response);
                        response = res;
                        console.log(response)
                        if(response.action){
                            if (response.action === 'addComment') {
                                $('#'+formLike.id+' #create_new').html('Envoyer');
                            }
                            if(response.action === 'liked') {
                                $('#'+formLike.id+' #create_new').html('👍');
                            }
                            if(response.action === 'devenirActivity'){
                                $('#'+formLike.id+' #create_new').html('Devenir');
                            }
                            if(response.action === 'joinActivity'){
                                $('#'+formLike.id+' #create_new').html('Rejoindre');
                            }
                        }
                        res = [];
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        if (xhr.status === 422){
                            alert("contenu vide");
                        }
                        // alert(xhr.status);
                        // alert(thrownError);
                        // document.location.reload();
                    }
                });
            });
        function addComment(comment) {
            console.log(comment);
            var addComment = "<div class=\"flex items-start gap-3 relative\">";
            addComment += "<a href=\"#\">"; 
            if(comment.user.profile){
                addComment += "<img src=\"http://localhost:8000/storage/" + comment.user.profile + "\" alt=\"\" class=\"w-6 h-6 mt-1 rounded-full\">"; 
            }
            else{
                addComment += "<img src=\"{{asset('/images/avatars/avatar.png')}}\" alt=\"\" class=\"w-6 h-6 mt-1 rounded-full\">"; 
            }
            addComment +=  "</a>";
            addComment += "<div class=\"flex-1\">";
            addComment += "<a href=\"#\" class=\"text-black font-medium inline-block dark:text-white\">" + comment.user.lastname + " " + comment.user.firstname + " </a>";
            addComment += "<p class=\"mt-0.5\"> " + comment.comment.comment + " </p>";
            addComment += "</div>";
            addComment += "</div>";

            return addComment;
        }


        window.addEventListener('resize', function() {
            // Obtenez la largeur actuelle du document
            let documentWidth = document.documentElement.clientWidth;
            // Obtenez la largeur de la fenêtre du navigateur
            let windowWidth = window.innerWidth;
            // Comparez les deux largeurs
            let side = document.getElementById('rezize_responsive');

            if (documentWidth < 600) {
                // La taille du document a été réduite en mode responsive
                console.log(documentWidth);
                console.log('La taille du document a été réduite en mode responsive !');
                
                side.style = ""
                // Effectuez d'autres actions si nécessaire
            }
            else{
                console.log(documentWidth);
                side.style = "max-width: 30%;"
            }
        });

        </script>

    </body>
</html>
