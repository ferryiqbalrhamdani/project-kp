<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="mb-4 text-center">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="h5 text-gray-900 ">Ubah Password</h4>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('user/changePassword'); ?>">
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="current_password">Password Lama</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="password" class="form-control form-control-sm" id="current_password" name="current_password">
                                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="new_password1">Password Baru</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="password" class="form-control form-control-sm" id="new_password1" name="new_password1">
                                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="new_password2">Ulangi Password</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="password" class="form-control form-control-sm" id="new_password2" name="new_password2">
                                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="ubah" class="btn btn-primary btn-user btn-block">
                                        Ubah Data
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('user/profile') ?>">kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->