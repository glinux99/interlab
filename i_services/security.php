<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>administrateur de sites</title>
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
                <p class="text-center h5 mt-1">Securite informatique</p>
                <div class="card-body p-0">
                    <?php echo _("La securite au sein d'une entreprise ou meme des donnees importantes est primordiale. Il est temps pour vous de ne pas prendre de risque pour le periple de perdre vos donnees tout juste parce qu'un hackeur a trouve un fail dans votre systeme de securite... Vaut mieux prevenir que guerir, applelez les expert.
                                En ce qui concernet la securite des vos donnee, certains ne trouvent pas cela necessaire mais n'atendez pas un mauvais coup et livrer une sommes difficile a lire... Nous pouvons tout eviter et trouver le coupable(si possible), nous ne somme que la police sur le net pour vous en ce qui concernent es entree et la sortie de vos donnees, nous faisons une fouille rapide enfin que vous ne puissiez vous inquieter de rien...
                                Voulez-vous un anti-virus et vous n'aviez pas confiance ou vous manquez quoi choisir?
                                Heureusement que mous sommes la! Vous ne risquez rien car nous testons tout avant de vous le proposer... La securite de vos donnee est importante pour nous et nous nous engageons d'y veuiller 24heures sur 7jours... Notre objectif est de vous satisfaire...
                                Faites nous savoir, on sera toujours a votre ecoute:");?>
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
