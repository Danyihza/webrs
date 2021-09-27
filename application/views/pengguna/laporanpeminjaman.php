<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Laporan Peminjaman</h5>
             <?= $this->session->flashdata('message'); ?>
             <table class="table table-bordered export" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor RM</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Ruangan</th>
                        <th>Tanggal Pinjam BRM</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
               
                <tbody>
                <?php
                    $no = 1;
                    foreach ($laporanpeminjaman as $data) { ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?= $data->no_rm ?></td>
                        <td><?= $data->nama_pasien ?></td>
                        <td><?= $data->tgl_lahir ?></td>
                        <td><?= $data->jekel ?></td>
                        <td><?= $data->ruangan ?></td>
                        <td><?= $data->tgl_pinjam ?></td>
                        <td>
                        <button type="button" class="btn btn-primary btn-edit" id="select" data-toggle="modal" data-target="#editModal" data-norm="<?=$data->no_rm?>" data-namapasien="<?=$data->nama_pasien?>" data-tgllahir="<?=$data->tgl_lahir?>" data-jekel="<?=$data->jekel?>" data-ruangan="<?=$data->ruangan?>" data-tglpinjam="<?=$data->tgl_pinjam?>">
                            Edit 
                        </button>
                        <a href="<?= base_url('laporanpeminjaman/delete_laporanpeminjaman/'.$data->no_rm.''); ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Ubah Data Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>laporanpeminjaman/update_laporanpeminjaman">
      <div class="modal-body">
                 <div class="form-group row">
                     <label for="no_rm" class="col-sm-2 col-form-label">Nomor RM</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="no_rm" name="no_rm"readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="jekel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                     <div class="col-sm-10">
                         <label><input type="radio" name="jekel" value="Laki-Laki"> Laki-Laki</label>
                         <label><input type="radio" name="jekel" value="Perempuan" required> Perempuan</label>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="ruangan" class="col-sm-2 col-form-label">Ruangan</label>
                     <div class="col-sm-10">
                         <select id="ruangan" class="form-select" name="ruangan" required>
                             <option value="Maternal">Maternal</option>
                             <option value="Neo">Neo</option>
                             <option value="General">General</option>
                             <option value="Anak">Anak</option>
                             <option value="Pavilium">Pavilium</option>
                         </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="tgl_pinjam" class="col-sm-2 col-form-label">Tanggal Pinjam BRM</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="tgl_pinjam" name="tgl_pinjam" readonly>
                     </div>
                 </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Ubah">
                </div>
            </form>
    </div>
  </div>
</div>