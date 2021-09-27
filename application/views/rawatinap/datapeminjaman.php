 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Tambah Peminjaman</h5>
             <?= $this->session->flashdata('message'); ?>
             <form method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>peminjaman/tambah_peminjaman">
                 <div class="form-group row">
                     <label for="no_rm" class="col-sm-2 col-form-label">Nomor RM</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="Masukkan Nomor RM..." required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan Nama Pasien..." required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                     <div class="col-sm-10">
                         <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="jekel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                     <div class="col-sm-10">
                         <label><input type="radio" name="jekel" value="Laki-Laki" required> Laki-Laki</label>
                         <label><input type="radio" name="jekel" value="Perempuan" required> Perempuan</label>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="ruangan" class="col-sm-2 col-form-label">Ruangan</label>
                     <div class="col-sm-10">
                         <select id="ruangan" class="form-select" id="ruangan" name="ruangan" required>
                             <option selected>Pilih Ruangan</option>
                             <option value="Maternal">Maternal</option>
                             <option value="Neo">Neo</option>
                             <option value="General">General</option>
                             <option value="Anak">Anak</option>
                             <option value="Pavilium">Pavilium</option>
                         </select>
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