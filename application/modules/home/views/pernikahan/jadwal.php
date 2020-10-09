<section class="pt80 pb90 bg-grey">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-12 text-center pb50">
        <h2>Jadwal<br><strong>Pernikahan</strong></h2>
      </div>

    </div>

    <div class="row">

      <?php foreach ($jadwal as $row) { ?>
        <div class="col-md-12">
          <div class="blog-grid">

            <!-- Blog Items Container-->
            <div class="vossen-blog-grid" style="position: relative; height: 1024.17px;">

              <!-- Blog Item -->
              <div class="col-md-3 col-sm-5 p" style="position: absolute; left: 0px; top: 0px;">
                <div class="blog-grid-img">

                </div>
                <div class="blog-grid-content">
                  <time style="width: 100px; height:100px;"><?= bulan($row->akad) ?></time>
                  <div class="post-header text-center pt20">
                    <a href="<?= base_url('home/nikah/jadwal/detail'); ?>">
                      <h4><strong><?= $row->nama_pria; ?></strong></h4>
                      <h4><strong>&</strong></h4>
                      <h4><strong><?= $row->nama_wanita; ?></strong></h4>
                    </a>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      <?php } ?>


    </div>
  </div>
</section>