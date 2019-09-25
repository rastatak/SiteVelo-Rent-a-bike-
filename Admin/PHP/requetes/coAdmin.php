<?php
session_start();
require 'connect.php';
$db = connect("password");

$lienAdmin = '<a href="coAdmin.php"><button type="submit" class="btn btn-success" name="form_connexion" >Mode Admin</button></a>';
$lienMembre = '<a href="coEditor.php"><button type="submit" class="btn btn-success" name="form_connexion"  >Mode Editor</button></a>';
$lienInvite = '<a href="coAutor.php"><button type="submit" class="btn btn-success" name="form_connexion"  >Mode Author</button></a>';

if(isset($_SESSION['type_user'])){
	if($_SESSION['type_user'] == 1){
		$type_utilisateur = 'admin.';
	}elseif($_SESSION['type_user'] == 2){
		$type_utilisateur = 'auteur.';
	}elseif($_SESSION['type_user'] == 3){
		$type_utilisateur = 'editeur.';
	}else{
		$type_utilisateur = 'inconnu au bataillon.';
	}
}else{
	$type_utilisateur = '----';
}



if($_SESSION['type_user'] == 1){
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
		<h2>Connected (toiktoito)</h2>
		<hr>
		<div id="connected">
		<h3>Félicitation <?php echo $_SESSION['pseudo']; ?>,</h3>
			<h4>Vous êtes connecté en temps que  <?php echo $type_utilisateur; ?> <br> Sur une  page de gestion Administrateur. </h4>

			<?php
				if($_SESSION['type_user'] == 2){
					echo $lienMembre.$lienInvite;
				}elseif($_SESSION['type_user'] == 1){
					echo $lienAdmin.$lienMembre.$lienInvite;
				}
			?>
		</div>
		<a href="logout.php">Se déconnecter</a>
	</section>
</div>
<?php
}else{
	echo 'nique ta mère';
}

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>