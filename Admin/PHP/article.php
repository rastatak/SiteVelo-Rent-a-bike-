<?php

require 'requetes/connect.php';

$db = connect();

if(isset($_POST['nomArticle'])){
    $nomArticle = trim(htmlspecialchars($_POST['nomArticle'],ENT_QUOTES));
} else{
    $nomArticle = null;
}

if(isset($_POST['imageArticle'])){
    $imageArticle = trim(htmlspecialchars($_POST['imageArticle'],ENT_QUOTES));
} else{
    $imageArticle = null;
}

if(isset($_POST['categorieArticle'])){
    $categorieArticle = trim(htmlspecialchars($_POST['categorieArticle'],ENT_QUOTES));
} else{
    $categorieArticle = null;
}

if(isset($_POST['stock'])){
    $stock = trim(htmlspecialchars($_POST['stock'],ENT_QUOTES));
} else{
    $stock = null;
}

if(isset($_POST['prixArticle'])){
    $prixArticle = trim(htmlspecialchars($_POST['prixArticle'],ENT_QUOTES));
} else{
    $prixArticle = null;
}


var_dump ($imageArticle);
echo $nomArticle.' <br>';
echo $categorieArticle.' <br>';
echo $stock.' <br>';
echo $prixArticle.' <br>';

$actif = 1;



try{
// préparation requetes

$req = $db->prepare("INSERT INTO article(nomArticle,categorieArticle,stock,prixArticle,imageArticle,actif)
VALUES (:nomArticle, :categorieArticle, :stock, :prixArticle, :imageArticle, :actif )");

// changement des parametre et controle des champ

$req->bindParam(":nomArticle", $nomArticle, PDO::PARAM_STR);
$req->bindParam(":categorieArticle", $categorieArticle, PDO::PARAM_STR);
$req->bindParam(":stock", $stock, PDO::PARAM_INT);
$req->bindParam(":prixArticle", $prixArticle, PDO::PARAM_INT);
$req->bindParam(":imageArticle", $imageArticle, PDO::PARAM_STR);
$req->bindParam(":actif", $actif, PDO::PARAM_INT);



// execution de la requette

$req->execute();
header('Location: requetes/comfirm.php');
} catch(Exception $e) {
    echo $e->getMessage();

}
?>