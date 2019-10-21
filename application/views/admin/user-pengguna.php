<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach ($users as $u) : ?>
                    <li class="list-group-item">
                        <?= $u['nama']; ?>
                        <a href="<?= base_url(); ?>admin/pesan/<?= $u['id']; ?>" class="badge badge-success float-right">pesan</a>
                        <div class="badge float-right"> </div>
                        <a href="<?= base_url(); ?>admin/detail/<?= $u['id']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->