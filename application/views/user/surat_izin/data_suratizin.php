<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Surat Izin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('user/tambah_surat_izin') ?>" class="btn btn-primary">Tambah Surat Izin</a>

                    <?php if ($bulan == false) { ?>
                        <a href="<?= base_url('user/cetak_surat_izin') ?>" class="btn btn-primary">Cetak Surat Izin</a>
                        <hr>
                        <form action="<?= base_url('user/cari_surat_izin') ?>" method="post">
                            <div class="input-group mb-3 col-6">
                                <select name="keperluan" class="form-control">
                                    <option value="0">--PILIH PERIHAL--</option>
                                    <option value="Cuti tahunan">Cuti Tahunan</option>
                                    <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                                </select>
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
                        <form action="<?= base_url('user/cetak_surat_izin_keperluan') ?>" method="post">
                            <input type="hidden" name="bulan" value="<?= $bulan ?>">
                            <input type="hidden" name="keperluan" value="<?= $keperluan ?>">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cetak Surat izin</button>
                        </form>
                    <?php } ?>

                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Bidang</th>
                            <th>Jabatan</th>
                            <th>Keperluan</th>
                            <th>Dari Tanggal</th>
                            <th>Sampai Tanggal</th>
                            <!-- <th>aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nama; ?></td>
                                <td><?= $x->bidang; ?></td>
                                <td><?= $x->jabatan; ?></td>
                                <td><?= $x->keperluan; ?></td>
                                <td><?= $x->dari_tanggal; ?></td>
                                <td><?= $x->sampai_tanggal; ?></td>
                                <!-- <td align="center">
                                    <a href="<?= base_url('user/hapus_suratizin/') . $x->id_surat_izin; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                   <a href="<?= base_url('user/edit_suratmasuk/') . $x->id_surat_izin; ?>" class="btn btn-primary">Edit</a> -->
                                <!-- </td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>