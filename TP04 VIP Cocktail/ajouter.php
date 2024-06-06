<?php
session_start();  
if (isset($_POST["prenom"]) && isset($_POST["nom"])){
	$prenom = $_POST["prenom"];
    $nom =$_POST["nom"];
    $tab["prenom"] =$prenom; 
    $tab["nom"] =$nom;
    $tab["etat"] =true;
    $_SESSION["personnes"][] = $tab; 
    header("Location:index.php");
}