<?php
        require("navbar.php");
    ?>
    <div class="container">

        <h2 class="text-center">
            <?php
                if(!isset($_SESSION['user'])){
                    echo '';
                }else{
                    echo 'Veuillez vous connecter pour consulter votre agenda';
                }
?>
        </h2>



    </div>


    <!-- Name Section -->
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="post" action="demandeInscription.php">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Détailles informations personnelles</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" name="nom" placeholder="Nom" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control">
                        </div>

                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type='date' name="date" placeholder="Date de naissance" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <select name="sexe" placeholder="sexe" class="form-control">
                <option value="Feminin">Female</option>
                <option value="Masculin">Male</option>
              </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">

                    </div>
       

                    <!-- Address Section -->
                    <!-- Form Name -->
                    <legend>Détailles adresse</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" name="adresse" placeholder="Adresse" class="form-control">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" name="pays" placeholder="Pays" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="region" placeholder="Région" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="codePostal" placeholder="Code Postal" class="form-control">
                        </div>
                    </div>
                    <!-- Parent/Guadian Contact Section -->
                    <!-- Form Name -->
                    <legend>Parent/Garant Information</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" name="pNom" placeholder="Nom" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="pPrenom" placeholder="Prénom" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <select type="pContactMethod" placeholder="Méthode de Contact" class="form-control">
                <option>Méthode de Contact</option>
                <option value="phone">Tel</option>
                <option value="text">text</option>
                <option value="email">email</option>
              </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="pPhoneNbr" name="pPhoneNbr" placeholder="Numéro de tel" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="email" name="pEmail" placeholder="Email" class="form-control">
                        </div>
                    </div>

                    <!-- Emergency Contact Section -->
                    <!-- Form Name -->
                    <legend>Urgence Contact Information</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" name="nomU" placeholder="Nom" class="form-control">
                        </div>

                        <div class="col-sm-4">
                            <input type="text" name="prenomU" placeholder="Prénom" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <select type="pContactMethod" placeholder="Contact Method" class="form-control">
                <option>Contact Method</option>
                <option value="phone">Phone</option>
                <option value="text">Text</option>
                <option value="email">Email</option>
              </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="ePhoneNbr" placeholder="Phone Number" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="email" name="eEmail" placeholder="Email" class="form-control">
                        </div>
                    </div>

                    <legend>Choisir la formation</legend>
                    <div class="form-group">
                        <div class="col-sm-2">

                            <div class="col-sm-2">
                                <input type="button" name="formation" value="Choix formation" data-toggle="modal" data-target="#payment">
                            </div>
                        </div>
                        <!-- Command -->
                        <div class="form-group">
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="pull-right">
                                    <button type='reset' class="btn btn-warning">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                </fieldset>
            </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <?php
// Create connection

/*Connexion à la base*/
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'projet');

      
$query = "SELECT * FROM `cours`";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));



?>
            <!-- Payment Modal -->
            <div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Formations disponibles</h4>
                        </div>

                        <div class="row">
                            <form class="form-horizontal" role="form">
                            <div class="contrainer col-sm-10 col-md-offset-1">
                                <table class="table table-bordred table-striped">
                                    <tr>
                                        <th><input style="visibility:hidden;" type='checkbox'></th>
                                        <th>Id cours</th>
                                        <th>Libellé</th>
                                        <th>Date_cours</th>
                                        <th>Nombre d'heures</th>
                                    </tr>
                                    
                                        <?php
                                        if ($result->num_rows > 0) {
                                        while( $row = $result->fetch_assoc()) {  

                                            echo "<tr><td><input type='checkbox'></td><td>" . $row['ID_COUR']. " </td><td> " . $row["LIBELLE_COUR"]. "</td><td> " . $row["DATE_COUR"]. "</td><td>". $row["NBR_H_COUR"].'</tr>';
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $connection->close();
                                        ?>
                                    
                                </table>
                            </div>
                                 <div class="modal-footer ">
                            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" aria-hidden="true" style="width: 100%;">
                                <span class="glyphicon glyphicon-ok-sign"></span>  Done</button>
                        </div>
                            </form>
                        </div>
                        <!-- div class="row" -->
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- div class="modal-dialog -->
            </div>

          <script>
              var d = document.getElementById('inscription');
              d.className='active';
        </script>
<?php
        require("footer.php");
?>

                    
      