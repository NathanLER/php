<?php
session_start(); 

if (isset($_GET["indice"]) ){
$indice = $_GET["indice"];
array_splice($_SESSION["personnes"], $indice, 1);
}
header('Location:index.php');