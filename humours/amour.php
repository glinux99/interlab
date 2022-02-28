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
                <?php $x=0; while($x<6){?>
                    <div class="card-group" >
                    <div class="card m-1 overflow-hidden d-flex justify-content-center" >
                        <p class="m-0 overflow-hidden" style="max-height: 4.7rem;">Avoir une zte n'est pas facile mais il estAvoir une zte n'est pas facile mais il est important d'oublier les mauvaises chosesAvoir une zte n'est pas facile mais il est important d'oublier les mauvaises choses important d'oublier les mauvaises choses</p>
                        <div class="row my-auto px-2">
                            <div class="col-6"><span class="text-danger bi-suit-heart-fill m-1"></span><span class="bi-hand-thumbs-up-fill m-1"></span><span class=" m-1 bi-hand-thumbs-down-fill"></span></div>
                            <div class="col-6 text-end"><i>_Daniel Kikimba</i></div>
                        </div>
                    </div>
                    <div class="card m-1 overflow-hidden d-flex justify-content-center" >
                        <p class="m-0 overflow-hidden" style="max-height: 4.7rem;"> estAvoir une zte n'est pas fa une zte n'est pas facile mais il est important d'oublier les mauvaises choses important d'oublier les mauvaises choses</p>
                        <p class="text-end my-auto px-2"><i>_Daniel Kikimba</i></p>
                    </div>
                </div>

                <?php $x++; }?>
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
</body>
<?php include($footer);?>
</html>
