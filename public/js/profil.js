// create product upload image
document.getElementById('createpostusUrl').addEventListener('change', function(){
    if (this.files[0] ) {
        var picture = new FileReader();
        picture.readAsDataURL(this.files[0]);
        picture.addEventListener('load', function(event) {
        document.getElementById('createpostImage').setAttribute('src', event.target.result);
        document.getElementById('createpostImage').style.display = 'block';
        });
    }
    });


    document.getElementById('couverture').addEventListener('change', function(){
        var formPhoto = document.getElementById('form-data-couverture');
        var data;
        if (this.files[0] ) {
            var picture = new FileReader();
            picture.readAsDataURL(this.files[0]);
            picture.addEventListener('load', function(event) {
            document.getElementById('createCouverture').setAttribute('src', event.target.result);
            document.getElementById('createCouverture').style.display = 'block';
            
            });
        }
        // data = $('#'+formPhoto.id).serialize();
        form = $('#'+formPhoto.id);
        console.log(form)
        var formData = new FormData(form[0]);
        // var formData = new FormData();
        // formData.append('couverture', $('input[type=file]')[0].files[0]);
        // formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
        // data = {
        //     _token: $('meta[name="csrf-token"]').attr('content'),
        //     couverture: $("#couverture").val(),
        // };
        console.log(formData)
        $.ajax({
            type: formPhoto.method,
            url: formPhoto.action,
            enctype: 'multipart/form-data',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                console.log(response)
            },
            // error: function(xhr, status, error) {
            //     // Code to handle errors
            //     console.error(xhr.responseText);
            // }
        });
            
    });

        document.getElementById('profile').addEventListener('change', function(){
            if (this.files[0] ) {
                var picture = new FileReader();
                picture.readAsDataURL(this.files[0]);
                picture.addEventListener('load', function(event) {
                document.getElementById('createProfile').setAttribute('src', event.target.result);
                document.getElementById('createProfile').style.display = 'block';
                });
            }
            var formPhoto = document.getElementById('form-data-profile');
            var data = $('#'+formPhoto.id).serialize();
            form = $('#'+formPhoto.id);
            console.log(form)
            var formData = new FormData(form[0]);
            console.log(data)
            $.ajax({
                type: formPhoto.method,
                url: formPhoto.action,
                enctype: 'multipart/form-data',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    console.log(response)
                },
                // error: function(xhr, status, error) {
                //     // Code to handle errors
                //     console.error(xhr.responseText);
                // }
            });
        });