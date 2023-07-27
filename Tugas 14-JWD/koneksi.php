<?php
//konvert
require_once "parser-php-version.php";

//koneksi
$host ='localhost';
$user ='root';
$pass ='';
$db ='db_digitalent';
$koneksi = mysql_connect($host, $user, $pass);
if(!$koneksi){
    die("cannot connect to database.");
}
mysql_select_db($db);
?>