<?php
$user='root';
$password='';
$database='turismo';
$host='localhost';
$mysqli= new mysqli($host,$user,$password,$database);
if($mysqli->connect_errno)
{
    echo "Error falló al conectarse a la BD: ".$mysqli->connect_errno;
}
?>