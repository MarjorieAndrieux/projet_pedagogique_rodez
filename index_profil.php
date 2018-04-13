<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "greendayÉ(&&", "pp_rodez");
    $connect->query("SET NAMES UTF8");
    
    $essais_utilisateur= 'Andrieux'
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
<!--____________________________Modale:modification profil______________________________________________ -->
    <div class="modal fade" id="modalemodiffade" tabindex="-1" role="dialog" aria-labelledby="modale_modifprofil" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="modale_modifprofil">Modifier le profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<!--____________________________Modale: Formulaire modification profil______________________________________________ -->

                    <form method="post" action="index_profil.php">

                    <?php
                        if(isset($_POST['validation'])){
                            $pseudo_form = $_POST["pseudo_modifprofil"];
                            $avatar_form = $_POST["avatar_modifprofil"];
                            $notif_form = $_POST["notif_modifprofil"];
                            $mail_form = $_POST["mail_modifprofil"];
                            $mdp1_form = $_POST["mdp1_modifprofil"];
                            $mdp2_form = $_POST["verifmdp_modifprofil"];

                            $modification_utilisateur=mysqli_query($connect, 
                            "UPDATE utilisateur SET util_pseudo='".$pseudo_form."', util_avatar='".$avatar_form."', util_notif='".$notif_form."', util_email='".$mail_form."', util_mdp='".$mdp2_form."' WHERE util_nom='".$essais_utilisateur."';");

                            $resultat_modification=mysqli_fetch_array($modification_utilisateur);
                            if($modification_utilisateur == true){
                            echo "c'est good";
                            }else{
                                echo "pas bon";
                             }
                         }
                    ?>

                         <!-- Pseudo -->
                        <div class="form-group">
                            <label for="pseudoprofil">Pseudo</label>
                            <input type="text" class="form-control" id="pseudo_modifprofil" name="pseudo_modifprofil" aria-describedby="pseudoHelp" placeholder="Votre pseudo">

                         <!-- Avatar -->
                         <label for="avatarprofil">Avatar</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="avatarprofil" name="avatar-modifprofil">
                                    <label class="custom-file-label" for="inputGroupFile02">Choisir fichier</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>

                         <!-- Notifications -->
                            <label for="notif_modifprofil">Notifications</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif_modifprofil" value="1" id="notif_modifprofil1" value="option1" checked>
                                <label class="form-check-label" for="notif_modifprofil1">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif_modifprofil" value="0"id="notif_modifprofil2" value="option2">
                                <label class="form-check-label" for="notif_modifprofil2">Non</label>
                            </div>

                         <!-- Mail -->
                            <label for="mail_modifprofil">E-mail</label>
                            <input type="email" class="form-control" id="mail_modifprofil" name="mail_modifprofil" aria-describedby="emailHelp" placeholder="Votre e-mail">

                         <!-- Mot de passe -->
                            <label for="mdp1_modifprofil">Ancien mot de passe</label>
                            <input type="password" class="form-control" id="mdp1_modifprofil" name="mdp1_modifprofil" placeholder="Votre ancien mot de passe">

                         <!-- vérification mot de passe -->
                            <label for="verifmdp_modifprofil">Nouveau mot de passe</label>
                            <input type="password" class="form-control" id="verifmdp_modifprofil" name="verifmdp_modifprofil" placeholder="Votre nouveau mot de passe">

                         <!-- Boutons -->
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" name="validation" class="btn btn-danger">Valider</button>
                        </div>



                    </form>
                </div>

            </div>
        </div>
    </div>

<!--____________________________Modale: projet______________________________________________ -->

    <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modaleprojetfade">
  Découvrir le projet
</button>


    <div class="modal fade" id="modaleprojetfade" tabindex="-1" role="dialog" aria-labelledby="modale_detailprojet" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="modale_detailprojet">Titre projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

<!--____________________________Modale: Détail du projet______________________________________________ -->
                    <div class="container-fluid">
                        <div class="row">

