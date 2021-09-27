 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Peminjaman Berkas</h5>
             <form>
                 <div class="form-group row">
                     <label for="no_rm" class="col-sm-2 col-form-label">Nomor RM</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="no_rm" name="no_rm" readonly>
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
                         <input type="text" class="form-control" id="ruangan" name="ruangan">
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tgl_pinjam" class="col-sm-2 col-form-label">Tanggal Pinjam BRM</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                     </div>
                 </div>
                 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <button type="submit" class="btn btn-primary">Cetak Tracer</button>
                 </div>
             </form>
         </div>
     </div>
 </div>