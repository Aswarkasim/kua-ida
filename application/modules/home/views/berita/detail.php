<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4"><?= $berita->judul_berita; ?></h1>

      <hr>

      <!-- Date/Time -->
      <p><?= bulan($berita->date_created); ?></p>

      <hr>

      <!-- Preview Image -->
      <img class="img-fluid rounded" src="<?= base_url($berita->gambar); ?>" alt="">

      <hr>

      <!-- Post Content -->
      <p class="lead"><?= $berita->isi; ?></p>

      <hr>



    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">


      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Kategori</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-unstyled mb-0">
                <?php foreach ($kategori as $row) { ?>
                  <li>
                    <a href="<?= base_url('admin/berita/kategori/' . $row->id_kategori . '/' . $row->nama_kategori); ?>"><?= $row->nama_kategori; ?></a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>


    </div>


  </div>
  <!-- /.row -->





</div>