<!--____________________________Carte information sur le projet______________________________________________ -->

                            <div class="col-md-4 col-sm-12 bg-light">
                                <div class="card">


                                    <img class="card-img-top" src="..." alt="Card image cap">
                                    <div class="card-body">
                                        <?php echo("
                                        <h3 class='card-title'>".$resultat_projet[1]."</h3>
                                        <h5 class='card-title'>".$resultat_projet[7]."</h5>
                                        <p class='card-text'>".$resultat_projet[2]."</p>
                                        <p class='card-text'>".$resultat_projet[5]."</p>
                                        <p class='card-text'>".$resultat_projet[4]."</p>
                                        <ul class='list-group list-group-flush'>
                                            <li class='list-group-item'>Tags</li>
                                        </ul>");
                                        ?>
                                    </div>
                                </div>
                            </div>

<!--____________________________Carte projet: contenu du projet______________________________________________ -->

                            <div class="col-md-8 col-sm-12 bg-light">
                                <div class="card">
                                    <div class="card-body">
                                        Affichage
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--________________________________Barre de navigation_________________________________________-->
    <div class="container-fluid">
        <div class="row">
            <?php include("navbar.php") ?>
        </div>


<!--________________________________Carte profil_________________________________________-->



    <div id="global" class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 bg-light">
                    <div id="profil" class="card mt-4 shadow">

<!--________________________________Carte profil: Script affichage des données_________________________________________-->

                    <?php
                        // Avatar
                        $avatar_utilisateur=mysqli_query($connect, 
                        "SELECT util_avatar FROM utilisateur WHERE util_nom ='".$essais_utilisateur."';");
                        $resultat_avatar=mysqli_fetch_array($avatar_utilisateur);

                        // Pseudo
                        $identite_utilisateur=mysqli_query($connect, 
                        "SELECT util_pseudo FROM utilisateur WHERE util_nom = '".$essais_utilisateur."';");
                        $resultat_identite=mysqli_fetch_array($identite_utilisateur);

                        // Projet
                        $nbprojet_utilisateur=mysqli_query($connect, 
                        "SELECT COUNT(*) AS nbprojet FROM projet INNER JOIN utilisateur ON projet.pro_util_id=utilisateur.util_id
                        WHERE util_nom='".$essais_utilisateur."';");
                        $resultat_nbprojet=mysqli_fetch_array($nbprojet_utilisateur);

                        // Contribution
                        $nbcontrib_utilisateur=mysqli_query($connect,"SELECT COUNT(*) AS nbcontrib FROM contribution
                        INNER JOIN utilisateur ON contribution.contrib_util_id=utilisateur.util_id
                        WHERE util_nom='".$essais_utilisateur."';");
                            $resultat_nbcontrib=mysqli_fetch_array($nbcontrib_utilisateur);
                        
                        // Description
                        $description_utilisateur=mysqli_query($connect,"SELECT util_description FROM utilisateur
                        WHERE util_nom='".$essais_utilisateur."';");
                        $resultat_description=mysqli_fetch_array($description_utilisateur);
                    ?>

<!--________________________________Carte profil: Affichage des données_________________________________________-->
                        <!-- Avatar -->
                        <img id="photo_profil" class="card-img" src="<?php echo($resultat_avatar ['util_avatar']);?>" alt="Card image cap">

                        <div class="card-body font-weight-bold">
                        
                        <!-- Pseudo -->
                            <h3 class="card-title font-weight-bold">
                                <?php echo($resultat_identite ['util_pseudo']);?>
                            </h3>

                        <!-- Projets/contributions -->
                            <p class="card-text">
                                <?php echo($resultat_nbprojet ['nbprojet']);?> projets, 
                                <?php echo($resultat_nbcontrib ['nbcontrib']);?> contribution
                            </p>
                        </div>
                        <ul class="list-group list-group-flush align">
                        
                        <!-- Description -->
                            <li class="list-group-item alignement font-weight-bold">
                                <?php echo($resultat_description ['util_description']);?>
                            </li>

                        <!-- Tags -->
                        <?php
                            $tag_utilisateur=mysqli_query($connect,"SELECT tag_nom FROM tag_util INNER JOIN tag ON tag_util.tag_id=tag.tag_id
                            INNER JOIN utilisateur ON tag_util.tag_util_id=utilisateur.util_id WHERE util_nom='".$essais_utilisateur."';");
                            while($resultat_tag=mysqli_fetch_array($tag_utilisateur)){
                        ?>

                        <li class="marge-list font-weight-bold">
                            <?php echo($resultat_tag ['tag_nom']);?>
                        </li>
                        <?php } ?>

<!--________________________________Carte profil: Bouton de la modale modification de profil___________________________-->

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalemodiffade">
                            Modifier profil
                        </button>
                    </ul>
                </div>

<!--________________________________Carte commentaire__________________________________-->

                <div class="card mt-4 mb-4 shadow">
                    <div class="card-body">
                        <form method="post" action="index_profil.php">
                            <div class="form-group">

<!--________________________________Carte commentaire: Script d'envois des commentaires_____________________-->

                                <?php
                                if(isset($_POST['valider'])){
                                    $comment_utilisateur = $_POST["comment_utilisateur"];
        
                                    $envois_commentaire=mysqli_query($connect, 
                                    "INSERT INTO commentaire(comm_comment, comm_util_id_dest, comm_util_id_exp)
                                    VALUES ('".$comment_utilisateur."', 1, 2);");
        
                                    $resultat_commentaire=mysqli_fetch_array($commentn_utilisateur);
                                    if($comment_utilisateur == true){
                                    echo "c'est good";
                                    }else{
                                        echo "pas bon";
                                     }
                                 }
                                ?>

<!--________________________________Carte commentaire: Formulaire de commentaire_____________________-->

                                <label class="font-weight-bold" for="comment_utilisateur">Votre commentaire:</label>
                                <textarea class="form-control" id="comment_utilisateur" name="comment_utilisateur" rows="3"></textarea>
                                <button type="submit" name="valider" class="btn btn-danger mt-1">Envoyer</button>
                            </div>
                        </div>
                    </form>
                    <ul class="list-group list-group-flush">

<!--________________________________Carte commentaire: Script d'affichage des commentaires_____________________-->

                        <?php
                            $commentaire_utilisateur=mysqli_query($connect, 
                            "SELECT comm_comment, util_pseudo FROM utilisateur
                            INNER JOIN commentaire ON utilisateur.util_id=commentaire.comm_util_id_dest
                            where util_nom='".$essais_utilisateur."';");
                            $resultat_commentaire=mysqli_fetch_array($commentaire_utilisateur);
                        ?>

                        <li class="list-group-item">
                            <h4><?php echo($resultat_commentaire ['util_pseudo']); ?>:</h4>
                            <?php echo($resultat_commentaire ['comm_comment']);?>
                        </li>
                    </ul>
                </div>
            </div>






<!--________________________________Carte projets_________________________________________-->
            <div class="col-md-8 col-sm-12 bg-light">
                <div class='card mt-4'> 
                    <div class='card-body'> 
                        <div class='card-deck'>

<!--________________________________Carte projets: Script d'affichage des projets de l'utilisateur_____________________-->

                        <?php
                        //On initialise nos compteurs, i correspond au quotient du nombre de projets /4, j correspond a un compteur qui va tourner entre 0 et 4.
                            $i = 0;
                            $j=0;
                        //On récupère les infos voulues (ici toutes on selectionnera celle qui nous interessent plus tard)
                            $projets_utilisateur=mysqli_query($connect, "SELECT * FROM projet
                            INNER JOIN utilisateur ON projet.pro_util_id = utilisateur.util_id
                            WHERE util_nom = '".$essais_utilisateur."';");
                        //On fait un COUNT pour pouvoir récupérer un quotient sur i
                            $projets_comptage=mysqli_query($connect, "SELECT COUNT(*) AS nbprojet FROM projet 
                            INNER JOIN utilisateur ON projet.pro_util_id=utilisateur.util_id
                            WHERE util_nom='".$essais_utilisateur."';");
                            $resultat_projets=mysqli_fetch_array($projets_comptage);
                            $i=ceil($resultat_projets[0]/4);
                        //m servira pour la dernière rangée
                            $m=$resultat_projets[0]%4;
                        //On boucle jusqu'a ce qu'on arrive à la dernière rangée
                            while ($i>1)
                            {
                        //On créé des rangées une fois que 4 projets ont été placés sur la précédente
                            echo "<div class='row rangees_projets'>";
                            for ($j=0; $j<4 ; $j++) 
                            { 
                            $resultat_=mysqli_fetch_row($projets_utilisateur);
                            echo "<div class='card shadow' data-projet='.$ligne[0].' id='projet_".$ligne[0]."'>
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
                            $ligne=mysqli_fetch_row($projets_utilisateur);
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

<!--__________________________________________Footer______________________________-->

    <div class="row" id="cont_footer">
        <?php include("footer.php"); ?>
    </div>
</div>          

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
