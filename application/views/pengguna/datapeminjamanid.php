 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="card w-75">
         <div class="card-body">
             <h5 class="card-title">Peminjaman Berkas</h5>
             <form>
                 <div class="form-group row">
                     <label for="no_rm" class="col-sm-2 col-form-label">Nomor RM</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="no_rm" name="no_rm" readonly value="<?= $dataRM->no_rm ?>">
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" readonly value="<?= $dataRM->nama_pasien ?>">
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" readonly value="<?= $dataRM->tgl_lahir ?>">
                     </div>
                 </div>
                 <div class=" form-group row">
                     <label for="jekel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="jekel" name="jekel" readonly value="<?= $dataRM->jekel ?>">
                     </div>
                 </div>
                 <div class=" form-group row">
                     <label for="ruangan" class="col-sm-2 col-form-label">Ruangan</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="ruangan" name="ruangan" readonly value="<?= $dataRM->ruangan ?>">
                     </div>
                 </div>
                 <div class=" form-group row">
                     <label for="tgl_pinjam" class="col-sm-2 col-form-label">Tanggal Pinjam BRM</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="tgl_pinjam" name="tgl_pinjam" readonly value="<?= $dataRM->tgl_pinjam ?>">
                     </div>
                 </div>
                 <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                 <a href="<?= base_url('peminjaman/cetak/'.$dataRM->no_rm.''); ?>"><button type="button" class="btn btn-primary">Cetak Tracer</button></a>
                 </div>
             </form>
         </div>
     </div>
 </div>