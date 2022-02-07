<div class="container-fluid">
    <!-- Page Heading -->
    <table>
        <tr align="left">
            <th rowspan="2"><img src="<?= base_url('assets/cop_surat.png') ?>" width="100%">
            </th>
        </tr>
    </table>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold ">Data Surat Disposisi</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                >
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Disposisi</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($data as $x) { ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $x->nama_disposisi; ?></td>
                            <td align="center">
                                <a href="<?= base_url('admin/hapus_disposisi/') . $x->id_disposisi; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('admin/edit_disposisi/') . $x->id_disposisi; ?>" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>