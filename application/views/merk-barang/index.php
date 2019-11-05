<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="<?= base_url('barang/add_merk_barang'); ?>">Tambah Merk Barang</a>
        </div>
    </div>

    <?= $this->session->flashdata('pesan'); ?>

    <!-- Content Row -->
    <div class="row mt-3">
        <div class="col">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Merk Barang</th>
                                <th scope="col">Jenis Barang</th>
                                <th scope="col">Dibuat</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($merk_barang as $j) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $j['nama_merk']; ?></td>
                                    <td><?= $j['jenis_barang']; ?></td>
                                    <td><?= date('d F Y', $j['date_created']); ?></td>
                                    <td>
                                        <a href="<?= base_url('barang/editMerk/') . $j['id'] ?>" class="badge badge-success">edit</a>
                                        <a href="<?= base_url('barang/deleteMerk/') . $j['id'] ?>" class="badge badge-danger tombol-hapus-merk-barang">hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
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