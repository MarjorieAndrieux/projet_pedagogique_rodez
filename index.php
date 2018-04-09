<?php
$connect= mysqli_connect("localhost", "root", "Elpinus09", "pp_rodez");
$connect->query("set names UTF8");

// function requete($connect)
// {
//     $requete ="SELECT * FROM projet ORDER BY pro_date";
//     $req_projets = mysqli_query($connect, $requete);
//     return $req_projets;
// }

//Carousel 
// function fleches_carousel($connect)
// {
// $res_carousel='';
// $compteur=0;
// $req_projets= make_query($connect);
// while($ligne=mysqli_fetch_row($req_projets))
// {
//     if ($compteur == 0)
//     {
//         $res_carousel .= '
//         <li data-target="#carousel_dynamique" data-slide-to="'.$compteur.'" class="active"></li>';
//     }
//     else
//     {
//         $res_carousel .= '
//         <li data-target="#carousel_dynamique" data-slide-to="'.$compteur.'"></li> ';
//     }
//     $compteur = $compteur + 1;
// }
// return $res_carousel;
// };

// function carousel($connect)
// {
//     $res_carousel= '';
//     $compteur = 0;
//     $req_projets = make_query($connect);
//     while ($ligne=mysqli_fetch_row($req_projets))
//     {
//         if($compteur==0)
//         {
//             $res_carousel .= '<div class="item-active">';
//         }
//         else
//         {
//             $res_carousel .= '<div class="item">';
//         }
//         $res_carousel .= '<img class="d-block w-100" src="'.$ligne[3].'" alt="slide 1 : correspond au projet le plus récent n°'.$compteur.'">
//         <div class="carousel-caption">
//             <h3>'.$ligne[1].'</h3>
//         </div>
//         </div>';
//         $compteur = $compteur + 1;
//     }
// return $res_carousel;
// }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nom projet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.fullpage.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
<!-- Ne faites pas attention aux couleurs elles sont moches c'est juste histoire de travailler sur les div, nous n'avons pas encore trouvé de charte graphique -->
<div class="container-fluid">
        <div class="row cont_navbar">
            <?php include("navbar.php");?>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12 projets" id="projets_alea">
                <!-- Cette partie affichera les projet terminés aléatoirement (sans tags impliqués dans leur    affichage) -->
                <?php $req_projets=mysqli_query($connect, "SELECT * FROM projet ORDER BY pro_date LIMIT 10");
                // $i=0; ?>
                <div class="owl-carousel loop">
                    <?php  while($ligne=mysqli_fetch_row($req_projets))
                    {
                        echo '
                        <div> <img src="'.$ligne[3].'" class="img_owl"> <h3>'.$ligne[1].'</h3> </div>
                        ';
                        // $i++;                    
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 projets" id="projets_tags">
                <!-- Cette partie affichera les projets terminés correspondant aux tags de l'utilisateur connecté -->
            </div>
        </div>

        <div class="row" id="cont_aide_projets">
            Cette partie affichera les projets ayant besoin de contributeurs
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, repellat reiciendis? Sed id quod     reprehenderit cupiditate reiciendis error, repudiandae quis exercitationem, ipsam odio  consectetur     velit illo eos amet totam doloribus!
        </div>

        <div class="row" id="cont_footer">
            <?php include("footer.html")?>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/jquery.fullpage.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>