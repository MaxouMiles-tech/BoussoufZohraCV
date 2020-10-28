<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-11">
    <meta name="viewport" content="width=device-width, initial-scale=-2.0">
    <title>Boussouf Zohra</title>
    <!--CSS -->
    <link rel="stylesheet" href='public/css/app.css'/>
    <link rel="stylesheet" href='public/css/media.css'/>
    <link rel="stylesheet" href='public/css/colors.css'/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<!-- header -->
<div class="container-fluid p-0 m-0">
<!--titre du site-->
    <div id="TitreVideo" class=" px-5 py-0 m-0 card-img-overlay d-lg-flex flex-column align-items-left justify-content-center text-left text-white">
        <div>
            <h1 class="font-weight-bold">Boussouf Zohra</h1>
            <p class="lead">Hello, je suis actuellement en formation en tant que Concepteur / Développeur d'applications
                <br>et je suis à la recherche d'un stage non remunéré de 3 mois à partir du 29/03/2021</p>
            <a id="btnCTA1" class="btn text-white" href="#" role="button">Découvrir mon profil</a>
        </div>
    </div>
<!--video de l'entete-->
    <div id="videoHome">
        <video  autoplay muted loop>
            <source src="public/images/banniere.mp4" type="video/mp4">
        </video>
    </div>
<!--barre de navigation-->
    <nav class=" mt-n2 navbar navbar-expand-md navbar-dark color-primary-0 " id="navbarTop">
        <a class="navbar-brand pl-3" href="index.php">ZB</a>
        <button id="btnmenu" class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNav">
            <span class="navbar-toggler-icon" id="togglerIcon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNav">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Qui suis-je?<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Expériences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ce qui m'anime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>


</div>
