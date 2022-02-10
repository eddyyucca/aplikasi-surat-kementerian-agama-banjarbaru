<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Surat Disposisi</h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <td>Nama Surat</td>
                    <td>:</td>
                    <td><?= $data2->nama_surat ?></td>
                </tr>
                <tr>
                    <td>Nomor Surat</td>
                    <td>:</td>
                    <td><?= $data2->no_surat ?></td>
                </tr>
                <tr>
                    <td>Asal Surat Masuk</td>
                    <td>:</td>
                    <td><?= $data2->asal_surat_masuk ?></td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td>:</td>
                    <td><?= $data2->perihal ?></td>
                </tr>
            </table>
            <hr>
            <a href="<?= base_url('admin/cetak_disposisi/') . $data2->id_surat_masuk ?>" class="btn btn-primary">Cetak Disposisi</a>
            <br>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Isi Disposisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->jabatan; ?></td>
                                <td><?= $x->isi_disposisi; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>