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
                <p class="text-center h5 mt-1">Creation des sites web</p>
                    <div class="card-body p-0">
                        <?php echo _(" Certe, il est vrai que vous vous posez des questions si pourquoi vous 
                        deviez creer votre site web, mais je vous assure que avoir une plateforme complexe et
                         qui remplisse tous vos besoin n'est pas un travail simple, c'est pourquoi Interlab a 
                         ete cree dans le but de vous faciliter dans la creation de site web professionel...
                         Vous savez bien que pour que vous puissiez vous rapprocher des vos clients via 
                         l'internet c'est par un site web que tous cela pourra se faire...Un site web a la 
                         capacite d'influer sur la facon dont les activites de votre entreprise s'accroit...
                          Et il est bien que tout entreprise qui se respcte ne pourra pas manquer se fire 
                          connaitre sur le web. Les premiers impressions comptent, ainsi votre site web doit 
                          repondre a tous vos exigences et a ceux de vos clients...(Il doit reflecter ce que 
                          vous faites sur terrain en parlant des vos objectifs et en permettant a vos client 
                          ume libre faciliter de vous connaitre...). Nous vous garentissons un site 
                          professionnel qui peut etre lu de partout ou il y a internet, un site qui repond a 
                          vos exigence et nous vous promettons de faire un suivi pour le rendre beau...Pour
                           nous soumettre votre projet maintenant:");?>
                    </div>
                    <form action="" method="post">
                        <!-- Button next and back format -->
                        <div class="d-flex justify-content-center m-2">
                            <button type="submit" class="btn btn-success m-1 col-lg-3 col-6">Arriere</button>
                            <button type="submit" class="btn btn-success m-1 col-lg-3 col-6">Conctactez-nous</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
