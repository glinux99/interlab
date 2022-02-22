<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title><?php echo _("Reparation et maintenance des Ordinateurs");?></title>
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
            <div class="col-lg-10 col-10 p-2">
                <p class="text-center h5 mt-1"><?php echo _("Reparation et maintenance des Ordinateurs");?></p>
                    <div class="card-body p-0">
                        <?php 
                            $data=array(
                                1=>[
                                    'titre'=>"Souhaitez-vous acheter des equipements informatique et vous n'avez pas confiance?",
                                    'corps'=>"Nous pourrions vous aider ou vous assister sur vos achats et vous proposes des equipement
                                     adapte a votre budget. Un mauvais choix d'ordinateur ou de n'importe quel autre equipement ne peut
                                      que vous faire perdre de l'argent soit parce que le materiel ne remplisse pas vos conditions, 
                                      dans ce cas il peut avoir a chaque fois des pannes etc ou un autre il peut etre garde parce
                                       qu'il n'est pas peut etre performant... 
                                    Nous vous promettons de vous faire echapper de justesse de cette echeque."

                                ]
                            );
                        ?>
                        <p>
                            <?php echo "<p>";
                            echo _("Interlab est une agence specialisee en depannage informatique et digne de confiance 
                            propose des prestations de depannage, d;assisatance, de maintenance en informatique a domicile.
                             Le PC est en panne et vous ne savez pas vers qui vous tournez? Faites appel aux services de 
                             qualites a des prix tres competitifs, nous assurons dans le meilleurs delais la remise en etat 
                             de tous vos equipements informatiques quelle que soit la nature de probleme. La qualite de nos
                              services est reconnue. Notre societe vous propose de depanner tout orinateur sous Windows
                               quelque soit la panne(Logiciel), nous effectuons le depannage a domicile ou le depannage 
                               a distance pour tous soucis informqtiques.");
                               echo '<br>';
                            echo _("-Reparation d'ordinateurs Quelque soit le probleme: Ordinateur, notre equipe est la pour un
                             depannage rapide et efficace.");
                            echo "</p>";
                            $tab=0;
                            while($tab<=sizeof($data)){
                                echo "<div class='' ><h6 class='fw-bold '>";
                                echo  $data[$tab]['titre'];
                                echo  "</h6><p class='p-0 ms-lg-3'>";
                                echo $data[$tab]['corps'];
                                echo "</p></div>";
                                $tab++;
                            }
                            ?>
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
