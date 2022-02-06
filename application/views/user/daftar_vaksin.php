<div class="container col-6">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user/proses_daftar') ?>" method="POST">
                        <table class="table">

                            <tr>
                                <td width=20%>Tanggal Vaksin</td>
                                <td>
                                    <input type="date" name="tgl_vaksin" class="form-control">
                                </td>

                            </tr>

                            <td>
                                <button class="btn btn-primary">Kirim</button>
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