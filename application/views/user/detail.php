<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <input type="hidden" name="id" value="<?= $users['id']; ?>">
            <div class="card mb-3 o-hidden border-0 shadow-lg" style="max-width: 800px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $users['image']; ?>" class="card-img">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $users['nama']; ?></h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Nip</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['nip']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Email</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['email']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">No . Telp</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['telp']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Jabatan</p>
                                </div>
                                :
                                <div class="col">
                                    <?php if ($users['role_id'] == 1) : ?>
                                        <p class="card-text">Admin</p>
                                    <?php elseif ($users['role_id'] == 2) : ?>
                                        <p class="card-text">Manager</p>
                                    <?php elseif ($users['role_id'] == 3) : ?>
                                        <p class="card-text">Member</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Jenis Kelamin</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['jenis_kelamin']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Tanggal Lahir</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['tgl_lahir']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Alamat</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['alamat']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text">Status Active</p>
                                </div>
                                :
                                <div class="col">
                                    <p class="card-text"><?= $users['is_active']; ?></p>
                                </div>
                            </div>
                            <div class="row  mt-3">
                                <?php if ($users['role_id'] == 1) : ?>
                                    <div class="col-6">
                                    </div>
                                <?php else : ?>
                                    <div class="col-6">
                                        <a class="badge badge-success" href="<?= base_url('user/edit/') . $users['id']; ?>"><i class="fas fa-fw fa-user-edit "></i> Edit User</a>
                                    </div>
                                <?php endif; ?>
                                <div class="col">
                                    <a href="<?= base_url('admin/users'); ?>" class="badge badge-primary">kembali</a>
                                </div>
                            </div>
                            <p class="card-text"><small class="text-muted">Member sejak <?= date('d F Y', $users['date_created']); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>