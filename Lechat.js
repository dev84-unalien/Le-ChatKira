



    // On execute une fonction pour afficher les messages en base

$(".envoyer").click(function () {
    
var msg = $(".ecran").val();
var psd = $(".ecran").val();
$(document).ready(function() {
console.log("Welcome to CryEngine Ent")
    // Un tableau de pseudo
    // Récuperer un pseudo aléatoirement dans le tableau
});
    $.ajax({
        url: "addMessage.php",
        type: 'POST',
        data: {
            pseudo: psd ,// Pseudo aléatoire
            message: msg // Message de l'input 
        },
        success: alert("Vous avez réussi")
    });
});

function refreshMessages () {
    // Je fait une requete ajax pour get Les messages
    //On append les messages récuperer grace a jquery dans la div "contenu"
}