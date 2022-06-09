
var btnUp =document.getElementById('btnUp');
var nom =document.getElementById('nom');
var prenom =document.getElementById('prenom');
var email =document.getElementById('email');
var postal =document.getElementById('postal');


var tdNom =document.getElementsByClassName('tdNom');
var tdPrenom =document.getElementsByClassName('tdPrenom');
var tdEmail =document.getElementsByClassName('tdEmail');
var tdPostal =document.getElementsByClassName('tdPost');

btnUp.addEventListener('click', function(){
    
    nom.value=tdNom.textContent;
    prenom.value=tdPrenom.textContent;
    email.value=tdEmail.textContent;
    postal.value=tdPostal.textContent;
})
