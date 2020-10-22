<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>


<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>"><strong> KUA</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active"><a class="nav-link" href="<?= base_url('home/index'); ?>"><strong> Beranda</strong></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('home/berita'); ?>"><strong> Berita</strong></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('home/nikah/pernikahan'); ?>"><strong> Pernikahan</strong></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('home/sejarah'); ?>"><strong> Sejarah</strong></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('home/visimisi'); ?>"><strong> Visi & Misi</strong></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('home/organisasi'); ?>"><strong> Struktur Organisasi</strong></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('home/saran'); ?>"><strong> Hubungi Kami</strong></a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">


        <?php if ($this->session->userdata('id_user')) { ?>
          <a href="<?= base_url('user/pribadi'); ?>" class="btn btn-success">
            <i class="fa fa-user"></i> <?php echo ' &nbsp' . $this->session->userdata('namalengkap') ?>
          </a>
        <?php } else { ?>
          <a href="<?= base_url('home/auth'); ?>" class="btn btn-success">
            <i class="fa fa-sign-in"></i> Login
          </a>
        <?php } ?>
      </form>
    </div>
  </div>
</nav>