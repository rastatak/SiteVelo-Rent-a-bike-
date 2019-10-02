<?php 
    require 'src/footer.php';
    require 'src/head.php';
    
    head("Inscription");
    ?> 

			</header>

	<!-- container -->
	<div class="container mb-5">

		<ol class="breadcrumb">
			<li><a href="../index.php"> Accueil </a> </li>
			<li class="active">/ Inscription </li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-12 maincontent">
				
				
				<div class="col-12 w-75 mx-auto">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Inscrivez vous</h3>
							<p class="text-center text-muted">Si vous avez deja un compte, veuilliez vous <a href="signin.php">connecter</a> . </p>
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
	


<?php 
    footer();
?>