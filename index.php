<?php
require "function.php";
$laptop = query("SELECT * FROM laptop");
var_dump($laptop)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS</title>
    <link rel="stylesheet" href="style.css">
</head>
<>
    <div class="header">
        <div class="navbar">
          <div class="logo">
            <img src="Assets/logo1.png" alt="">
          </div>
          <div class="navbar1">
            <ul>
              <li><a href="Index.html" class="a-navbar">Home</a></li>
              <li><a href="Product.html">Product</a></li>
              <li><a href="#footer">About US</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="login.html">Account</a></li>
              <li class="keranjang"><img src="Assets/keranjang.jpg" alt=""></li>
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
      
  <div class="Judul">
    <h1>OUR PROMO</h1>
    <p>Enjoy the best promo yall can get</p>
  </div>
  <div class="promo">
    <div class="promo1">
      <div class="gambarPromo">
        <img src="Assets/promo6.jpg" alt=""> 
        <img src="Assets/promo2.jpg" alt="">
        <img src="Assets/promo3.jpg" alt="">
        <img src="Assets/promo4.jpg" alt="">
        <img src="Assets/promo5.webp" alt="" class="ke5">
      </div>
    </div>
  </div>


  <!-- ================ Product ================ -->
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
  <!-- =============== Tutup Product ============= -->











  <div class="more-button">
  <a href="more.html"><button>More products</button></a>
  </div>

  <h2>MONITORS</h2>

  <div class="item-container">
    <div class="laptop-item">
      <img src="Assets/monitor/acer ed270u.jpg" alt="Acer Nitro 15">
      <div class="laptop-content">
        <h3>ACER ED270U</h3>
        <p>Rp 1.599.000</p>
        <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
      </div>
    </div>
    <div class="laptop-item">
      <img src="Assets/monitor/aoc  27g2.jpg" alt="Acer Nitro 16">
      <div class="laptop-content">
        <h3>AOC 27G2</h3>
        <p>Rp1.299.000</p>
        <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
      </div>
    </div>
    <div class="laptop-item">
      <img src="Assets/monitor/aoc 24g2.jpg" alt="Acer helios 16">
      <div class="laptop-content">
        <h3>AOC 24G2</h3>
        <p>Rp1.067.000</p>
        <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
      </div>
    </div>
    <div class="laptop-item">
      <img src="Assets/monitor/g225F msi.jpg" alt="ROG G15">
      <div class="laptop-content">
        <h3>MSI G225F</h3>
        <p>Rp1.799.000</p>
        <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
      </div>
    </div>
    <div class="laptop-item">
      <img src="Assets/monitor/koorui 24e3.jpg" alt="Legion Pro 7i">
      <div class="laptop-content">
        <h3>KOORUI 24E3</h3>
        <p>Rp5.499.000</p>
        <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
      </div>
    </div>
    <div class="laptop-item">
      <img src="Assets/monitor/lenovo r25i.jpg" alt="MSI GT77">
      <div class="laptop-content">
        <h3>LENOVO R25I</h3>
        <p>Rp9.999.000</p>
        <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
      </div>
    </div>
    <div class="laptop-item">
      <img src="Assets/monitor/viewsonix vx2758a.jpg" alt="Msi raider GE78">
      <div class="laptop-content">
        <h3>VIEWSONIC VX2758A</h3>
        <p>Rp4.899.000</p>
        <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
      </div>
    </div>
  </div>
  </div>


<h1>PHERIPERALS</h1>
<div class="item-container1">
  <div class="laptop-item1">
    <img src="Assets/Mouse/logi.jpg" alt="Logi">
    <div class="laptop-content1">
      <h3>Logitech gpro</h3>
      <p>Rp 2.197.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/headset/daxa sedna.webp" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>DAXA SEDNA</h3>
      <p>Rp 570.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/keyboard/daxa m71.jpg" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>DAXA M71</h3>
      <p>Rp 1.200.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/Mouse/innox2.jpg" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>INNO X2 4K</h3>
      <p>Rp 750.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/headset/logi g733.jpg" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>LOGI G733</h3>
      <p>Rp 1.730.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/Mouse/razer v3.png" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>Razer v3 pro</h3>
      <p>Rp 1.700.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/Mouse/VXE MAD R.webp" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>VXE MAD R</h3>
      <p>Rp 899.999</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/keyboard/mad60he.jpg" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>MAD 60HE</h3>
      <p>Rp 999.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/rtx.jpg" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>RTX 5090</h3>
      <p>Rp 40.000.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/keyboard/Razer hustman mini.webp" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>Razer hustman</h3>
      <p>Rp 1.200.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
  <div class="laptop-item1">
    <img src="Assets/Mouse/inno x3 pro.jpg" alt="Acer Nitro 15">
    <div class="laptop-content1">
      <h3>INNO X3 PRO</h3>
      <p>Rp 799.000</p>
      <a href="AcerNitro15.html"><button>Spesifikasi</button></a>
    </div>
  </div>
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

   <script src="script.js"></script>
</body>
</html>