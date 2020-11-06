<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <strong>
          <h3>Data Pendaftar</h3>
        </strong>
      </div>
      <div class="box-body">
        <?php if ($daftar->is_valid == 1) { ?>
          <div class="alert alert-success"><i class="fa fa-check"></i> Berkas Valid</div>
          <a href="<?= base_url('admin/pendaftaran/is_valid/0/' . $daftar->id_daftar); ?>" class="btn btn-danger"><i class="fa fa-times"></i>Tidak Valid</a>
          <a href="<?= base_url('admin/pendaftaran/addJadwal/' . $daftar->id_daftar); ?>" class="btn btn-warning"><i class="fa fa-calendar"></i> Buat Jadwal</a>
        <?php } else { ?>
          <div class="alert alert-danger"><i class="fa fa-check"></i> Berkas Tidak Valid</div>
          <a href="<?= base_url('admin/pendaftaran/is_valid/1/' . $daftar->id_daftar); ?>" class="btn btn-success"><i class="fa fa-check"></i> Validasi</a>
        <?php } ?>


        <a href="<?= base_url('admin/pendaftaran/cetak/' . $daftar->id_daftar) ?>" class="btn btn-primary" target="blank"><i class="fa fa-print"></i> Cetak Data</a>
      </div>
    </div>
  </div>
