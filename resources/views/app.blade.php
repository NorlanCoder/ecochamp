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
        {{-- {{dd(asset('public/js/script.js'))}} --}}


        {{-- <div id="app" data-page="{{ json_encode($page) }}"></div> --}}
        @yield('content')

        <!-- Javascript  -->
        <script src="{{asset('js/uikit.min.js')}}"></script>
        <script src="{{asset('js/simplebar.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <script type="text/javascript">
            
            $(".submit-form").click(function(e){
                e.preventDefault();
                var formLike = e.target;
                var comment = '';
                var test = ''; 
                var res; 

                for (let i = 0; i < 7; i++) {
                    console.log(formLike);
                    if (formLike.tagName === "FORM") {
                        var data = $('#'+formLike.id).serialize();
                        break;
                    } 
                    formLike = formLike.parentElement
                }
                console.log(data);

                $.ajax({
                    type: formLike.method,
                    url: formLike.action,
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function(){
                        $('#'+formLike.id+' #create_new').html('....Please wait');
                    },
                    success: function(response){
                        res = response;
                        alert(response.success);
                        if(!response.connect){
                            return;
                        }

                        if (response.action === 'addComment') {
                            
                            var comment = formLike.parentElement
                            $('#'+formLike.id+' #text_new').value="";
                            $('#'+formLike.id+' #create_new').html('Envoyer');
                            $('#'+comment.id+' #addComment').append(addComment(response.comment));
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
                    }
                });
            });
        function addComment(comment) {
            console.log(comment);
            var addComment = "<div class=\"flex items-start gap-3 relative\">";
            addComment += "<a href=\"\">"; 
            if(comment.user.profile){
                addComment += "<img src=\"http://localhost:8000/storage/" + comment.user.profile + "\" alt=\"\" class=\"w-6 h-6 mt-1 rounded-full\">"; 
            }
            else{
                addComment += "<img src=\"{{asset('/images/avatars/avatar.png')}}\" alt=\"\" class=\"w-6 h-6 mt-1 rounded-full\">"; 
            }
            addComment +=  "</a>";
            addComment += "<div class=\"flex-1\">";
            addComment += "<a href=\"\" class=\"text-black font-medium inline-block dark:text-white\">" + comment.user.lastname + " " + comment.user.firstname + " </a>";
            addComment += "<p class=\"mt-0.5\"> " + comment.comment.comment + " </p>";
            addComment += "</div>";
            addComment += "</div>";

            return addComment;
        }
        </script>

    </body>
</html>
