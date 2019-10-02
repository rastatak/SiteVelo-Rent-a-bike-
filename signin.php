<?php 
    require 'src/footer.php';
    require 'src/head.php';
    
    head("connexion");
    ?> 

			</header>

	<!-- container -->
	<div class="container mb-5">

		<ol class="breadcrumb">
			<li><a href="index.php">Accueil</a></li>
			<li class="active">/ User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-12 maincontent w-75">
				<header class="page-header">
					
				
				
				<div class="mx-auto w-75">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Connectez-vous</h3>
							<p class="text-center text-muted">Si vous n'avez pas encore de compte, <a href="signup.php">Enregistrez</a> vous ici. </p>
							<hr>
							
							<form>
								<div class="top-margin">
									<label>Nom d'utilisateur/Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Mots de passe <span class="text-danger">*</span></label>
									<input type="password" class="form-control">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Mots de passe oublié ?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<a class="btn btn-success" type="submit" href="location.php" >Connecter</a>
									</div>
								</div>
							</form>
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