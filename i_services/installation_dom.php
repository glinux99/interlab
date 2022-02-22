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
                                    'titre'=>"Tensions Alternatives",
                                    'corps'=>"Nous faisons tout notre possible pour satisfaire vos besoins en 
                                    faisant une instalation qui pourra durer. Il ne vous sera plus utile
                                     d'appeler chaque jours votre maintenancier car nous serons toujours a votre 
                                     ecoute... Nous choisir, c'est la rapidite et l'efficacite,... Avant 
                                     d'entammer votre projet, nous nous assurons de faire l'etude du terrain pour
                                      vous faire jouir de la derniere technologie electrique. "

                                ],
                                2=>[
                                    'titre'=>"N'avez-vous pas marre que votre installation ressemble a celui du voisin?",
                                    'corps'=>"Nous faisons tout pour tout ameliorer... On n'adapte nos installation selon le client et
                                     nous vous faison un plan complet avant chaque realistion. Nous sommes des techniciens du terrain. 
                                    Il est peut etre temps pour vous de faire appel aux professionnel du metier."
                                ],
                                3=>[
                                    'titre'=>"Tensions continues(Avec des panneaux Voltaiques)",
                                    'corps'=>"Vous avez marre de payer vos factures d'electricites? C'est trop cheres? La solution est a votre porte! Vous pouvez opter pour une tension continue qui n'est disponible quand vous le vouler! Nous faisons preuve de technicite et de savoir-faire pour installer des panneaux solaires sur votre batiment. Sachez que ces panneaux convertissent la lumiere solaire en electricite. Nous procedins alors a une etude personnalisee de vos besoins pour voir les details de vos travaux. Nous realisons ensuite la pose des panneaux avec leurs accessoires dans les regles de l'art et selon les normes en vigueur. Vousprofitierez ainsi d;une electricite generee par des sources propres et inepuisables, respectueuses de l'environnement. Faites-nous confiance pour realiser votre projet dans ce domaine
                                    Disponible, nous nous ferons le plaisir de prendre en main votre projet. Nous nous conformons a toutes les regles et nouvelles techniques dans toutes nos interventions. Ainsi, nous vous conseillons sur le choix des produits et du financement des travaux. D'ailleurs, nous vous assurons une prestation adaptee a votre budget. Vous pouvez nous confier votre projet si vous vius trouvez a Goma ou a ses environs, ou dans le cas contraire, nous pouvons vous proposer ou vous suggerer des personnes ou meme vous aider sur les achats du materiel de qualite. Nous sommes au serice des particuliers et ddess personnels. Vous pouvez egalement faire appel a nos prestations pour:
                                    <br>- Installation de chauffage thermique
                                    <br>- Installation des ventillateurs
                                    <br>- Installation des chauffes-eaux
                                    <br>- ..."
                                ]
                            );
                        ?>
                        <p> 
                            <?php
                            echo "<p class='fw-bold'>";
                            echo _("Un electricien polyvalent, a votre mesure");
                            echo "</p>";
                            echo _("Vous voulez faire une installation domestique et vous avez besoin des electriciens dignent de confiance? Vous etes au bon endroit.
                            Une equipe de professionnels minultieux n'attend que votre coup de fil pour se mettre a l'oeuvre sur vos chantiers.
                             Nous mettons toujours un point d'honneur a vous fourniir des materiaux et services de qualite, 
                             tout en nous adaptant a votre budget");
                             echo '<ul class="list-group">';
                             echo '<li class="list-group-item">';
                             echo _("Votre installation entre les mains d'un elctricien reconnu
                                        Nos competences a la pointe feront de votre installation electrique unchef d'oeuvre de 
                                        modernite et de fiabilite. notre expertise reconnue, nous permet de nous consacrer a des
                                        chantiers de prestige, a des systemes electriques complexes domestiques. Nous detectons
                                        et reparons egalement vos pannes!");
                             echo   '</li>';
                             echo '<li class="list-group-item">';
                             echo _("La technologie au service de votre confort
                                        Ayez le total controle de votre installation electrique en un geste, en faisant appel
                                         a la domotique. ");
                             echo   '</li>';
                             echo '<li class="list-group-item">';
                             echo _("Besoin d'un conseil professionnel?
                                        Nous vous faisons beneficier de notre expertise dans vos projets d'installation d'eclairage. 
                                        Nous vous conseillons au mieux et nous mettons egalement a votre dispositiondu materiel de 
                                        qualite afin que vous puissiez realiser vos modifications en toute autonomie.");
                             echo   '</li>';
                             echo "</ul>";
                             echo _("Nous faisons tout les installations pour des tensions:");

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
                            <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-success m-1 col-lg-3 col-6">Arriere</a>
                            <button type="submit" class="btn btn-success m-1 col-lg-3 col-6">Conctactez-nous</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
