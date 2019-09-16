<?php
// session_start();

if (isset($_POST['submit']))
{   
    
    $prenom_user = $_POST['prenom_user'];
    $nom_user = $_POST['nom_user'];
    $email_user = $_POST['email_user'];
    $adresse1 = $_POST['adresse1'];
    $adresse2 = $_POST['adresse2'];
    $codePostal = $_POST['codePostal'];
    $nom_ville = $_POST['nom_ville'];
    $nom_pays = $_POST['nom_pays'];
    $pass = $_POST['pass'];
    $pass1 = sha1($pass);
    

    $db = new PDO('mysql:host=localhost;
        dbname=veloloc;charset=utf8','root','');
     




    if($result->rowCount() > 0)
    {
       

    }
    else
    {
          //$pass = password_hash($pass, PASSWORD_DEFAULT);
        //  ajout dans la base de donné
        // $sql = "INSERT INTO signit (email, pass) VALUES ('$email', '$pass')";
        $sql ="INSERT INTO users(prenom_user,nom_user,email_user,pass,actif)
      VALUES (:prenom_user, :nom_user, :email_user, :prixArticle, :pass, :actif )";
         $req = $db->prepare($sql);
         $req->execute(); 
        echo 'c bon';
      // require 'signit.php';
    }
}

?>



