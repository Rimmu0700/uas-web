<?php
require "function.php";
$laptop = laptop("SELECT * FROM laptop");
$monitor = monitor("SELECT * FROM monitor");
$perlengkapan=pheripearls("SELECT * FROM perlengkapan")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOKOKU</title>
  <link rel="stylesheet" href="body.css" />
</head>

<body>
  <!-- Bagian dek jus -->
    <div class="header">
      <div class="navbar">
        <div class="logo">
          <img src="Assets/logo1.png" alt="">
        </div>
        <div class="navbar1">
          <ul>
            <li><a href="Index.html" class="a-navbar">Home</a></li>
            <li><a href="more.html">Product</a></li>
            <li><a href="#footer">About US</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="login1.php">Account</a></li>
            <li class="keranjang"><img src="Assets/keranjang.png" alt=""></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-2">
          <h1>DISCOVER MORE WITH YOUR NEW DEVICE</h1>
          <p>
            Only sell the best equiptment in the town
          </p>
        </div>
        <div class="col-2">
          <img src="Assets/jadi6.png" alt="">
        </div>
      </div>
    </div>
 <!-- ============= selesai Bagian dek jus ============= -->
  <!-- ============= Bagian armeza ============= -->
  <div class="Judul">
    <h1>OUR PROMO</h1>
    <p>Enjoy the best promo yall can get</p>
  </div>
  <div class="promo">
    <div class="promo1">
      <div class="gambarPromo">
        <img src="Assets/promo6.jpg" alt=""> <!--Promosi scroll otomatis-->
        <img src="Assets/promo2.jpg" alt="">
        <img src="Assets/promo3.jpg" alt="">
        <img src="Assets/promo4.jpg" alt="">
        <img src="Assets/promo5.webp" alt="" class="ke5">
      </div>
    </div>
  </div>

<h2>New Arrivals</h2>
<!-- =============Laptop============= -->
<h2>LAPTOPS</h2>
<div class="item-container">
<?php foreach($laptop as $lpt) {?>
  <div class="laptop-item">
    <img src="Assets/<?php echo($lpt["merek"]) ?>/<?php echo $lpt["gambar"] ?>" alt="Acer Nitro 15">
    <div class="laptop-content">
      <h3><?php echo $lpt["nama"] ?></h3>
      <p><?php echo($lpt["harga"])?></p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <?php } ?>
</div>

<!-- ============Tutup Laptop============= -->

  </div>
  </div>
  <div class="more-button">
  <a href="more.html"><button>More products</button></a>
  </div>

  <!-- ==========MONITOR======== -->

  <h2>MONITORS</h2>
  <div class="item-container">
    <?php foreach ($monitor as $mnt){ ?>
    <div class="laptop-item">
      <img src="Assets/<?php echo($mnt["tipe"]) ?>/<?php echo($mnt["gambar"]) ?>" alt="Acer Nitro 15">
      <div class="laptop-content">
        <h3><?php echo($mnt["nama"]) ?></h3>
        <p><?php echo($mnt["harga"])?></p>
        <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
      </div>
    </div>
    <?php } ?>
  </div>

<!-- ===========TUTUP MONITOR============ -->



<!-- ========= PHERIPERALS============= -->
<h1>PHERIPERALS</h1>
<div class="item-container1">
  <?php foreach($perlengkapan as $prl){?>
  <div class="laptop-item1">
    <img src="Assets/<?php echo($prl["tipe"]) ?>/<?php echo($prl["gambar"]) ?>" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3><?php echo($prl["nama"]) ?></h3>
      <p><?Php echo($prl["harga"]) ?></p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
<?php } ?>
</div>

<!-- ===========Tutup PHERIPERALS================ -->

  <div class="row1">
    <div class="col-3">
      <h1>Save 10% Off Your Order</h1>
      <p>
        Subscribe to get exclusive content
      </p>
      <input type="email" placeholder="Enter your email" />
      <button type="submit">Submit</button>
    </div>
    </div>

  <br>
  <br>
  <div class="Judul">
    <h1>OUR PATRNER</h1>
    <p>In order to deliver the best performance</p>
    <div class="logo-container">
      <img src="Assets/Acer/Acer logo.png" class="logo">
      <img src="Assets/Asus/Asus logo.png" class="logo">
      <img src="Assets/Lenovo/Lenovo logo.png" class="logo">
      <img src="Assets/Razer/Razer logo.png" class="logo">
    </div>
    <!-- ============= selesai Bagian armeza ============= -->
     <!-- ============= Bagian tommy ============= -->
    <footer id="footer">
      <div class="footer-container">
          <div class="footer content">
              <h2>Kontak</h2>
              <p>gmail:contoh@gmail.com</p>
              <p>Nomor telepon:081233456789</p>
              <p>alamat:jalan raya 1</p>
          </div>
          <div class="footer content">
              <h2>Tipe laptop</h2>
              <li><a href="">Laptop Murah</a></li>
              <li><a href="">Laptop Gaming</a></li>
              <li><a href="">Laptop Touchscreen</a></li>
              <li><a href="">PC & Monitor</a></li>
          </div>
          <div class="footer content">
              <h2>Sosial Media</h2>
              <li><a href="">Facebook</a></li>
              <li><a href="">Instagram</a></li>
              <li><a href="">Tiktok</a></li>
              <li><a href="">Twiter</a></li>
          </div>
      </div>
  </footer>
  <!-- ============= selesai bagian tommy ============= -->
   <script src="script.js"></script>
</body>
</html>