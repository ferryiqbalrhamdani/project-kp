<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Project Card Example -->
    <div class="row">
        <div class="col-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
                </div>
                <div class="card-body">
                    <!-- Content Row -->
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-6 ">
                            <ul class="list-group  ">
                                <?php foreach ($barang as $b) : ?>
                                    <a href="<?= base_url('barang/tambah_') . $b['nama_barang']; ?>" style="text-decoration:none">
                                    <li class="list-group-item btn warna-telkom-hover text-telkom-hover ">
                                        <?= $b['nama_barang']; ?>
                                    </li>
                                    </a>
                                <?php endforeach; ?>
                            </ul>
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