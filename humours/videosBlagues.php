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
            <div class="col-lg-10 col-10">
                <?php while($x<3){?>
                    <div class="row">
                    <div class="card col-lg-4">
                        <img src="../i_img/inter1.jpg" alt="" class="card-img-top" height="200">
                        <div class="card-img-overlay text-center d-flex pb-5">
                            <div class="align-self-center mx-auto pb-4">
                                <span class="bi-play-btn-fill bi--3xl text-danger"></span>
                            </div>
                        </div>
                        <div class="card-body text-center p-0 h-50 overflow-hidden">
                            <h5>RDC en Ukraine</h5>
                            <p>Les fARDC en route vers l'Ukraine</p>
                        </div>
                    </div>
                    <div class="card col-lg-4">
                        <img src="../i_img/inter1.jpg" alt="" class="card-img" height="200">
                        <div class="card-img-overlay text-center d-flex pb-5">
                            <div class="align-self-center mx-auto pb-4">
                                <span class="bi-play-btn-fill bi--3xl text-danger"></span>
                            </div>
                        </div>
                        <div class="card-body text-center p-0 h-50 overflow-hidden">
                            <h5>RDC en Ukraine</h5>
                            <p>Les fARDC en route vers l'Ukraine</p>
                        </div>
                    </div>
                    <div class="card col-lg-4">
                        <img src="../i_img/inter1.jpg" alt="" class="card-img-top" height="200">
                        <div class="card-img-overlay text-center d-flex pb-5">
                            <div class="align-self-center mx-auto pb-4">
                                <span class="bi-play-btn-fill bi--3xl text-danger"></span>
                            </div>
                        </div>
                        <div class="card-body text-center p-0 h-50 overflow-hidden">
                            <h5>RDC en Ukraine</h5>
                            <p>Les fARDC en route vers l'Ukraine</p>
                        </div>
                    </div>
                </div>
                <?php $x++;}?>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
