<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BelajarBio - Materi 1</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url();?>"><h2>Ayo<em>Belajar<em>Bioo</em></em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url();?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("materi");?>">Daftar Materi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!-- Page Content -->
   <div class="" style="background-image: url('http://bit.ly/UpQgJ6');">
      <div class="page-heading header-text">   
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                  <h2><?php echo $materi->judul_materi; ?></h2>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Selamat Belajar</h2>
            </div>
          </div>
          <div class="col-md-12">

            <div id="map">
            <!-- <video id="example_video_1" class="video-js vjs-default-skin" width="640" height="264" src="file:///C:/xampp/htdocs/Projek%20Baru/assets/videos/WIN_20210506_13_17_38_Pro.mp4" type='video/mp4' />
</video> -->

<iframe width="100%" height="480" src="<?php echo  $materi->link_youtube; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <div class="down-content">
              <p><?php echo ($materi->isi_materi); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Thank You</h2>
            </div>
          </div>
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slick.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/isotope.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>