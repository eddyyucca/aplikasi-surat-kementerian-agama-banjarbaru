<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Disposisi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <?php if ($id_disposisi == false) { ?>
                        <a href="<?= base_url('user/cetak_disposisi') ?>" class="btn btn-primary">Cetak Surat Disposisi</a>
                    <?php } else { ?>
                        <form action="<?= base_url('user/cetak_disposisi_bagian') ?>" method="post">
                            <input type="hidden" name="id_disposisi" value="<?= $id_disposisi ?>">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cetak Surat Disposisi Bagian</button>
                        </form>
                    <?php  } ?>
                    <hr>
                    <form action="<?= base_url('user/disposisi_cari') ?>" method="post">
                        <div class="input-group mb-3 col-6">
                            <select name="disposisi" class="form-control">
                                <option value="">--PILIH DISPOSISI--</option>
                                <?php foreach ($disposisi as $dis) { ?>
                                    <option value="<?= $dis->id_disposisi ?>"><?= $dis->nama_disposisi ?></option>
                                <?php } ?>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </form>
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
                            <th>Disposisi</th>
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
                                <td><?= $x->nama_disposisi; ?></td>
                                <!-- <td align="center">
                                    <a href="<?= base_url('user/hapus_suratmasuk/') . $x->id_surat_masuk; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('user/edit_suratmasuk/') . $x->id_surat_masuk; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('user/lihat_data/') . $x->id_surat_masuk; ?>" class="btn btn-success">Lihat Data</a>
                                </td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>