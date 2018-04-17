// Partie carousel

// $(document).ready(function(){
    $(".owl-proj").owlCarousel(
    {
        center: true,
        // items:3,
        loop:true,
        center:true,
        nav:false,
        rewind:false,
        lazyLoad:true,
        autoplay:true,
        autoplayHoverPause:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    $("#owl-contrib").owlCarousel(
        {
            center: true,
            // items:5,
            loop:true,
            center:true,
            nav:false,
            rewind:false,
            lazyLoad:true,
            autoplay:true,
            autoplayHoverPause:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                992:{
                    items:5
                }
            }
        });
// });

//Ajax

//Inscription
// $(document).ready(function(){
    // $("#valid_inscription").click(function(){
    //     $.post(
    //         "requete_inscription_navbar.php", //Fichier php qui va être éxécuté, surement a changer !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    //         {
    //             //On récupère la valeur des inputs que l'on va passer à requetes_navbar.php
    //             pseudo : $("#pseudoconnexion").val(),
    //             avatar : $("#avatarconnexion").val(),
    //             email : $("#mailinscription1").val(),
    //             notif : $("#notif").val(),
    //         },
    //         function(succès){
    //             if(succès == "Success")
    //             {
    //                 alert ("Vous êtes désormais inscrits");
    //             }
    //             else
    //             {
    //                 alert ("Une erreur s'est produite, veuillez réessayer")
    //             }
    //         },
    //         "text"
    //     );
    // });
// });



var mail_co = $("#mailconnexion").val();
var mdp_co = $("#mdpconnexion").val();

//Connexion
$(document).ready(function()
{
    $("#valid_connexion").click(function()
    {
        $.ajax(
        {
            url: 'requete_connexion_navbar.php',
            method: 'POST',
            data: {mail: mail_co, mdp: mdp_co},
            dataType: 'html',
            success: function(arg_bidon){
            $("#resultat").html(arg_bidon)
        } 
    });
    $("#modal_connexion").modal('hide');
    });
});