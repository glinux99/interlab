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
                <div class="row">
                    <div id="couselBoot5A" class="carousel slide col-lg-4 " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                            <div class="carousel-item">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                            <div class="carousel-item">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#couselBoot5A" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#couselBoot5A" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div id="couselBoot5B" class="carousel slide col-lg-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                            <div class="carousel-item">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                            <div class="carousel-item">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#couselBoot5B" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#couselBoot5B" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div id="couselBoot5C" class="carousel slide col-lg-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                            <div class="carousel-item">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                            <div class="carousel-item">
                                <img src="../i_img/inter1.jpg" alt="" class="d-block w-100 m-1">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#couselBoot5C" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#couselBoot5C" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
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
                <div class="row d-none d-lg-block">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark col-1 m-1">Back</button>
                        <button type="submit" class="col-1 btn btn-success m-1">Next</button>
                    </div>
                </div>
                <div class="border-top mt-2">
                <?php while($x<3){?> 
                    <div class="card-group">
                    <div class="card col-lg-4 m-1 overflow-hidden d-flex justify-content-center">
                        <p class="m-0 overflow-hidden" style="max-height: 4.7rem;">Avoir une zte n'est pas facile mais il estAvoir une zte n'est pas facile mais il est important d'oublier les mauvaises chosesAvoir une zte n'est pas facile mais il est important d'oublier les mauvaises choses important d'oublier les mauvaises choses</p>
                        <div class="row my-auto px-2">
                            <div class="col-6"><span class="text-danger bi-suit-heart-fill m-1"></span><span class="bi-hand-thumbs-up-fill m-1"></span><span class=" m-1 bi-hand-thumbs-down-fill"></span></div>
                            <div class="col-6 text-end"><i>_Daniel Kikimba</i></div>
                        </div>
                    </div>
                    <div class="card col-lg-4 m-1 overflow-hidden d-flex justify-content-center">
                        <p class="m-0 overflow-hidden" style="max-height: 4.7rem;">Avoir une zte n'est pas facile mais il estAvoir une zte n'est pas facile mais il est important d'oublier les mauvaises chosesAvoir une zte n'est pas facile mais il est important d'oublier les mauvaises choses important d'oublier les mauvaises choses</p>
                        <div class="row my-auto px-2">
                            <div class="col-6"><span class="text-danger bi-suit-heart-fill m-1"></span><span class="bi-hand-thumbs-up-fill m-1"></span><span class=" m-1 bi-hand-thumbs-down-fill"></span></div>
                            <div class="col-6 text-end"><i>_Daniel Kikimba</i></div>
                        </div>
                    </div>
                    <div class="card col-lg-4 m-1 overflow-hidden d-flex justify-content-center">
                        <p class="m-0 overflow-hidden" style="max-height: 4.7rem;">Avoir une zte n'est pas facile mais il estAvoir une zte n'est pas facile mais il est important d'oublier les mauvaises chosesAvoir une zte n'est pas facile mais il est important d'oublier les mauvaises choses important d'oublier les mauvaises choses</p>
                        <div class="row my-auto px-2">
                            <div class="col-6"><span class="text-danger bi-suit-heart-fill m-1"></span><span class="bi-hand-thumbs-up-fill m-1"></span><span class=" m-1 bi-hand-thumbs-down-fill"></span></div>
                            <div class="col-6 text-end"><i>_Daniel Kikimba</i></div>
                        </div>
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
