                          
<?php
$connect= mysqli_connect("localhost", "root", "", "pp_rodez");
$connect->query("set names UTF8");
$testutilisateur='Pineiro';
?>

<!--  modal Projets  -->
                    <?php
                        if(isset($_POST['valider_projet'])){
                            $nom_projet = $_POST["nomduprojet"];
                            $description_projet = $_POST["descriptionprojet"];
                            $image_projet = $_POST["imageprojet"];
                            $deadline_projet = $_POST["deadlineprojet"];
                            $statut_projet = $_POST["contribprojet"];
                            

                            $projet_utilisateur=mysqli_query($connect, 
                            "INSERT INTO `projet`(pro_nom, pro_description, pro_image, pro_deadline, pro_statut, pro_util_id)
                    VALUES ('".$nom_projet."','".$description_projet."','".$image_projet."','".$deadline_projet."','".$statut_projet."', '".$testutilisateur."');");

                            $resultat_projet=mysqli_fetch_array($projet_utilisateur);
                            if($projet_utilisateur == true){
                            echo "c'est good";
                            }else{
                                echo "pas bon";
                             }
                         }
                    ?>
                   

<div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header bg-danger">
      <h5 class="modal-title" id="exampleModalLabel1">Projets</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     <form method="post">
      <div class="form-group">
       <label for="newprojet">Nouveau Projet</label>
      <input type="#" class="form-control" id="newprojet" name="nomduprojet" placeholder="Nom du projet">
    </div> 
   <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default" name="descriptionprojet">Description</span>
   </div>
     <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
   </div>

                         
  <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02" name="imageprojet" >
    <label class="custom-file-label" for="inputGroupFile02">Choisir fichier</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="">Upload</span>
  </div>
</div>
<div class="form-group">

                            <label for="contribprojet1">Besoin de contributeur</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contribprojet" value="1" id="contribprojet1" value="option1" checked>
                                <label class="form-check-label" for="contribprojet1">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contribprojet" value="0"id="contribprojet" value="option2">
                                <label class="form-check-label" for="contribprojet">Non</label>
                            </div>
                        </div>
                        <div class="form-group">
    <label for="exampleFormControlInput1">Deadline
    </label>
    <input type="date" class="form-control" id="deadline-projet" name="deadlineprojet">
  </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" name="valider_projet" class="btn btn-danger">Valider</button>
      </div>

                    </form>
      </div>
     
    </div>
  </div>
</div>  



                                  <!-- modal connexion -->


 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                    <a class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="mailconnexion">E-mail</label>
                            <input type="email" class="form-control" id="mailconnexion" name="mailconnexion" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                        <div class="form-group">
                            <label for="mdpconnexion">Mot de passe</label>
                            <input type="password" class="form-control" id="mdpconnexion" name="mdp1" placeholder="Votre mot de passe">
                        </div>  
                    </form>
                </div>
                <div class="modal-footer">
                   <!--  bouton mot de passe oublié dans la modal connexion-->
                    <button type="button" class="btn" data-toggle="modal" data-dismiss="modal" data-target="#mdpoublie">
                     Mot de passe oublié</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" name="validation" class="btn btn-danger">Valider</button>
                </div>
            </div>
        </div>
    </div>


                    <!-- modal mot de passe oublié -->


<div class="modal fade" id="mdpoublie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabelmdp">Mot de passe oublié</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post">
                        <div class="form-group">
                            <label for="mailmdp">E-mail</label>
                            <input type="email" class="form-control" id="mailmdp" name="mailmdp" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-danger">Envoyer</button>
      </div>
    </div>
  </div>
</div>


                             <!-- modal inscription -->

                    <?php
                        if(isset($_POST['valider_inscription'])){
                            $pseudo_inscri = $_POST["pseudo_inscription"];
                            $avatar_inscri = $_POST["avatar_inscription"];
                            $notif_inscri = $_POST["notif1"];
                            $mail_inscri = $_POST["mailinscription"];
                            $mdp1_inscri = $_POST["mdp1"];
                            $mdp2_inscri = $_POST["mdp2"];

                            $inscription_utilisateur=mysqli_query($connect, 
                            "INSERT INTO utilisateur(util_email, util_mdp, util_pseudo, util_avatar, util_notif)
                            VALUES ('".$mail_inscri."', ' ".$mdp2_inscri."', ' ".$pseudo_inscri."', '".$avatar_inscri."', '".$notif_inscri."');");

                            $resultat_inscription=mysqli_fetch_array($inscription_utilisateur);
                            if($inscription_utilisateur == true){
                            echo "c'est good";
                            }else{
                                echo "pas bon";
                             }
                         }
                    ?>


       <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalLabelinscription">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" action="index.php" >
             <!-- Pseudo -->
                        <div class="form-group">
                            <label for="pseudoinscription">Pseudo</label>
                            <input type="text" class="form-control" id="pseudo_inscription" name="pseudo_inscription" aria-describedby="pseudoHelp" placeholder="Votre pseudo">
                          </div>


                              <!-- Avatar -->
                         <label for="avatarinscription">Avatar</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="avatarinscription" name="avatar-inscription">
                                    <label class="custom-file-label" for="inputGroupFile02">Choisir fichier</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="avatarinscription1">Upload</span>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="mailinscription1">E-mail</label>
                            <input type="email" class="form-control" id="mailinscription1" name="mailinscription" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                        <div class="form-group">
                            <label for="mdpinscription">Mot de passe</label>
                            <input type="password" class="form-control" id="mdpinscription" name="mdp1" placeholder="Votre mot de passe">
                        </div>  
                         <div class="form-group">
                            <label for="mdpconfinscription">Confirmer mot de passe</label>
                            <input type="password" class="form-control" id="mdpconfinscription" name="mdp2" placeholder="Votre mot de passe">
                        </div> 
                        <div class="form-group">
                            <label for="notification1">Notification</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif1" value="1" id="notification1" value="option1" checked>
                                <label class="form-check-label" for="notification1">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif" value="0"id="notification" value="option2">
                                <label class="form-check-label" for="notification">Non</label>
                            </div>
                        </div>
                        <div class="modal-footer">
       
      
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" name="valider_inscription" class="btn btn-danger">Valider</button>
        </div>
                    </form>


      </div>
      
    </div>
  </div>
</div>                      


                                   <!-- nav bar  -->


<div class="container-fluid">
    <nav class="navbar navbar-expand-lg " id="nav_bar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"><img src="images/burger.png" width="40" height="40" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#" id="logo"><img src="images/logo.jpg" id="logo" width="70" height="70"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil</a>
                </li>

                <li class="nav-item">
                    <a  class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal0">
                        Projets</a>     
                </li> 

                      <li class="nav-item">
                    <a  class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">
                        Connexion</a>     
                </li> 

                <li class="nav-item">
                    <a  class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal1">
                        Inscription</a>     
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" id="recherche">
                <input class="form-control mr-sm-2" id="barre_recherche">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn_recherche"><img src="images/search.png" id="img_btn_recherche"></button>
            </form>
        </div>
    </nav>
</div>

