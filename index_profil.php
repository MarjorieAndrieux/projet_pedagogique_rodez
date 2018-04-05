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
    <link rel="stylesheet" href="main.css">
    <title>Page profil</title>
</head>
<body>
<!--____________________________Modale______________________________________________ -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier le profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<!--____________________________Formulaire Modale______________________________________________ -->

                    <form>
                        <div class="form-group">
                            <label for="pseudoprofil">Pseudo</label>
                            <input type="text" class="form-control" id="pseudoprofil" aria-describedby="pseudoHelp" placeholder="Votre pseudo">
                        </div>
                        <div class="form-group">
                            <label for="avatarprofil">Avatar</label>
                            <input type="file" class="form-control-file" id="avatarprofil" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="contribprofil">Besoin de contributeur</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contribprofil" id="contribprofil" value="option1" checked>
                                <label class="form-check-label" for="contribprofil">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contribprofil" id="contribprofil2" value="option2">
                                <label class="form-check-label" for="contribprofil2">Non</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mailprofil">E-mail</label>
                            <input type="email" class="form-control" id="mailprofil" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                        <div class="form-group">
                            <label for="mdpprofil">Mot de passe</label>
                            <input type="password" class="form-control" id="mdpprofil" placeholder="Votre mot de passe">
                        </div>
                        <div class="form-group">
                            <label for="verifmdpprofil">Mot de passe</label>
                            <input type="password" class="form-control" id="verifmdpprofil" placeholder="Retappez votre mot de passe">
                        </div>   
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>
<!--________________________________navbar_________________________________________-->
    <div class="container-fluid">
        <div class="row cont_navbar"></div>


<!--________________________________Card Profil_________________________________________-->



    <div id="global" class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 bg-light">
                    <div id="profil" class="card shadow">
                        <img id="photoprofil" class="card-img-top" src="images/photo_profil.jpg" alt="Card image cap">
                        <div class="card-body">

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
                            
 

                        <h5 class="card-title"><?php echo($resultat_identite ['util_prenom']); echo($resultat_identite ['util_nom']);?></h5>
                        <p class="card-text"><?php echo($resultat_nbprojet ['nbprojet']);?>projets, 
                        <?php echo($resultat_nbcontrib ['nbcontrib']);?> contribution</p>
                    </div>
                    <ul class="list-group list-group-flush align">
                        <li class="list-group-item alignement"><?php echo($resultat_description ['util_description']);?></li>
                        <li class="list-group-item alignement">Tag Tag Tag Tag</li>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Modifier profil
                        </button>
                    </ul>

                </div>
            </div>












<!--________________________________Card Projet_________________________________________-->
            <div class="col-md-8 col-sm-12 bg-light">
                <div class="card">
                    <div class="card-body">
                        <div class="card-deck card-marge">
        
<!--________________________________Card Projet 1_________________________________________-->

                            <div class="card shadow">
                                <img class="card-img-top" src="images/fond4.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>

<!--________________________________Card Projet 2_________________________________________-->

                            <div class="card shadow">
                                <img class="card-img-top" src="images/fond1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        
<!--________________________________Card Projet 3_________________________________________-->

                            <div class="card shadow">
                                <img class="card-img-top" src="images/fond2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-deck card-marge">
                        
<!--________________________________Card Projet 4_________________________________________-->

                            <div class="card shadow">
                                <img class="card-img-top" src="images/fond3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>

<!--________________________________Card Projet 5_________________________________________-->

                            <div class="card shadow">
                                <img class="card-img-top" src="images/fond5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>

<!--________________________________Card Projet 6_________________________________________-->

                            <div class="card shadow">
                                <img class="card-img-top" src="images/fond6.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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