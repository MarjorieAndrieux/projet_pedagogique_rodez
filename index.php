<?php
$connect= mysqli_connect("localhost", "root", "greendayÉ(&&", "pp_rodez");
$connect->query("set names UTF8");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Share it!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.fullpage.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>

<!-- ________________________Navbar______________________________________________ -->
<!-- Ne faites pas attention aux couleurs elles sont moches c'est juste histoire de travailler sur les div, nous n'avons pas encore trouvé de charte graphique -->
    <div class="container-fluid bg-danger">
        <div class="row cont_navbar">
            <?php include("navbar.php");?>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-md-6 col-xs-12 projets" id="projets_alea">

<!-- ___________________Derniers projets postés_________________________________-->
                <div class="card mt-3 shadow">
                    <div class="card-body">
                <!-- div resultat : div test pour mise en place cookie -->
                <!-- <div id=resultat> -->
                <!-- </div> -->
                <!-- Cette partie affichera les projet terminés aléatoirement (sans tags impliqués dans leur    affichage) -->
                        <h3 class="center">Derniers projets postés</h3>
                        <?php $req_projets=mysqli_query($connect, "SELECT * FROM projet ORDER BY pro_date LIMIT 10"); 
                        ?>
                        <div class="owl-carousel owl-proj owl-theme"> 
                            <?php  while($ligne=mysqli_fetch_row($req_projets))
                            {
                            echo '
                            <div> <img src="'.$ligne[3].'" class="img_owl"> <h3>'.$ligne[1].'</h3> </div>';
                            }
                            ?>
                        </div> 
                    </div>
                </div>
            </div>

 <!-- ___________________Projets liés aux tags_________________________________-->
           
            <div class="col-md-6 col-xs-12 projets" id="projets_tags">
                <div class="card mt-3 shadow">
                    <div class="card-body">
                <!-- Cette partie affichera les projets terminés correspondant aux tags de l'utilisateur connecté -->
                <!-- Cette requête est à changer lors du dernier WHERE pour pouvoir avoir les tags qui s'adaptent a l'utilisateur -->
                        <h3>Projets liés à vos tags</h3>
                        <?php $req_projets_tags=mysqli_query($connect, "SELECT DISTINCT pro_nom, pro_image FROM tag_pro INNER JOIN tag_util ON tag_pro.tag_id = tag_util.tag_id INNER JOIN projet ON tag_pro_id = pro_id WHERE tag_util.tag_util_id = 1 ");
                        ?>
                        <div class="owl-carousel owl-proj owl-theme">
                            <?php  while($ligne_tag=mysqli_fetch_row($req_projets_tags))
                            {
                            echo '
                            <div> <img src="'.$ligne_tag[1].'" class="img_owl"> <h3>'.$ligne_tag[0].'</h3> </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- ___________________Projets recherchant contributeurs_________________________________-->

            <div class="row" id="cont_aide_projets">
                <div class="card mt-3 mb-3 ml-3 mr-3 shadow">
                    <div class="card-body">
                        <div class="col-12 projets">
                            <h3>Projets recherchant des contributeurs : </h3>
                            <?php $req_projets_contrib=mysqli_query($connect, "SELECT * FROM `projet` WHERE pro_statut = 1 ORDER BY pro_date LIMIT 20 "); 
                            ?>
                            <div class="owl-carousel owl-theme" id="owl-contrib">
                                <?php while($ligne_contrib=mysqli_fetch_row($req_projets_contrib))
                                {
                                echo '
                                <div> <img src="'.$ligne_contrib[3].'" class="img_owl"> <h3>'.$ligne_contrib[1].'</h3> </div>';
                                } 
                                ?>
                                <?php $modification_utilisateur=mysqli_query($connect,
                                "UPDATE utilisateur SET util_pseudo='".$pseudo_form."', util_avatar='".$avatar_form."', util_notif='".$notif_form."', util_email='".$mail_form."', util_mdp='".$mdp2_form."' WHERE util_email='andrieux.m@live.fr';"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="cont_footer">
                <?php include("footer.php")?>
            </div>
        </div>
    </div>
    

<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/jquery.fullpage.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>