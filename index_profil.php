<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "greendayÉ(&&", "pp_rodez");
    $connect->query("SET NAMES UTF8");
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Page profil</title>
</head>
<body>
<!--____________________________Modale______________________________________________ -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Modifier le profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<!--____________________________Formulaire Modale______________________________________________ -->

                    <form method="post">

                    <?php
                        if(isset($_POST['validation'])){
                            $pseudo_form = $_POST["pseudo"];
                            $avatar_form = $_POST["avatar"];
                            $notif_form = $_POST["notif"];
                            $mail_form = $_POST["mail"];
                            $mdp1_form = $_POST["mdp1"];
                            $mdp2_form = $_POST["mdp2"];

                            $modification_utilisateur=mysqli_query($connect, 
                            "UPDATE utilisateur SET util_pseudo='".$pseudo_form."', util_avatar='".$avatar_form."', util_notif='".$notif_form."', util_email='".$mail_form."', util_mdp='".$mdp2_form."' WHERE util_email='andrieux.m@live.fr';");
                            $resultat_modification=mysqli_fetch_array($modification_utilisateur);
                            if($modification_utilisateur == true){
                            echo "c'est good";
                            }else{
                                echo "pas bon";
                             }
                         }
                    ?>

                        <div class="form-group">
                            <label for="pseudoprofil">Pseudo</label>
                            <input type="text" class="form-control" id="pseudoprofil" name="pseudo" aria-describedby="pseudoHelp" placeholder="Votre pseudo">
                        </div>
                        <div class="form-group">
                            <label for="avatarprofil">Avatar</label>
                            <input type="file" class="form-control-file" id="avatarprofil" name="avatar" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="contribprofil">Notifications</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif" value="1" id="contribprofil" value="option1" checked>
                                <label class="form-check-label" for="contribprofil">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif" value="0"id="contribprofil2" value="option2">
                                <label class="form-check-label" for="contribprofil2">Non</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mailprofil">E-mail</label>
                            <input type="email" class="form-control" id="mailprofil" name="mail" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                        <div class="form-group">
                            <label for="mdpprofil">Ancien mot de passe</label>
                            <input type="password" class="form-control" id="mdpprofil" name="mdp1" placeholder="Votre ancien mot de passe">
                        </div>
                        <div class="form-group">
                            <label for="verifmdpprofil">Nouveau mot de passe</label>
                            <input type="password" class="form-control" id="verifmdpprofil" name="mdp2" placeholder="Votre nouveau mot de passe">
                        </div>   
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" name="validation" class="btn btn-danger">Valider</button>
                </div>
            </div>
        </div>
    </div>
<!--________________________________navbar_________________________________________-->
    <div class="container-fluid">
        <div class="row">
            <?php include("navbar.php") ?>
        </div>


<!--________________________________Card Profil_________________________________________-->



    <div id="global" class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 bg-light">
                    <div id="profil" class="card shadow">

<!--________________________________Php avatar card profil_________________________________________-->

                    <?php
                            $avatar_utilisateur=mysqli_query($connect, 
                            "SELECT util_avatar FROM utilisateur WHERE util_email = 'andrieux.m@live.fr';");
                            $resultat_avatar=mysqli_fetch_array($avatar_utilisateur);
                    ?>
                        <img id="photoprofil" class="card-img-top" src="<?php echo($resultat_avatar ['util_avatar']);?>" alt="Card image cap">
                        <div class="card-body">

