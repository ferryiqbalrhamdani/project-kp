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
                                    <h4 class="h5 text-gray-900 "><?= $title; ?></h4>
                                </div>
                                <form class="user" method="post" action="<?= base_url('barang/editMerk/') . $merk['id']; ?>">
                                    <input type="hidden" name="id" value="<?= $merk['id']; ?>">
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama_merk">Nama Merk Barang</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="nama_merk" name="nama_merk" value="<?= $merk['nama_merk']; ?>">
                                                <?= form_error('nama_merk', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="jenis_barang">Jenis Barang</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <select class="form-control form-control-sm" id="jenis_barang" name="jenis_barang">
                                                    <?php foreach ($jenis_barang as $j) : ?>
                                                        <?php if ($j['nama_barang'] == $merk['jenis_barang']) : ?>
                                                            <option selected><?= $j['nama_barang']; ?></option>
                                                        <?php else : ?>
                                                            <option><?= $j['nama_barang']; ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?= form_error('jenis_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Ubah Data
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('barang/merk_barang') ?>">kembali</a>
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