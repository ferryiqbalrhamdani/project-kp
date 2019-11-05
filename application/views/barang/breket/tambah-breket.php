<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <?php if (form_error('jumlah',)) : ?>
                <div class="row">
                    <div class="col-md-4">
                        Pesan Kesalahan
                    </div>
                    :
                    <div class="col">
                        <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('barang/tambah_breket'); ?>">
                                    <input type="hidden" name="id_barang" value="<?= $barang['id']; ?>">
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="jenis_barang">Jenis Barang</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="jenis_barang" name="jenis_barang" value="<?= $barang['nama_barang']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="jumlah">Jumlah Breket</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="jumlah" name="jumlah" value="<?= set_value('jumlah'); ?>">
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
                                                    <option>Ready</option>
                                                    <option>Rusak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="tambah" class="btn btn-primary btn-user btn-block">
                                        Tambah Data
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url('barang/tambah') ?>">kembali</a>
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