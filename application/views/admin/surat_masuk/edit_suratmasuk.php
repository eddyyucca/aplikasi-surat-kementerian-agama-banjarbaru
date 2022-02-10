<body class="bg-gradient-success">
    <div class="mbr-slider slide carousel" data-keyboard="false" data-ride="carousel" data-interval="2000" data-pause="true">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card o-hidden border-0 shadow-lg my-5 ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg">
                                    <div class="p-5">
                                        <!-- Page Heading -->
                                        <div class="card">
                                            <div class="card-header">
                                                Surat Masuk
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="container-fluid">
                                                        <?= validation_errors() ?>
                                                        <form action="<?= base_url('admin/proses_edit_surat_masuk/') . $data->id_surat_masuk  ?>" method="POST" enctype="multipart/form-data">
                                                            <table class="table">
                                                                <tr>
                                                                    <td width=20%>Nama Surat</td>
                                                                    <td><input type="text" name="nama_surat" value="<?= $data->nama_surat ?>" class="form-control" required placeholder="Nama Surat"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Nomor Surat</td>
                                                                    <td><input type="text" name="no_surat" value="<?= $data->no_surat ?>" class="form-control" required placeholder="Nomor Surat"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Asal Surat</td>
                                                                    <td><input type="text" name="asal_surat_masuk" value="<?= $data->asal_surat_masuk ?>" class="form-control" required placeholder="Asal Surat"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Tanggal Surat Masuk</td>
                                                                    <td><input type="date" name="tgl_s_masuk" value="<?= $data->tgl_s_masuk ?>" class="form-control" required placeholder="Nomor Surat Masuk"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Tanggal Terima Surat</td>
                                                                    <td><input type="date" name="tgl_t_sm" value="<?= $data->tgl_t_sm ?>" class="form-control" required placeholder="Tanggal Terima Surat"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Perihal</td>
                                                                    <td><textarea class="form-control" name="perihal" rows="5"><?= $data->perihal ?></textarea></td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>Disposisi</td>
                                                                    <td><select name="disposisi" class="form-control">
                                                                            <option value="">--PILIH DISPOSISI--</option>
                                                                            <?php foreach ($disposisi as $dis) { ?>
                                                                                <option value="<?= $dis->id_disposisi ?>"><?= $dis->nama_disposisi ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </td>
                                                                </tr> -->
                                                                <tr>
                                                                    <td>File</td>
                                                                    <td>

                                                                        <div class="custom-file">
                                                                            <input type="file" name="file_surat" class="">
                                                                        </div>
                                                                    </td>
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