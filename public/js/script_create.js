$(".submit-form-produit").click(function(e){
    var formDataCreate = document.getElementById('form-data-produit_create');
    form = $('#'+formDataCreate.id);
    // form.validate();
   
    // form.validate({
    //     rules: {
    //         titre: "required",
    //     }
    //   });
    console.log(form)
    var formData = new FormData(form[0]);

    console.log(formData)
    $.ajax({
        type: formDataCreate.method,
        url: formDataCreate.action,
        enctype: 'multipart/form-data',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){
            alert(response.success);
            console.log(response)
            document.location.reload();
        },
    });
});

$(".submit-form-post").click(function(e){
    var formDataCreate = document.getElementById('form-data-post_create');
    form = $('#'+formDataCreate.id);

    var validator = $(".submit-form-post").validate();

    console.log(form)
    var formData = new FormData(form[0]);

    console.log(formData)
    $.ajax({
        type: formDataCreate.method,
        url: formDataCreate.action,
        enctype: 'multipart/form-data',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){
            alert(response.success);
            console.log(response)
            // addpost(response.post);
            document.getElementById('activite').value = "";
            document.getElementById('description').value = "";
            document.getElementById('createpostusUrl').value = "";
            // document.getElementById('tags').value = "";
            document.location.reload();
        },
    });
});

$(".submit-form-activite").click(function(e){
    var formDataCreate = document.getElementById('form-data-activite_create');
    form = $('#'+formDataCreate.id);

    console.log(form)
    var formData = new FormData(form[0]);

    console.log(formData)
    $.ajax({
        type: formDataCreate.method,
        url: formDataCreate.action,
        enctype: 'multipart/form-data',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){
            alert(response.success);
            console.log(response)
            document.getElementById('nom').value = "";
            document.getElementById('date_debut').value = "";
            document.getElementById('date_fin').value = "";
            document.getElementById('activite_type').value = "";
            document.getElementById('localite').value = "";
            document.getElementById('description').value = "";
            document.getElementById('image').value = "";
            // document.getElementById('tags').value = "";
            document.location.reload();
        },
    });
});

$(".submit-form-alert").click(function(e){
    var formDataCreate = document.getElementById('form-data-alert_create');
    form = $('#'+formDataCreate.id);

    console.log(form)
    var formData = new FormData(form[0]);

    console.log(formData)
    $.ajax({
        type: formDataCreate.method,
        url: formDataCreate.action,
        enctype: 'multipart/form-data',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response){
            alert(response.success);
            console.log(response)
            document.getElementById('nom').value = "";
            document.getElementById('debut').value = "";
            document.getElementById('type_alert').value = "";
            document.getElementById('localite').value = "";
            document.getElementById('description').value = "";
            document.getElementById('image').value = "";
            // document.getElementById('tags').value = "";
            document.location.reload();
        },
    });
});

function addAlert(alert) {
    console.log(alert);
    var addAlert = "<div class=\"flex items-start gap-3 relative\">";
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

    return addAlert;
}

function addActivite(activite) {
    console.log(activite);
    var addActivite = "<div class=\"flex items-start gap-3 relative\">";
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

    return addActivite;
}

function aadPost(post) {
    console.log(post);
    var aadPost = "<div class=\"flex items-start gap-3 relative\">";
    aadPost += "<a href=\"#\">"; 
    if(comment.user.profile){
        aadPost += "<img src=\"http://localhost:8000/storage/" + comment.user.profile + "\" alt=\"\" class=\"w-6 h-6 mt-1 rounded-full\">"; 
    }
    else{
        aadPost += "<img src=\"{{asset('/images/avatars/avatar.png')}}\" alt=\"\" class=\"w-6 h-6 mt-1 rounded-full\">"; 
    }
    aadPost +=  "</a>";
    aadPost += "<div class=\"flex-1\">";
    aadPost += "<a href=\"#\" class=\"text-black font-medium inline-block dark:text-white\">" + comment.user.lastname + " " + comment.user.firstname + " </a>";
    aadPost += "<p class=\"mt-0.5\"> " + comment.comment.comment + " </p>";
    aadPost += "</div>";
    aadPost += "</div>";

    document.getElementById('addPost').prepend(aadPost)
}

