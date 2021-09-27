<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; SI Peminjaman dan Pengembalian BRM RI RS Graha Sehat | NFF | <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" jika anda yakin untuk keluar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


  
<script src="<?php echo base_url() . 'assets/vendor/new/js/jquery-3.3.1.js' ?>" type="text/javascript"></script>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

<script src="<?php echo base_url() . 'assets/vendor/new/js/bootstrap.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/vendor/new/js/jquery-ui.js' ?>" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#no_rm_ri').autocomplete({
            source: "<?php echo site_url('pengembalian/get_auto_fill_ri'); ?>",

            select: function(event, ui) {
                $('[name="no_rm"]').val(ui.item.label);
                $('[name="nama_pasien"]').val(ui.item.nama_pasien);
                $('[name="tgl_lahir"]').val(ui.item.tgl_lahir);
                $('[name="jekel"]').val(ui.item.jekel);
                $('[name="ruangan"]').val(ui.item.ruangan);
                $('[name="tgl_pulang"]').val(ui.item.tgl_pulang);
                $('[name="tgl_haruskembali"]').val(ui.item.tgl_haruskembali);
            }
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#no_rm_adm').autocomplete({
            source: "<?php echo site_url('pengembalian/get_auto_fill_adm'); ?>",

            select: function(event, ui) {
                $('[name="no_rm"]').val(ui.item.label);
                $('[name="id_pengembalian"]').val(ui.item.id_pengembalian);
                $('[name="nama_pasien"]').val(ui.item.nama_pasien);
                $('[name="tgl_lahir"]').val(ui.item.tgl_lahir);
                $('[name="jekel"]').val(ui.item.jekel);
                $('[name="ruangan"]').val(ui.item.ruangan);
                $('[name="bayar"]').val(ui.item.bayar);
                $('[name="tgl_pulang"]').val(ui.item.tgl_pulang);
                $('[name="tgl_haruskembali"]').val(ui.item.tgl_haruskembali);
            }
        });

    });
</script>
<script>
    $(document).ready(function(){

        $(document).on('click','#select',function(){
            
            var norm = $(this).data('norm');
            var namapasien = $(this).data('namapasien');
            var tgllahir = $(this).data('tgllahir');
            var jekel = $(this).data('jekel');
            var ruangan = $(this).data('ruangan');
            var tglpinjam = $(this).data('tglpinjam');

            $('#no_rm').val(norm);
            $('#nama_pasien').val(namapasien);
            $('#tgl_lahir').val(tgllahir);
            $('#jekel').val(jekel);
            $("input[name=jekel][value=" + jekel + "]").prop('checked', true);
            $('#ruangan').val(ruangan);
            $('#tgl_pinjam').val(tglpinjam);
        });
    });
</script>

<script>
    $(document).ready(function(){

        $(document).on('click','#select',function(){
            
            var norm = $(this).data('norm');
            var namapasien = $(this).data('namapasien');
            var tgllahir = $(this).data('tgllahir');
            var jekel = $(this).data('jekel');
            var ruangan = $(this).data('ruangan');
            var bayar = $(this).data('bayar');
            var tglpulang = $(this).data('tglpulang');
            var tglharuskembali= $(this).data('tglharuskembali');
            var tglkembali= $(this).data('tglkembali');

            $('#no_rm').val(norm);
            $('#nama_pasien').val(namapasien);
            $('#tgl_lahir').val(tgllahir);
            $('#jekel').val(jekel);
            $("input[name=jekel][value=" + jekel + "]").prop('checked', true);
            $('#ruangan').val(ruangan);
            $('#bayar').val(bayar);
            $('#tgl_pulang').val(tglpulang);
            $('#tgl_haruskembali').val(tglharuskembali);
            $('#tgl_kembali').val(tglkembali);
        });
    });
</script>

<script>
    $(document).ready(function(){

        $(document).on('click','#select',function(){
            
            var id = $(this).data('id');
            var username = $(this).data('username');
            var password = $(this).data('password');
            var level = $(this).data('level');
            var status = $(this).data('status');

            $('#id_pengguna').val(id);
            $('#username').val(username);
            $('#password').val(password);
            $('#level').val(level);
            $('#status').val(status);
        });
    });
</script>

</body>

</html>