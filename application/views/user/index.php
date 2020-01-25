<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_barang; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Barang Rusak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahBarangRusak; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-skull-crossbones fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Barang Ready</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlahBarangReady; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Anggota</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $users; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

     <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Info Barang</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Akses Point</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ap; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah POE</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $poe; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah ROUTER</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $router; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah BREKET</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $breket; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  

            </div>    
        </div>
    </div>

    
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col mb-4">



        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->