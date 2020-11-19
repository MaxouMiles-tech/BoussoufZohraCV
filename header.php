<!--------------------------------------------------------------------------------------------------------------------->
<!--header-->
<!--------------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=-2.0">
    <title>Boussouf Zohra</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--CSS -->
    <link rel="stylesheet" href='public/css/app.css'/>
    <link rel="stylesheet" href='public/css/media.css'/>
    <link rel="stylesheet" href='public/css/colors.css'/>

    <!--    font-awesome-->
    <script src="https://kit.fontawesome.com/1a025099e7.js" crossorigin="anonymous"></script>

    <!--animation-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="public/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="public/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon/favicon-16x16.png">
</head>

<body>
<!-- header -->
<div class="container-fluid p-0 m-0">
    <!--titre du site-->
    <div class="text-center card-img-overlay" id="marque">
            <img  id="imgMarque" src="public/images/marque.png" alt="Logo Nom et Titre" title="Marque">
    </div>
    <div id="TitreVideo" class=" px-3 px-md-5 py-0 m-0 card-img-overlay d-lg-flex flex-column align-items-left justify-content-center  text-left text-white ">
        <div>
<!--            <h1 class="font-weight-bold">Boussouf Zohra</h1>-->
            <p class="lead">Hello, je suis actuellement en formation en tant que Concepteur / Développeur</p>
            <p class="lead">d'applications et je suis à la recherche d'un stage non remunéré</p>
            <p class="lead">de 3 mois à partir du 29/03/2021</p>
            <a id="btnCTA1" class="btn text-white mt-3" target="_blank" href="public/CVZohraBoussouf.pdf" role="button">Télécharger mon CV</a>
        </div>
    </div>
    <!--video de l'entete-->
    <div id="videoHome">
        <video autoplay muted loop>
            <source src="public/videos/banniere.mp4" type="video/mp4">
        </video>
    </div>
    <!--Barre de navigation -->
    <nav class="navbar navbar-dark navbar-expand-lg color-primary-0 mt-n2  " id="navbarTop">
        <a href="index.php" class="navbar-brand d-flex pl-3 ">
            <img src="public/images/favicon/favicon.png" alt="Favicon ZB" id="faviconZB">
        </a>
        <button id="btnmenu" class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#collapsingNavbarTop">
            <span class="navbar-toggler-icon" id="togglerIcon"></span>
        </button>
        <div class="navbar-collapse collapse w-100 " id="collapsingNavbarTop">
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end ">
                <li class="nav-item  mr-3">
                    <a class="nav-link" href="index.php#about">Qui suis-je?</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="index.php#competences">Compétences</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="index.php#timeline">Expériences</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="index.php#hobbies">Ce qui m'anime</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="index.php#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

</div>
