
<div class="container" style="margin-left: 70px; opacity: 0.7; background-image: url(<?= base_url() ?>assets/img/bpn-subang.jpg); background-size: 1000px; background-repeat: no-repeat; padding-bottom: 316px; ">
    <body>
    <div class="row">
      <?= $this->session->flashdata('message'); ?>
      <div class="row" style="margin-left:30px">
        <div class="col-md-4" style="color: green;" >
          <div class="card">
            <div class="icon-boxes">
             

              <h4 style="text-align: center; color:black"><?= $this->db->query("SELECT status_pengajuan FROM pengajuan WHERE status_pengajuan = 'belum diproses'")->num_rows(); ?> Pengajuan</h4>


              <h5 style="margin-left: 60px;margin-right: 60px; color:black" class="card-title">Belum diproses</h5>
              <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="color: green;">
          <div class="card">
            <div class="icon-boxes">
              
              <h4 style="text-align: center; color:black"><?= $this->db->query("SELECT status_pengajuan FROM pengajuan WHERE status_pengajuan = 'selesai diproses'")->num_rows(); ?> Pengajuan</h4>
              <h5 style="margin-left: 60px; margin-right: 60px; color:black" class="card-title">Berhasil diproses</h5 >
              <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="color: green;">
          <div class="card">
            <div class="icon-boxes">
              
              <h4 style="text-align: center; color:black"><?= $this->db->query("SELECT status_pengajuan FROM pengajuan WHERE status_pengajuan = 'sedang dalam proses'")->num_rows(); ?> Pengajuan</h4>
              <h5 style="margin-left: 60px; margin-right: 60px; color:black" class="card-title">Dalam diproses</h5>

              <small></small> <br> <span class="badge badge-pill badge-success"></span> <br>
            </div>
          </div>
        </div>
      </div>
</body>
</div>
<div class="modal fade" id="ModalInput" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
 <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title" id="myModalLabel">Input Pengajuan</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                 </div>
                 <div class="col-md-8">
                      <input type="hidden" name="id_pengguna" value="<?= $pengguna['id_pemdes']; ?>">
                    <input type="hidden" name="status" value="Belum diproses">
                    <div class="form-group row">
                        <label for="input">Pemilik Tanah</label>
                        <div class="col-sm-10">
                            <select name="nis" id="" class="form-control" style="width: 250px">
                                <option>-- Nama Pemilik Tanah --</option>
                                <?php $query = $this->db->query("SELECT * from tanah")->result_array();
                                foreach ($query as $q) {
                                ?>
                                    <option value="<?= $q['nis'] ?>"><?= $q['nama_pemilik']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input">Jenis Inventarisasi</label>
                        <div class="col-sm-10">
                            <select name="inv" id="" class="form-control" style="width: 250px">
                                <option>-- Jenis Inventarisasi --</option>
                                
                                    <option></option>
                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input">Perihal Validasi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="perihal" style="width: 250px">
                    </textarea>
                        </div>
                    </div>

                </div>
                <div class="col-md-3" style=" margin-top: 30px;">
                    <div class="form-group row">

                        <label for="data">Data Bukti Pengajuan</label>
                        <div class="col-sm-10">
                            <input style="width: 250px" type="file" class="form-control" class="custom-file-input" id="data" name="data">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input">Tanggal Pengajuan</label>
                        <div class="col-sm-10">
                            <input style="width: 250px" type="date" name="tgl"  class="form-control">
                        </div>
                    </div>
                   
                    <div class="form-group" style="margin-top: 50px;">
                        <a href="<?= base_url('Tanah/inputDataPengajuan'); ?>" class="btn btn-warning">Batal</a>
                        <button class="btn btn-primary" type="submit">Simpan</button>

                    </div>
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Tutup</button>
                     
                 </div>
                 </form>
             </div>
         </div>
     </div>
</body>
</div>