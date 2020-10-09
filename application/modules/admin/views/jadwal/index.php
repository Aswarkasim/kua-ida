<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manajemen User</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <p>
      <a href="<?= base_url($add) ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
    </p>

    <table class="table DataTable">
      <thead>
        <tr>
          <th width="40px">No</th>
          <th>Nama Pria</th>
          <th>Nama Wanita</th>
          <th>Akad</th>
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
            <td><?= $row->akad; ?></td>
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