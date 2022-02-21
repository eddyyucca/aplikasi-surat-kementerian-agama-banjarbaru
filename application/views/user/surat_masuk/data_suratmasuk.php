<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Surat Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('user/tambah_surat_masuk') ?>" class="btn btn-primary">Tambah Surat Masuk</a>

                    <?php if ($bulan == false) { ?>
                        <a href="<?= base_url('user/cetak_surat_masuk') ?>" class="btn btn-primary">Cetak Surat Masuk</a>
                        <hr>
                        <form action="<?= base_url('user/caritanggal_sm') ?>" method="post">
                            <div class="input-group mb-3 col-6">
                                <select name="bulan" class="form-control">
                                    <option value="00">--PILIH BULAN--</option>
                                    <option value="01">--Januari--</option>
                                    <option value="02">--Februari--</option>
                                    <option value="03">--Maret--</option>
                                    <option value="04">--April--</option>
                                    <option value="05">--Mai--</option>
                                    <option value="06">--Juni--</option>
                                    <option value="07">--Juli--</option>
                                    <option value="08">--Agustus--</option>
                                    <option value="09">--September--</option>
                                    <option value="10">--Oktober--</option>
                                    <option value="11">--November--</option>
                                    <option value="12">--Desember--</option>

                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                                </div>
                            </div>
                        </form>
                    <?php  } else { ?>
                        <hr>
                        <form action="<?= base_url('user/cetak_surat_masuk_bulan') ?>" method="post">
                            <input type="hidden" name="bulan" value="<?= $bulan ?>">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cetak Surat Masuk</button>
                        </form>
                    <?php } ?>

                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Surat</th>
                            <th>No Surat</th>
                            <th>Tanggal Surat Masuk</th>
                            <th>Tanggal Terima Surat</th>
                            <th>Asal Surat</th>
                            <th>Perihal</th>
                            <!-- <th>aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nama_surat; ?></td>
                                <td><?= $x->no_surat; ?></td>
                                <td><?= $x->tgl_s_masuk; ?></td>
                                <td><?= $x->tgl_t_sm; ?></td>
                                <td><?= $x->asal_surat_masuk; ?></td>
                                <td><?= $x->perihal; ?></td>
                                <!-- <td align="center">
                                    <a href="<?= base_url('user/hapus_suratmasuk/') . $x->id_surat_masuk; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('user/edit_suratmasuk/') . $x->id_surat_masuk; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('assets/file/') . $x->file_surat; ?>" class="btn btn-success">Lihat Data</a>
                                </td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>