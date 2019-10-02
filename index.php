<?php 
    require 'src/footer.php';
    require 'src/head.php';
    
    head("Home");
    ?> 

        <!--------Début carousel -------->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://picsum.photos/id/212/2200/850" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/id/1048/2200/850" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/id/76/2200/850" alt="Third slide">
                </div>
            </div>
        </div>
        <!--------fin carousel -------->
    </header>
    <!--fin navbar et carousel-->


    <!-- Intro -->
    <div class="container text-center mb-3">
        <div class="jumbotron top-space">
            <h2 class="text-info ">Location de vélos classiques et électriques </h2>
            <p>Vous allez pouvoir louer des vélos dans les villes de Paris, Lyon, Lille, Bordeaux. nous proposons des
                vélos classiques mais aussi des vélos électriques. vous y trouveriez des tarifs imbattables dans nos
                villes partenaire. vous pourriez louer un vélo à l'heure mais aussi obtenir un tarif dégressif si vous
                le louer plus longtemps ( voir tarif). <Br> <strong class="text-info"> Vous etes
                    professionnelle? </strong><br> Afin de
                faciliter le transion vers un monde avec moins de pollution, vous allez pouvoir obtenir des tarifs
                réduits qui défirent toute concurrence. </p>
            <p class="text-right"><a href="#tarif" class="btn btn-success btn-large text-light">NOS TARIF »</a></p>
        </div>
    </div>
    <!-- /Intro-->


    <!--Banniere info vélos vert et bleu-->
    <div class="row">
        <div class=" col-12 velo-container" style="background-image:url('assets/images/background-bloc-velo.png')">
            <h1 class="main-subtitle-norwd knockout rotated mb-3 text-center text-white"
                style="font-family: 'Cuprum', sans-serif !important;">2 FOIS PLUS DE POSSIBILITÉS</h1>
            <div id="marginForBike" class="row d-flex flex-row justify-content-center align-items-stretch mt-4">
                <div
                    class="side-column col-md-3  mt-3 mb-3 d-flex flex-column align-items-center justify-content-center">
                    <img class="img-velo img-fluid mb-3" style="min-width:100px;"
                        src="assets/images/force_meca.png?v=1">
                    <h3 class="text-white mb-3">CLASSIQUE</h3>
                    <p style="color: rgb(255, 255, 255);font-size: 16px; text-align: center;min-width:180px;">
                        Besoin de retrouver le plaisir de pédaler?<br>
                        Le vélo classique est fait pour vous !
                    </p>
                    <button type="button" class="btn btn-info border" data-toggle="modal"
                        data-target="#exampleModalScrollable">
                        Vélo classique
                    </button>
                </div>
                <div
                    class="middle-column col-md-6 mt-3 mb-3 d-flex flex-column align-items-center justify-content-center">
                    <img class="img-velo img-fluid" src="assets/images/velo.png?v=1">
                </div>
                <div
                    class="side-column col-md-3 mt-3 mb-3 d-flex flex-column align-items-center justify-content-center">
                    <img class="img-velo img-fluid mb-3" style="min-width:70px;"
                        src="assets/images/force_eclair.png?v=1">
                    <h3 class="text-white mb-3">ÉLECTRIQUE</h3>
                    <p class="texte2"
                        style="color: rgb(255, 255, 255);font-size: 16px; text-align: center;min-width:180px;">
                        Besoin du souffle du vent pour vous sentir vivant ?<br>
                        Le vélo électrique est fait pour vous !
                    </p>
                    <button type="button" class="btn btn-success border" data-toggle="modal"
                        data-target="#exampleModalScrollable1">
                        Vélo électrique
                    </button>

                </div>
            </div>
        </div>
        <!--/fin banniere info velo vert et bleu-->


        <!--choix Tarif-->



        <div class="container">

            <h2 id="tarif" class="text-info text-center">Nos forfaits </h2>

            <div class="row">
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption">
                        <h4 class="text-info"><i class="fas fa-user-clock"></i>Forfait heures</h4>
                    </div>
                    <div class="h-body text-center">
                        <p>
                            <strong>Pro :</strong> À partir de 0,90€ /H </p>
                        <p>
                            <strong>Particulier :</strong> À partir de 0,90€ /H </p>
                        <a name="" id="" class=" col-10 btn btn-success justify-content-center d-flex align-items-center toto" href="APP/signin.html" role="button">Vite, je réserve !</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption">
                        <h4 class="text-info"><i class="fas fa-biking"></i></i>Forfait jours</h4>
                    </div>
                    <div class="h-body text-center ">
                        <p> <strong>Pro :</strong> À partir de 9,90€ /J
                        </p>
                        <p> <strong>Particulier :</strong> À partir de 9,90€ /J
                        </p>

                        <a name="" id="" class="col-10   btn btn-success justify-content-center d-flex align-items-center toto" href="APP/signin.html" role="button">C'est partis pour la
                            journnée !</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight ">
                    <div class="h-caption">
                        <h4 class="text-info"><i class="fa fa-heart fa-5"></i>Forfait semaines</h4>
                    </div>
                    <div class="h-body text-center">
                            <p> <strong>Pro :</strong> À partir de 9,90€ /S
                            </p>
                            <p> <strong>Particulier :</strong> À partir de 9,90€ /S
                            </p>
                        <a name="" id="" class=" col-10 btn btn-success d-flex justify-content-center align-items-center toto" href="APP/signin.html" role="button">Je reserve malin
                            <br> ;) </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption">
                        <h4 class="text-info"><i class="fa fa-smile-o fa-5"></i>Forfait mois</h4>
                    </div>
                    <div class="h-body text-center">
                            <p> <strong>Pro :</strong> À partir de 9,90€ /M
                            </p>
                            <p> <strong>Particulier :</strong> À partir de 9,90€ /M
                            </p>
                            <a name="" id="" class="col-10 btn btn-success  justify-content-center d-flex align-items-center toto" href="APP/signin.html" role="button">Je reserve
                            Ecolo/econo <br>!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--/ choix tarif -->


    <!-- container ville  -->
    <div class="jumbotron top-space">
        <div class="container">

            <h2 class="text-info text-center top-space">Choisis ta ville </h2>
            <br>

            <div id="imgVille" class="row">
                <div class="col-12  col-sm-6 col-md-3  text-center">
                    <h3>Lille</h3>
                    <a  type="button" onclick="getVilleLille()" id="lille" name="indexLille" >
                    <img src="assets/images/lille4.jpg" alt="lille">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3  text-center">
                    <h3>Paris </h3>
                    <a  type="button" onclick="getVilleParis()" id="paris" name="indexParis" >
                        <img src="assets/images/paris.jpg" alt="paris">
                    </a>
                    
                </div>
                <div class="col-12 col-sm-6 col-md-3 text-center ">
                    <h3>Lyon</h3>
                    <a  type="button" onclick="getVilleLyon()" id="lyon" name="indexLyon" >
                        <img src="assets/images/lyon.png" alt="lyon">
                    </a>
                    

                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-3 text-center">
                    <h3>Bordeaux</h3>
                    <a  type="button" onclick="getVilleBordeaux()" id="bordeaux" name="indexBordeaux" >
                        <img src="assets/images/bordeaux.jpg" alt="bordeaux">
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /container ville -->
    <!-- GOOGLE MAP -->
    <div class="mt-4 row d-flex justify-content-center">
        <iframe id="iframe" src="https://www.google.com/maps/d/u/0/embed?mid=1KAoJfUtp_U1Ul_KWUzk3hcWhJ1swHUrg" width=100% height="480"></iframe>
    </div>
<!-- // GOOGLE MAP -->



    
    <?php 
    footer();
?>