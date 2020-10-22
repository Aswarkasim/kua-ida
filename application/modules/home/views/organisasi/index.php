<div class="container">

  <div class="row">
    <div class="col-md-8">
      <center>
        <h3><strong>Struktur Organisasi</strong></h3>
      </center>
      <table class="table">
        <?php foreach ($struktur as $row) { ?>
          <tr>
            <td width="300px" align="right"><?= $row->nama_struktur; ?></td>
            <td>
              <?php
              $karyawan = $this->Crud_model->listingOneAll('tbl_karyawan', 'id_struktur', $row->id_struktur);
              foreach ($karyawan as $k) {
              ?>
                <table>
                  <tr>
                    <td><?= $k->nama_karyawan; ?></td>
                  </tr>
                </table>

              <?php } ?>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>

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
                    <a href="<?= base_url('admin/berita/kategori/' . $row->id_kategori . $row->nama_kategori); ?>"><?= $row->nama_kategori; ?></a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>