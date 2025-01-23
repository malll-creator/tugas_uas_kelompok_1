<?php
// File PHP untuk halaman web ini
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- site metas -->
   <title>Cycle</title>
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
   <?php
   // Header section
   ?>
   <!-- header section start -->
   <div class="header_section header_bg">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a href="index.php" class="logo"><img src="images/logo.png"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="cycle.php">Produk</a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="news.php">News</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <div class="login_menu">
                  <ul>
                     <li><a href="#"><img src="images/trolly-icon.png"></a></li>
                     <li><a href="#"><img src="images/search-icon.png"></a></li>
                  </ul>
               </div>
            </form>
         </div>
         <div id="main">
            <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img src="images/toggle-icon.png" style="height: 30px;"></span>
         </div>
      </nav>

      <!-- banner section start -->
      <div class="banner_section layout_padding">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
      <?php 
      // Misalnya $products adalah array yang berisi data produk
      $products = [
          [
              'best' => 'Best',
              'image' => 'img-1.png',
              'title' => 'Model Sepeda Favorit',
              'description' => '"Dengan inovasi terbaru dan desain menawan, sepeda kami menjadikan setiap perjalanan lebih menyenangkan!"',
              'link' => '#produk'
          ],
          [
              'best' => 'Best',
              'image' => 'img-2.png',
              'title' => 'Model Sepeda Impian',
              'description' => '"Sepeda, solusi transportasi yang ekonomis dan nyaman!"',
              'link' => 'contact.php'
          ],
          [
              'best' => 'Best',
              'image' => 'img-3.png',
              'title' => 'Model Sepeda Baru',
              'description' => '"Dengan inovasi terbaru dan desain menawan, sepeda kami menjadikan setiap perjalanan lebih menyenangkan!"',
              'link' => 'contact.php'
          ]
      ];

      // Loop untuk menampilkan carousel item
      foreach ($products as $index => $product) {
         // Menentukan class "active" untuk item pertama
         $activeClass = $index == 0 ? 'active' : '';
      ?>
         <div class="carousel-item <?php echo $activeClass; ?>">
            <div class="container">
               <div class="row">
                  <div class="col-md-7">
                     <div class="best_text"><?php echo $product['best']; ?></div>
                     <div class="image_1"><img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>"></div>
                  </div>
                  <div class="col-md-5">
                     <h1 class="banner_taital"><?php echo $product['title']; ?></h1>
                     <p class="banner_text"><?php echo $product['description']; ?></p>
                     <div class="contact_bt"><a href="<?php echo $product['link']; ?>">Ini Produk Kami</a></div>
                  </div>
               </div>
            </div>
         </div>
      <?php } ?>
   </div>
</div>

<?php 
$prevClass = "carousel-control-prev"; 
$nextClass = "carousel-control-next"; 
?>

<a class="<?php echo $prevClass; ?>" href="#main_slider" role="button" data-slide="prev">
   <i class="fa fa-angle-left"></i>
</a>
<a class="<?php echo $nextClass; ?>" href="#main_slider" role="button" data-slide="next">
   <i class="fa fa-angle-right"></i>
</a>


         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->

<!-- cycle section start -->
<div class="cycle_section layout_padding">
   <div class="container">
      <h1 class="cycle_taital">Produk Kami</h1>
      <p class="cycle_text">Sepeda cara hidup sehat dan ramah lingkungan</p>
      <div class="cycle_section_2 layout_padding">
         <div class="row">
            <div class="col-md-6">
               <div class="box_main">
                  <h6 class="number_text">01</h6>
                  <div class="image_2"><img src="images/img-2.png" alt="Cycle Image"></div>
               </div>
            </div>
            <div class="col-md-6">
               <h1 class="cycles_text">Sepeda</h1>
               <p class="lorem_text">Memberikan promo, seperti potongan harga atau gratis ongkos kirim</p>
               <div class="btn_main">
                  <div class="buy_bt"><a href="beli.php">Beli Sekarang</a></div>
                  <h4 class="price_text">Price <span style="color: #f7c17b">Rp</span> <span style="color: #325662">2.000.000</span></h4>
               </div>
            </div>
         </div>
      </div>
      <div class="read_btn_main">
         <div class="read_bt"><a href="baca.php">Read More</a></div>
      </div>
   </div>
</div>
<!-- cycle section end -->

<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <h1 class="about_taital">Tentang Toko Sepeda Kami</h1>
      <p class="about_text">Produk bermutu yang menyediakan kebutuhan produk sepeda kepada semua orang dan memberikan penawaran yang menarik tentang sepeda yang berkualitas dan nyaman ketika digunakan.</p>
      <div class="about_main">
         <img src="images/img-5.png" class="image_5">
      </div>
      <div class="read_bt"><a href="baca.php">Read More</a></div>
   </div>
</div>
<!-- about section end -->

<!-- news section start -->
<div class="news_section layout_padding">
   <div class="container">
      <h1 class="news_taital">News</h1>
      <p class="news_text">Sepeda Downhill: Menaklukkan Rute Ekstrem...</p>
      <div class="news_section_2 layout_padding">
         <div class="row">
            <div class="col-sm-4">
               <div class="box_main_1">
                  <div class="zoomout frame"><img src="images/img-6.png"></div>
                  <div class="padding_15">
                     <h2 class="speed_text">Sepeda Kecepatan</h2>
                     <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                     <p class="long_text">Bersepeda downhill bukan hanya tentang kecepatan...</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="box_main_1">
                  <div class="zoomout frame"><img src="images/img-7.png"></div>
                  <div class="padding_15">
                     <h2 class="speed_text">Tips Bersepeda</h2>
                     <div class="post_text">Post by : Rina <span style="float: right;">21-12-2019</span></div>
                     <p class="long_text">Untuk pemula, penting untuk memahami teknik dasar bersepeda downhill...</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="box_main_1">
                  <div class="zoomout frame"><img src="images/img-8.png"></div>
                  <div class="padding_15">
                     <h2 class="speed_text">Persiapan Sebelum Bersepeda</h2>
                     <div class="post_text">Post by : Joko <span style="float: right;">22-12-2019</span></div>
                     <p class="long_text">Sebelum memulai perjalanan downhill, pastikan Anda menggunakan pelindung tubuh yang sesuai dan memeriksa sepeda Anda untuk menghindari masalah di tengah jalan....</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- news section end -->
<div class="copyright_section">
   <div class="container">
      <p class="copyright_text">
         <strong>© 2024  <?php echo date(""); ?> Hasil Proyek Kelompok 1 Pemprograman Web</strong>
      </p>
      <p class="copyright_text">
         <strong>Dibuat dengan cinta oleh Kelompok 1</strong>
      </p>
   </div>
</div>

   <?php
   // Menambahkan lebih banyak konten PHP di sini jika diperlukan
   ?>

   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/owl.carousel.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
         document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
         document.getElementById("main").style.marginLeft = "0";
      }

      $("#main").click(function() {
         $("#navbarSupportedContent").toggleClass("nav-normal");
      });
   </script>
</body>

</html>
