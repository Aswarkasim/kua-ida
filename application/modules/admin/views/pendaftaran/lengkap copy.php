 <div class="tab-pane active" id="dataLengkap">
   <table class="table">
     <tr>
       <td width="250px">Nama Calon Suami</td>
       <td>: <?= $daftar->nama_pria ?></td>
     </tr>

     <tr>
       <td>Nama Calon Istri</td>
       <td>: <?= $daftar->nama_wanita ?></td>
     </tr>


     <tr>
       <td>Wali Calon Istri</td>
       <td>: <?= $daftar->wali_wanita ?></td>
     </tr>

     <tr>
       <td>Saksi 1</td>
       <td>: <?= $daftar->saksi_1 ?></td>
     </tr>

     <tr>
       <td>Saksi 2</td>
       <td>: <?= $daftar->saksi_2 ?></td>
     </tr>

     <tr>
       <td>Penghulu</td>
       <td>: <?= $daftar->penghulu ?></td>
     </tr>

     <tr>
       <td>Taggal Akad Nikah</td>
       <td>: <?= $daftar->tgl_akad_nikah ?></td>
     </tr>

     <tr>
       <td>Mahar</td>
       <td>: <?= $daftar->mahar_pernikahan ?></td>
     </tr>

     <tr>
       <td>Tempat</td>
       <td>: <?= $daftar->tempat_akad ?></td>
     </tr>

     <tr>
       <td>Surat Keterangan dari desa</td>
       <td>: <a data-toggle="modal" data-target="#exampleModalSKDESA">Surat Keterngan dari desa</a>
       </td>
     </tr>

     <tr>
       <td>Rekomendasi Pernikahan</td>
       <td>: <a data-toggle="modal" data-target="#exampleModalRekoendasiNikah">Rekomendasi Nikah</a></td>
     </tr>


   </table>
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