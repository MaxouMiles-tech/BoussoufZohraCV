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
            <a class="mr-md-3" href="https://www.linkedin.com/in/zohra-boussouf/" target="_blank"
               title="Profil LinkedIn">
                <img id="linkedin" class="social rounded" src="public/images/icoLinkedIn.png" alt="Icone LinkedIn"></a>
            <a class="mr-md-3" href="https://github.com/MaxouMiles-tech" target="_blank" title="Profil GitHub">
                <img id="github" class="social rounded" src="public/images/icoGithub.png" alt="Icone Github"></a>
            <a class="mr-md-3" href="public/CVZohraBoussouf.pdf" target="_blank" title="CV PDF">
                <img id="cv" class="social rounded" src="public/images/icoCv.png" alt="Icone téléchargement CV"></a>
            <a href="portfolio.php" target="_blank" title="Portfolio">
                <img id="cv" class="social rounded" src="public/images/portfolio.png" alt="Icone Portfolio"></a>
        </div>
    </nav>
</div>


<!-- Optional JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="public/js/app.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>


