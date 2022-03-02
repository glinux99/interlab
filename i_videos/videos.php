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
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-lg-9 p-0 card">
                        <video width="100%" height="90%" poster="initialimage.png" loop muted id="vidp1" class="card-img-top w-100 bg-dark">
                            <source controls src="../humours/i_videos/video1.mp4" >
                            <input type="text" name="link" value="../humours/i_videos/videos1.mp4" hidden>
                            <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English">
                            <a href="../humours/i_videos/video1.mp4">Télécharger la vidéo</a>
                        </video>
                        <div class="p-0 m-0 fixed-top position-absolute">
                            <a href="<?php echo $_SERVER['HTTP_REFERER'];?>">
                                <span class="bi-reply-all bi--3xl text-success"></span>
                            </a>
                        </div>
                        <div class="card-img-overlay text-center d-flex pb-5" id="vid1">
                            <button class="btn align-self-center mx-auto pb-5 vid1" >
                                <span class="bi-play-btn-fill bi--3xl text-danger"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p>Commentaire</p>
                        <p class="d-flex flex-columns"><input type="text" name="comments" id="" class="form-control me-3">
                            <button type="submit" class="btn btn-success">Envoyer</button>
                        </p>
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex flex-columns">
                                    <div class="">
                                        <img src="../i_services/i_service_img/design02.jpg" alt="" class="rounded-circle" width="45">
                                    </div>
                                    <div class="">
                                        <p class="p-0 m-0">Daniel KIKIMBA</p>
                                        <p class="p-0 m-0">Je suis heureux de voir ca, on dirait que c est vrai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include($footer);?>
</html>
<script>
    $(document).ready(function(){
    $("#vid1").click(function(){
        $('#vidp1').trigger('play');
        document.getElementById('vidp1').setAttribute('controls','');
        $('#vid1').addClass("d-none");
    });
    });
</script>
