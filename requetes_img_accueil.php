<?php
if (!empty($_FILES['ImageNews']))
{
    //On créé un array qui va récupérer les extensions acceptées, avec leur type MIME associé (internet media type, on s'en servira plus tard pour redimensionner la photo plus facilement)
    $Extensions = array('jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif');
    //IE : Internet Explorer
    $ExtensionsIE = array('jpg' => 'image/pjpg', 'jpeg'=>'image/pjpeg');

    if ($_FILES['ImageNews']['error'] <= 0)
    {
        //On limite la taille de l'image à 2 Mo soit 2 097 152 octets
        if ($_FILES['ImageNews']['size'] <= 2097152)
        {
            $Image_proj = $_FILES['ImageNews']['name'];
            //On vérifie l'extension de l'image
            $ExtensionPresumee = explode('.', $ImageNews);
            $ExtensionPresumee = strtolower($ExtensionPresumee[1]);
            if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg' || $ExtensionPresumee == 'pjpg' || $ExtensionPresumee == 'pjpeg' || $ExtensionPresumee == 'gif' || $ExtensionPresumee == 'png')

            {
?>