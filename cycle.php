<?php
// Mulai file PHP
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Toko Sepeda</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
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
                  <a class="nav-link" href="cycle.php">Produc</a>
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
                              <div class="contact_bt"><a href="<?php echo $product['link']; ?>">Lihat Produk di Bawah Ini</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>
            </div>
         </div>

         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
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
         <p class="cycle_text">Temukan sepeda terbaik untuk petualangan Anda!</p>
         <div class="cycle_section_2 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <div class="box_main">
                     <h6 class="number_text">01</h6>
                     <div class="image_2"><img src="images/img-2.png" alt="Sepeda Gunung"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <h1 class="cycles_text">Sepda Gunung</h1>
                  <p class="lorem_text">Sepeda gunung kami dirancang untuk menghadapi berbagai medan off-road. Dengan suspensi berkualitas dan ban yang kuat, Anda bisa menikmati petualangan di alam dengan nyaman.</p>
                  <div class="btn_main">
                     <div class="buy_bt"><a href="beli.php">Beli Sekarang</a></div>
                     <h4 class="price_text">Harga <span style="color: #f7c17b">Rp</span> <span style="color: #325662">2.000.000</span></h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="cycle_section_3 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="cycles_text">Sepeda Anak</h1>
                  <p class="lorem_text">Berikan yang terbaik untuk sibuah hat. Dirancang untuk aerodinamika dan efisiensi, sepeda ini adalah pilihan sempurna untuk anak anda.</p>
                  <div class="btn_main">
                     <div class="buy_bt"><a href="beli2.php">Beli Sekarang</a></div>
                     <h4 class="price_text">Harga <span style="color: #f7c17b">Rp</span> <span style="color: #325662">1.500.000</span></h4>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="box_main_3">
                     <h6 class="number_text_2">02</h6>
                     <div class="image_2"><img src="images/img-3.png" alt="Sepeda Anak"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cycle_section_2 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <div class="box_main_3">
                     <h6 class="number_text_2">03</h6>
                     <div class="image_2"><img src="images/img-4.png" alt="Sepeda Kota"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <h1 class="cycles_text">Sepeda Kota</h1>
                  <p class="lorem_text">Nikmati perjalanan santai di kota dengan sepeda kota kami. Dengan desain ergonomis dan fitur keselamatan, Anda akan merasa nyaman dan aman saat berkendara di jalanan perkotaan.</p>
                  <div class="btn_main">
                     <div class="buy_bt"><a href="beli3.php">Beli Sekarang</a></div>
                     <h4 class="price_text">Harga <span style="color: #f7c17b">Rp</span> <span style="color: #325662">1.500.000</span></h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="cycle_section_3 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="cycles_text">Sepeda Kota</h1>
                  <p class="lorem_text">Sepeda canggih yang bisa terbang dan bisa mengejar maling</p>
                  <div class="btn_main">
                     <div class="buy_bt"><a href="beli4.php">Beli Sekarang</a></div>
                     <h4 class="price_text">Harga <span style="color: #f7c17b">Rp</span> <span style="color: #325662">1.500.000</span></h4>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="box_main_3">
                     <h6 class="number_text_2">04</h6>
                     <div class="image_2"><img src="images/3.png" alt="Sepeda Racing"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cycle_section_2 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <div class="box_main_3">
                     <h6 class="number_text_2">05</h6>
                     <div class="image_2"><img src="images/g.png" alt="Sepeda Kota"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <h1 class="cycles_text">Sepeda Balap</h1>
                  <p class="lorem_text">Mari berlomba dan bersaing untuk mendapatkan kemenangan dengan sepeda kencang dari kita Adit Bike</p>
                  <div class="btn_main">
                     <div class="buy_bt"><a href="beli5.php">Beli Sekarang</a></div>
                     <h4 class="price_text">Harga <span style="color: #f7c17b">Rp</span> <span style="color: #325662">5.000.000</span></h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="cycle_section_3 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="cycles_text">Sepeda anak</h1>
                  <p class="lorem_text">Sepeda harapan anak yang bisa membuat anak anda sehat dan bahagia</p>
                  <div class="btn_main">
                     <div class="buy_bt"><a href="beli6.php">Beli Sekarang</a></div>
                     <h4 class="price_text">Harga <span style="color: #f7c17b">Rp</span> <span style="color: #325662">2.500.000</span></h4>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="box_main_3">
                     <h6 class="number_text_2">06</h6>
                     <div class="image_2"><img src="images/r.png" alt="Sepeda Racing"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cycle_section_2 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <div class="box_main_3">
                     <h6 class="number_text_2">07</h6>
                     <div class="image_2"><img src="images/z.png" alt="Sepeda Kota"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <h1 class="cycles_text">Sepeda Olahraga</h1>
                  <p class="lorem_text">Mari berolahraga untuk menyehatkan tubuh dan sendi anda di toko Adit Bike</p>
                  <div class="btn_main">
                     <div class="buy_bt"><a href="beli7.php">Beli Sekarang</a></div>
                     <h4 class="price_text">Harga <span style="color: #f7c17b">Rp</span> <span style="color: #325662">4.000.000</span></h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- cycle section end -->

   <!-- footer section end -->
   <?php
   // Menambahkan lebih banyak konten PHP di sini jika diperlukan
   ?>


   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
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
      })
   </script>


</body>

</html>