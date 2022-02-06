<!-- Begin Page Content -->
<div class="container col-8">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/alumni') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <form action="<?= base_url('admin/update_stok/' . $data->id_vaksin)  ?>" method="POST" enctype="multipart/form-data">

                        <table class="table">
                            <tr>
                                <td width=20%>Nama Vaksin</td>
                                <td><input type="text" name="nama_vaksin" class="form-control" required placeholder="Nama Vaksin" value="<?= $data->nama_vaksin ?>" disabled></td>
                            </tr>
                            <tr>
                                <td width=20%>Jumlah Vaksin</td>
                                <td>
                                    <input type="number" name="jumlah" value="<?= $data->jumlah ?>" class="form-control" required placeholder="Jumlah Vaksin" disabled>

                                    <input type="hidden" name="jumlah" value="<?= $data->jumlah ?>" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Jumlah Masuk</td>
                                <td><input type="number" name="vaksin_masuk" class="form-control" required placeholder="Jumlah Vaksin Masuk"></td>
                            </tr>
                            <tr>
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