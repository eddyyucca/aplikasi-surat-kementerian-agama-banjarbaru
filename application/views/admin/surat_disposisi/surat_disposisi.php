<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Surat Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <th>aksi</th>
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
                                <td align="center">
                                    <a href="<?= base_url('admin/hapus_suratmasuk/') . $x->id_surat_masuk; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('admin/edit_suratmasuk/') . $x->id_surat_masuk; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('assets/file/') . $x->file_surat; ?>" class="btn btn-success">Lihat Data</a>
                                    <a href="<?= base_url('admin/dispo/') . $x->id_surat_masuk; ?>" class="btn btn-success">Lihat Disposisi</a>
                                    <a href="<?= base_url('admin/tambah_disposisi/') . $x->id_surat_masuk; ?>" class="btn btn-success">Tambah Disposisi</a>
                                    <a href="<?= base_url('admin/buat_agenda/') . $x->id_surat_masuk; ?>" class="btn btn-success">Buat Agenda</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>