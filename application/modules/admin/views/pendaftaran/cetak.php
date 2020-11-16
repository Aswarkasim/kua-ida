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
      size: portait;
      margin-left: 100px;
      margin-right: 100px;
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
    <div class="text-center">
      <h3><?= $konfigurasi->nama_aplikasi; ?></h3>
      <H4>DATA PENDAFTARAN PERNIKAHAN</H4>
      <h3></h3>
    </div>

    <p><b>Data Calon Suami</b></p>
    <table cellpadding="30px" paddingrows="20px">
      <tr>
        <td width="20px">1. </td>
        <td width="200px">Nama Calon Suami</td>
        <td>: <?= $daftar->nama_pria; ?></td>
      </tr>

      <tr>
        <td width="20px">2. </td>
        <td width="200px">Bin</td>
        <td>: <?= $daftar->bin_pria; ?></td>
      </tr>

      <tr>
        <td width="20px">3. </td>
        <td width="200px">Tempat Tanggal Lahir</td>
        <td>: <?= $daftar->tempat_lahir_pria . ',' . longdate_indo($daftar->tanggal_lahir_pria); ?></td>
      </tr>

      <tr>
        <td width="20px">4. </td>
        <td width="200px">Warga Negara</td>
        <td>: <?= $daftar->warga_negara_pria ?></td>
      </tr>

      <tr>
        <td width="20px">5. </td>
        <td width="200px">Alamat</td>
        <td>: <?= $daftar->alamat_pria ?></td>
      </tr>

      <tr>
        <td width="20px">6. </td>
        <td width="200px">Status</td>
        <td>: <?= $daftar->status_pria ?></td>
      </tr>

      <tr>
        <td width="20px">7. </td>
        <td width="200px">Umur</td>
        <td>: <?= $daftar->umur_pria ?></td>
      </tr>

    </table>
    <br><br>


    <p><b>Data Calon Istri</b></p>
    <table cellpadding="30px" paddingrows="20px">
      <tr>
        <td width="20px">1. </td>
        <td width="200px">Nama Calon Istri</td>
        <td>: <?= $daftar->nama_wanita; ?></td>
      </tr>

      <tr>
        <td width="20px">2. </td>
        <td width="200px">Bin</td>
        <td>: <?= $daftar->bin_wanita; ?></td>
      </tr>

      <tr>
        <td width="20px">3. </td>
        <td width="200px">Tempat Tanggal Lahir</td>
        <td>: <?= $daftar->tempat_lahir_wanita . ',' . longdate_indo($daftar->tanggal_lahir_wanita); ?></td>
      </tr>

      <tr>
        <td width="20px">4. </td>
        <td width="200px">Warga Negara</td>
        <td>: <?= $daftar->warga_negara_wanita ?></td>
      </tr>

      <tr>
        <td width="20px">5. </td>
        <td width="200px">Alamat</td>
        <td>: <?= $daftar->alamat_wanita ?></td>
      </tr>

      <tr>
        <td width="20px">6. </td>
        <td width="200px">Status</td>
        <td>: <?= $daftar->status_wanita ?></td>
      </tr>

      <tr>
        <td width="20px">7. </td>
        <td width="200px">Umur</td>
        <td>: <?= $daftar->umur_wanita ?></td>
      </tr>

    </table>
    <br>
    <p><b>Data Pelaksanaan Akad Nikah</b></p>
    <table cellpadding="30px" paddingrows="20px">

      <tr>
        <td width="20px">1. </td>
        <td width="200px">Nama Calon Suami</td>
        <td>: <?= $daftar->nama_pria; ?></td>
      </tr>

      <tr>
        <td width="20px">1. </td>
        <td width="200px">Nama Calon Istri</td>
        <td>: <?= $daftar->nama_wanita; ?></td>
      </tr>

      <tr>
        <td width="20px">3. </td>
        <td width="200px">Wali</td>
        <td>: <?= $daftar->wali_wanita ?></td>
      </tr>

      <tr>
        <td width="20px">4. </td>
        <td width="200px">Saksi</td>
        <td>: <?= $daftar->saksi ?></td>
      </tr>

      <tr>
        <td width="20px">5. </td>
        <td width="200px">Penghulu</td>
        <td>: <?= $daftar->penghulu ?></td>
      </tr>

      <tr>
        <td width="20px">6. </td>
        <td width="200px">Tanggal Akad Nikah</td>
        <td>: <?= $daftar->tgl_akad_nikah ?></td>
      </tr>

      <tr>
        <td width="20px">7. </td>
        <td width="200px">Mahar</td>
        <td>: <?= $daftar->mahar_pernikahan ?></td>
      </tr>

      <tr>
        <td width="20px">8. </td>
        <td width="200px">Tempat Pelaksanaan Akad</td>
        <td>: <?= $daftar->tempat_akad; ?></td>
      </tr>

    </table>


  </div>

  <script>
    window.print()
  </script>
</body>

</html>