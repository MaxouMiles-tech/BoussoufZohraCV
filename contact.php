<div class="row contact pt-5">
    <div class="titre m-auto">
        <div class="col contact-title m-auto text-center">
            <h2 class=" wow animate__bounce">Contact</h2>
        </div>
        <div class="col p-0 m-auto" id="tiret"></div>
    </div>
</div>

<div class="row contact-sec">
    <form action="public/php/mail.php" method="post" name="verifcontact" id="verifcontact"
          class="mx-auto my-5">
        <div class="contact-form m-2">
            <div class="row justify-content-between">

                <div class="col-md-3 contact-info d-flex justify-content-center flex-column mx-4">
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

                <div class="col-md-6 mx-4">
                    <div class="input-group my-3">
                        <div class="input-group-prepend ">
                            <img class="icoInfo mr-3" src="public/images/about/icoUser.png" alt="Icone Personne">
                        </div>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom et Prénom" required
                               value="<?php if (isset($_POST['nom'])) {
                                   echo $_POST['nom'];
                               } ?>"/>
                    </div>
                    <p id="errorNom" class="text-danger"></p>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <img class="icoInfo mr-3" src="public/images/about/icoArobaz.png" alt="Icone Composer mail">
                        </div>
                        <input type="text" class="form-control" id="mail" name="mail" placeholder="Abc@example.com"
                               required
                               value="<?php if (isset($_POST['mail'])) {
                                   echo $_POST['mail'];
                               } ?>"/>
                    </div>
                    <p id="errorMail" class="text-danger"></p>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="d-flex align-items-center">
                                <img class="icoInfo mr-3" src="public/images/about/icoChat.png"
                                     alt="Icone Conversation">
                            </div>
                        </div>
                        <textarea class="form-control" placeholder="Envoyez moi votre message :)" rows="5" cols="40"
                                  id="message" name="message" required value="
                    <?php if (isset($_POST['message'])) {
                            echo $_POST['message'];
                        } ?>"></textarea>
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
</div>
