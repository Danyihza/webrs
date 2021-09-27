<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-1 shadow-lg my-5">
                <div class="card-body p-5">
                    <!-- Nested Row within Card Body -->
                    <div class="text-center">
                        <img src="<?= base_url() ?>/assets/img/logo.png" width="225px" height="110px"> </=>
                    </div>

                    <?= $this->session->flashdata('message'); ?>
                    <div class="ol-xl-10 col-lg-12 col-md-9">
                        <div class="p-5">
                            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small
                                    class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="<?= set_value('password'); ?>">
                                    <?= form_error('password', '<small
                                    class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>