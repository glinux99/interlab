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
    <div class="container-fluid idbody">
        <div class="row">
            <?php include($menug);?>
            <!-- Corps de la page -->
            <div class="col-10 col-lg-10 px-1">
                <p class="h5 text-center card-header">Upload vos musiques facilement et mettez-le sur notre platform</p>
                <form action="">
                    <div class="list-group-item col-lg-5 mx-auto px-1">
                        <input type="text" name="titre" id="" class="form-control mt-2" placeholder="Titre de la chanson">
                        <input type="text" name="nom_auteur" id="" class="form-control mt-2" placeholder="Nom de l'auteur">
                        <input type="file" name="file" id="" class="form-control mt-2">
                        <div class="col-3 mx-auto mt-2">
                            <button type="submit" class="btn btn-success "><span class="bi-music"></span> Publier</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Fin du corps de la page -->
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
