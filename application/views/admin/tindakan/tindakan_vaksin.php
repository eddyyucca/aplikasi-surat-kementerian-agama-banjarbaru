<!-- Begin Page Content -->
<div class="container col-8">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">

                    <table class="mt-2 ml-3">
                        <tr>
                            <td> NIK</td>
                            <td>: <?= $data->nik ?> </td>
                        </tr>
                        <tr>
                            <td> Nama</td>
                            <td>: <?= $data->nama ?> </td>
                        </tr>
                        <tr>
                            <td> TTL</td>
                            <td>: <?= $data->ttl ?> </td>
                        </tr>
                        <tr>
                            <td> Jenis Kelamin</td>
                            <td>: <?= $data->jk ?> </td>
                        </tr>
                        <tr>
                            <td> Telpon</td>
                            <td>: <?= $data->telpon ?> </td>
                        </tr>
                        <tr>
                            <td> Alamat</td>
                            <td>: <?= $data->alamat ?> </td>
                        </tr>
                    </table>
                    <br>
                    <?= validation_errors() ?>
                    <form action="<?= base_url('admin/hasil_vaksin/' . $data->id_warga)  ?>" method="POST" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td width=20%>Vaksin</td>
                                <td><select name="vaksin" class="form-control">
                                        <option value="">--PILIH VAKSIN--</option>
                                        <option value="Gagal">Gagal Vaksin</option>
                                        <?php foreach ($vaksin as $vak) { ?>
                                            <option value="<?= $vak->id_vaksin ?>"><?= $vak->nama_vaksin ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td width=20%>Vaksin Ke</td>
                                <td><select name="vaksin_ke" class="form-control">
                                        <option value="">--PILIH VAKSIN KE--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>

                                    </select></td>
                            </tr>
                            <tr>
                                <td width=20%>Dokter Penanggung Jawab</td>
                                <td><select name="dokter" class="form-control">
                                        <option value="">--PILIH DOKTER--</option>

                                        <?php foreach ($dokter as $dok) { ?>
                                            <option value="<?= $dok->nama_dokter ?>"><?= $dok->nama_dokter ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><input type="text" name="keterangan" class="form-control" required placeholder="Keterangan Tindakan"></td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-primary">Simpan</button>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>