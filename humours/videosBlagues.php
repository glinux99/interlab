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
                    <video width="100%" height="200" poster="initialimage.png" loop muted id="vidp1">
                        <source src="i_videos/video1.mp4" >
                        <input type="text" name="link" value="i_videos/videos1.mp4" hidden>
                        <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English">
                        <a href="i_videos/video1.mp4">Télécharger la vidéo</a>
                    </video>
                        <form action="../i_videos/videos" method="post" id="formp1">
                            <div class="card-img-overlay text-center d-flex pb-5" id="vid1">
                                <button class="btn align-self-center mx-auto pb-5">
                                    <div class="" id="play1">
                                        <span class="bi-play-btn-fill bi--3xl text-danger"></span>
                                    </div>
                                </button>
                            </div>
                        </form>
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
<script>
    $(document).ready(function(){
      $("#vid1").hover(function(){
        document.getElementById('vidp1').setAttribute("autoplay", '');
      });
      $("#vid1").mouseleave(function(){
          $('#vidp1').trigger('pause');
      });
      $("#vid1").mouseenter(function(){
          $('#vidp1').trigger('play');
      });
    });
 </script>
   