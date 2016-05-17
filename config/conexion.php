<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname = "localhost";
$database = "ciamsa";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli -> set_charset("utf8");
?>