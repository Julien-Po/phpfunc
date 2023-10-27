<?php
// On se connecte ici à la bdd en fournissant les infos nécessaires : le nom de l'hôte, l'utilisateur, le mot de passe et le nom de la BDD
$dbcon = 'localhost';
$dbuser='root';
$dbpassword ="";
$dbname = 'phpalt';
$conn = mysqli_connect($dbcon, $dbuser , $dbpassword, $dbname); 


?>