<!--________________________________Php info card profil_________________________________________-->

                        <?php
                            $identite_utilisateur=mysqli_query($connect, 
                            "SELECT util_nom, util_prenom FROM utilisateur WHERE util_email = 'andrieux.m@live.fr';");
                            $resultat_identite=mysqli_fetch_array($identite_utilisateur);

                            $nbprojet_utilisateur=mysqli_query($connect, 
                            "SELECT COUNT(*) AS nbprojet FROM projet INNER JOIN utilisateur ON projet.util_id=utilisateur.util_id
                            WHERE util_email='andrieux.m@live.fr';");
                            $resultat_nbprojet=mysqli_fetch_array($nbprojet_utilisateur);

                            $nbcontrib_utilisateur=mysqli_query($connect,"SELECT COUNT(*) AS nbcontrib FROM contribution
                            INNER JOIN utilisateur ON contribution.util_id=utilisateur.util_id
                            WHERE util_email='andrieux.m@live.fr';");
                            $resultat_nbcontrib=mysqli_fetch_array($nbcontrib_utilisateur);
                            
                            $description_utilisateur=mysqli_query($connect,"SELECT util_description FROM utilisateur
                            WHERE util_email='andrieux.m@live.fr';");
                            $resultat_description=mysqli_fetch_array($description_utilisateur);

                            $description_utilisateur=mysqli_query($connect,"SELECT util_description FROM utilisateur
                            WHERE util_email='andrieux.m@live.fr';");
                            $resultat_description=mysqli_fetch_array($description_utilisateur);
                        ?>

<!--________________________________affichage bdd Card Profil_________________________________________-->

                        <h5 class="card-title"><?php echo($resultat_identite ['util_prenom']); echo($resultat_identite ['util_nom']);?></h5>
                        <p class="card-text"><?php echo($resultat_nbprojet ['nbprojet']);?>projets, 
                        <?php echo($resultat_nbcontrib ['nbcontrib']);?> contribution</p>
                    </div>
                    <ul class="list-group list-group-flush align">
                        <li class="list-group-item alignement"><?php echo($resultat_description ['util_description']);?></li>

<!--________________________________Php tags card profil_________________________________________-->

                        <?php
                            $tag_utilisateur=mysqli_query($connect,"SELECT tag_nom FROM tag_util INNER JOIN tag ON tag_util.tag_id=tag.tag_id
                            INNER JOIN utilisateur ON tag_util.util_id=utilisateur.util_id WHERE util_nom='Andrieux';");
                            while($resultat_tag=mysqli_fetch_array($tag_utilisateur)){
                        ?>

<!--________________________________affichage tags Card Profil_________________________________________-->

                        <li class="list-group-item alignement"><?php echo($resultat_tag ['tag_nom']);?></li>
                        <?php } ?>

<!--________________________________Bouton modale modif Card Profil_________________________________________-->

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Modifier profil
                        </button>
                    </ul>
                </div>

<!--________________________________Card commentaires_________________________________________-->

                <div class="card">
                    <ul class="list-group list-group-flush">

                        <?php
                            $commentaire_utilisateur=mysqli_query($connect, 
                            "SELECT comm_comment, comm_util_id_dest, comm_util_id_exp
                            FROM commentaire WHERE comm_util_id_dest='1';");
                            $resultat_commentaire=mysqli_fetch_array($commentaire_utilisateur);
                        ?>
                        <li class="list-group-item">
                            <?php echo($resultat_commentaire ['comm_comment']);?>
                        </li>
                    </ul>
                </div>
            </div>

<!--________________________________Card Projet_________________________________________-->
            <div class="col-md-8 col-sm-12 bg-light">
                <div class='card'> 
                    <div class='card-body'> 
                        <div class='card-deck card-marge'>
                        <?php
                        //On initialise nos compteurs, i correspond au quotient du nombre de projets /4, j correspond a un compteur qui va tourner entre 0 et 4.
                            $i = 0;
                            $j=0;
                        //On récupère les infos voulues (ici toutes on selectionnera celle qui nous interessent plus tard)
                            $req_projets=mysqli_query($connect, "SELECT * FROM projet ORDER BY pro_date");
                        //On fait un COUNT pour pouvoir récupérer un quotient sur i
                            $nbre_proj=mysqli_query($connect, "SELECT COUNT(*) FROM projet");
                            $nbr_proj=mysqli_fetch_array($nbre_proj);
                            $i=ceil($nbr_proj[0]/4);
                        //m servira pour la dernière rangée
                            $m=$nbr_proj[0]%4;
                        //On boucle jusqu'a ce qu'on arrive à la dernière rangée
                            while ($i>1)
                            {
                        //On créé des rangées une fois que 4 projets ont été placés sur la précédente
                            echo "<div class='row rangees_projets'>";
                            for ($j=0; $j<4 ; $j++) 
                            { 
                            $ligne=mysqli_fetch_row($req_projets);
                            echo "<div class='card shadow' id='projet_".$ligne[0]."'>
                            <img class='card-img-top img_projets' src='".$ligne[3]."'alt='Image décrivant le projet'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$ligne[1]."</h5>
                                <p class='card-text'>".$ligne[2]."</p>
                            </div>
                            </div>";
                            }
                            $i--;
                            echo "</div>";
                            };
                            //On est sur la dernière rangée, on créé donc un dernier row
                            echo "
                            <div class='row rangees_projets'>";
                            //Si jamais on est sur un multiple de 4, on change la valeur de m afin qu'on puisse afficher la dernière rangée
                            if ($m==0)
                            {
                            $m=4;
                            }
                            //le $m (modulo de la division) est la pour nous indiquer combien de cartes on va créer, ici la valeur de m alternera entre 1 et 3. 
                            for ($j=0; $j<$m ; $j++) 
                            { 
                            $ligne=mysqli_fetch_row($req_projets);
                            echo "<div class='card shadow' id='projet_".$ligne[0]."'>
                            <img class='card-img-top img_projets' src='".$ligne[3]."'alt='Image décrivant le projet'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$ligne[1]."</h5>
                                <p class='card-text'>".$ligne[2]."</p>
                            </div>
                            </div>";
                            }
                            echo "</div>";
                            ?>
                        </div>
                    </div>
                 </div>
            </div>
    </div>
</div>          

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
