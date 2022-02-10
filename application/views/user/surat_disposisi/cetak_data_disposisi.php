<div class="container-fluid">
    <!-- Page Heading -->
    <table>
        <tr align="left">
            <th rowspan="2"><img src="<?= base_url('assets/cop_surat.png') ?>" width="100%">
            </th>
        </tr>
    </table>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

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
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" border="1" cellspacing="0">
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


<script>
    window.print()
</script>