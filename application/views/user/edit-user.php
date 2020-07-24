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



                                <form class="user" method="post" action="<?= base_url('user/editUser/') . $user['id'];; ?>">
                                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama">Nama</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nip">Nip</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="jenis_barang" name="jenis_barang" value="<?= $user['nip']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="email">Email</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= $user['email']; ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="telp">Telp</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="telp" name="telp" value="<?= $user['telp']; ?>">
                                                <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="alamat">Tanggal Lahir</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input placeholder="Tanggal Lahir" class="form-control form-control-sm" type="text" onfocus="(this.type='date')" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir'];; ?>">
                                                <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="alamat">Jenis Kelamin</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <select class="form-control form-control-sm" id="jenis_kelamin" name="jenis_kelamin">
                                                    <?php foreach ($jenis_kelamin as $j) : ?>
                                                        <?php if ($j == $user['jenis_kelamin']) : ?>
                                                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $j; ?>"><?= $j; ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="alamat">Alamat</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="ubah" class="btn btn-primary btn-user btn-block">
                                        Ubah Profile
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('user/profile'); ?>">kembali</a>
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