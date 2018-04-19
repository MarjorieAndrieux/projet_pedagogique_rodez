<?php
include("connexion_bdd.php");

$mail=$_POST['mail'];
$mdp=$_POST['mdp'];

var_dump($mail);
var_dump($mdp);

$requete_cookie = mysqli_query("SELECT util_id,util_email,util_mdp,util_pseudo FROM `utilisateur` WHERE util_email = '".$mail."' ");
$result_cookie = mysqli_fetch_row($requete_cookie);
$mailconnexion = $result_cookie[1];
$mdpconnexion = $result_cookie[2];

var_dump($requete_cookie);

if(isset($_POST['mail']) && isset($_POST['mdp']) )
{   
    if($mail == $mailconnexion && $mdp == $mdpconnexion)
    {
        //On lance une session pour garder les données plus sensibles, on gardera les données non sensibles sur les cookies
        session_start();
        //Définition cookie : d'abord on a le nom du cookie (ici cookie_mail) ensuite on appelle la variable qui va lui donner sa valeur, ensuite on définit sa durée de vie (ici 1 mois) et les arguments finaux servent à ajouter un peu de sécurité (le null null false je ne sais pas ce qu'ils font mais le true sert à activer le mode httpOnly)
        setcookie('cookie_mail',$mail_cookie,time()+31*24*3600,null,null,false,true);
        echo $mailconnexion;
        
    }
    else
    {
        echo "Problème de connexion";
        var_dump($result_cookie);
    }
}
?>