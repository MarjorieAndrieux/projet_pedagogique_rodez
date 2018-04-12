<?php
//On démarre la session pour pouvoir se servir des informations des cookies plus tard
session_start();

//La variable mail_cookie nous servira a récupérer le mail de l'utilisateur pour pouvoir l'identifier et s'y référer pendant sa navigation sur le site
$mail_cookie=$_POST['mail'];
//Définition cookie : d'abord on a le nom du cookie (ici cookie_mail) ensuite on appelle la variable qui va lui donner sa valeur, ensuite on définit sa durée de vie (ici 1 mois) et les arguments finaux servent à ajouter un peu de sécurité (le null null false je ne sais pas ce qu'ils font mais le true sert à activer le mode httpOnly)
setcookie('cookie_mail',$mail_cookie,time()+31*24*3600,null,null,false,true);

$connect= mysqli_connect("localhost", "root", "Elpinus09", "pp_rodez");
$connect->query("set names UTF8");

// if(isset($mail_cookie))
// {
//     header('Location : index.php');
// }

?>