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
            <h1 class="m-0 font-weight-bold ">Data Surat Masuk</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">

                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Surat</th>
                            <th>No Surat</th>
                            <th>Tanggal Surat Masuk</th>
                            <th>Tanggal Terima Surat</th>
                            <th>Asal Surat</th>
                            <th>Perihal</th>

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