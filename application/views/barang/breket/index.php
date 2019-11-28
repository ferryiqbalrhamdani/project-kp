<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="<?= base_url('barang/cetak_ap'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Data</a>
    </div>
    <?= $this->session->flashdata('pesan'); ?>
    <!-- Content Row -->
    <div class="row mt-3">
        <div class="col">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            Breket
                        </div>
                        <div class="col">
                            <a href="<?= base_url('barang/'); ?>">
                                <p class="text-right">Kembali</p>
                            </a>

                        </div>
                    </div>

                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Breket</td>
                                <td><?= $jml_barang; ?></td>                      
                                <td>
                                    <a href="<?= base_url('barang/hapus_breket'); ?>" class="badge badge-danger">hapus</a>
                                </td>
                            </tr>
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