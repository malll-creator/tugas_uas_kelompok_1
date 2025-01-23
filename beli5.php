<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Sekarang</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tambahkan CSS jika diperlukan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #325662;
        }

        h2 {
            color: #f7c17b;
        }

        img {
            width: 100%; /* Gambar akan responsif */
            max-width: 500px; /* Ukuran maksimum untuk gambar */
            border-radius: 8px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }

        .price {
            font-size: 24px;
            color: #325662;
            margin: 20px 0;
        }

        button {
            background-color: #f7c17b;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #325662;
            text-decoration: none;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Beli Sepeda Anda</h1>
        <img src="images/g.png" alt="Sepeda untuk Dijual"> <!-- Ganti dengan path gambar sepeda yang sesuai -->
        <p>Di sini Anda dapat melanjutkan untuk membeli sepeda yang Anda inginkan.</p>
        <h2>Detail Sepeda</h2>
        <p class="price">Harga: <span style="color: #f7c17b">Rp</span> <span style="color: #325662">5.000.000</span></p>
        <button onclick="window.location.href='aplikasi.html'">Lanjut ke Pembayaran</button>
        <div><a href="cycle.php">Kembali ke Beranda</a></div> <!-- Link untuk kembali ke halaman utama -->
    </div>
</body>
</html>