<!--------------------------------------------------------------------------------------------------------------------->
<!--footer-->
<!--------------------------------------------------------------------------------------------------------------------->
<!--pied de page -->
<div id="navbot" class="">
    <nav class="navbar color-primary-0 justify-content-between navbar-expand-lg text-white">
<!--        nom-->
        <div class="mb-2 d-none d-lg-flex">
            &copy;
            <?php
            setlocale(LC_TIME, 'fr_FR', 'fra');
            echo(strftime("%Y "));
            ?>
            Zohra Boussouf
        </div>
<!--        reseaux-->
        <div class="p-0 m-auto m-lg-0">
            <span class="mr-3"> On reste en contact? </span>
            <a class="mr-md-3" href="https://www.linkedin.com/in/zohra-boussouf/" target="_blank" title="Profil LinkedIn">
                <img id="linkedin" class="social rounded" src="public/images/icoLinkedIn.png" alt="Icone LinkedIn"></a>
            <a class="mr-md-3" href="https://github.com/MaxouMiles-tech" target="_blank" title="Profil GitHub">
                <img id="github" class="social rounded" src="public/images/icoGithub.png" alt="Icone Github"></a>
            <a  class="mr-md-3" href="public/CVZohraBoussouf.pdf" target="_blank" title="CV PDF">
                <img id="cv" class="social rounded" src="public/images/icoCv.png" alt="Icone téléchargement CV"></a>
            <a href="https://dev.amorce.org/boussoufz/" target="_blank" title="Portfolio">
                <img id="cv" class="social rounded" src="public/images/portfolio.png" alt="Icone Portfolio"></a>
        </div>
    </nav>
</div>


<!-- Optional JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="public/js/app.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/ulg/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>


