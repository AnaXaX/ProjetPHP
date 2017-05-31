<!-- Menu Réduit Changement -->
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <!-- container-fluid -->
        <!-- bouton resized -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-badouch-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!--Fin bouton resized --><a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Tamarine</a></div>
        <div class="collapse navbar-collapse" id="bs-badouch-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Accueil</a></li>
                <li><a href="tamarine.php"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Tamarine</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="inscription.php">Inscription</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Connexion<b class="caret"></b></a>
                    <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Adresse mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Adresse mail" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Mot de passe" required>
                                        </div>
                                        <div class="checkbox">
                                            <label class="radio-inline"><input  type="radio" name="user" value="etudiant" required>Étudiant</label>
                                            <label class="radio-inline"><input type="radio" name="user" value="parent">Parent</label>
                                            <label class="radio-inline"> <input type="radio" name="user" value="professeur">Prof</label>
                                        </div>
                                        <div class="form-group">
                                            <button id="checkBtn" type="submit" value="submit" class="btn btn-success btn-block">Connexion</button>
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
            </ul>

        </div>
    </div>
</nav>
