<?php
session_start();  

if (isset($_GET["indice"]) ){
$indice = $_GET["indice"];
$_SESSION["personnes"][$indice]["etat"] = !$_SESSION["personne"][$indice]["etat"];
}
header('Location:index.php');