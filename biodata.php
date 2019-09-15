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

<!-- biodata -->
<section id="biografi" class="biografi">
  <div class="container konten">
  <h3 class="center">Biodata</h3>
  <table class="biotable" border="0">
  <tr>
    <td colspan="2"><h5>DATA PRIBADI</h5></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>: Ahmad Fauzan</td>
  </tr>
  <tr>
    <td>Tempat, tanggal lahir</td>
    <td>: Jakarta, 09 April 2003</td>
  </tr>
  <tr>
    <td>NIS/NISN</td>
    <td>: 11630/0035797017</td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>: Islam</td>
  </tr>
    <tr>
    <td>Cita-cita;</td>
    <td>: Freelancer sukses</td>
  </tr>
  <tr>
    <td>Hobi</td>
    <td>: Membaca, mengetik, menggambar, nonton film, dan gaming</td>
  </tr>
  <tr>
    <td>Alamat rumah</td>
    <td>: Jl. Rawa Simprug IV No. 27A Rt.001/09</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>: anefauzann@gmail.com</td>
  </tr>
  <tr>
    <td>No. HP</td
    >
    <td>: 08989629260</td>
  </tr>
 
  <tr>
    <td>Pendidikan sebelumnya</td>
    <td>:</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>1. SDN 06 Pt. Grogol Selatan</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2. SMPN 66 Jakarta</td>
  </tr>
    <tr>
    <td colspan="2"><h5>DATA KELUARGA</h5></td>
  </tr>
  <tr>
    <td>Nama Ayah</td>
    <td>: Syarifudin</td>
  </tr>
  <tr>
    <td>Nama Ibu</td>
    <td>: Uswatun Hasanah</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><h5>DATA TAMBAHAN</h5></td>
  </tr>
  <tr>
    <td>Makanan kesukaan</td>
    <td>: Apa aja yang penting coklat</td>
  </tr>
  <tr>
    <td>Film kesukaan</td>
    <td>: GLASS</td>
  </tr>
  <tr>
    <td>Motto</td>
    <td>: Percayalah, uang itu bukanlah segalanya, masih ada Visa dan Mastercard.</td>
  </tr>
</table>
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