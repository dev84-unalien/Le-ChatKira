// Une fonction document ready qui est executé au lancement de la page
    // On execute une fonction pour afficher les message en base

$(".envoyer").click(function () {
    // Un tableau de pseudo
    
    // Récuperer un pseudo aléatoirement dans le tableau

    $.ajax({
        url: "localhost/addMessage.php",
        type: 'POST',
        data: {
            pseudo: "Enes", // Pseudo aléatoire
            message: "Coucou je suis Enes!" // Message de l'input 
        },
        success: function(){

        }
    });
});

function refreshMessages () {
    // Je fait une requete ajax pour getLes messages
    //On append les messages récuperer grace a jquery dans la div "contenu"
}