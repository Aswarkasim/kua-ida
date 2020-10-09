<!-- Start Header -->
<nav class="navbar nav-down" data-fullwidth="true" data-animation="shrink">
  <!-- Styles: light, dark, transparent, transparent-to-dark | Animation: hiding, shrink -->
  <div class="container">

    <div class="navbar-header">
      <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>
        <a class="navbar-brand to-top" href="#"><img src="<?= base_url('assets/home/'); ?>img/assets/logo-light.png" class="logo-light" alt="#"><img src="<?= base_url('assets/home/'); ?>img/assets/logo-dark.png" class="logo-dark" alt="#"></a>
      </div>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <div class="container">
        <ul class="nav navbar-nav menu-right">

          <!-- Each section must have corresponding ID ( #hero -> id="hero" ) -->
          <li><a href="<?= base_url('home/index'); ?>">Beranda</a></li>
          <li><a href="<?= base_url('home/berita'); ?>">Berita</a></li>
          <li><a href="<?= base_url('home/nikah/pernikahan'); ?>">Pernikahan</a></li>
          <li><a href="<?= base_url('home/sejarah'); ?>">Sejarah</a></li>
          <li><a href="<?= base_url('home/visimisi'); ?>">Visi & Misi</a></li>
          <li><a href="<?= base_url('home/organisasi'); ?>">Struktur Organisasi</a></li>
          <li><a href="<?= base_url('home/kontak'); ?>">Hubungi Kami</a></li>

          <li class="nav-separator"></li>
          <!-- <li class=""><a href="<?= base_url('user/dashboard'); ?>"> 
              <i class="fa fa-user"></i>
            </a></li> -->
        </ul>

      </div>
    </div>
  </div>
</nav>
<!-- End Header -->