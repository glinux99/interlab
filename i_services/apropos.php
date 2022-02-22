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
            <div class="col-lg-10 col-10 p-1 ">
                <div class="card-title text-center h5 text-success">
                    <?php echo _("A propos");?>
                </div>
                <div class="list-group-item p-1">
                <?php echo _("Pour ce qui concernent Interlab, Interlab est une societe mis au point par des informaticiens 
                pour aider d'aitres utilisateurs sur des problemes a caractere informatique. ce site web a ete mis au
                 point par la premiere graduat des Ingenieurs en Informatique de l'ISTA/GOMA de l'annee 2018-2019:");
                      echo _("<ul>
                                <li>Linux99</li>
                                <li>Slash19</li>
                                <li>Windows</li>
                                <li>Rom</li>
                              </ul>");
                      echo _("Nous avons mis des idees ensemble enfin d'aider tout le monde en leurs proposant des nombreux services
                       enfin qu'ils ne puissent pas avoir des difficultes a faire ce qu ils veulent en ce qui 
                       concernent l'informatique et aussi pour ne pas perdre leur argent sur le net... 
                       Nos services sont locaux pour eux.");
                ?>
                    <div class="card shadow">
                        <span class="text-start text-success"><span class="bi-person"></span> Pour Linux99</span>
                        <div class="card-body">
                            <p>
                                <?php echo _("Je me suis interesse trop en informatique depuis que j'etais en 
                                4ieme secondaire... En ce qui concernent la programmation, c'est depuis que
                                 j'avais monte en classe et quand un camarade commencer a nous montrer ses
                                  blog qu'il cree sur www.e-monsite.com alors la je me suis dit pourquoi pas 
                                  le web? Certainement tout les personnes qui m'entourraient a l'epoque ne
                                   voulant pas m'ensegner ou n'etaient peut etre pas interesse par ce que 
                                   je faisais, je me suis trouver seul cherchant des livres par-ci par-la,... 
                                   j'ai pas appris seul... Grace aux tutoriels, et aux conseils des grands 
                                   developpeurs avec qui je causais soit sur Facebook ou sur developpez.com
                                    je n'eus jamais un moment de desespoir par ce que je savais que ce que 
                                    je faisais etait importante pour moi et pour tous le monde... je me suis
                                     forme dans beaucoup de choses depuis...
                                    Pour ce qui est de mon parcours, j'avais eu mon diplome d'etat en 
                                    Electronique dans une des meilleurs ecoles de la ville de Goma, ensuite 
                                    je suis parti faire l'ISTA, bien meme c'est la ou je suis aujourd'hui(2019),
                                     je fais ma premiere graduat en Informatique Appliquee... ");?>
                            </p>
                        </div>
                    </div>
                    <div class="card shadow">
                        <span class="text-start text-success">
                            Equipe
                        </span>
                        <div class="card-body">
                            <p>
                                <?php echo _("
                                    Notre equipe,compose d'une dizaine d'expert pour vous satisfaire, et les 
                                    mieux qualifies pour vous aides dans vos choix de produits... 
                                    Ils travaillent 24/24 pour vous rendre heureux et remplir vos besoins,
                                     il suiffit juste de nous contacteret faisons votre reve une realite. 
                                     Croyons-nous, car vous ne serez pas decu,...
                                    Nous sommes situe, sur l avenu Kisangani, non loin de la Bdgl, sur l axe 
                                    vers Birere, veuillez passer dans nos locaux pour avoir plus de precision
                                     sur les produits que nous offrons... La qualite, la confiance, et la rapide
                                      est notre slogan... ou vous pouvez nous contacter aussi.
                                    ");?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-success ">Contactez-nous</button>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
