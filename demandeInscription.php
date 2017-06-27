<?php
$nomEtu=$_POST['nom'];
$prenomEtu=$_POST['prenom'];
$date=$_POST['date'];
$sexe=$_POST['sexe'];
$adresse=$_POST['adresse'];
$pays=$_POST['pays'];
$region=$_POST['region'];
$codePostal	=$_POST['codePostal'];
$prenomParent=$_POST['pPrenom'];
$nomParent=$_POST['pNom'];
$numeroTel=$_POST['pPhoneNbr'];

/*Connexion à la base*/
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'projet');
      
$query = "INSERT INTO demandeajout (nomEtu, prenomEtu, date,sexe,adresse,pays,region,codePostal,prenomParent,nomParent,numeroTel)
VALUES ('$nomEtu', '$prenomEtu', '$date','$sexe','$adresse','$pays','$region',$codePostal,'$prenomParent','$nomParent',$numeroTel)";

if ($connection->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
    header('Location: index.php');
$connection->close();
?>
