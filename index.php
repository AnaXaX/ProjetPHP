<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Suivi pour vos étudiants</title>
    <!--UTF-8 -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--CSS Personnalisé -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--CSS bootStrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!--font 
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> </head>
-->
</head>

<body>

    <?php
        require("navbar.php");
    ?>

        <div class="container">

            <h2 class="text-center">
                <?php
                if(isset($_SESSION['mail'])){
                    echo 'Bonjour '.$_SESSION['mail'];
                }else{
                    echo 'Veuillez vous connecter pour consulter votre agenda';
                }
            ?>
            </h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/agenda.jpg" alt="Agenda" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="img/tablet.jpg" alt="Tablette" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="img/pc.jpg" alt="PC" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Précedent</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>





        <script src="js/jquery.min.js"></script>

        <script src="js/bootstrap.js"></script>
</body>

</html>