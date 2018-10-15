<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_annuaire = "localhost";
$database_annuaire = "serviceplusdb";
$username_annuaire = "root";
$password_annuaire = "";
$annuaire = mysql_pconnect($hostname_annuaire, $username_annuaire, $password_annuaire) or trigger_error(mysql_error(),E_USER_ERROR); 
?>