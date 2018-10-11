<?php
function getDB() {
$dbhost="heta.lunariffic.com";
$dbuser="tstaf0_king3sarl";
$dbpass="MightyLord";
$dbname="tstaf0_services";
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
?>