<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Laporan Keterlambatan Pengembalian</h5>
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
                        <th>Bayar</th>
                        <th>Tanggal Pulang</th>
                        <th>Tanggal Harus Kembali</th>
                        <th>Tanggal BRM Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                        foreach ($laporanketerlambatan as $data) { ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?= $data->no_rm ?></td>
                        <td><?= $data->nama_pasien ?></td>
                        <td><?= $data->tgl_lahir ?></td>
                        <td><?= $data->jekel ?></td>
                        <td><?= $data->ruangan ?></td>
                        <td><?= $data->bayar ?></td>
                        <td><?= $data->tgl_pulang ?></td>
                        <td><?= $data->tgl_haruskembali ?></td>
                        <td><?= $data->tgl_kembali ?> 
                        <span class="text-danger"> 
                       <?php 
                        $tgl1 = strtotime($data->tgl_haruskembali); 
                        $tgl2 = strtotime($data->tgl_kembali); 
                        
                        $jarak = $tgl2 - $tgl1;

                        $hari = $jarak / 60 / 60 / 24;
                      
                            echo "(Telat $hari Hari)"; ?>
                        </span></td>
                        <td>
                        <button type="button" class="btn btn-primary btn-edit" id="select" data-toggle="modal" data-target="#editModal" data-norm="<?=$data->no_rm?>" data-namapasien="<?=$data->nama_pasien?>" data-tgllahir="<?=$data->tgl_lahir?>" data-jekel="<?=$data->jekel?>" data-ruangan="<?=$data->ruangan?>" data-bayar="<?=$data->bayar?>" data-tglpulang="<?=$data->tgl_pulang?>" data-tglharuskembali="<?=$data->tgl_haruskembali?>" data-tglkembali="<?=$data->tgl_kembali?>">
                        Edit</button> 
                        <a href="<?= base_url('laporanketerlambatan/delete_laporanketerlambatan/'.$data->no_rm.''); ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                        </td>
                    </tr>
                    <?php  $no++; } ?>
</tbody>
</table>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Ubah Data Keterlambatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>laporanketerlambatan/update_laporanketerlambatan ">
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
                             <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" >
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
                     <label for="bayar" class="col-sm-2 col-form-label">Bayar</label>
                     <div class="col-sm-10">
                         <select id="bayar" class="form-select" name="bayar" required>
                             <option value="BPJS">BPJS</option>
                             <option value="Umum">Umum</option>
                             <option value="Asuransi">Asuransi</option>
                         </select>
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
                         <label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                       
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="tgl_kembali" name="tgl_kembali" readonly>
                         </div>
                     </div>
                     <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Ubah">
                </div>
                        </div>
            </form>
                        </div>
    </div>
</div>