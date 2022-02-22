<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title><?php echo _("Mis en place de designs");?></title>
</head>
<!-- A enlever -->
<style>
    .idbody{
    min-height: 402px!important;
}
</style>
<body>
<?php include($menup);?>
    <div class="container-fluid idbody mb-4">
        <div class="row">
            <?php include($menug);?>
            <div class="col-lg-10 col-10">
                <p class="text-center h5 mt-1"><?php echo _("Mis en place de designs");?>
                </p>
                <div class="card-body p-0">
                         <?php
                         echo _("Depuis presque toujours, les affiches sont les petites preferees de la publicite, et ce, quel que soit le domaine concerne: concerts, restaurants, rencontres de quartier, publicite pour des depute, etc. Mais toutes les affiches ne se valent pas, Un bon design peut transformer votre entreprise ou votre evenement en un vrai pole d'attraction, tandis qu'un design un peu terne ne peut vous laisser seul au nombre. Pensez a faire quelque chose avec coeur, notre equipe est la pour vous satisfaire. Nous ne sommes que né pour ca... Croyez-nous, nous faisons les meilleurs designs et qui repondent a vos besoins...
                         Nous vous promettons que vos designs faites sur mesure, deux designs ne peuvent pas avoir le meme apparence mais le meme attirence, faites une chose unique mais bien apprecie.
                        ");
                        echo "<div class='' ><h6 class='fw-bold '>";
                        echo _("-Avis des professionnel");
                        echo  "</h6><p class='p-0 ms-lg-3'>";
                        echo _("Quelques exemples des designs faites par notre equipe :");
                        echo "</p></div>";?>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-1">
                        <img src="i_service_img/design1.jpg" alt="" width="350">
                    </div>
                    <div class="col-lg-4 mb-1">
                        <img src="i_service_img/design01.jpg" alt="" width="350">
                    </div>
                    <div class="col-lg-4 mb-1">
                        <img src="i_service_img/design02.jpg" alt="" width="350">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