search.oninput = (function () {
        $(this).css("background-color", "#7FFF00");

        var name_search = $("input[name=search]").val();
        var formDataCreate = document.getElementById('form-data-search');
        form = $('#'+formDataCreate.id);
        
        var data = {
            search: name_search
        }
        var formData = new FormData(form[0]);
        $.ajax({
            type: formDataCreate.method,
            url: formDataCreate.action,
            enctype: 'multipart/form-data',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function(){
               console.log(formData)
            },
            success: function(response){
                // alert(response.success);
                console.log(response)
                aadSearch(response.search);
            },
        });
    });

    function aadSearch(search) {
        console.log(search);
        var aadSearch;
        if(search){

            for (let index = 0; index <= 5; index++) {
                if(document.getElementById('seach_aucun')){
                    document.getElementById('seach_aucun').remove()
                }
                if(document.getElementById('seach'+index)){
                    document.getElementById('seach'+index).remove()
                }
            }
            
            search.forEach((element, key) => {
                if(element.activite){
                    aadSearch = "<a href=\"#\" id=\"seach"+ key +"\" class=\"relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10\"> <img id=\"img_" + key + "\" class=\"w-9 h-9 rounded-full\"> <div>   <div> " + element.activite + " </div>  <div class=\"text-xs text-blue-500 font-medium mt-0.5\"> poste </div>   </div>   </a>";
                    routeUrlStorage(element.image1, key);
                }
                else if(element.image_principale){
                    aadSearch = "<a href=\"#\" id=\"seach"+ key +"\" class=\"relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10\"> <img id=\"img_" + key + "\" class=\"w-9 h-9 rounded-full\"> <div>   <div> " + element.nom + " </div>  <div class=\"text-xs text-blue-500 font-medium mt-0.5\"> alert </div>   </div>   </a>";
                    routeUrlStorage(element.image_principale, key);
                    routeUrlsearch(element, key);
                }
                else{
                    aadSearch = "<a href=\"#\" id=\"seach"+ key +"\" class=\"relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10\"> <img id=\"img_" + key + "\" class=\"w-9 h-9 rounded-full\"> <div>   <div> " + element.nom + " </div>  <div class=\"text-xs text-blue-500 font-medium mt-0.5\"> activité </div>   </div>   </a>";
                    routeUrlStorage(element.couverture, key)
                    routeUrlsearch(element, key);
                }
                $('#nav_search').append(aadSearch);
            });

            if(search.length == []){
                if(document.getElementById('seach_aucun')){
                    document.getElementById('seach_aucun').remove()
                }
                aadSearch = "<a href=\"#\" id=\"seach_aucun\" class=\"relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10\">  <div> Aucun résultat  </div> </a>";
                
                $('#nav_search').append(aadSearch);
            }
           
            return aadSearch;
        }
       
    }


    function routeUrlStorage(file, key) {
        const morceaux = file.split('/');
        console.log(morceaux[2])
        fetch('/storage/'+morceaux[2])
        .then(response => {
            console.log(response.body)
            if (!response.ok) {
                throw new Error('Image non trouvée');
            }
            return response.blob();
        })
        .then(blob => {
            const url = URL.createObjectURL(blob);

            document.getElementById('img_'+key).src = url;
        })
        .catch(error => console.error(error));
    }

    function routeUrlsearch(element, key) {
        if(element.image_principale){
            var route = '/alert/'+ element.id
        }else{
            var route = '/activite/'+ element.id
        }
        fetch(route)
        .then(response => {
            if (!response.ok) {
                throw new Error('Image non trouvée');
            }
            return response.blob();
        })
        .then(blob => {
            const url = URL.createObjectURL(blob);
            console.log(document.getElementById('seach'+key).href);
            document.getElementById('seach'+key).href = url;
        })
        .catch(error => console.error(error));
    }

    var textareaTag = document.getElementById('description');

    textareaTag.addEventListener('input', function() {
        console.log(document.getElementById('description'));
        console.log('ok')
        for (let index = 0; index <= 5; index++) {
            if(document.getElementById('seach_aucun')){
                document.getElementById('seach_aucun').remove()
            }
            if(document.getElementById('seach'+index)){
                document.getElementById('seach'+index).remove()
            }
        }
        var tags = routeTag($(this).text);
        tags.forEach((element, key) => {
            aadTag = "<input type=\"checkbox\" class=\"btn-check\" id=\"btn-check-tag-"+ key + " autocomplete=\"off\" name=\"btn-check-tag-" + key + ">";
            addTag += "<label class=\"btn btn-primary\" for=\"btn-check-tag-" + key +">" + element + "</label>";
            
            $('#nav_search').append(addTag);
        });
    });


    function routeTag(text) {

        const postData = {
            text: text,
        };
        console.log(postData)
        const options = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json', 
            },
            body: JSON.stringify(postData) 
        };

        fetch('/list/tag/', options)
        .then(response => {
            console.log(response)
            if (!response.ok) {
                throw new Error('tag non trouvée');
            }
            return response.tags;
        })
        .catch(error => console.error(error));
    }

