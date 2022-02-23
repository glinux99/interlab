<?php include('includes.php');
    if($index===1){
        echo '<link rel="stylesheet" href="vendor/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/css.css">
        <script src="vendor/dist/js/bootstrap.bundle.min.js"></script>';
        $logo ="i_img/logo.png";
        $apropos ="i_services/apropos";
        $gospel = "i_gospel/gospel";
        $acceuil = 'index';
        $service = 'i_services/services';
        $connexion ='i_login/login';
        $actus ='actus';
        $apk='i_services/apk';
        $cours='i_services/cours';
        $db='i_services/db';
        $design='i_services/design';
        $installation_dom='i_services/installation_dom';
        $maintenance='i_services/maintenance';
        $reparation='i_services/reparation';
        $security='i_services/security';
        $site_web='i_services/site_web';
    }else {
        $dir="../";
        $logo ="../i_img/logo.png";
        $acceuil = '../';
        $actus = '../actus';
        $apk=$dir.'i_services/apk';
        $cours=$dir.'i_services/cours';
        $db=$dir.'i_services/db';
        $design=$dir.'i_services/design';
        $installation_dom=$dir.'i_services/installation_dom';
        $maintenance=$dir.'i_services/maintenance';
        $reparation=$dir.'i_services/reparation';
        $security=$dir.'i_services/security';
        $site_web=$dir.'i_services/site_web';
        $service = '../i_services/services';
        $connexion ='../i_login/login';
        $gospel = "../i_gospel/gospel";
        $apropos ="../i_services/apropos";
        echo '<link rel="stylesheet" href="'.$dir.'vendor/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="'.$dir.'vendor/icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="'.$dir.'css/css.css">
        <script src="'.$dir.'vendor/dist/js/bootstrap.bundle.min.js"></script>';
    }
?>


