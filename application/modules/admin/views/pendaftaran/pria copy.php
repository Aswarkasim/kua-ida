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
      <td>: <a data-toggle="modal" data-target="#ModalExamplektp_wali"> Lihat KTP Wali</a>
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


<!-- Modal -->
<div class="modal fade" id="ModalExamplepiagam_nasehat_pernikahan_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Piagam Nasehat Pernikahan</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->piagam_nasehat_pernikahan_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalExamplesk_kematian_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Kematian(Bagi yang cerai mati)</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->sk_kematian_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalExampleakta_cerai_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Akta Cerai</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->akta_cerai_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalExamplepas_foto_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pas Foto</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->pas_foto_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalExamplesk_belum_menikah_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Belum Menikah</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->sk_belum_menikah_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalExamplesk_imunitas_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Imunitas</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->sk_imunitas_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalExampleijazah_terakhir_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ijazah Terakhir</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->ijazah_terakhir_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalExamplekk_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">KTP Kartu Keluarga Pria</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->kk_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalExamplektp_wali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">KTP Wali</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->ktp_wali); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="ModalExamplektp_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">KTP Pria</h5>
      </div>
      <div class="modal-body">
        <img src="<?= base_url($daftar->ktp_pria); ?>" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- </table>
</div> -->