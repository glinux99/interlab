<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Editor header include -->
	<script type="text/javascript" src="Admin_docs/scripts/wysiwyg.js"></script>
	<script type="text/javascript" src="Admin_docs/scripts/wysiwyg-settings.js"></script>
	<script type="text/javascript">
			WYSIWYG.attach('interlab', full);
	</script>
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
            <div class="col-10 col-lg-10">
                <p class="text-center mt-2 h6 text-uppercase">Bienvenu sur l'administrateur de votre site</p>
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card col-lg-8  mx-auto">
                                <span class="border-start  border-end border-success border-5">
                                    <div class="card-header">
                                        NOTE IMPORTANT:
                                    </div>
                                    <div class="card-body">
                                        <p class="h6">
                                            En etant Admin, vous pouvez:
                                            Ajouter des Articles, des musiques ainsi que des livres ce qui les placeront directement dans la page principale
                                        </p>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card col-lg-8 mx-auto">
                                <span class="border-start border-end border-dark border-5">
                                    <div class="card-header">
                                        NOTE IMPORTANT:
                                    </div>
                                    <div class="card-body">
                                        <p class="h6">
                                           Egalement, vous pouvez Modifier ou Supprimer les informations contenant dans la base de donnee,
                                            notamment les articles deja publie, les musiques ainsi que les livres ou tutoriels.
                                        </p>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mx-auto">
                    <div class="card-group mb-1 ml-1 mr-1 mt-1 shadow" >
                        <div class="card ">
                            <a href="#" class="nav-link text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_article">
                                <span class="bi-journal-richtext h1 text-center"></span><br>
                                <small class="text-center text-muted"><?php echo _("Ajouter des Articles");?></small>
                            </a>
                        </div>
                        <div class="card ">
                            <a href="#" class="nav-link text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_music">
                                <span class="bi-music-note-beamed h1 text-center"></span><br>
                                <small class="text-center text-muted"><?php echo _("Ajouter des Musiques");?></small>
                            </a>
                        </div>
                        <div class="card ">
                            <a href="#" class="nav-link text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_books">
                                <span class="bi-stack h1 text-center"></span><br>
                                <small class="text-center text-muted"><?php echo _("Ajouter des Livres");?></small>
                            </a>
                        </div>
                    </div>
                    <div class="card-group mb-1 ml-1 mr-1 mt-1 shadow" >
                        <div class="card ">
                            <a href="#" class="nav-link text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item collapse fade search_admin">
                                        <input type="text" name="searchChant" id="" class="form-control" autofocus="autofocus" placeholder="tapez le titre ici">
                                    </li>
                                    <li class="list-inline-item my-auto" role="button" data-bs-toggle="collapse" data-bs-target=".search_admin">
                                        <span class="bi-search h1"></span>
                                    </li>
                                </ul>
                                <small class="text-center text-muted"><?php echo _("Modifier des Articles");?></small>
                            </a>
                        </div>
                        <div class="card d-none d-lg-block">
                            <a href="#" class="nav-link text-center">
                                <span class="bi-search text-center"></span><br>
                                <small class="text-center text-muted"><?php echo _("Modifier des articles recents");?></small>
                            </a>
                        </div>
                    </div>
                    <div class="card-group mb-1 ml-1 mr-1 mt-1 shadow" >
                        <div class="card " role="button" data-bs-toggle="collapse" data-bs-target=".supp_admin">
                            <a href="#" class="nav-link text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item my-auto" >
                                        <span class="bi-journal-richtext h1"></span>
                                    </li>
                                    <li class="list-inline-item collapse fade supp_admin">
                                        <input type="text" name="searchChant" id="" class="form-control" autofocus="autofocus" placeholder="<?php echo _('tapez le titre de l\'article');?>">
                                    </li>
                                </ul>
                                <small class="text-center text-muted"><?php echo _("Supprimer des Articles");?></small>
                            </a>
                        </div>
                        <div class="card " role="button" data-bs-toggle="collapse" data-bs-target=".supp1_admin">
                            <a href="#" class="nav-link text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item my-auto" >
                                        <span class="bi-music-note-beamed h1"></span>
                                    </li>
                                    <li class="list-inline-item collapse fade supp1_admin">
                                        <input type="text" name="searchChant" id="" class="form-control" autofocus="autofocus" placeholder="<?php echo _('tapez le titre de la musique');?>">
                                    </li>
                                </ul>
                                <small class="text-center text-muted"><?php echo _("Supprimer des Musiques");?></small>
                            </a>
                        </div>
                        <div class="card" role="button" data-bs-toggle="collapse" data-bs-target=".supp2_admin">
                            <a href="#" class="nav-link text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item my-auto" >
                                        <span class="bi-stack h1"></span>
                                    </li>
                                    <li class="list-inline-item collapse fade supp2_admin">
                                        <input type="text" name="searchChant" id="" class="form-control" autofocus="autofocus" placeholder="<?php echo _('tapez le titre de l\'article');?>">
                                    </li>
                                </ul>
                                <small class="text-center text-muted"><?php echo _("Supprimer des livres");?></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal pour les articles -->
    <div class="modal fade" id="add_article" tabindex="-1" aria-labelledby="add_articleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="add_articleLabel">Ajoutez vos articles facilement</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="col-lg-12 mx-auto pl-0">
                    <div class="my-3 list-group-item">
                        <div class="row my-2">
                            <div class="col-lg-4">
                                <label for="">Categorie:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="categorie" id="" class="form-control" required>
                                    <option value="">Urgence</option>
                                    <option value="">Sport</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-lg-4">
                                <label for="">Synopsis:</label>
                            </div>
                            <div class="col-lg-8">
                            <textarea name="" id="" class="form-control" rows="2" required>
                                
                            </textarea>
                            </div>
                        </div>
                    </div>
                    <textarea id="interlab"  style="height:200px;" name="texte">
                        <h3>Titre: </h3>
                        <tt>
                            <blockquote>
                                <p>Votre paragraphe ici</p>
                            </blockquote>

                            <h4>Interlab Inc. </h4>
                        </tt>
                    </textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-success">Vusionner</button>
        </div>
        </div>
    </div>
    </div>
