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
<div class="row">
<!-- Menu Réduit Changement -->
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation" style="z-index:1;">
    <div class="container">
        <!-- container-fluid -->
        <!-- bouton resized -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-badouch-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!--Fin bouton resized --><a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Tamarine</a></div>
        <div class="collapse navbar-collapse" id="bs-badouch-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="home"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Accueil</a></li>
                <li id="agenda"><a href="agenda.php"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Agenda</a></li>
                <li id="contact"><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li id="inscription"><a href="inscription.php">Inscription</a></li>
                <?php
                session_start();
                if(isset($_SESSION['mail'])){
                    echo '<li><a href="logout.php">Déconnexion</a></li>';
                }else{
                    echo '<!-- Connexion drop -->
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Connexion<b class="caret"></b></a>
                    <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Adresse mail</label>
                                            <input name="mail" type="email" class="form-control" id="exampleInputEmail" placeholder="Adresse mail" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                                            <input name ="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Mot de passe" required>
                                        </div>
                                        <table  cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><label class="radio-inline"><input type="radio" name="user" value="etudiant" required>Étudiant</label></td>
                                            <td><label class="radio-inline"><input type="radio" name="user" value="parent">Parent</label><td>
                                            <td><label class="radio-inline"> <input type="radio" name="user" value="professeur">Prof</label><td>
                                        </tr>
                                        </table>
                                        <br>
                                        <div class="form-group">
                                            <button name="submit" id="checkBtn" type="submit" value="submit" class="btn btn-success btn-block">Connexion</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Connexion avec Google">
                            <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Connexion avec Twitter">
                        </li>
                    </ul>
                </li>
                <!-- End connexion drop -->';
                }
                ?>
                                    
            </ul>

        </div>
    </div>
</nav>
</div>
               