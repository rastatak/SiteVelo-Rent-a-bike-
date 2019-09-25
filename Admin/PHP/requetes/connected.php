<?php
session_start();
require 'connect.php';
$db = connect("password");

if(isset($_SESSION['type_user'])){
	if($_SESSION['type_user'] == 1){
		$type_utilisateur = 'admin.';
		header("Location: coAdmin.php");

	}elseif($_SESSION['type_user'] == 2){
		$type_utilisateur = 'auteur.';
		header("Location: coAutor.php");

	}elseif($_SESSION['type_user'] == 3){
		$type_utilisateur = 'editeur.';
		header("Location: coEditor.php");
	}else{
		$type_utilisateur = 'inconnu au bataillon.';
	}
}else{
	$type_utilisateur = 'no no no no !';
}




?>

