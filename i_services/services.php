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
            <div class="col-lg-10 col-10 mt-3">
               <p class="text-center h5 mt-1">
               Nos Services
               </p> 
               <div class="card-body p-0">
               <?php echo _("Salut... ce site a été créé dans le but d'aider presque tout le monde (les developpeurs webs,
                les personnes voulant apprendre certains trucs... nous pensons que vous serez satisfait...
                 faite nous savoir ou proposez-nous des ameliorations a faire en cliquant ici)");?>.<br>
                 <?php echo _("Pour ce qui concernent nos services, nous vous proposons une gamme de services dont");?>: <br>
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="list-group ">
                            <a href="<?php echo $security;?>">
                                <li class="list-group-item px-1">
                                    <?php echo _("Securite Informatique");?>
                                </li>
                            </a>
                            <a href="<?php echo $apk;?>">
                                <li class="list-group-item px-1">
                                <?php echo _("Creation des applications");?>
                                </li>
                            </a>
                            <a href="<?php echo $maintenance;?>">
                                <li class="list-group-item px-1">
                                <?php echo _("Installation et maintainance des logiciels");?>
                                </li>
                            </a>
                            <a href="<?php echo $design;?>">
                                <li class="list-group-item px-1 p-1">
                                    <div class="d-flex flex-columns">
                                        <div class="col-lg-6 d-flex flex-columns">
                                        <?php echo _("Creation des designs");?> <span class="bi-chevron-right"></span>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <ul class="list-unstyled ">
                                                <li class="">
                                                    Pour vos ceremonies
                                                </li>
                                                <li class="">
                                                    Pour vos Sites webs
                                                </li>
                                                <li class="">
                                                    Pour vos logo et autres
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        </ul>
                 </div>
                 <div class="list-inline-item col-lg-4">
                        <ul class="list-group">
                                <a href="<?php echo $reparation;?>">
                                    <li class="list-group-item px-1">
                                        Reparation et maintainance des ordinateurs 
                                    </li>
                                </a>
                                <a href="<?php echo $installation_dom;?>">
                                    <li class="list-group-item px-1">
                                        Installation et maintenance domestique 
                                    </li>
                                </a>
                                <a href="<?php echo $cours;?>">
                                    <li class="list-group-item px-1">
                                        Nos cours 
                                    </li>
                                </a>
                                <a href="<?php echo $site_web;?>">
                                    <li class="list-group-item px-1">
                                        Creation des sites web 
                                    </li>
                                </a>
                                <a href="<?php echo $db;?>">
                                    <li class="list-group-item px-1">
                                        Creation des bases de donnees 
                                    </li>
                                </a>
                        </ul>
                 </div>
                </div>
                Et tres prochainement nous vous promettons d'ajouter le service de hacking
               </div>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
