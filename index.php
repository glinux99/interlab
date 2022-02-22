<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $index=1; include($dir.'i_menu/header.php');?>
    <title>Document</title>
</head>
<style>
    .col-lg-4{
        flex:0 0 auto;
        /* width:32.33333333%; */
        width: 22.5rem;
        margin: 5px;
    }
</style>
<body>
<?php include($menup);?>
<div class="container-fluid">
    <div class="row">
            <?php include($menug);?>
        <div class="col-10 col-lg-10">
        <p class=" text-center"><?php echo _("Bienvenu sur notre site internet, nos publications les plus recentes sont:");?></p>
            <?php while($x<3){
                echo '<span>URGENCE</span>';
                echo '<div class="row d-flex justify-content-center border-bottom border-2 pb-3">
                <div class="col-lg-4 card" style="background: url(i_img/inter1.jpg), no-repeat;height: 18rem;background: cover;">
                    <div class="card-header">
                        Titre ici
                    </div>
                    <div class="text-white fixed-bottom position-absolute">
                        Information en cours sur le developpement des armes chimiques dont Kinshasa nie toute implication
                        ce qui n est pas interessant pour le pouvoir.
                    </div>
                </div>
                <div class="col-lg-4 card "style="background: url(i_img/inter3.jpg), no-repeat;height: 18rem;background: cover;" >
                    <div class="card-header" style="background: #ccc;">
                        Titre ici
                    </div>
                </div>
                <div class="col-lg-4 card " style="background: url(i_img/inter2.jpg), no-repeat;height: 18rem;background: cover;">
                    <div class="card-header">
                        Titre ici
                    </div>
                    </div>
                <div class="row d-flex  justify-content-center my-auto d-lg-none d-block">
                <div class="col-2 m-1">
                    <button class="btn btn-dark">Back </button>
                </div>
                <div class="col-2 m-1">
                    <button class="btn btn-success">Next</button>
                </div>
            </div>
            </div>';
                $x++;
            }?>
        </div>
    </div>
</div>
<?php include($footer);?>
</body>
</html>