<!-- Fin modal pour les articles -->
<!-- Modal pour les Musiques -->
<div class="modal fade" id="add_music" tabindex="-1" aria-labelledby="add_musicLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header ">
            <h5 class="modal-title mx-auto text-uppercase" id="add_musicLabel">Ajoutez vos musiques facilement</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="list-group-item col-lg-12 mx-auto px-1">
                    <div class="input-group mt-2">
                        <div class="input-group-prepend col-3">
                            <span class="input-group-text" id="basic-addon1"><?php echo _("Titre");?></span>
                        </div>
                        <input type="text" name="titre" id="" class="form-control" placeholder="Titre de la chanson">
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-prepend col-3">
                            <span class="input-group-text" id="basic-addon1"><?php echo _("Auteur");?></span>
                        </div>
                        <input type="text" name="nom_auteur" id="" class="form-control " placeholder="Nom de l'auteur">
                    </div>
                    <input type="file" name="file" id="" class="form-control mt-2">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success col-5  mt-2"><span class="bi-music"></span> Publier</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-success">Vusionner</button>
        </div>
        </div>
    </div>
    </div>
<!-- Fin modal pour les Musiques -->
<!-- Modal pour les Livres -->
<div class="modal fade" id="add_books" tabindex="-1" aria-labelledby="add_booksLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header ">
            <h5 class="modal-title mx-auto text-uppercase" id="add_booksLabel">Ajoutez vos musiques facilement</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="list-group-item col-lg-12 mx-auto px-1">
                    <div class="input-group mt-2">
                        <div class="input-group-prepend col-3">
                            <span class="input-group-text" id="basic-addon1"><?php echo _("Titre");?></span>
                        </div>
                        <input type="text" name="titre" id="" class="form-control" placeholder="Titre du livre">
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-prepend col-3">
                            <span class="input-group-text" id="basic-addon1"><?php echo _("Auteur");?></span>
                        </div>
                        <input type="text" name="nom_auteur" id="" class="form-control " placeholder="Nom de l'auteur">
                    </div>
                    <input type="file" name="file" id="" class="form-control mt-2">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success col-5  mt-2"><span class="bi-music"></span> Publier</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-success">Vusionner</button>
        </div>
        </div>
    </div>
    </div>
<!-- Fin modal pour les Livres -->

</body>
<?php include($footer);?>
</html>
