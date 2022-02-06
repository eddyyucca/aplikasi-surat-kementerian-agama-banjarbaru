<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user/proses_ubah_password/') ?>" method="POST">
                        <table class="table">
                            <?= $pesan; ?>
                            <?php if (validation_errors() == false) {
                            } else { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors() ?>
                                </div>
                            <?php } ?>
                            <tr>
                                <td width=20%>Password Lama</td>
                                <td><input type="password" name="password_lama" class="form-control" placeholder="Password Lama"></td>
                            </tr>
                            <tr>
                                <td width=20%>Password Baru</td>
                                <td><input type="password" name="password_baru" class="form-control" placeholder="Password Baru"></td>
                            </tr>
                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>
                            <td></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>