<?php
session_start();
session_destroy();
// suppression de cookies setcookie('login', '');

header('Location: index.php');