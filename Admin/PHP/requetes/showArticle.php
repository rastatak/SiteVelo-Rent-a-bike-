<?php
require 'connect.php';
$db = connect();

// Variables 
$actif = 1;
$stock = 2;

$req = $db->prepare
(
    'SELECT * FROM `article` WHERE `actif` = :actif AND `stock` = :stock '
);

$req->bindParam(":actif", $actif,PDO::PARAM_INT);

$req->bindParam(":stock", $stock,PDO::PARAM_INT);



$req->execute();

$data = $req->execute();
while($data = $req->fetchAll()){
    //var_dump($data);
    foreach($data as $key => $value){
    echo '<p>La clef : '.$key.'  => la valeur :'.$value['nomArticle'].'  '.$value["categorieArticle"]." ".$value["stock"]." ".'</p>';
}
}

?>