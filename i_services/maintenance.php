<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>Maintenance des machines</title>
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
                <p class="text-center h5 mt-1">Creation des applications</p>
                    <div class="card-body p-0">
                        <?php 
                            $data=array(
                                1=>[
                                    'titre'=>"Avez-vous un logiciel a installer et vous manquer ou toucher?",
                                    'corps'=>"Pour ceux qui ont deja essaye l'installation des iOS vous dirons que tout les 
                                    installation sont differentes et dependent soit de la machine ou soit du iOS en question...
                                     Avant tout cela pensez aux performances de vos equipements, il ne serait pas bon que votre 
                                     carte graohique ou votre processeur puisse tomber en panne. Heureusement que nous sommes 
                                    la pour vous assister et vous aider si possible lors de l'installation de vos logiciels..."

                                ],
                                2=> [
                                    'titre'=>"Pour ce qui concernent les iOS",
                                    'corps'=>"Vous voulez installer un systeme d'expoitation et vous ne savez lequel choisir? 
                                    peut etre windows 7? ou peut etre windows 10, ou carement opter pour une version sous linux? 
                                    peut etre Ubuntu ou Kali Linux? Nous savons que vous posez beaucoup de questions sur pour 
                                    choix judicieux. Avant de faire une installation d'un systeme d'exploitation sur votre 
                                    machine nous nous assurons que c'est ce qu'il vous faut... Croyez-nous que nous vous 
                                    obtiendrons un iOS qui possede les dernieres mis a jours...
                                    Bien choisir un iOS peut vous permettre de bien travailler tout en remplissant tout vos 
                                    objectifs. Et si vous cherchez une licence pour l'utilisation d'une application, nous pouvons
                                     vous aider a le trouver. Votre satisfaction est notre objectifs..."
                                ]
                            );
                        ?>
                        <p>
                            <?php echo "<p>";
                            echo _("Faire l'installation ou la maintenance d'un logiciel n'est pas une tache pour tout le monde, 
                            nous pouvons vous aider peut etre a trouver le logiciel que vous cherchez?");
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
