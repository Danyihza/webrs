<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Laporan Pengguna</h5>
             <?= $this->session->flashdata('message'); ?>
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
               
                <tbody>
                <?php
                    $no = 1;
                    foreach ($laporanpengguna as $data) { ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?= $data->username ?></td>
                        <td><?= $data->password ?></td>
                        <td>
                            <?php 
                                $txt = "";
                                if ($data->level == "1") { 
                                    $txt = "Admin";
                                } else if ($data->level == "2"){
                                    $txt = "Unit RI";
                                } else if ($data->level == "3"){
                                    $txt = "Kepala RM";
                                }
                                echo "<span>$txt</span>";
                            ?>
                        </td>
                        <td class="text-center">
                            <?php 
                                $txt = "";
                                if ($data->status == "1") { 
                                    $txt = "Aktif";
                                    echo "<span class='bg-primary text-white pl-2 pr-2'>$txt</span>";
                                } else {
                                    $txt = "Tidak Aktif";
                                    echo "<span class='bg-info text-white pl-2 pr-2'>$txt</span>";
                                } 
                            ?>
                        </td>
                        <td>
                        <button type="button" class="btn btn-primary btn-edit btn-sm" id="select" data-toggle="modal" data-target="#editModal" data-id="<?=$data->id_pengguna?>" data-username="<?=$data->username?>" data-password="<?=$data->password?>" data-level="<?=$data->level?>" data-status="<?=$data->status?>">
                            Edit 
                        </button>
                        <a href="<?= base_url('laporanpengguna/delete_laporanpengguna/'.$data->username.''); ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
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
        <h5 class="modal-title" id="editModalLabel">Ubah Data Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>laporanpengguna/update_laporanpengguna">
      <div class="modal-body">
            <input type="text" id="id_pengguna" name="id_pengguna" hidden>
                 <div class="form-group row">
                     <label for="username" class="col-sm-2 col-form-label">Username</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="username" name="username" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="password" class="col-sm-2 col-form-label">Password</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="password" name="password"  required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="level" class="col-sm-2 col-form-label">Level</label>
                     <div class="col-sm-10">
                         <select id="level" class="form-select" name="level" required>
                             <option value="1">Admin </option>
                             <option value="2">Unit RI </option>
                             <option value="3">Kepala RM </option>
                         </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="status" class="col-sm-2 col-form-label">Status</label>
                     <div class="col-sm-10">
                         <select id="status" class="form-select" name="status" required>
                             <option value="0">Tidak Aktif</option>
                             <option value="1">Aktif</option>
                         </select>
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
</div>