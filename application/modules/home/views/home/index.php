<?php include('banner.php') ?>


<div class="container pt-5">



  <div class="row">
    <div class="col-md-8">
      <br><br>
      <h3><strong>Berita</strong></h3>
      <hr>
      <ul class="list-unstyled">

        <?php foreach ($berita as $row) { ?>
          <li class="media">
            <img src="<?= base_url($row->gambar); ?>" width="100px" class="mr-3" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-1"><a href="<?= base_url('home/berita/detail/' . $row->slug); ?>"><strong><?= $row->judul_berita; ?></strong></a></h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </li>
          <hr>
        <?php } ?>

      </ul>
    </div>

    <div class="col-md-4">

      <?php $this->load->view('home/berita/cari') ?>
      <?php $this->load->view('home/berita/kategori') ?>


    </div>
  </div>
</div>