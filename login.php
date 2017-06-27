<?php

/*Récupération des infos*/
$mail;$password;$user;
if (isset($_POST['submit']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['user'])){
$mail=$_POST['mail'];
$password=$_POST['password'];
$user=$_POST['user'];
}

/*Connexion à la base*/
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'projet');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

/*Jib lya lanformation hh*/
$query = "SELECT * FROM `$user` WHERE EMAIL_USER='$mail' and PWD='$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

/*Testi wach kayn ou 7él session*/
if ($count == 1){
session_start();
    
/*$_sessions will be used mbé3d*/
while( $row = $result->fetch_assoc()) {  
    $_SESSION['nom'] = $row['NOM'];
    $_SESSION['prenom'] = $row['PRENOM'];
}

$_SESSION['mail'] = $mail;
$_SESSION['user'] = $user;
header('Location: index.php');
}else{
$fmsg = "Invalid Login Credentials.";
echo $fmsg;
}
?>
