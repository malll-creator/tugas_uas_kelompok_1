<?php
// Mulai file PHP untuk memproses data yang diperlukan
$products = [
    [
        'image' => 'img-1.png',
        'title' => 'Model Sepeda Favorit',
        'description' => '"Dengan inovasi terbaru dan desain menawan, sepeda kami menjadikan setiap perjalanan lebih menyenangkan!"'
    ],
    [
        'image' => 'img-2.png',
        'title' => 'Model Sepeda Impian',
        'description' => '"Sepeda, solusi transportasi yang ekonomis dan nyaman!"'
    ],
    [
        'image' => 'img-3.png',
        'title' => 'Model Sepeda Baru',
        'description' => '"Dengan inovasi terbaru dan desain menawan, sepeda kami menjadikan setiap perjalanan lebih menyenangkan!"'
    ]
];

// Mulai HTML di bawah ini
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
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
   <

   <!-- header section end -->

<div class="about_section layout_padding">
   <div class="container">
      <h1 class="about_taital"><?php echo "Tentang Toko Sepeda Kami"; ?></h1>
      <p class="about_text"><?php echo '"Temukan kebebasan di setiap kayuhan—di toko sepeda kami, kami menyediakan sepeda berkualitas untuk setiap petualangan. Kami mengutamakan kenyamanan dan keandalan dalam setiap model sepeda yang kami tawarkan, cocok untuk perjalanan sehari-hari atau menjelajah alam bebas. 
   Kami bukan hanya menjual sepeda, tetapi juga pengalaman bersepeda yang tak terlupakan—bergabunglah dengan komunitas kami, dan rasakan sensasi bersepeda seperti pembalap Dunhil di PS2! 
   Dengan berbagai pilihan sepeda terbaik, kami siap membantu Anda menemukan sepeda yang tepat sesuai kebutuhan. Ayo, jadikan setiap perjalanan Anda lebih seru dengan sepeda dari kami!"'; ?></p>
      <div class="about_main">
         <img src="images/img-5.png" class="image_5">
      </div>
      <div class="read_bt">
         <a href="baca.php"><?php echo "Read More"; ?></a>
      </div>
   </div>
</div>

   <style>
      .image-gallery {
         display: flex;
         flex-wrap: nowrap;
         /* Mengatur agar gambar tidak membungkus ke baris baru */
         overflow-x: auto;
         /* Menambahkan scroll horizontal jika gambar lebih dari yang terlihat */
         gap: 10px;
      }

      .gallery-image {
         width: 100px;
         /* Ukuran lebih kecil untuk menampilkan 5 gambar dalam satu baris */
         height: auto;
         border-radius: 5px;
         /* Sudut gambar melengkung */
      }
   </style>
   <!-- footer section end -->
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
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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