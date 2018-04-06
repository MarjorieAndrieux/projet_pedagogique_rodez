<div class="row">
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
                    echo "
                    <div class='row rangees_projets'>";
                    for ($j=0; $j<4 ; $j++) 
                    { 
                       $ligne=mysqli_fetch_row($req_projets);
                        echo "
                        <div class='card shadow' id='projet_".$ligne[0]."'>
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
                        echo "
                        <div class='card shadow' id='projet_".$ligne[0]."'>
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