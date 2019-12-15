<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <?php if (form_error('merk', 'sn', 'mac')) : ?>
                <div class="row">
                    <div class="col-md-4">
                        Pesan Kesalahan
                    </div>
                    :
                    <div class="col">
                        <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
                        <?= form_error('sn', '<small class="text-danger pl-3">', '</small>'); ?>
                        <?= form_error('mac', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

            <?php endif; ?>

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="h5 text-gray-900 "><?= $title; ?></h4>
                                </div>

                                <form class="user" method="post" action="<?= base_url('barang/edit_router/') . $barang['id']; ?>">
                                    <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="jenis_barang">Jenis Barang</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="jenis_barang" name="jenis_barang" value="ROUTER" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="merk">Merk Barang</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <select class="form-control form-control-sm" id="merk" name="merk">
                                                    <?php foreach ($merk_barang as $m) : ?>
                                                        <?php if ($m['nama_merk'] == $barang['merk']) : ?>
                                                            <option value="<?= $m['nama_merk']; ?>" selected><?= $m['nama_merk']; ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $m['nama_merk']; ?>"><?= $m['nama_merk']; ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="sn">Serial Number</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="sn" name="sn" value="<?= $barang['sn']; ?>">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="mac">MAC Address</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="mac" name="mac" value="<?= $barang['mac']; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="status">Status Barang</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <select class="form-control form-control-sm" id="status" name="status">
                                                    <?php foreach ($kondisi as $k) : ?>
                                                        <?php if ($k == $barang['status']) : ?>
                                                            <option value="<?= $k; ?>" selected><?= $k; ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $k; ?>"><?= $k; ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Ubah Data
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('barang/router') ?>">kembali</a>
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