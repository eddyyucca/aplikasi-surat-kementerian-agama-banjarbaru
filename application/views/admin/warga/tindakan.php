<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Vaksin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <div class="col-4">
                        <form action="<?= base_url('admin/tindakan')  ?>" method="post">
                            <input type="date" name="tgl_permintaan" class="form-control">
                            <br>
                            <button class="btn btn-primary">Kirim</button>
                        </form>
                    </div>

                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Urut</th>
                            <th>Nama Warga</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Telpon</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->no_urut; ?></td>
                                <td><?= $x->nama; ?></td>
                                <td><?= $x->ttl; ?></td>
                                <td><?= $x->jk; ?></td>
                                <td><?= $x->alamat; ?></td>
                                <td><?= $x->telpon; ?></td>
                                <td align="center">

                                    <a href="<?= base_url('admin/tindakan_vaksin/') . $x->id_warga; ?>" class="btn btn-primary">Tindakan</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>