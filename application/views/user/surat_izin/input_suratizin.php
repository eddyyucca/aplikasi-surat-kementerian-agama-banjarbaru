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
                                                Surat Izin
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="container-fluid">
                                                        <?= validation_errors() ?>
                                                        <form action="<?= base_url('user/proses_surat_izin')  ?>" method="POST" enctype="multipart/form-data">
                                                            <table class="table">
                                                                <tr>
                                                                    <td width=20%>Nama Surat</td>
                                                                    <td><select name="keperluan" class="form-control">
                                                                            <option value="0">--PILIH Perihal--</option>
                                                                            <option value="Cuti tahunan">Cuti Tahunan</option>
                                                                            <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Dari Tanggal</td>
                                                                    <td><input type="date" name="dari_tanggal" class="form-control" required placeholder="Dari Tanggal"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width=20%>Sampai Tanggal</td>
                                                                    <td><input type="date" name="sampai_tanggal" class="form-control" required placeholder="Sampai Tanggal"></td>
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