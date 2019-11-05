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

                                <form class="user" method="post" action="<?= base_url('barang/jenisBarangUpdate/') . $jenis_barang['id']; ?>">
                                    <input type="hidden" name="id" value="<?= $jenis_barang['id']; ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Jenis Barang" value="<?= $jenis_barang['nama_barang']; ?>">
                                        <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" name="ubah" class="btn btn-primary btn-user btn-block">
                                        Ubah Data
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('barang/jenis_barang') ?>">kembali</a>
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