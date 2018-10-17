<?php
//On demarre les sessions


/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/

//On se connecte a la base de donnee
$host='localhost';
$dbname='serviceplusdb';
$password='';
$username='root';

$con = new mysqli($host, $username, $password, $dbname); //echo "bon1";
$con->query("SET NAMES UTF8");
// try
// {
//     $con = new PDO('mysql:host=localhost;dbname=serviceplusdb', 'root', '');
// 	$con->exec('SET NAMES utf8');
// }
// catch (Exception $e) // Si erreur
// {
//         die('Erreur : ' . $e->getMessage());
// }

?>