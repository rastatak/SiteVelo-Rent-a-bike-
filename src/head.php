<?php
    function head($active="active"){
?> 
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
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
    <!--nav bar et carousel -->
    <header id="mainnav" class="row">
        <!--------bar de navigation -------->
        <div class="col-12">

            <div id="logo" class="row ml-3">

                <a class="navbar-brand " href="index.html"><img src="assets/images/logo.png" width="150" height="145"></a>
                <a href="index.html" style="text-decoration: none;" ><h1 class="text-success" >Rent a bike<h2></a>

            </div>



            <div class="col-12 ">
                <nav class="navbar navbar-expand-lg navbar-dark bg-light ">



                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav form-inline">
                            <li class="nav-item ">
                                <a class="nav-link  h2 <?php 
    if($active ==='Home'){
        echo ' active';
    } ?>  " href="index.php">Accueil<span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item  ">
                                <a class="nav-link h2 <?php
     if($active ==='Location'){
         echo ' active';
     } ?>" href="location.php">Location</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav-link h2" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="true" aria-expanded="false">Nos vélos</a>
                                <div class="dropdown-menu">
                                    <a class="nav-link h5 ml-3" href="#" data-toggle="modal"
                                        data-target="#exampleModalScrollable">Vélo classique</a>
                                    <a class="nav-link h5 ml-3" href="#" data-toggle="modal"
                                        data-target="#exampleModalScrollable1">Vélo électrique</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="signin.php" type="button" class="btn btn-success">
                        <i class="fas fa-user"></i>
                        <span class="sr-only"></span>
                    </a>
                </nav>

            </div>



        </div>
        <!--------fin bar de navigation -------->




<?php       
    }
?>