<!--------------------------------------------------------------------------------------------------------------------->
<!--contact-->
<!--------------------------------------------------------------------------------------------------------------------->
<!--titre-->
<div class="row contact pt-5">
    <div class="titre m-auto">
        <div class="col contact-title m-auto text-center">
            <h2 class=" wow animate__bounce">Contact</h2>
        </div>
        <div class="col p-0 m-auto" id="tiret"></div>
    </div>
</div>

<!--    bulle info si petit ecran-->
<div class="row  d-md-none justify-content-center contact-info pt-3">
    <div>
        <div class="m-auto text-center" >
            <a href="#collapse1" data-toggle="collapse"><img class="img-fluid icoInfo mb-3" src="public/images/icoInfo.png"
                                                             alt="Icone Telephone"></a>
        </div>

        <div id="collapse1" class="collapse m-auto">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public/images/about/icoAnniv.png"
                     alt="Icone Anniversaire"> 34 ans
            </div>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public/images/about/icoTel.png" alt="Icone Telephone">07.69.61.49.29
            </div>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public/images/about/icoComposerEmail.png"
                     alt="Icone Composer un Email">
                <a id="emailzb" href="mailto:boussouf.zohra@gmail.com">boussouf.zohra@gmail.com</a>
            </div>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public/images/about/icoAdresse.png" alt="Icone Ville">Amiens
                (80000), France
            </div>
            <hr class="m-1">
            <div>
                <img class="img-fluid icoInfo mr-3" src="public/images/about/icoVehicule.png"
                     alt="Icone Voiture">Véhiculée
                et mobile
            </div>
        </div>
    </div>
</div>

<!--section-->
<!--    formulaire de contact-->
    <form action="public/php/mail.php" method="post" name="verifcontact" id="verifcontact"
          class="m-auto">
        <div class="contact-form m-0 m-lg-2">
            <div class="row justify-content-between ">
<!--                mes infos-->
                <div class="col-lg-3 contact-info d-none d-lg-flex justify-content-center flex-column mx-4">
                    <div>
                        <img class="img-fluid icoInfo mr-3" src="public/images/about/icoAnniv.png"
                             alt="Icone Anniversaire"> 34 ans
                    </div>
                    <hr class="m-1">
                    <div>
                        <img class="img-fluid icoInfo mr-3" src="public/images/about/icoTel.png"
                             alt="Icone Telephone">07.69.61.49.29
                    </div>
                    <hr class="m-1">
                    <div>
                        <img class="img-fluid icoInfo mr-3" src="public/images/about/icoComposerEmail.png"
                             alt="Icone Composer un Email">
                        <a id="emailzb" href="mailto:boussouf.zohra@gmail.com">boussouf.zohra@gmail.com</a>
                    </div>
                    <hr class="m-1">
                    <div>
                        <img class="img-fluid icoInfo mr-3" src="public/images/about/icoAdresse.png"
                             alt="Icone Ville">Amiens
                        (80000), France
                    </div>
                    <hr class="m-1">
                    <div>
                        <img class="img-fluid icoInfo mr-3" src="public/images/about/icoVehicule.png"
                             alt="Icone Voiture">Véhiculée
                        et mobile
                    </div>
                </div>
<!--prise de contact-->
                <div class="col-lg-6 mx-4 ">
                    <div class="input-group my-3 d-flex flex-column flex-lg-row">
                        <div class="input-group-prepend m-auto">
                            <img class="icoInfo mr-lg-3" src="public/images/about/icoUser.png" alt="Icone Personne">
                        </div>
                        <label for="nom"></label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom et Prénom"
                               required
                               value="<?php if (isset($_POST['nom'])) {
                                   echo $_POST['nom'];
                               } ?>"/>
                    </div>
                    <p id="errorNom" class="text-danger"></p>

                    <div class="input-group mb-3 d-flex flex-column flex-lg-row">
                        <div class="input-group-prepend m-auto">
                            <img class="icoInfo mr-lg-3" src="public/images/about/icoArobaz.png"
                                 alt="Icone Composer mail">
                        </div>
                        <label for="mail"></label>
                        <input type="text" class="form-control" id="mail" name="mail" placeholder="Abc@example.com"
                               required
                               value="<?php if (isset($_POST['mail'])) {
                                   echo $_POST['mail'];
                               } ?>"/>
                    </div>
                    <p id="errorMail" class="text-danger"></p>

                    <div class="input-group mb-3  d-flex flex-column flex-lg-row">
                        <div class="input-group-prepend m-auto">
                            <div class="d-flex align-items-center">
                                <img class="icoInfo mr-lg-3" src="public/images/about/icoChat.png"
                                     alt="Icone Conversation">
                            </div>
                        </div>
                        <label for="message"></label>
                        <textarea class="form-control" placeholder="Envoyez moi votre message :)" rows="5" cols="40"
                                  id="message" name="message" required>
                        <?php if (isset($_POST['message'])) {
                            echo $_POST['message'];
                        } ?>
                        </textarea>
                    </div>
                    <p id="errorMessage" class="text-danger"></p>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn text-white rounded " value="Envoyer"
                                name="contactform" id="envoyer">Envoyer <img class="icoInfo "
                                                                             src="public/images/about/icoEnvoyer.png"
                                                                             alt="Icone Envoyer"></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
