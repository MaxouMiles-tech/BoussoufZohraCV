<!--------------------------------------------------------------------------------------------------------------------->
<!--principal-->
<!--------------------------------------------------------------------------------------------------------------------->
<!--header-->
<?php
include("header.php");
?>

<!--corps du site-->
<div class="container-fluid ">
    <div class="content">
        <div  id="about">
            <?php include("about.php"); ?>
        </div>
        <div  id="competences">
            <?php include("competences.php"); ?>
        </div>
        <div  id="timeline">
            <?php include("timeLine.php"); ?>
        </div>
        <div  id="hobbies">
            <?php include("hobbies.php"); ?>
        </div>
        <div  id="contact">
            <?php include("contact.php"); ?>
        </div>
    </div>
</div>

<!--pied de page-->
<?php
include("footer.php");
?>