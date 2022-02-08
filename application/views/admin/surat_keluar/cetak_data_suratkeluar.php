<div class="container-fluid">
    <!-- Page Heading -->
    <table>
        <tr align="left">
            <th rowspan="2"><img src="<?= base_url('assets/cop_surat.png') ?>" width="100%">
            </th>
        </tr>
    </table>
    <div class="card-body">
        <div class="table-responsive">
            <div class="card-header py-3">
                <h1 class="m-0 font-weight-bold ">Data Surat Keluar</h1>
            </div>
            <table class="table table-bordered" border="1" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Surat</th>
                        <th>Perihal</th>
                        <th>Tanggal Surat</th>
                        <th>Tujuan Surat</th>
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
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.print()
</script>