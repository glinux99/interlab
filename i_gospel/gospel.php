<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="player/js/css2.css">
    <?php include('../i_menu/header.php');?>
    <title>Vos chansons sur le sites</title>
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
            <div class="col-10 p-0">
                <div class="row mx-auto p-0" >
                    <?php $x=0;while($x<6){
                        echo '<div class="col-lg-4 mt-2 mt-lg-4 p-1"><div class="i_play1'.$x.'"></div></div>';
                        echo '<div class="col-lg-4 mt-2 mt-lg-4 p-1"><div class="i_play2'.$x.'"></div></div>';
                        $x++;
                    }?>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-success m-1">Back</button>
                    <button type="submit" class="btn btn-success m-1">Next</button>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
<script src="player/js/main.js"></script>
</html>
