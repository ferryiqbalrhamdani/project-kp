<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-header">
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
                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Merk Barang</th>
                                <th scope="col">SN</th>
                                <th scope="col">MAC</th>
                                <th scope="col">Kondisi</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($barang as $u) : ?>
                                <?php if ($u['jenis_barang'] == 'AP') : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $u['merk']; ?></td>
                                        <td><?= $u['sn']; ?></td>
                                        <td><?= $u['mac']; ?></td>
                                        <td><?= $u['status']; ?></td>
                                        <td>
                                            <?php if ($u['is_active'] == 1) : ?>
                                                Tersedia
                                            <?php elseif ($u['is_active'] == 2) : ?>
                                                Di Ambil
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="" class="badge badge-primary">detail</a>
                                            <a href="" class="badge badge-danger">hapus</a>
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


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->