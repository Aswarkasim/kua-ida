<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manajemen Jadwal</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <p>
      <a href="<?= base_url($add) ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>

      <div class="btn-group">
        <button type="button" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li> <a href="<?= base_url('admin/jadwal/cetakList') ?>" target="blank"><i class="fa fa-print"></i> Cetak Semua</a></li>
          <li><a href="<?= base_url('admin/jadwal/printSelesai') ?>" target="blank"><i class="fa fa-hourglass-1"></i> Cetak Acara Selesai</a></li>
          <li><a href="<?= base_url('admin/jadwal/printBelum') ?>" target="blank"><i class="fa fa-hourglass-half"></i> Cetak Acara Belum Selesai</a></li>
        </ul>
      </div>

      <a data-toggle="modal" class="btn btn-warning" data-target="#exampleModalCetakListRange"><i class="fa fa-calendar"></i> Cetak Berdasar Waktu</a>


    </p>

    <table class="table DataTable">
      <thead>
        <tr>
          <th width="40px">No</th>
          <th>Nama Pria</th>
          <th>Nama Wanita</th>
          <th>Akad</th>
          <th>jam</th>
          <th width="100px">Status</th>
          <th width="200px">Tindakan</th>
        </tr>
      </thead>

      <body>
        <?php $no = 1;
        foreach ($jadwal as $row) { ?>
          <tr>
            <td width="50dp"><?= $no++; ?></td>
            <td><?= $row->nama_pria; ?></td>
            <td><?= $row->nama_wanita; ?></td>
            <td><?= $row->tanggal; ?></td>
            <td><?= $row->jam; ?></td>
            <td><?= $row->is_done; ?></td>
            <td>
              <a href="<?= base_url('admin/jadwal/edit/' . $row->id_jadwal); ?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
              <a href="<?= base_url('admin/jadwal/delete/' . $row->id_jadwal); ?>" class="btn btn-xs btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
      </body>
    </table>

  </div>
  <!-- /.box-body -->
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCetakListRange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?= form_open('admin/jadwal/printListRange') ?>
      <form method="post" target="_blank">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Interval Waktu</h5>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label>Tanggal Awal</label>
            <input type="date" name="awal" required class="form-control" id="">
          </div>

          <div class="form-group">
            <label>Tanggal Akhir</label>
            <input type="date" name="akhir" required class="form-control" id="">
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Cetak</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </form>
      <?= form_close() ?>
    </div>
  </div>
</div>