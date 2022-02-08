<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Surat Keluar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('user/tambah_surat_keluar') ?>" class="btn btn-primary">Tambah Surat Keluar</a>

                    <?php if ($bulan == false) { ?>
                        <a href="<?= base_url('user/cetak_surat_keluar') ?>" class="btn btn-primary">Cetak Surat Keluar</a>
                        <hr>
                        <form action="<?= base_url('user/caritanggal_sk') ?>" method="post">
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
                        <form action="<?= base_url('user/cetak_surat_keluar_bulan') ?>" method="post">
                            <input type="hidden" name="bulan" value="<?= $bulan ?>">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cetak Surat Keluar</button>
                        </form>
                    <?php } ?>

                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Tanggal Surat</th>
                            <th>Tujuan Surat</th>
                            <!-- <th>aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nomor_surat; ?></td>
                                <td><?= $x->perihal; ?></td>
                                <td><?= $x->tanggal_surat; ?></td>
                                <td><?= $x->tujuan_surat; ?></td>

                                <!-- <td align="center">
                                    <a href="<?= base_url('user/hapus_suratkeluar/') . $x->id_surat_keluar; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('user/edit_suratkeluar/') . $x->id_surat_keluar; ?>" class="btn btn-primary">Edit</a>
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