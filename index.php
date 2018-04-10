<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nom projet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
<!-- Ne faites pas attention aux couleurs elles sont moches c'est juste histoire de travailler sur les div, nous n'avons pas encore trouvé de charte graphique -->
<div class="container-fluid">
    <div class="row cont_navbar">
        <?php include("navbar.php"); ?>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12 projets" id="projets_alea">
            Cette partie affichera les projet terminés aléatoirement (sans tags impliqués dans leur affichage)
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio mollitia corrupti nemo quidem id odio earum. Mollitia a autem voluptatem rem cumque magnam id enim labore. Magni   dolore iste et!
        </div>
        <div class="col-md-6 col-xs-12 projets" id="projets_tags">
            Cette partie affichera les projets terminés correspondant aux tags de l'utilisateur connecté
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi nesciunt adquia     ipsa illum animi harum fuga reiciendis minima sequi eligendi ab corrupti eiusnecessitatibus    in vero, recusandae consequatur?
        </div>
    </div>

    <div class="row" id="cont_aide_projets">
        Cette partie affichera les projets ayant besoin de contributeurs
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, repellat reiciendis? Sed id quod    reprehenderit cupiditate reiciendis error, repudiandae quis exercitationem, ipsam odio consectetur     velit illo eos amet totam doloribus!
    </div>

    <div class="row" id="cont_footer">
        <?php include("footer.html"); ?>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>