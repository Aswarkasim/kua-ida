<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cetak Data Pendaftar</title>
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <style type="text/css">
    /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } */

    @page {
      size: landscape;
      margin-left: 50px;
      margin-right: 50px;
      margin-top: 50px;
      margin-bottom: 50px;
      font-size: 12px;
    }

    .pembungkus {
      position: relative;
    }

    #qrCode {
      position: absolute;
      top: 10px;
      left: 10px;
    }

    tr {
      padding-bottom: 200px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <!-- <img width="100px" src="<?= base_url('assets/img/logo.png'); ?>" alt=""> -->
      </div>
      <div class="col-md-10">
        <div class="text-center">
          <h3>KEMENTRIAN AGAMA <br> <?= $konfigurasi->nama_aplikasi; ?> <br>
            <?= 'KECAMATAN ' . $konfigurasi->kecamatan; ?></h3>
          <p><?= 'Alamat :' . $konfigurasi->alamat; ?></p>
        </div>
      </div>
    </div>
    <hr height="10px">

    <div class="row">
      <div class="col-md-12">
        <center><b>
            <h4> LAPORAN JADWAL PERNIKAHAN</h4>
          </b></center>

        <table width="100%" class="table">
          <thead>
            <tr>
              <td>No.</td>
              <td>Nama Calon Suami</td>
              <td>Nama Calon Istdi</td>
              <td>Wali</td>
              <td>Saksi</td>
              <td>Penghulu</td>
              <td>Tanggal Akad</td>
              <td>Mahar Pernikahan</td>
              <td>Tempat Pelaksanaan</td>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($jadwal as $row) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->nama_pria; ?></td>
                <td><?= $row->nama_wanita; ?></td>
                <td><?= $row->wali_wanita; ?></td>
                <td><?= $row->saksi; ?></td>
                <td><?= $row->penghulu; ?></td>
                <td><?= longdate_indo($row->tanggal); ?></td>
                <td><?= $row->mahar_pernikahan; ?></td>
                <td><?= $row->tempat; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="pull-right">
        <br><br>
        <p>
          <?php $date = date('Y-m-d');
          echo  $konfigurasi->kecamatan . ', ' . date_indo($date) ?>
          <br><br><br><br>
          ---------------------------------
        </p>
      </div>
    </div>
  </div>

  <script>
    window.print()
  </script>
</body>

</html>