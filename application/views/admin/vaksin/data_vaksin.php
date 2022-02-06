<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Vaksin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('admin/tambah_vaksin') ?>" class="btn btn-primary">Tambah Vaksin</a>
                    <a href="<?= base_url('admin/cetak_data_vaksin') ?>" class="btn btn-primary">Cetak Data Vaksin</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Vaksin</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nama_vaksin; ?></td>
                                <td><?= $x->jumlah; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/delete_vaksin/') . $x->id_vaksin; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('admin/edit_vaksin/') . $x->id_vaksin; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('admin/update_vaksin/') . $x->id_vaksin; ?>" class="btn btn-primary">Update Stok</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>