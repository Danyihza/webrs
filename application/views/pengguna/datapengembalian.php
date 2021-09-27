 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Pengembalian Berkas</h5>
             <?= $this->session->flashdata('message'); ?>
             <form method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>pengembalian/update_pengembalian">
                <input type="text" class="form-control col-sm-1" id="id_pengembalian" name="id_pengembalian" hidden>
                 <div class="form-group row">
                     <label for="no_rm" class="col-sm-2 col-form-label">Pilih Nomor RM</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="no_rm_adm" name="no_rm">
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
                         <input type="text" class="form-control" id="bayar" name="bayar" readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tgl_pulang" class="col-sm-2 col-form-label">Tanggal Pulang</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="tgl_pulang" name="tgl_pulang" readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tgl_haruskembali" class="col-sm-2 col-form-label">Tanggal Harus Kembali</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="tgl_haruskembali" name="tgl_haruskembali" readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal BRM Kembali</label>
                     <div class="col-sm-10">
                         <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
                     </div>
                 </div>
                 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <input type="submit" class="btn btn-primary" name="submit" value="Ubah">
                 </div>
             </form>
         </div>
     </div>
 </div>