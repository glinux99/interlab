<?php include('includes.php');
    if($index===1){
        echo '<link rel="stylesheet" href="vendor/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/css.css">
        <script src="vendor/dist/js/bootstrap.bundle.min.js"></script>';
        $logo ="i_img/logo.png";
        $apropos ="i_services/apropos.php";
        $gospel = "i_gospel/gospel.php";
        $acceuil = 'index.php';
        $service = 'i_service/services.php';
        $connexion ='i_login/';
    }else {
        $dir="../";
        $logo ="../i_img/logo.png";
        $acceuil = '../';
        $service = '../i_services/services.php';
        $connexion ='../i_login/';
        $gospel = "../i_gospel/gospel.php";
        $apropos ="../i_services/apropos.php";
        echo '<link rel="stylesheet" href="'.$dir.'vendor/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="'.$dir.'vendor/icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="'.$dir.'css/css.css">
        <script src="'.$dir.'vendor/dist/js/bootstrap.bundle.min.js"></script>';
    }
?>


