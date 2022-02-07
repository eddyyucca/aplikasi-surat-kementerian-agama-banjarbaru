<body class="bg-gradient-success">
    <div class="mbr-slider slide carousel" data-keyboard="false" data-ride="carousel" data-interval="2000" data-pause="true">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card o-hidden border-0 shadow-lg my-5 ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg">
                                    <div class="p-5">
                                        <!-- Page Heading -->
                                        <div class="card">
                                            <div class="card-header">
                                                Edit Data Warga
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="container-fluid">
                                                        <?= validation_errors() ?>
                                                        <form action="<?= base_url('auth/proses_daftar')  ?>" method="POST" enctype="multipart/form-data">
                                                            <table class="table">
                                                                <tr>
                                                                    <td width=20%>No KTP</td>
                                                                    <td><input type="text" name="no_ktp" class="form-control" required placeholder="No KTP" disabled></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Nama Lengkap</td>
                                                                    <td><input type="text" name="nama_lengkap" class="form-control" required placeholder="Nama Lengkap"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jenis Kelamin</td>
                                                                    <td><select class="form-control" name="jk">
                                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                                            <option value="Perempuan">Perempuan</option>
                                                                        </select></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tempat/Tanggal/Lahir</td>
                                                                    <td><input type="text" name="tempat" class="form-control" required placeholder="Tempat">
                                                                        <input type="date" name="ttl" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat Saat Ini</td>
                                                                    <td><textarea name="alamat" class="form-control"></textarea></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Telpon</td>
                                                                    <td><input type="text" name="telpon" class="form-control" required placeholder="Telpon" disabled></td>
                                                                </tr>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <button class="btn btn-success">Simpan</button>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <a href="<?= base_url('admin/warga') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>