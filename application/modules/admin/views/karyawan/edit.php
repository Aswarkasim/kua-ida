<div class="modal fade" id="ModalEdit<?= $row->id_karyawan ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Karyawan</h4>
            </div>
            <?= form_open(base_url($tombol['edit'] . '/' . $row->id_karyawan)) ?>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Karyawan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Karyawan" value="<?= $row->nama_karyawan; ?>" class="form-control" name="nama_karyawan" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Keterangan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Keterangan" class="form-control" value="<?= $row->keterangan; ?>" name="keterangan" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?= form_close() ?>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->