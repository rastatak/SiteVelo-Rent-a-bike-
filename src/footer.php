<?php
    function footer(){
?> 
    
    <!--footer-->
    <footer id="footer">

        <div class="footer1">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>+234 23 9873237<br>
                                <a href="mailto:#">some.email@somewhere.com</a><br>
                                <br>
                                234 place des quais, bordeaux, 33000
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 widget">

                    </div>

                    <div class="col-md-6 widget">
                        <h3 class="widget-title"></h3>
                        <div class="widget-body">

                            <p>Aujourd’hui, les villes font de plus en plus d’efforts pour réintroduire le vélo dans le
                                paysage urbain. Entre les pistes cyclables, les parking à vélo, les vélibs et les
                                subventions qui fleurissent un peu partout, qui a encore une bonne raison de ne pas s’y
                                mettre ? Cependant, attention au traffic qui peut être turbulent dans les grandes
                                villes. Un bon vélo de ville se doit d’être fiable et bien équipé (éclairages,
                                garde-boue, sonnette, dynamo de moyeu, béquille...). Lorsque l’on rentre du travail à
                                vélo et que les rues deviennent plus sombres, il est primordial de bien voir et de bien
                                être vu des autres usagers. Puis, avouons-le, on adore le design un peu retro des vélos
                                de ville hollandais, ceux qui ont le plus la côte en ce moment. Vous n’avez plus à
                                choisir entre sécurité et look stylé !</p>
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
                                <a href="APP/location.php">Location</a> |
                                <a href="#">Vélo</a> |
                                <b><a href="APP/signup.php">S'inscrire</a></b>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2019, Boulanger Eric.
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>
    <!--/ footer-->


    <!--modals-->
    <!--modal vélo classique-->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Vélo classique</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="mt-5" src="assets/images/velo.jpg">
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
                    <a type="button" class="btn btn-success" href="APP/signin.html">Louez moi !</a>
                </div>
            </div>
        </div>
    </div>

    <!--/ Modal vélo classique-->

    <!--modal vélo electrique-->
    <div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle1">Vélo électrique</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="mt-5" src="assets/images/velo1.jpg">
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
                    <a type="button" class="btn btn-success" href="APP/signin.html">Louez moi !</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal velo electrique-->
    <!--/modals-->

    <!--scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


    <!-- Google Maps -->
    <script src='assets/js/main.js'></script>
    <!--/scripts-->

</body>

</html>
<?php       
    }
?>