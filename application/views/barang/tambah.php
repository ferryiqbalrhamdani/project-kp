<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group ">
                <?php foreach ($barang as $b) : ?>
                    <li class="list-group-item">
                        <a href="<?= base_url('barang/tambah_') . $b['nama_barang']; ?>" class="logo"><?= $b['nama_barang']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->