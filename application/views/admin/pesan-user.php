<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card mb-3 o-hidden border-0 shadow-lg" style="max-width: 800px;">
                <div class="row no-gutters">
                    <form action="">
                        <input type="hidden" name="id" value="<?= $pesan['id']; ?>">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"><?= $pesan['nama']; ?></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->