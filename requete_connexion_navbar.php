<?php
$connect= mysqli_connect("localhost", "root", "Elpinus09", "pp_rodez");
$connect->query("set names UTF8");

$mail=$_POST['mail'];
$mdp=$_POST['mdp'];

$requete_cookie = mysqli_query($connect, "SELECT util_id,util_email,util_mdp,util_pseudo FROM utilisateur WHERE util_email='".$mail."'");
$result_cookie = mysqli_fetch_array($requete_cookie);
$mailconnexion = $result_cookie[1];
$mdpconnexion = $result_cookie[2];
$pseudoconnexion = $result_cookie[3];


if(isset($_POST['mail']) && isset($_POST['mdp']) )
{   
    if($mail == $mailconnexion && $mdp == $mdpconnexion)
    {
        //On lance une session pour garder les données plus sensibles, on gardera les données non sensibles sur les cookies
        session_start();
        //Définition cookie : d'abord on a le nom du cookie (ici cookie_mail) ensuite on appelle la variable qui va lui donner sa valeur, ensuite on définit sa durée de vie (ici 1 mois) et les arguments finaux servent à ajouter un peu de sécurité (le null null false je ne sais pas ce qu'ils font mais le true sert à activer le mode httpOnly)
        setcookie('cookie_mail',$mail_cookie,time()+31*24*3600,null,null,false,true);
        //Popup permettant d'indiquer a l'utilisateur qu'il est bien connecté
        $message="Vous êtes désormais connecté en tant que :".$pseudoconnexion." ";
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
    else if($mail == $mailconnexion && $mdp != $mdpconnexion)
    {
        $message="Votre mot de passe n'est pas bon ";
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
    //Condition a retravailler : si le mail n'est pas le bon la requête ne peux pas retrouver le mot de passe qui lui est associé
    // else if($mail != $mailconnexion && $mdp == $mdpconnexion)
    // {
    //     $message="Votre mail n'est pas bon ";
    //     echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    // }
    else
    {
        $message="Vos identifiants ne sont pas bon ";
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
}
?>