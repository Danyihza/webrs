 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Pengembalian Berkas</h5>
             <?= $this->session->flashdata('message'); ?>
             <form method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>pengembalian/tambah_pengembalian">
                 <form>
                     <div class="form-group row">
                         <label for="no_rm" class="col-sm-2 col-form-label">Nomor RM</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="no_rm_ri" name="no_rm" placeholder="Pilih Nomor RM Pasien...">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="jekel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="jekel" name="jekel" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="ruangan" class="col-sm-2 col-form-label">Ruangan</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="ruangan" name="ruangan" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="bayar" class="col-sm-2 col-form-label">Bayar</label>
                         <div class="col-sm-10">
                             <select id="bayar" class="form-select" id="bayar" name="bayar" required>
                                 <option selected>Pilih Pembayaran</option>
                                 <option value="BPJS">BPJS </option>
                                 <option value="Umum">Umum </option>
                                 <option value="Asuransi">Asuransi </option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="tgl_pulang" class="col-sm-2 col-form-label">Tanggal Pulang</label>
                         <!--harusnya pilih tanggal-->
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="tgl_pulang" name="tgl_pulang" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="tgl_haruskembali" class="col-sm-2 col-form-label">Tanggal Harus Kembali</label>
                         <!--harusnya otomatis-->
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="tgl_haruskembali" name="tgl_haruskembali" readonly>
                         </div>
                     </div>
                     <div class="d-grid gap-2 d-md-block justify-content-md-end">
                         <input type="reset" class="btn btn-danger me-md-2" name="reset" value="Batal">
                         <input type="submit" class="btn btn-primary" name="submit" value="Tambah">
                     </div>
                 </form>
         </div>
     </div>
 </div>