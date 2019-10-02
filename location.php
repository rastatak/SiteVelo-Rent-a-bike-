<?php 
    require 'src/footer.php';
    require 'src/head.php';
    
    head("Location");
    ?> 

			</header>
	<!-- container -->
	<div class="container">

		<ol class="breadcrumb mb-5">
			<li><a href="index.php">Accueil</a></li>
			<li class="text-dark active">/ Location</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="text-info page-title">Location</h1>
				</header>


				<br>
				<form>
					<div class="default-select" id="default-select">
						<div class="btn-group">
              <button type="button" class="btn btn-lg btn-success">Changer de ville</button>
              <button type="button" class="btn btn-lg btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
              </button>
              <div class="dropdown-menu">
                  <button class="dropdown-item" type="button" onclick="getVilleParis()" id="paris" name="Paris" >Paris</button>
                  <button class="dropdown-item" type="button" onclick="getVilleBordeaux()" id="bordeaux" name="Bordeaux" >Bordeaux</button>
                  <button class="dropdown-item" type="button" onclick="getVilleLyon()" id="lyon" name="Lyon" >Lyon</button>
                  <button class="dropdown-item" type="button" onclick="getVilleLille()" id="lille" name="Lille" >Lille</button>
              </div>
          </div>
					</div>
					<br>

					<div class="row">
						<div class="col-sm-3">
							<input class="form-control" type="date" placeholder="Date">
						</div>
						<div class="col-sm-3">
							<input class="form-control" type="time" placeholder="heureDepart">
						</div>
						<div class="col-sm-3">
							<input class="form-control" type="date" placeholder="dateRetour">
						</div>
						<div class="col-sm-3">
							<input class="form-control" type="time" placeholder="heureDepart">
						</div>
					</div>
					<br>
				

					<div class="row">
						<div class="col-sm-6">
							<label class="checkbox"> </label>
						</div>
						<div class="col-sm-6 text-right">

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#paiementModal">
               PAYER
            </button>
							
						</div>
					</div>

				</form>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">
				

				<div class="widget">
					<h4 class="text-center">Vous devez payer :</h4>
					<hr>
					
					<h4 class="text-center">0€</h4>

				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div> <!-- /container -->

	<!-- GOOGLE MAP -->
  <div class="mt-4 row d-flex justify-content-center">
    <iframe id="iframe" src="https://www.google.com/maps/d/u/0/embed?mid=1KAoJfUtp_U1Ul_KWUzk3hcWhJ1swHUrg" width=100% height="480"></iframe>
</div>
<!-- // GOOGLE MAP -->


<?php 
    footer();
?>