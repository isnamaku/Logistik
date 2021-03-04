<!-- Navbar -->
<nav class="navbar navbar-expand-sm fixed-top navbar-line" style="width: 100%; background-color: #000000;">
  <a class="navbar-brand"  href="#" style="color: white;font-size: 28px; font-size: 30px; margin-right: 50px">
    <img src="assets/img/logo.png" width="55" height="45" class="d-inline-block align-top">
    Logistik BPBD DIY
  </a>

    <ul class="navbar-nav ml-auto" style="margin-right: 5%;">
      <li>
        
      </li>
      <li class="nav-item" style="margin-right: 15px;">
        <a class="nav-link" href="index.php" style="color: white; font-size : 16px;">Beranda</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 16px;"> Masuk</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url('Auth/login'); ?>">Admin </a>
            <a class="dropdown-item" href="#">Anggota</a>
        </div>
      </li>
  </ul>

</nav>
<!-- Akhir Navbar -->

<!-- Gambar Beranda -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 20px; ">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner "  style="width: 100%; height: 500px; ">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/beranda1.jpg" alt="First slide" style="height: 600px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/beranda2.jpg" alt="Second slide" style="height: 600px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Akhir Gambar Beranda -->


<div class="container" style="margin-top:120px;background-color:  #F79133;  "> 
      <h3 style="text-align: center; margin-bottom: 80px;">Sistem Pendataan Logistik BPBD DIY</h3>
</div>

</body>