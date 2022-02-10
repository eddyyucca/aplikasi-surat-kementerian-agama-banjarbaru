<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Agenda</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <a href="<?= base_url('user/cetak_agenda') ?>" class="btn btn-primary">Cetak Agenda</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Agenda</th>
                            <th>Asal Surat</th>
                            <th>Acara</th>
                            <th>menghadiri</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->tgl_agenda; ?></td>
                                <td><?= $x->asal_surat_masuk; ?></td>
                                <td><?= $x->perihal; ?></td>
                                <td><?= $x->menghadiri; ?></td>
                                <!-- <td align="center">
                                    <a href="<?= base_url('admin/tambah_menghadiri/') . $x->id_agenda; ?>" class="btn btn-success">Tambah Menghadiri</a>
                                </td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>