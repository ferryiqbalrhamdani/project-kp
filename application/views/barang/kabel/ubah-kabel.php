<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <?php if (form_error('merk', 'panjang')) : ?>
                <div class="row">
                    <div class="col-md-4">
                        Pesan Kesalahan
                    </div>
                    :
                    <div class="col">
                        <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
                        <?= form_error('panjang', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                <form class="user" method="post" action="<?= base_url('barang/edit_kabel/')  . $barang['id']; ?>">
                                <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                                    <div class="form-group form-control-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="jenis_barang">Jenis Barang</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="jenis_barang" name="jenis_barang" value="Kabel" readonly>
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
                                                <label for="panjang">Panjang Kabel</label>
                                            </div>
                                            :
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" id="panjang" name="panjang" value="<?= $barang['panjang']; ?>">
                                            </div>
                                            <div class="col">
                                                <select class="form-control form-control-sm" id="satuan" name="satuan" placeholder="hallo">
                                                    <?php foreach ($satuan_kaabel as $s) : ?>
                                                        <?php if ($s['sekala'] == $barang['satuan']) : ?>
                                                            <option value="<?= $s['sekala']; ?>" selected><?= $s['sekala']; ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $s['sekala']; ?>"><?= $s['sekala']; ?></option>
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
                                    <a href="<?= base_url('barang/kabel') ?>">kembali</a>
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

<!-- Modal -->
<div class="modal fade" id="pesanKesalahan" tabindex="-1" role="dialog" aria-labelledby="pesanKesalahanTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>