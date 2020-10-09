<section id="elements-accordion" class="pt120 pb120">
  <div class="container">
    <div class="row">

      <div class="col-md-12 text-center mt40 pb40">
        <h1><strong>Pernikahan</strong></h1>
        <p class="lead">Dapatkan info tentang pernikahan</p>
      </div>

      <div class="col-md-6 col-md-offset-3">

        <div class="panel-group mb0" id="accordion">
          <!-- First Panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <button class="panel-title collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
                <h4 class="bold">Syarat</h4>
              </button>
            </div>
            <div id="collapse1" class="panel-collapse open collapse" aria-expanded="false" style="height: 0px;">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in consectetur est, nec vulputate sem. Fusce eleifend lobortis quam ac porta. Phasellus eleifend non augue ac fermentum. Pellentesque consectetur et mauris at fringilla. Phasellus porta nisl tortor, in vulputate eros lobortis non. Integer et ornare nisl. Sed volutpat faucibus ex, quis gravida augue cursus sit amet.</p>
              </div>
            </div>
          </div>

          <!-- Second Panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <button class="panel-title collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false">
                <h4 class="bold">Perndaftaran</h4>
              </button>
            </div>
            <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              <div class="panel-body">
                <p>Lengkapi semua persyaratan terlebih dahulu, kemudian upload berkas di sini <a href="<?= base_url('home/nikah/daftar'); ?>" class="btn btn-primary" target="_blank">Daftar</a></p>
              </div>
            </div>
          </div>

          <!-- Third Panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <button class="panel-title collapsed" data-toggle="collapse" data-target="#collapse3">
                <h4 class="bold">Jadwal</h4>
              </button>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Lihat jadwal pelaksanaan pernikahan disini <a href="<?= base_url('home/nikah/jadwal'); ?>" class="btn btn-primary" target="_blank">Lihat</a></p>
              </div>
            </div>
          </div>


        </div><!-- End Accordian -->

      </div>

    </div>
  </div>
</section>