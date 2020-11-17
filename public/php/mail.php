<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Zohra Boussouf</title>
    <!-- <link rel="icon" href="img/favicon.png" /> -->
    <!-- Bootstrap CSS -->
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet">
    <link rel="stylesheet" href='../css/app.css'/>
</head>

<body>
<div class="site-header sticky-top">
    <!-- banniere -->
    <div class="d-flex justify-content-center" id="banniere">
        <img src="../images/logozb.png" alt="Zohra Boussouf" id="logozb">
    </div>
</div>
<!-- corps du site  -->
<div class="container-fluid ">

    <?php

    // declaration de variable qui recupere les valeurs du formulaire
    if (isset($_POST['nom']))
        $nom = $_POST['nom'];
    if (isset($_POST['mail']))
        $mail = $_POST['mail'];
    if (isset($_POST['message']))
        $message = $_POST['message'];
    $subject = "message du site";

    //variable necessaire à la validation du formulaire
    $check = true;

    // 3 cas possible : rien, expression REGEX et formulaire ok
    //cas ou la variable est vide
    if (empty($nom)) {
        echo "Le nom doit être renseigné ! <br>";
        $check = false;
    }

    if (empty($mail)) {
        echo "Votre mail doit être renseigné ! <br>";
        $check = false;
    } // regex email sous la forme nom.prenom@domaine.suffixe
    else if (!preg_match('/^[a-zA-Z0-9\d\._-]+@[a-zA-Z\d\.]+\.[a-zA-Z\d\.]{2,}+$/', $mail)) {
        echo "Votre adresse mail doit être sous la forme : nom.prenom@domaine.suffixe  !  <br>";
        $check = false;
    }

    if (empty($message)) {
        echo "Le message doit être renseigné ! <br>";
        $check = false;
    }
    // Si le formulaire est valide, envoie de la demande
    if ($check) {
        $to = "boussoufzohra@gmailcom";
        $sujet = "Contact-site";
        $header = "MIME-Version: 1.0\r\n";
        $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";

        $message = '
                        <html lang="fr">
                            <body>
                                <div class="text-center" >
                                    <u>Nom de l\'expéditeur :</u>' . $nom . '<br />
                                    <u>Mail de l\'expéditeur :</u>' . $mail . '<br />
                                    <br />
                                    ' . nl2br($message) . '
                                    <br />
                                </div>
                            </body>
                        </html>';

        mail("boussouf.zohra@gmail.com", "CONTACT - Monsite.com", $message, $header);
        $msg = "Votre message a bien été envoyé !";
    } else {
        $msg = "Tous les champs doivent être complétés !";
    }

    ?>

    <div class="text-center">
        <p id="redirect"> <?php echo $msg?></p>
        <p >Vous serez bientôt rediriger sur mon site :).</p>
    </div>


</div>
<!-- Optional JavaScript-->
<!--<script src="../js/mail.js"></script>-->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>


</body>


</html>