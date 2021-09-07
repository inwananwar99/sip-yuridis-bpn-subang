 <div class="container-fluid" style="margin-bottom:500px">
     <h5><?= $judul; ?></h5>
     <div class="row">
         <div class="col-md-4">
             <table class="table">
                 <tr>
                     <th>No.</th>
                     <th>NIS</th>
                     <th>Tanggal Pengajuan</th>
                     <th>Nama Pemilik Tanah</th>
                     <th>Nama Penggarap</th>
                     <th>Asal Desa</th>
                     <th>Aksi</th>
                 </tr>
                 <?php
                    $no = 1;
                    foreach ($pengajuan as $pen) :
                        $id = $pen['id_pengajuan'];
                    ?>
                     <tr>
                         <td><?= $no++; ?></td>
                         <td><?= $pen['nis']; ?></td>
                         <td><?= $pen['tgl_pengajuan']; ?></td>
                         <td><?= $pen['nama_pemilik']; ?></td>
                         <td><?= $pen['nama_penggarap']; ?></td>
                         <td><?= $pen['desa']; ?></td>
                         <td>
                             <a href="#" data-toggle="modal" data-target="#ModalDetail<?= $id; ?>">Detail</a>
                         </td>
                         <td>
                             <a href="<?= base_url('Tanah/cetakBuktiValidasi/' . $id); ?>" target="_blank">Cetak</a>
                         </td>
                     </tr>
                 <?php endforeach; ?>
             </table>
         </div>
     </div>
     <?php foreach ($pengajuan as $pen) :
            $id = $pen['id_pengajuan'];
        ?>

         <div class="modal fade" id="ModalDetail<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h3 class="modal-title" id="myModalLabel">Detail Pengajuan</h3>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                     </div>
                     <div class="col-md-8">
                         <table class="table">
                             <tr>
                                 <td>Pesan Pengajuan</td>
                                 <td><strong><?= $pen['pesan_pengajuan'] ?></strong></td>
                             </tr>

                             <tr>
                                 <td>Tanggal Pengajuan</td>
                                 <td><strong><?= $pen['tgl_pengajuan'] ?></strong></td>
                             </tr>
                             <tr>
                                 <td>Status Pengajuan</td>
                                 <td><strong><?= $pen['status_pengajuan'] ?></strong></td>
                             </tr>
                         </table>
                     </div>
                     <div class="modal-footer">
                         <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Tutup</button>

                     </div>
                     </form>
                 </div>
             </div>
         </div>

     <?php endforeach; ?>
 </div>