<section class="pt80 pb90 bg-white">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-12 text-center pb50">
        <h2>Pendaftaran<br><strong>Pernikahan</strong></h2>
      </div>

    </div>


    <h3>Data Pria</h3>

    <div class="form-group">
      <label for="">Nama</label>
      <input type="text" placeholder="Nama">
    </div>

    <div class="form-group">
      <label for="">No. KTP</label>
      <input type="number" placeholder="No. Ktp">
    </div>

    <div class="form-group">
      <label for="">Foto KTP</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-check"></i>Upload
      </button>
    </div>

    <div class="form-group">
      <label for="">Kartu Keluarga</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalKKPria">
        <i class="fa fa-check"></i>Upload
      </button>
    </div>

    <div class="form-group">
      <label for="">Ijazah Terakhir</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalKKPria">
        <i class="fa fa-check"></i>Upload
      </button>
    </div>

    <div class="form-group">
      <label for="">Surat Keterangan Imunitas</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalSkImunitasPria">
        <i class="fa fa-check"></i>Upload
      </button>
    </div>

    <div class="form-group">
      <label for="">Surat Keterangan Belum Menikah</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBelumMenikahPria">
        <i class="fa fa-check"></i>Upload
      </button>
    </div>

    <div class="form-group">
      <label for="">Pas Foto Latar Biru</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPasFotoPria">
        <i class="fa fa-check"></i>Upload
      </button>
    </div>

    <div class="form-group">
      <label for="">Akta Cerai</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAktaPria">
        <i class="fa fa-check"></i>Upload
      </button>
    </div>

    <div class="form-group">
      <label for="">Keterangan Kematian Bagi yang Cerai Mati</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCeraiKematianPria">
        <i class="fa fa-check"></i>Upload
      </button>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= base_url('home/nikah/daftar/dataWanita'); ?>" class="btn btn-primary btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></a>
        <!-- <button type="submit" class="btn btn-primary btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></button> -->
      </div>
    </div>

  </div>
</section>



<!-- Modal -->
<div class="modal fade" id="modalCeraiKematianPria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?= form_open_multipart('home/nikah/daftar/') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Keterangan Kematian Bagi yang Cerai Mati</h5>
      </div>
      <div class="modal-body">
        <input type="file" name="sk_kematian_cerai_pria" required id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAktaPria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?= form_open_multipart('home/nikah/daftar/') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Akta Cerai</h5>
      </div>
      <div class="modal-body">
        <input type="file" name="akta_cerai_pria" required id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalPasFotoPria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?= form_open_multipart('home/nikah/daftar/') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pas Foto Latar Biru</h5>
      </div>
      <div class="modal-body">
        <input type="file" name="foto_pria" required id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalBelumMenikahPria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?= form_open_multipart('home/nikah/daftar/') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Belum Menikah</h5>
      </div>
      <div class="modal-body">
        <input type="file" name="sk_belum_menikah_pria" required id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalSkImunitasPria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?= form_open_multipart('home/nikah/daftar/') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Imunitas</h5>
      </div>
      <div class="modal-body">
        <input type="file" name="sk_imunitas_pria" required id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalKKPria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?= form_open_multipart('home/nikah/daftar/') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ijazah Terakhir</h5>
      </div>
      <div class="modal-body">
        <input type="file" name="ijazah_terakhir_pria" required id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalKKPria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?= form_open_multipart('home/nikah/daftar/') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kartu Keluarga Pria</h5>
      </div>
      <div class="modal-body">
        <input type="file" name="kk_pria" required id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?= form_open_multipart('home/nikah/daftar/') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">KTP Pria</h5>
      </div>
      <div class="modal-body">
        <input type="file" name="ktp_pria" required id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>