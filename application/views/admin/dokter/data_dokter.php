<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Dokter</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('admin/tambah_dokter') ?>" class="btn btn-primary">Tambah Dokter</a>
                    <a href="<?= base_url('admin/cetak_dokter') ?>" class="btn btn-primary">Cetak Data Dokter</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Telpon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nama_dokter; ?></td>
                                <td><?= $x->ttl; ?></td>
                                <td><?= $x->jk; ?></td>
                                <td><?= $x->telpon; ?></td>
                                <td><?= $x->alamat; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/hapus_dokter/') . $x->id_dokter; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('admin/edit_dokter/') . $x->id_dokter; ?>" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>