<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h2 class="mt-4">VISI & MISI</h2>

      <hr>

      <blockquote>
        <h3><strong>Visi</strong></h3>
      </blockquote>
      <p><?= $profil->visi; ?></p>
      <hr>

      <blockquote>
        <h3><strong>Misi</strong></h3>
      </blockquote>
      <p><?= $profil->misi; ?></p>

      <hr>


    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">


      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Berita</h5>
        <div class="card-body">

          <?php foreach ($berita as $row) { ?>
            <div class="input-group">
              <h5><strong><a href="<?= base_url('home/berita/detail/' . $row->id_berita); ?>"> <?= $row->judul_berita; ?></a></strong></h5>
              <p><?= character_limiter($row->isi, '50') ?></p>
              <hr>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

  </div>

</div>