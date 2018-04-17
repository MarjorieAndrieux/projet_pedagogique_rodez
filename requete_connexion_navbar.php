<?php
$connect= mysqli_connect("localhost", "root", "Elpinus09", "pp_rodez");
$connect->query("set names UTF8");

$mail=$_POST['mail'];
$mdp=$_POST['mdp'];

var_dump($mail);
var_dump($mdp);

$requete_cookie = mysqli_query($connect, "SELECT util_id,util_email,util_mdp,util_pseudo FROM utilisateur");
$result_cookie = mysqli_fetch_array($requete_cookie);

var_dump($result_cookie);

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