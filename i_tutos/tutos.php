<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>Tutoriels</title>
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
            <div class="col-lg-10 col-10" >
               <div class="row">
                   <?php while($x<6){
                       ?>
                       <div class="card col-md-4 " style="height: 19.5rem;">
                        <img src="../i_img/inter1.jpg" alt="" class="card-img-top" height="200">
                        <div class="card-body text-center p-0 h-50 overflow-hidden">
                            <div class="m-0 p-0">
                                <h3><span class="bi-play-btn-fill"></span> MYSQL LIVRE DE PDF</h3>
                                <a href="">voir</a>|<a href="">Telecharger</a>
                            </div>
                            <small >je suis susr pmspoamfpa sadf sdf sdf sasda fsdafsadfsafs fsdfsaf coejinojskafgndsnfkjgndskjn,noiwqklmfoienosgd souhoea,weprojq03of Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima sapiente excepturi incidunt porro eaque nobis rerum dolor velit laudantium, autem assumenda eos provident inventore, possimus voluptatum delectus molestias sint ex? Ce tutoriel est un livr lorem e publie sur le deveveloppement de la capacite</small>
                        </div>
                   </div>
                   <?php $x++;}?>
                   <div class="row d-flex  justify-content-center my-auto d-lg-none d-block">
                        <div class="col-2 m-1">
                            <button class="btn btn-dark">Back </button>
                        </div>
                        <div class="col-2 m-1">
                            <button class="btn btn-success">Next</button>
                        </div>
                    </div>
                    <div class="row d-none d-lg-block">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark col-1 m-1">Back</button>
                            <button type="submit" class="col-1 btn btn-success m-1">Next</button>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
