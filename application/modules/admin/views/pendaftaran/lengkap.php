<!-- Modal -->
<div class="modal fade" id="exampleModalAddPenghulu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?= form_open('admin/pendaftaran/editPenghulu/' . $daftar->id_daftar) ?>
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Penghulu</h5>
        </div>
        <div class="modal-body">
          <input type="text" value="<?= $daftar->penghulu; ?>" placeholder="Nama Penghulu" required class="form-control" name="penghulu">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
      <?= form_close() ?>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalRekoendasiNikah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?= form_open_multipart('home/nikah/daftar/rekomendasiNikah') ?>
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rekomendasi Pernikahan</h5>
        </div>
        <div class="modal-body">
          <img src="<?= base_url($daftar->rekomendasi_nikah); ?>" width="100%" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
      <?= form_close() ?>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModalSKDESA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?= form_open_multipart('home/nikah/daftar/rekomendasiNikah') ?>
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rekomendasi Pernikahan</h5>
        </div>
        <div class="modal-body">
          <img src="<?= base_url($daftar->sk_desa); ?>" width="100%" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
      <?= form_close() ?>
    </div>
  </div>
</div>