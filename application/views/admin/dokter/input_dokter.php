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
                    <form action="<?= base_url('admin/proses_input_dokter')  ?>" method="POST" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td width=20%>Nama Dokter</td>
                                <td><input type="text" name="nama_dokter" class="form-control" required placeholder="Nama dokter"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><select class="form-control" name="jk">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><input type="date" name="ttl" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Saat Ini</td>
                                <td><textarea name="alamat" class="form-control"></textarea></td>
                            </tr>

                            <tr>
                                <td>Telpon</td>
                                <td><input type="text" name="telpon" class="form-control" required placeholder="Telpon"></td>
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