<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Surat Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('admin/tambah_akun') ?>" class="btn btn-primary">Tambah Akun</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->username; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/hapus_akun/') . $x->id_akun; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('admin/edit_akun/') . $x->id_akun; ?>" class="btn btn-primary">Edit</a>
                                    <?php if ($x->level == "user") { ?>
                                        <a href="<?= base_url('admin/ubah_admin/') . $x->id_akun; ?>" class="btn btn-primary">Ubah Admin</a>

                                    <?php } else { ?>
                                        <a href="<?= base_url('admin/ubah_user/') . $x->id_akun; ?>" class="btn btn-primary">Ubah User</a>

                                    <?php } ?>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>