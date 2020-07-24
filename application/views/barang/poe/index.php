<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="<?= base_url('cetak/cetakPOE'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Data</a>
    </div>
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-with border-5 small" placeholder="Search by Serial Number" name="cari">
            <div class="input-group-append">
                <button class="btn btn-danger" type="submit" id="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-lg-7">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            Akses Point
                        </div>
                        <div class="col">
                            <a href="<?= base_url('barang/'); ?>">
                                <p class="text-right">Kembali</p>
                            </a>
                        </div>
                    </div>

                </div>

                <table class="table table-hover mt-3 table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Merk Barang</th>
                            <th scope="col">SN</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Di Input</th>
                            <th scope="col" class=" text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($barang as $u) : ?>
                            <?php if ($u['id_barang'] == 2) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $u['merk']; ?></td>
                                    <td><?= $u['sn']; ?></td>
                                    <td><?= $u['status']; ?></td>
                                    <td>
                                        <?php if ($u['is_active'] == 1) : ?>
                                            Tersedia
                                        <?php elseif ($u['is_active'] == 2) : ?>
                                            Di Ambil
                                        <?php endif; ?>
                                    </td>
                                    <td><?= date('d F Y', $u['date_created']); ?></td>
                                    <td class=" text-center">
                                        <a href="<?= base_url('barang/edit_poe/') . $u['id']; ?>" class="badge badge-success">edit</a>
                                        <a href="<?= base_url('barang/hapus_poe/') . $u['id']; ?>" class="badge badge-danger tombol-hapus-barang">hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->