</div>
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#dataLengkap" data-toggle="tab" aria-expanded="false">Data Pendaftar</a></li>
    <li class=""><a href="#dataPria" data-toggle="tab" aria-expanded="false">Data Pria</a></li>
    <li class=""><a href="#dataWanita" data-toggle="tab" aria-expanded="true">Data Wanita</a></li>
  </ul>
  <div class="tab-content">



    <div class="tab-pane active" id="dataLengkap">
      <table class="table">
        <tr>
          <td width="250px">Nama Calon Suami</td>
          <td>: <?= $daftar->nama_pria ?></td>
        </tr>

        <tr>
          <td>Nama Calon Istri</td>
          <td>: <?= $daftar->nama_wanita ?></td>
        </tr>


        <tr>
          <td>Wali Calon Istri</td>
          <td>: <?= $daftar->wali_wanita ?></td>
        </tr>

        <tr>
          <td>Saksi 1</td>
          <td>: <?= $daftar->saksi ?></td>
        </tr>

        <tr>
          <td>Penghulu</td>
          <td>: <?= $daftar->penghulu ?> <a data-toggle="modal" class="btn btn-success btn-xs" data-target="#exampleModalAddPenghulu"><i class="fa fa-edit"></i></a></td>
        </tr>

        <tr>
          <td>Taggal Akad Nikah</td>
          <td>: <?= $daftar->tgl_akad_nikah ?></td>
        </tr>

        <tr>
          <td>Mahar</td>
          <td>: <?= $daftar->mahar_pernikahan ?></td>
        </tr>

        <tr>
          <td>Tempat</td>
          <td>: <?= $daftar->tempat_akad ?></td>
        </tr>

        <tr>
          <td>Surat Keterangan dari desa</td>
          <td>: <a data-toggle="modal" data-target="#exampleModalSKDESA">Surat Keterngan dari desa</a>
          </td>
        </tr>

        <tr>
          <td>Rekomendasi Pernikahan</td>
          <td>: <a data-toggle="modal" data-target="#exampleModalRekoendasiNikah">Rekomendasi Nikah</a></td>
        </tr>


      </table>
      <!-- /.post -->
    </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="dataPria">
      <table class="table">
        <tr>
          <td width="250px">Nama Calon Suami</td>
          <td>: <?= $daftar->nama_pria ?></td>
        </tr>

        <tr>
          <td width="250px">Nama Bin</td>
          <td>: <?= $daftar->bin_pria ?></td>
        </tr>

        <tr>
          <td>Tempat Lahir</td>
          <td>: <?= $daftar->tempat_lahir_pria ?></td>
        </tr>

        <tr>
          <td>Tanggal Lahir</td>
          <td>: <?= $daftar->tanggal_lahir_pria ?></td>
        </tr>

        <tr>
          <td>Agama</td>
          <td>: <?= $daftar->agama_pria ?></td>
        </tr>

        <tr>
          <td>Alamat</td>
          <td>: <?= $daftar->alamat_pria ?></td>
        </tr>

        <tr>
          <td>Status</td>
          <td>: <?= $daftar->status_pria ?></td>
        </tr>

        <tr>
          <td>Umur</td>
          <td>: <?= $daftar->umur_pria ?></td>
        </tr>

        <tr>
          <td>KTP</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplektp_pria">Lihat KTP</a>
          </td>
        </tr>


        <tr>
          <td>KTP Wali</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplektp_wali_pria"> Lihat KTP Wali</a>
          </td>
        </tr>

        <tr>
          <td>Kartu Keluarga Pria</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplekk_pria">Kartu Keluarga Pria</a>
          </td>
        </tr>

        <tr>
          <td>Ijazah Terakhir</td>
          <td>: <a data-toggle="modal" data-target="#ModalExampleijazah_terakhir_pria">Lihat Ijazah Terakhir</a>
          </td>
        </tr>

        <tr>
          <td>Surat Keterangan Imunitas</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplesk_imunitas_pria">Lihat Surat Keterangan Imunitas</a>
          </td>
        </tr>

        <tr>
          <td>Surat Keterangan Belum Menikah</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplesk_belum_menikah_pria">Lihat Surat Keterangan Belum Menikah</a>
          </td>
        </tr>

        <tr>
          <td>Pas Foto</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplepas_foto_pria">Lihat Pas Foto</a>
          </td>
        </tr>

        <tr>
          <td>Akta Cerai</td>
          <td>: <a data-toggle="modal" data-target="#ModalExampleakta_cerai_pria">Lihat Akta Cerai</a>
          </td>
        </tr>

        <tr>
          <td>Surat Keterangan Kematian(Bagi yang cerai mati)</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplesk_kematian_pria">Lihat Surat Keterangan Kematian(Bagi yang cerai mati)</a>
          </td>
        </tr>

        <tr>
          <td>Piagam Nasehat Pernikahan</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplepiagam_nasehat_pernikahan_pria">Lihat Piagam Nasehat Pernikahan</a>
          </td>
        </tr>

      </table>
    </div>
    <!-- /.tab-pane -->

    <div class="tab-pane" id="dataWanita">
      <table class="table">
        <tr>
          <td width="250px">Nama Calon Istri</td>
          <td>: <?= $daftar->nama_wanita ?></td>
        </tr>

        <tr>
          <td width="250px">Nama Bin</td>
          <td>: <?= $daftar->bin_wanita ?></td>
        </tr>

        <tr>
          <td width="250px">Nama Wali</td>
          <td>: <?= $daftar->wali_wanita ?></td>
        </tr>

        <tr>
          <td>Tempat Lahir</td>
          <td>: <?= $daftar->tempat_lahir_wanita ?></td>
        </tr>

        <tr>
          <td>Tanggal Lahir</td>
          <td>: <?= $daftar->tanggal_lahir_wanita ?></td>
        </tr>

        <tr>
          <td>Agama</td>
          <td>: <?= $daftar->agama_wanita ?></td>
        </tr>

        <tr>
          <td>Alamat</td>
          <td>: <?= $daftar->alamat_wanita ?></td>
        </tr>

        <tr>
          <td>Status</td>
          <td>: <?= $daftar->status_wanita ?></td>
        </tr>

        <tr>
          <td>Umur</td>
          <td>: <?= $daftar->umur_wanita ?></td>
        </tr>

        <tr>
          <td>KTP</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplektp_wanita">Lihat KTP</a>
          </td>
        </tr>


        <tr>
          <td>KTP Wali</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplektp_wali_wanita"> Lihat KTP Wali</a>
          </td>
        </tr>

        <tr>
          <td>Kartu Keluarga Pria</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplekk_wanita">Kartu Keluarga Pria</a>
          </td>
        </tr>

        <tr>
          <td>Ijazah Terakhir</td>
          <td>: <a data-toggle="modal" data-target="#ModalExampleijazah_terakhir_wanita">Lihat Ijazah Terakhir</a>
          </td>
        </tr>

        <tr>
          <td>Surat Keterangan Imunitas</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplesk_imunitas_wanita">Lihat Surat Keterangan Imunitas</a>
          </td>
        </tr>

        <tr>
          <td>Surat Keterangan Belum Menikah</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplesk_belum_menikah_wanita">Lihat Surat Keterangan Belum Menikah</a>
          </td>
        </tr>

        <tr>
          <td>Pas Foto</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplepas_foto_wanita">Lihat Pas Foto</a>
          </td>
        </tr>

        <tr>
          <td>Akta Cerai</td>
          <td>: <a data-toggle="modal" data-target="#ModalExampleakta_cerai_wanita">Lihat Akta Cerai</a>
          </td>
        </tr>

        <tr>
          <td>Surat Keterangan Kematian(Bagi yang cerai mati)</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplesk_kematian_wanita">Lihat Surat Keterangan Kematian(Bagi yang cerai mati)</a>
          </td>
        </tr>

        <tr>
          <td>Piagam Nasehat Pernikahan</td>
          <td>: <a data-toggle="modal" data-target="#ModalExamplepiagam_nasehat_pernikahan_wanita">Lihat Piagam Nasehat Pernikahan</a>
          </td>
        </tr>

      </table>
    </div>
    <!-- /.tab-pane -->
  </div>
  <!-- /.tab-content -->
</div>



<?php include('lengkap.php') ?>
<?php include('pria.php') ?>
<?php include('wanita.php') ?>