<!DOCTYPE html>
  <html>
    <head>
      <title>aneFauzan Website</title>
      <!--Import Google Icon Font-->
      <link href="fonts.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="fonts/style.css">
    </head>

    <body>
      <header>
          <div class="navbar-fixed">
    <nav class="indigo">
    <div class="container">
      <div class="nav-wrapper">
          <a href="#!" class="brand-logo logo1">aneFauzan</a>
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="biografi.php">Biografi</a></li>
        <li><a href="biodata.php">Biodata</a></li>
        <li><a href="fotopribadi.php">Foto Pribadi</a></li>
        <li><a href="fotobareng.php">Foto Bersama</a></li>
    </ul>
      </div>
      </div>
    </nav>
    <!-- mobile navbar -->
  <nav class="nav-extended navbar-fixed indigo">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">aneFauzan</a>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="index.php">Beranda</a></li>
        <li class="tab"><a href="biografi.php">Biografi</a></li>
        <li class="tab"><a href="biodata.php">Biodata</a></li>
        <li class="tab"><a href="fotopribadi.php">Foto Pribadi</a></li>
        <li class="tab"><a href="fotobareng.php">Foto Bersama</a></li>
      </ul>
    </div>
  </nav>
      </header>

<!-- foto pribadi -->
<section id="foto" class="foto">
<!-- foto bareng temen -->
<div class="container konten center">
  <h3>Foto Bersama Teman</h3>
    <div class="row">
      <div class="col m3 s12">
        <img src="img/foto_bareng/0.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/foto_bareng/1.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/foto_bareng/2.jpg" alt="" class="responsive-img materialboxed">
     </div>
      <div class="col m3 s12">
        <img src="img/foto_bareng/3.jpg" alt="" class="responsive-img materialboxed">
     </div>
    </div>
    <div class="row">
      <div class="col m3 s12">
        <img src="img/foto_bareng/4.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/foto_bareng/5.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/foto_bareng/6.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/foto_bareng/7.jpg" alt="" class="responsive-img materialboxed">
      </div>
    </div>
    <div class="row">
      <div class="col m3 s12">
        <img src="img/foto_bareng/8.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/foto_bareng/9.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/foto_bareng/10.jpeg" alt="" class="responsive-img materialboxed">
      </div>
    </div>
</div>
</section>
    

  <!-- footer -->
          <footer class="page-footer indigo">
          <div class="container">
<!-- conten footer -->
          </div>
          <div class="footer-copyright blue-grey darken-4 center">
            <div class="container">
            Copyright © 2019 · <a href="#">aneFauzan Website<br></a>Made with Love by Neoxy Reii
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        const slider = document.querySelectorAll ('.slider');
        M.Slider.init(slider, {
        indicators: false  ,
        height: 300,
        interval: 4000
        });
        const paralLax = document.querySelectorAll ('.parallax');
        M.Parallax.init(paralLax)

        const materialBox = document.querySelectorAll ('.materialboxed');
        M.Materialbox.init(materialBox)
      </script>
    </body>
  </html>