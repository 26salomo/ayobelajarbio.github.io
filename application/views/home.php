<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>AyoBelajarBio</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("materi");?>">Daftar Materi</a>
              </li>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("login");?>">Login</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h2>Mari Kita Belajar</h2>
                <h4>Yuk Bisa Yuk</h4>
            </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Materi</h2>
              <a href="<?php echo base_url("materi");?>">view all course <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <?php foreach($materi as $result) { ?>
            <div class="col-md-4">
              <div class="product-item">
                <a href="<?php echo base_url('materi/detail/'.$result->id); ?>"><img style="height: 150px; object-fit: cover;" src="<?php echo base_url('materi/'.$result->gambar);?>" alt=""></a>
                <div class="down-content">
                  <a href="<?php echo base_url('materi/detail/'.$result->id); ?>"><h4><?php echo $result->judul_materi; ?></h4></a>
        
                  <p><?php echo substr($result->isi_materi, 0, 50); ?>...</p>
                  
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Overview Materi</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Semua organisme memiliki rentang hidup yang terbatas. Karena itu untuk mempertahankan kelangsungan hidup, diperlukan generasi penerus. Proses biologis ketika organisme menghasilkan individu baru dari jenis mereka sendiri disebut dengan reproduksi. Tiap jenis organisme memiliki sistem reproduksi yang berbeda-beda. Di artikel kali ini, kita akan membahas struktur dan fungsi sistem reproduksi pada manusia.Sistem reproduksi pada manusia termasuk ke dalam kategori reproduksi seksual. Artinya, reproduksi terjadi melalui proses bertemunya gamet jantan (sperma) dengan gamet betina (ovum) membentuk individu baru yang disebut dengan fertilisasi. Hasil dari fertilisasi atau pembuahan adalah terbentuknya zigot. Zigot kemudian mengalami perkembangan embrio hingga dilahirkan menjadi anak. Sebagian mamalia, termasuk manusia, bereproduksi secara seksual. Laki-laki akan menghasilkan sperma, sementara perempuan akan menghasilkan ovum</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; TEKNIK INSTRUMENTASI 2020 
            </div>
          </div>
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
