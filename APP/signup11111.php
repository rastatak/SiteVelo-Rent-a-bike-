
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">   
    <title>Rent a bike - Location vélo </title>
    <script src="https://kit.fontawesome.com/c8975d4899.js"></script>
    <link rel="icon" sizes="64x64" href="assets/images/favicon-64.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cuprum|Lobster&display=swap" rel="stylesheet"> 
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="../assets/css/main.css">


</head>

<body>
<!--------bar de navigation -------->
		<!--------bar de navigation -------->
	<header id="mainnav" class="row">
        <!--nav bar et carousel -->
                <!--------bar de navigation -------->
                <div class="col-12 ">
                
                    <div id="logo" class="row ml-3">
                        
                            <a class="navbar-brand" href="../index.html"><img src="../assets/images/logo.png" width="150" height="145"></a>
                			<a href="../index.html" style="text-decoration: none;" ><h1 class="text-success" >Rent a bike<h2></a>
                        
                    </div>

                    

                    <div class="col-12">                    
                        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
                        
                
                
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav form-inline">
                        <li class="nav-item ">
                            <a class="nav-link  h2" href="../index.html">Accueil<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h2" href="location.html">Location</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-link h2" data-toggle="dropdown" href="#"
                                role="button" aria-haspopup="true" aria-expanded="false">Nos vélos</a>
                            <div class="dropdown-menu">
                                <a class="nav-link h5 ml-3" href="#" data-toggle="modal" data-target="#exampleModalScrollable">Vélo classique</a>
                                <a class="nav-link h5 ml-3" href="#" data-toggle="modal" data-target="#exampleModalScrollable1" >Vélo électrique</a>

                            </div>
                        </li>
                        </ul>
                        </div>
                        <a href="signin.html" type="button" class="btn btn-success">
                        <i class="fas fa-user"></i>
                        <span class="sr-only"></span>
                        </a>
                        </nav>

                    </div>



                </div>
                <!--------fin bar de navigation -------->
			</header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="../index.html"> Acceuil </a> </li>
			<li class="active">/ Inscription </li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-12 maincontent">
				
				
				<div class="col-12 w-75 mx-auto">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Inscrivez vous</h3>
							<p class="text-center text-muted">Si vous avez deja un compte, veuilliez vous <a href="signin.html">connecter</a> . </p>
							<hr>

							<form action="" method="post" >
								<div class="form-group">
								<label for="pseudo">Votre pseudo : </label>
								<input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="pseudoHelp" value="">
								</div>
								<div class="top-margin">
									<label>Prenom </label>
									<input type="text" name="prenom_user" class="form-control">
								</div>
								<div class="top-margin">
									<label>Nom</label>
									<input type="text" name="nom_user" class="form-control">
								</div>
								<div class="form-group">
								<label for="email_utilisateurs">Adresse e-mail : </label>
								<input type="email" class="form-control" name="email_utilisateurs" id="email_utilisateurs" aria-describedby="emailHelp" value="">
								</div>
								<div class="form-group">
								<label for="email_utilisateurs2">Répetez votre e-mail : </label>
								<input type="email" class="form-control" name="email_utilisateurs2" id="email_utilisateurs2" aria-describedby="emailHelp" value="">
								</div>
								<div class="top-margin">
										<label> Adresse 1:</label>
										<input type="text" name="adresse1" class="form-control"  placeholder="">
								</div>
								<div class="top-margin">
										<label> Adresse 2:</label>
										<input type="text" name="adresse2" class="form-control"  placeholder="">
								</div>
								<div class="top-margin">
										<label> Code postal :</label>
										<input type="text" name="codePostal" class="form-control"  placeholder="">
								</div>
								<div class="top-margin">
										<label> Ville :</label>
										<input type="text" name="nom_ville" class="form-control"  placeholder="">
								</div>
								<div class="top-margin">
										<label> Pays :</label>
										<input type="text" name="nom_pays" class="form-control"  placeholder="">
								</div>
								<div class="top-margin">
										<label> Pour bénéficier du tarif pro :</label>
										<input type="text" class="form-control"  placeholder="Numéro de TVA">
								</div>
								<div class="top-margin">
										<label> Nom Entreprise :</label>
										<input type="text" class="form-control"  placeholder="">
								</div>
								<div class="top-margin">
										<label> Adresse Entreprise :</label>
										<input type="text" class="form-control"  placeholder="">
								</div>

								<div class="row top-margin">
								<div class="col-6 form-group">
								<label for="mdp_utilisateurs">Mot de passe :</label>
								<input type="password" class="form-control" name="mdp_utilisateurs" id="mdp_utilisateurs" placeholder="Mot de passe">
								</div>
								<div class="col-6 form-group">
								<label for="mdp_utilisateurs2">Répetez votre mot de passe :</label>
								<input type="password" class="form-control" name="mdp_utilisateurs2" id="mdp_utilisateurs2" placeholder="Mot de passe">
								</div>								
								</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											J'ai lu et approuve <a href="page_terms.html">les termes et conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-success" name="submit" type="submit">Enregistrer</button>
									</div>
								</div>
							</form>
						</div>
					<div class="text-danger">
							<?php	
							if(isset($erreur)){
							echo $erreur;
							}
							?>
					</div>
				</div>
					
				</div>

			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Ashland City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
					
					</div>

					<div class="col-md-6 widget">
						
						<div class="widget-body">
						<p>

								Aujourd’hui, les villes font de plus en plus d’efforts pour réintroduire le vélo dans le paysage urbain. Entre les pistes cyclables, 
								les parking à vélo, les vélibs et les subventions qui fleurissent un peu partout, qui a encore une bonne raison de ne pas s’y mettre ? 
								Cependant, attention au traffic qui peut être turbulent dans les grandes villes. Un bon vélo de ville se doit d’être fiable et bien équipé
								 (éclairages, garde-boue, sonnette, dynamo de moyeu, béquille...). Lorsque l’on rentre du travail à vélo et que les rues deviennent plus sombres,
								  il est primordial de bien voir et de bien être vu des autres usagers. Puis, avouons-le, on adore le design un peu retro des vélos de ville 
								  hollandais, ceux qui ont le plus la côte en ce moment. Vous n’avez plus à choisir entre sécurité et look stylé !
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
						<div class="col-md-6 widget">
								<div class="widget-body">
									<p class="simplenav">
										<a href="#">Accueil</a> |
										<a href="location.html">Location</a> |
										<a href="#">Vélo</a> |
										<b><a href="signup.html">S'inscrire</a></b>
									</p>
								</div>
							</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2019, Boulanger Eric.
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		    <!--modal vélo classique-->
          <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Vélo classique</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <img class="mt-5" src="../assets/images/velo.jpg">
                    <div class="text-center">
                        <h2>Vélo classique</h2>
                        <p>
								<strong>Poids :</strong>21,5 KG.<br>
								<strong>ÉCLAIRAGE :</strong>AV/AR PAR DYNAMO.<br>
								<strong>ACCESSOIRES :</strong>PORTE BAGAGE - GARDES BOUE - ANTIVOL FER À CHEVAL.<br>
							 </p>
                   </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
              <a type="button" class="btn btn-success" href="signin.html">Louez moi !</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal vélo electrique-->
      <div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle1">Vélo électrique</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <img class="mt-5" src="../assets/images/velo1.jpg">
                    <div class="text-center">
                        <h2>Vélo électrique</h2>
                        <p><strong>AUTONOMIE :</strong> 50 À 80 KM SELON ASSISTANCE.<br>
							<strong>Poids :</strong>22,5 KG.<br>
							<strong>ÉCLAIRAGE :</strong>AV/AR SUR BATTERIE.<br>
							<strong>ACCESSOIRES :</strong>PORTE BAGAGE - GARDES BOUE - ANTIVOL FER À CHEVAL.<br>
						 </p>
                   </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
              <a type="button" class="btn btn-success" href="signin.html">Louez moi !</a>
            </div>
          </div>
        </div>
      </div>	




	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


</body>
</html>