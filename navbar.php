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
                <li><a href="http://www.jquery2dotnet.com">Sign Up</a></li>
                <li class="dropdown">
                    <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                    <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                       <input type="checkbox"> Remember me
                                       </label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                            <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
