<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card w-150">
         <div class="card-body">
             <h5 class="card-title">Laporan Pengembalian</h5>
             <?= $this->session->flashdata('message'); ?>
             <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                        foreach ($laporanpengembalian as $data) { ?>
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
                        <td><?= $data->tgl_kembali ?></td>
                        <td>
                        <?php 
                                $txt = "";
                                if ($data->tgl_kembali != "0000-00-00") { 
                                    $txt = "Kembali";
                                    echo "<span class='bg-primary text-white pl-2 pr-2'>$txt</span>";
                                } else {
                                    $txt = "Dipinjam";
                                    echo "<span class='bg-info text-white pl-2 pr-2'>$txt</span>";
                                } 
                            ?>
                        </td>
                    </tr>
                    <?php  $no++; } ?>
</tbody>
</table>
    </div>
  </div>