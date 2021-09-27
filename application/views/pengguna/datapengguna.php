 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Tambah Pengguna</h5>
             <?= $this->session->flashdata('message'); ?>
             <form method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>pengguna/tambah_pengguna">
                 <div class="form-group row">
                     <label for="username" class="col-sm-2 col-form-label">Username</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username..." required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="password" class="col-sm-2 col-form-label">Password</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password..." required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="level" class="col-sm-2 col-form-label">Level</label>
                     <div class="col-sm-10">
                         <select id="level" class="form-select" id="level" name="level" required>
                             <option selected disabled value="">Pilih Level</option>
                             <option value="1">Admin </option>
                             <option value="2">Unit RI </option>
                             <option value="3">Kepala RM </option>
                         </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="status" class="col-sm-2 col-form-label">Status</label>
                     <div class="col-sm-10">
                         <select id="status" class="form-select" id="status" name="status" required>
                             <option selected disabled value="">Pilih Status</option>
                             <option value="0">Tidak Aktif</option>
                             <option value="1">Aktif</option>
                         </select>
                     </div>
                 </div>
                 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <input type="submit" class="btn btn-primary" name="submit" value="Tambah">
                 </div>
             </form>
         </div>
     </div>
 </div>