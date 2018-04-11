                          

                           <!--  modal Projets  -->


       <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Projets</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         <form method="post">
                        <div class="form-group">
                            <label for="mailinscription">E-mail</label>
                            <input type="email" class="form-control" id="mailinscription" name="mail" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                         <div class="form-group">
                            <label for="newprojet">Nouveau Projet</label>
                            <input type="#" class="form-control" id="newprojet" name="mdp1" placeholder="Nom du projet">
                        </div>  
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Valider</button>
      </div>
    </div>
  </div>
</div>  



                                  <!-- modal connexion -->


 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
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
                    <button type="submit" name="validation" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>


                    <!-- modal mot de passe oublié -->


<div class="modal fade" id="mdpoublie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
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
        <button type="button" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div>





                             <!-- modal inscription -->


       <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelinscription">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post">
                        <div class="form-group">
                            <label for="mailinscription1">E-mail</label>
                            <input type="email" class="form-control" id="mailinscription1" name="mail" aria-describedby="emailHelp" placeholder="Votre e-mail">
                        </div>
                        <div class="form-group">
                            <label for="mdpinscription">Mot de passe</label>
                            <input type="password" class="form-control" id="mdpinscription" name="mdp1" placeholder="Votre mot de passe">
                        </div>  
                         <div class="form-group">
                            <label for="mdpconfinscription">Confirmer mot de passe</label>
                            <input type="password" class="form-control" id="mdpconfinscription" name="mdp1" placeholder="Votre mot de passe">
                        </div>  
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Valider</button>
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
                    <a class="nav-link" href="#">Explorer</a>
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

