<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
  <div class="col-md-6">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <?php
        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
        ?>

        <form action="<?= base_url($add) ?>" method="post">

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Nama Pria</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="nama_pria" value="<?= set_value('nama_pria') ?>" placeholder="Nama Pria" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Nama Wanita</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="nama_wanita" placeholder="Nama Wanita" value="<?= set_value('nama_wanita') ?>" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Wali Calon Istri</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="wali_wanita" placeholder="Wali Calon Istri" value="<?= set_value('wali_wanita') ?>" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Penghulu</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="penghulu" placeholder="Penghulu" value="<?= set_value('penghulu') ?>" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Mahar</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="mahar_pernikahan" placeholder="Mahar" value="<?= set_value('mahar_pernikahan') ?>" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Saksi</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="saksi" placeholder="Saksi" value="<?= set_value('saksi') ?>" class="form-control">
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Tanggal Akad</label>
              </div>
              <div class="col-md-9">
                <input type="date" name="tanggal" value="<?= set_value('akad') ?>" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Jam</label>
              </div>
              <div class="col-md-9">
                <input type="time" name="jam" value="<?= set_value('jam') ?>" class="form-control">
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Tempat</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="tempat" value="<?= set_value('tempat') ?>" placeholder="Tempat" class="form-control">
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Status</label>
              </div>
              <div class="col-md-9">
                <select name="is_done" class="form-control">
                  <option value="none">--Status--</option>
                  <option value="Belum Selesai">Belum Selesai</option>
                  <option value="Selesai">Selesai</option>
                </select>
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="row">
              <div class="col-md-3">

              </div>
              <div class="col-md-9">
                <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </div>

        </form>



      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>