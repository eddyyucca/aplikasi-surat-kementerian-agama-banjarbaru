<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Menu
            </div>
            <div class="card-body">

                <div class="row">
                    <!-- mulai -->

                    <!-- mulai -->
                    <?php foreach ($data as $x) { ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><?= $x->nama_vaksin ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <?= $x->jumlah ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                    <!-- Content Row -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
</div>