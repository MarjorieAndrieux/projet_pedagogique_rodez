                          

                           <!--  modal Projets  -->


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
                            <input type="#" class="form-control" id="newprojet" name="mdp1" placeholder="Nom du projet">
                        </div>  
                        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
  </div>
  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>

                         
                        <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02">Choisir fichier</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="">Upload</span>
  </div>
</div>
<div class="form-group">
                            <label for="contribprojet1">Besoin de contributeur</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif" value="1" id="contribprojet1" value="option1" checked>
                                <label class="form-check-label" for="contribprojet1">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif" value="0"id="contribprojet" value="option2">
                                <label class="form-check-label" for="contribprojet">Non</label>
                            </div>
                        </div>
                        <div class="form-group">
    <label for="exampleFormControlInput1">Deadline
    </label>
    <input type="date" class="form-control" id="deadline-projet">
  </div>


                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-danger">Valider</button>
      </div>
    </div>
  </div>
</div>  
                                  <!-- modal connexion -->
<div class="modal fade" id="modal_connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                    <a class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                    </div>
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="mailconnexion">E-mail</label>
                                <input type="email" class="form-control" id="mailconnexion" name="mailconnexion" aria-describedby="emailHelp" placeholder="Votre e-mail">
                            </div>
                            <div class="form-group">
                                <label for="mdpconnexion">Mot de passe</label>
                                <input type="password" class="form-control" id="mdpconnexion" name="mdpconnexion" aria-describedby="mdpHelp" placeholder="Votre mot de passe">
                            </div>  
                    </div>
                    <div class="modal-footer">
                        <!--  bouton mot de passe oublié dans la modal connexion-->
                        <button type="button" class="btn" data-toggle="modal" data-dismiss="modal" data-target="#mdpoublie">
                         Mot de passe oublié</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" name="validation" class="btn btn-danger" id="valid_connexion">Valider</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


                    <!-- modal mot de passe oublié -->
    <div class="modal fade" id="mdpoublie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title" id="exampleModalLabelmdp">Mot de passe oublié</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="mailmdp">E-mail</label>
                            <input type="email" class="form-control" id="mailmdp" name="mailmdp" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-danger">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





                             <!-- modal inscription -->


       <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabelinscription">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post">
             <!-- Pseudo -->
                        <div class="form-group">
                            <label for="pseudoconnexion">Pseudo</label>
                            <input type="text" class="form-control" id="pseudoconnexion" name="pseudo_connexion" aria-describedby="pseudoHelp" placeholder="Votre pseudo">
                          </div>


                              <!-- Avatar -->
                         <label for="avatarconnexion">Avatar</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="avatarconnexion" name="avatar-modifprofil">
                                    <label class="custom-file-label" for="inputGroupFile02">Choisir fichier</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="avatarconnexion1">Upload</span>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="mailinscription1">E-mail</label>
                            <input type="email" class="form-control" id="mailinscription1" name="mailiscription" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                        <div class="form-group">
                            <label for="mdpinscription">Mot de passe</label>
                            <input type="password" class="form-control" id="mdpinscription" name="mdp1" placeholder="Votre mot de passe">
                        </div>  
                         <div class="form-group">
                            <label for="mdpconfinscription">Confirmer mot de passe</label>
                            <input type="password" class="form-control" id="mdpconfinscription" name="mdp1" placeholder="Votre mot de passe">
                        </div> 
                        <div class="form-group">
                            <label for="notification1">Notification</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif" value="1" id="notification1" value="option1" checked>
                                <label class="form-check-label" for="notification1">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="notif" value="0"id="notification" value="option2">
                                <label class="form-check-label" for="notification">Non</label>
                            </div>
                        </div>

                    </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-danger" id="valid_inscription">Valider</button>
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
                    <a  class="nav-link" href="#" data-toggle="modal" data-target="#modal_connexion">
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

