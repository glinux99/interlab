<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>Creation des applications</title>
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
                    <p class="text-center h5 mt-1">Creation des applications</p>
                    <div class="card-body p-0">
                        <?php 
                            $data=array(
                                1=>[
                                    'titre'=>"De la prise de contact avant la creation de votre application",
                                    'corps'=>"Nous souhaitons comprendre vos objectifs avant de nous lancer dans un projet et
                                    etablir un devis. Une fois que nous aurons compris vos attentes, nous discutons des fonctionnalites de
                                    l'application qui correspondront au mieux a vos objectifs."

                                ],
                                2=> [
                                    'titre'=>"Proposition d'un devis",
                                    'corps'=>"Nous vous soumettons un devis pour la creationde votre application mobile
                                    ainsi qu'un tarif et un delai dans lequel votre application pourra vous etre livree.
                                     "
                                ], 
                                3=>[
                                    'titre'=>"Validation du devis",
                                    'corps'=>"Suite a nos discussions, vous decidez de valider le devis et les fonctionnnalites discutees et ecrites.  "
                                ]
                                , 
                                4=>[
                                    'titre'=>"Proposition de l'architecture de votre application",
                                    'corps'=>"Cette proposition(realisee en collaboration avec nos devellopeurs experimentes dans ce domaine) a pour objectif de definir les differentes pages de votre application."
                                ], 
                                5=>[
                                    'titre'=>"Une fois cette proposition validee",
                                    'corps'=>"Nous developpons et creons la partie graphique ou console de l'application. L'idee devient alors une application utilisable et testable. Nous continuons a echanger de l'avancee du projet et nous ajustons l'application en tenant compte de vos retours."
                                ], 
                                6=>[
                                    'titre'=>"Test de l'application sur differents supports",
                                    'corps'=>"Nous faisons en sorte que nos applications soient optimisees pour les dernieres versions d'Android et/ou iOS et sous la plupart des supports en fonction des objectifs de l'application(differentes marque de smartphone ou tablette si besoin). "
                                ], 
                                7=>[
                                    'titre'=>"Verification avant l'envoi",
                                    'corps'=>"Une fois l'ensemble de l'application creee et avant la publication sur les stores, nous realisons et traquons les erreurs (bug, aspect graphique, contenu), nous vous proposons l'application pour une derniere verification. "
                                ], 
                                8=>[
                                    'titre'=>"Publication si necessaire",
                                    'corps'=>"Une fois l'application validee, nous publions votre application Android sur Google Play si necessaire et iOS sur l'App Store. Tous les utilisateurs peuvent desormais utiliser votre application mobile. "
                                ]
                            );
                        ?>
                        <p>
                            <?php echo "<p>";
                            echo _("Notre processus de creation d'une application mobile est tres 
                            similaire a celui de creation d'un site web. Tous nos projetc commencent par une 
                            rencontre afin de bien definir vos objectifs et les raisons pour lesquelles vous 
                            souhaitiez une application. Nous procedons par etapes afin que vous puissiez 
                            suivre sereinement l'avancee de votre projet. Nous echangeons tout au long du 
                            processus afin de vous creer l'application mobile Android et/ou iOS qui correspond 
                            le mieux a vos objectifs(geolocalisation, jeux, ...). les point suivant sont necessaire : ");
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
