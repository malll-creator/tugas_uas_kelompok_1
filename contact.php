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
   <title>Contact</title>
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
                  <a class="nav-link" href="cycle.php">Product</a>
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
            <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img src="images/toggle-icon.png" style="height: 50px;"></span>
         </div>
      </nav>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-7">
                           <div class="best_text">Best</div>
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                        <div class="col-md-5">
                           <h1 class="banner_taital">Model Sepeda Favorit</h1>
                           <p class="banner_text">"Dengan inovasi terbaru dan desain menawan, sepeda kami menjadikan setiap perjalanan lebih menyenangkan!" </p>
                           <div class="buy_bt"><a href="beli.php">Beli Sekarang</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-7">
                           <div class="best_text">Best</div>
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                        <div class="col-md-5">
                           <h1 class="banner_taital">Model Sepeda Impian</h1>
                           <p class="banner_text">"Sepeda, solusi transportasi yang ekonomis dan nyaman!"
                           </p>
                           <div class="buy_bt"><a href="beli.php">Beli Sekarang</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-7">
                           <div class="best_text">Best</div>
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                        <div class="col-md-5">
                           <h1 class="banner_taital">Model Sepeda Baru</h1>
                           <p class="banner_text">"Dengan inovasi terbaru dan desain menawan, sepeda kami menjadikan setiap perjalanan lebih menyenangkan!" </p>
                           <div class="buy_bt"><a href="beli.php">Beli Sekarang</a></div>
                        </div>
                     </div>
                  </div>
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

<!-- footer section start -->
<div class="footer_section layout_padding">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-8 col-sm-12 padding_0">
            <div class="map_main">
               <div class="map-responsive">
                  <div class="image-gallery">
                  <?php
// Data pengguna yang akan ditampilkan
$users = [
    [
        "name" => "Putri",
        "image" => "putri.jpg",
        "role" => "Mahasiswa",
        "email" => "putr24228@student.nurulfikri.ac.id",
        "phone" => "+62 85779695285"
    ],
    [
        "name" => "Muhammad Ikmal",
        "image" => "8.jpg",
        "role" => "Mahasiswa",
        "email" => "0110124249@student.nurulfikri.ac.id",
        "phone" => "+62 85697193717"
    ],
    [
        "name" => "Sipa Faujiah",
        "image" => "sipa.jpg",
        "role" => "Mahasiswa",
        "email" => "0110124111@student.nurulfikri.ac.id",
        "phone" => "+62 85782772965"
    ],
    [
        "name" => "Adytia Sanjaya",
        "image" => "adit.jpg",
        "role" => "Mahasiswa",
        "email" => "0110124239@student.nurulfikri.ac.id",
        "phone" => "+62 81264089817"
    ],
    [
        "name" => "Putri Salwa",
        "image" => "salwa.jpg",
        "role" => "Mahasiswa",
        "email" => "0110124098@student.nurulfikri.ac.id",
        "phone" => "+62 895339069967"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <style>
        .card-container {
            display: flex;
            gap: 20px;
            justify-content: flex-start;
            align-items: flex-start;
            overflow-x: auto;
            padding: 20px;
            scroll-snap-type: x mandatory;
        }

        .card {
            flex: 0 0 auto;
            max-width: 220px;
            padding: 16px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, background-color 0.3s;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            scroll-snap-align: center;
        }

        .card:hover {
            background-color: #f9f9f9;
            transform: translateY(-5px);
        }

        .profile-img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 12px;
        }

        .card h5 {
            margin: 10px 0 5px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .card p {
            color: #666;
            font-size: 14px;
            margin: 4px 0;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .card-container {
                overflow-x: auto;
            }

            .card {
                max-width: 180px;
                padding: 12px;
            }

            .profile-img {
                width: 90px;
                height: 90px;
            }

            .card h5 {
                font-size: 16px;
            }

            .card p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

    <div class="card-container">
        <?php foreach ($users as $user): ?>
            <a href="#" class="card">
                <img src="./image.html/<?= $user['image'] ?>" alt="<?= $user['name'] ?>" class="profile-img">
                <h5><?= $user['name'] ?></h5>
                <p><?= $user['role'] ?></p>
                <p>Email: <?= $user['email'] ?></p>
                <p>Telepon: <?= $user['phone'] ?></p>
            </a>
        <?php endforeach; ?>
    </div>

                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
            <div class="call_text">
               <a href="" target="_blank">
                  <img src="images/call-icon.png">
                  <span class="padding_left_0">Hubungi Saya </span>
               </a>
            </div>
            <div class="call_text">
               <a href="">
                  <img src="images/mail-icon.png">
                  <span class="padding_left_0">Email</span>
               </a>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="" target=""><img src="images/fb-icon1.png" alt="Facebook"></a></li>
                  <li><a href="" target=""><img src="images/twitter-icon.png" alt="Twitter"></a></li>
                  <li><a href="" target=""><img src="images/linkedin-icon.png" alt="LinkedIn"></a></li>
                  <li><a href="" target=""><img src="images/instagram-icon.png" alt="Instagram"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- copyright section end -->
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
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
   // Fungsi untuk membuka menu samping (sidebar)
   function openNav() {
      document.getElementById("mySidenav").style.width = "250px";  // Menetapkan lebar sidebar saat dibuka
      document.getElementById("main").style.marginLeft = "250px";  // Memberi ruang di sebelah kiri konten utama
   }

   // Fungsi untuk menutup menu samping (sidebar)
   function closeNav() {
      document.getElementById("mySidenav").style.width = "0";  // Menutup sidebar
      document.getElementById("main").style.marginLeft = "0";  // Mengembalikan margin konten utama ke posisi semula
   }

   // Menambahkan event listener untuk toggle menu navbar ketika area utama diklik
   $(document).ready(function() {
      $("#main").click(function() {
         $("#navbarSupportedContent").toggleClass("nav-normal");  // Menambahkan atau menghapus kelas CSS untuk mengubah tampilan navbar
      });
   });
</script>


</body>
</html>