<?php
session_start();

require 'connect.php';
$db = connect("password");

// $id_signit = isset($_GET['id_signit']) ? trim(htmlspecialchars($_GET['id_signit'])):null;
$email_utilisateurs = isset($_POST['email_utilisateurs']) ? htmlspecialchars($_POST['email_utilisateurs']):null;
$mdp_utilisateurs = isset($_POST['mdp_utilisateurs']) ? hash('sha256',$_POST['mdp_utilisateurs']):null;



try{
	

	if(isset($_POST['form_connexion'])){
		if(isset($email_utilisateurs) AND isset($mdp_utilisateurs)){
			if(filter_var($email_utilisateurs, FILTER_VALIDATE_EMAIL)){
				// $req=$db->prepare("SELECT count(*) AND id_signit FROM signit WHERE email_utilisateurs = :email_utilisateurs AND mdp_utilisateurs = :mdp_utilisateurs ");
				$req=$db->prepare("SELECT pseudo, email_utilisateurs, id_type_user, type_utilisateurs.typeName FROM signit, type_utilisateurs WHERE email_utilisateurs = :email_utilisateurs AND mdp_utilisateurs = :mdp_utilisateurs AND type_utilisateurs.Id_type_utilisateurs = signit.Id_type_user");
				// $req=$db->prepare("SELECT * FROM signit WHERE email_utilisateurs = :email_utilisateurs AND mdp_utilisateurs = :mdp_utilisateurs ");
				$req->bindParam(":email_utilisateurs", $email_utilisateurs,PDO::PARAM_STR);
				$req->bindParam(":mdp_utilisateurs", $mdp_utilisateurs,PDO::PARAM_STR);
				$req->execute();
				$infoUser=$req->fetch();

				if(!$infoUser){
					$erreur = "pas bon";
				}else{
					$erreur = "bon";
					$_SESSION['pseudo'] = $infoUser['pseudo'];
					$_SESSION['type_user'] = $infoUser['id_type_user'];
					// $_SESSION['email_utilisateurs'] = $userinfo['email_utilisateurs'];
					header("Location: connected.php");
					// header("Location: connected.php?id_signit=".$id_signit);
				}				
			}else{
				$erreur = "Votre adresse mail n'est pas valide";
			}
		}else{
			$erreur = "Tous les champs ne sont pas remplis !!!";
		}
		
	}
}catch (Exeption $e){
	
	echo $e->getMessage(id_signit);
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
		<h2>Connexion</h2>
		<hr>
		<div id="signIt">
			<form action="" method="POST">
				<div class="form-group">
					<label for="email_utilisateurs">Adresse e-mail : </label>
					<input type="email" class="form-control" name="email_utilisateurs" id="email_utilisateurs" aria-describedby="emailHelp" value="<?php if(isset($email_utilisateurs)){echo $email_utilisateurs;} ?>">
				</div>
				<div class="form-group">
					<label for="mdp_utilisateurs">Mot de passe :</label>
					<input type="password" class="form-control" name="mdp_utilisateurs" id="mdp_utilisateurs" placeholder="Mot de passe">
				</div>
				<button type="submit" class="btn btn-success" name="form_connexion">Connectez vous</button>
				</div>
			</form>
			<div class="text-danger text-center">
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