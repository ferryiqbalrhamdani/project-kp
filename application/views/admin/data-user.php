<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($users as $u) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $u['nip']; ?></td>
                                    <td><?= $u['nama']; ?></td>
                                    <td><?= $u['jenis_kelamin']; ?></td>
                                    <td><?= $u['telp']; ?></td>
                                    <td>
                                        <?php if ($u['role_id'] == 1) : ?>
                                            Admin
                                        <?php elseif ($u['role_id'] == 2) : ?>
                                            Manager
                                        <?php elseif ($u['role_id'] == 3) : ?>
                                            Member
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="" class="badge badge-primary">detail</a>
                                        <a href="" class="badge badge-danger">hapus</a>
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