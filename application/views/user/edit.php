<!-- Begin Page Content -->
<div class="container-fluid">

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
                                    <h4 class="h5 text-gray-900 ">Edit <?= $title; ?></h4>
                                </div>
                                <form class="user" method="post" action="<?= base_url('user/edit/') . $user['id']; ?>">
                                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="role_id">Role Id</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="role_id" name="role_id" value="<?= $user['role_id']; ?>">
                                                <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="is_active">Status Active</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="is_active" name="is_active" value="<?= $user['is_active']; ?>">
                                                <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="ubah" class="btn btn-primary btn-user btn-block">
                                        Ubah Data
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('user/detail/') . $user['id']; ?>">kembali</a>
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