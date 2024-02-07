
// add post upload image 
document.getElementById('addPostUrl').addEventListener('change', function(){
if (this.files[0] ) {
    var picture = new FileReader();
    picture.readAsDataURL(this.files[0]);
    picture.addEventListener('load', function(event) {
    document.getElementById('addPostImage').setAttribute('src', event.target.result);
    document.getElementById('addPostImage').style.display = 'block';
    });
}
});


// Create Status upload image 
document.getElementById('createStatusUrl').addEventListener('change', function(){
if (this.files[0] ) {
    var picture = new FileReader();
    picture.readAsDataURL(this.files[0]);
    picture.addEventListener('load', function(event) {
    document.getElementById('createStatusImage').setAttribute('src', event.target.result);
    document.getElementById('createStatusImage').style.display = 'block';
    });
}
});


// create product upload image
document.getElementById('createProductUrl').addEventListener('change', function(){
if (this.files[0] ) {
    var picture = new FileReader();
    picture.readAsDataURL(this.files[0]);
    picture.addEventListener('load', function(event) {
    document.getElementById('createProductImage').setAttribute('src', event.target.result);
    document.getElementById('createProductImage').style.display = 'block';
    });
}
});

var inputFile = document.getElementById('createpostusUrl');
        
    // Écouter l'événement de changement
inputFile.addEventListener('load', function(event) {
    // Récupérer le fichier sélectionné
    var file = event.target.files[0];
            
    // Créer une URL objet pour le fichier sélectionné
    var imageURL = URL.createObjectURL(file);
            
    // Sélectionner l'élément img
    var imgElement = document.getElementById('createpostImage');
            
    // Définir l'URL de l'image comme la source de l'élément img
    imgElement.src = imageURL;
});









    