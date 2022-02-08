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
                                                Surat Keluar
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="container-fluid">
                                                        <?= validation_errors() ?>
                                                        <form action="<?= base_url('admin/proses_surat_keluar')  ?>" method="POST" enctype="multipart/form-data">
                                                            <table class="table">
                                                                <tr>
                                                                    <?php

                                                                    $nomor = "001" + $no_surat;
                                                                    ?>
                                                                    <td width=20%>Nomor Surat</td>
                                                                    <td><input type="text" name="no_surat" class="form-control" value="mag/123/<?= date('y') . "/00" . $nomor ?>" disabled>

                                                                        <input type="hidden" name="no_surat" value="mag/123/<?= date('y') . "/" . $nomor ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Tanggal Surat Keluar</td>
                                                                    <td><input type="date" name="tanggal_surat" class="form-control" required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Tujuan Surat</td>
                                                                    <td><input type="text" name="tujuan_surat" class="form-control" required placeholder="Tujuan Surat"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Perihal</td>
                                                                    <td><textarea class="form-control" name="perihal" rows="5"></textarea></td>
                                                                </tr>


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