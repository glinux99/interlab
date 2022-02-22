<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title><?php echo _("Creation et maintenance des base de donnees");?></title>
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
                <p class="text-center h5 mt-1"><?php echo _("Creation et maintenance des base de donnees");?></p>
                    <div class="card-body p-0">
                        <?php echo _("La base de donnee est une plateforme necessaire au bon fonctionnement de la plupart des applications digitales, des sites web, etc... Elle a pour mission de recolter, traiter et analyser rapidement les domaines des sites web, d'outils internes de reporting ou encore d'outils marketing. Bon ces plateformes ne sont pas toujours performantes.
                                        Cela est souvent du a un besoin mal identifie par les concepteurs et plus globalement a une gestion baclee du projet en amont. Nous vous promettons satisfaction. Notre equipe ne pourra que se reposer que si il sait que vous avez ete satisfait et n'ont pas parce que le travail a ete fini. Pour nous ce qui est important est votre satisfaction en vous garentissant un meilleur service.
                                        Ce que nous faisons pour que votre base de donnees soit impecables:");
                              echo "<ul class='list-group ms-lg-5'>";
                              echo      "<li class='list-group-item'>";
                              echo         "<span class='bi-check-all h4'></span>";
                              echo        _("Nous identifions d'abord vos besoins ensuite");
                              echo      "</li>";
                              echo      "<li class='list-group-item'>";
                              echo         "<span class='bi-check-all h4'></span>";
                              echo        _("un modele de base de donnees compatible avec vos besoins");
                              echo      "</li>";
                              echo      "<li class='list-group-item'>";
                              echo         "<span class='bi-check-all h4'></span>";
                              echo        _("Choisir le systeme de gestion de base de donnees qui vous faut");
                              echo      "</li>";
                              echo      "<li class='list-group-item'>";
                              echo         "<span class='bi-check-all h4'></span>";
                              echo        _("Nous prevoyons l'infrastructure de votre base de donnee");
                              echo      "</li>";
                              echo      "<li class='list-group-item'>";
                              echo         "<span class='bi-check-all h4'></span>";
                              echo        _("Nous optimisons votre base de donnee");
                              echo      "</li>";
                              echo      "<li class='list-group-item'>";
                              echo         "<span class='bi-check-all h4'></span>";
                              echo        _("Nous faisons un suivis et nous maintenons votre plateforme jusqu'a ce que vous serez satisfait(delai selon le contrat de travail).");
                              echo      "</li>";
                              echo "</ul>";?>
                    </div>
                    <form action="" method="post">
                        <!-- Button next and back format -->
                        <div class="d-flex justify-content-center m-2">
                            <button type="submit" class="btn btn-success m-1 col-lg-3 col-6">Arriere</button>
                            <button type="submit" class="btn btn-success m-1 col-lg-3 col-6">Conctactez-nous</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
