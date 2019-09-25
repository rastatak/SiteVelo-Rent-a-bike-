<?php
require 'connect.php';
$db = connect("password");

$id_signit = isset($_GET['id_signit']) ? trim(htmlspecialchars($_GET['id_signit'])):null;
$pseudo = isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']):null;
$email_utilisateurs = isset($_POST['email_utilisateurs']) ? trim(htmlspecialchars($_POST['email_utilisateurs'])):null;
$email_utilisateurs2 = isset($_POST['email_utilisateurs2']) ? trim(htmlspecialchars($_POST['email_utilisateurs2'])):null;
//Cryptage des mots de passe grace à hash('sha256',MON MOT DE PASSE)
$mdp_utilisateurs = isset($_POST['mdp_utilisateurs']) ? hash('sha256',$_POST['mdp_utilisateurs']):null;
$mdp_utilisateurs2 = isset($_POST['mdp_utilisateurs2']) ? hash('sha256',$_POST['mdp_utilisateurs2']):null;

$pseudoLength = strlen($pseudo);


if(isset($_POST['pseudo']) AND isset($_POST['email_utilisateurs']) AND isset($_POST['email_utilisateurs2']) AND isset($_POST['mdp_utilisateurs']) AND isset($_POST['mdp_utilisateurs2'])){
	if($pseudoLength <= 255){
// Verification que les deux emails correspondent.
		if($email_utilisateurs == $email_utilisateurs2){
// Impossibilité de rentrer autre qu'une adresse mail meme en changeant le type grace à F12.
			if(filter_var($email_utilisateurs, FILTER_VALIDATE_EMAIL)){
// Verification qu'aucune adresse mail correnspondantes ne soit déjà dans la base de donnée.
				$reqmail = $db->prepare("SELECT * FROM signit WHERE email_utilisateurs = ?");
				$reqmail->execute(array($email_utilisateurs));
				$mailexist = $reqmail->rowCount();
				if($mailexist == 0){
// Verification que les deux MDP correspondent.
					if($mdp_utilisateurs == $mdp_utilisateurs2){
						$insererMembre = $db->prepare("INSERT INTO signit(pseudo, email_utilisateurs, mdp_utilisateurs, date_creation_utilisateurs, id_type_user) VALUE (:pseudo, :email_utilisateurs, :mdp_utilisateurs, NOW(), 3)");
						$insererMembre->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
						$insererMembre->bindParam(":email_utilisateurs", $email_utilisateurs, PDO::PARAM_STR);
						$insererMembre->bindParam(":mdp_utilisateurs", $mdp_utilisateurs, PDO::PARAM_STR);
						$insererMembre->execute();
						$erreur = "Votre compte a bien été enregistré !!!";
						// header('Location: connected.php');
					}else{
						$erreur = "Vos mots de passe ne correspondent pas !!!";
					}
				}else{
					$erreur = "Cette adresse mail est déjà utilisée !!!";
				}
			}else{
				$erreur = "Votre adresse mail n'est pas valide !!!";
			}
		}else{
			$erreur = "Vos adresses mail ne correspondent pas !!!";
		}
	}else{
		$erreur = "Votre pseudo est trop long !!!";
	}
}else{
	$erreur = "Tous les champs doivent etre remplis !!!";
}


?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>Document</title>
</head>
<body>
<div class="container">
	<section>
		<h2>Sign it</h2>
		<hr>
		<div id="signIt">
			<form action="" method="POST">
				<div class="form-group">
					<label for="pseudo">Votre pseudo : </label>
					<input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="pseudoHelp" value="<?php if(isset($pseudo)){echo $pseudo;} ?>">
				</div>
				<div class="form-group">
					<label for="email_utilisateurs">Adresse e-mail : </label>
					<input type="email" class="form-control" name="email_utilisateurs" id="email_utilisateurs" aria-describedby="emailHelp" value="<?php if(isset($email_utilisateurs)){echo $email_utilisateurs;} ?>">
				</div>
				<div class="form-group">
					<label for="email_utilisateurs2">Répetez votre e-mail : </label>
					<input type="email" class="form-control" name="email_utilisateurs2" id="email_utilisateurs2" aria-describedby="emailHelp" value="<?php if(isset($email_utilisateurs2)){echo $email_utilisateurs2;} ?>">
				</div>
				<div class="form-group">
					<label for="mdp_utilisateurs">Mot de passe :</label>
					<input type="password" class="form-control" name="mdp_utilisateurs" id="mdp_utilisateurs" placeholder="Mot de passe">
				</div>
				<div class="form-group">
					<label for="mdp_utilisateurs2">Répetez votre mdp :</label>
					<input type="password" class="form-control" name="mdp_utilisateurs2" id="mdp_utilisateurs2" placeholder="Mot de passe">
				</div>
				<button type="submit" class="btn btn-success">Créez votre compte</button>
				</div>
			</form>
			<div class="text-danger">
<?php

if(isset($erreur)){
	echo $erreur;
}
?>
			</div>
		</div>
	</section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>