<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <title>Tous vos livres en pdf</title>
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
                    <?php while($x<4){
                        ?>
                    <div class="border-top border-3 mt-3 mx-auto">
                        <div class="col-lg-2 col-7 mb-3 bg-success" style="clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);">
                            Programmation
                        </div>   
                        <div class="row">
                            <div class="row col-lg-6">
                                <div class="col-4 p-0">
                                    <p class="text-center m-0 p-0">
                                        <span class="bi-file-pdf bi--8xl"></span>
                                    </p>
                                    <div class="text-center h6 overflow-hidden " style="max-height: 3.8rem;">
                                        <p class=" ">
                                        Programmation en algebre de bool et de
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <p class="text-center m-0 p-0">
                                        <span class="bi-file-pdf bi--8xl"></span>
                                    </p>
                                    <div class="text-center h6 overflow-hidden " style="max-height: 3.8rem;">
                                        <p class=" ">
                                        Programmation en algebre de bool et de
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <p class="text-center m-0 p-0">
                                        <span class="bi-file-pdf bi--8xl"></span>
                                    </p>
                                    <div class="text-center h6 overflow-hidden " style="max-height: 3.8rem;">
                                        <p class=" ">
                                        Programmation en algebre de bool et de
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-lg-6">
                                <div class="col-4 p-0">
                                    <p class="text-center m-0 p-0">
                                        <span class="bi-file-pdf bi--8xl"></span>
                                    </p>
                                    <div class="text-center h6 overflow-hidden " style="max-height: 3.8rem;">
                                        <p class=" ">
                                        Programmation en algebre de bool et de
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <p class="text-center m-0 p-0">
                                        <span class="bi-file-pdf bi--8xl"></span>
                                    </p>
                                    <div class="text-center h6 overflow-hidden " style="max-height: 3.8rem;">
                                        <p class=" ">
                                        Programmation en algebre de bool et de
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <p class="text-center m-0 p-0">
                                        <span class="bi-file-pdf bi--8xl"></span>
                                    </p>
                                    <div class="text-center h6 overflow-hidden " style="max-height: 3.8rem;">
                                        <p class=" ">
                                        Programmation en algebre de bool et de
                                        </p>
                                    </div>
                                </div>
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
