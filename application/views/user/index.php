<!-- Begin Page Content -->
<div class="container col-6">
    <?= $this->session->flashdata('pesanan'); ?>
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Profil <?= $data->nama ?>
            </div>
            <div class="card-body">
                <div class="row">

                    <?php
                    function hitung_umur($ttl)
                    {
                        list($year, $month, $day) = explode("-", $ttl);
                        $year_diff  = date("Y") - $year;
                        $month_diff = date("m") - $month;
                        $day_diff   = date("d") - $day;
                        if ($month_diff < 0) $year_diff--;
                        elseif (($month_diff == 0) && ($day_diff < 0)) $year_diff--;
                        return $year_diff;
                    }
                    ?>
                    <table class="mt-2 ml-3">
                        <tr>
                            <td> Nama</td>
                            <td>: <?= $data->nama ?> </td>
                        </tr>
                        <tr>
                            <td> Tanggal Lahir </td>
                            <td>: <?= $data->tempat . " " . $data->ttl ?> </td>
                        </tr>
                        <tr>
                            <td> Jenis Kelamin </td>
                            <td>: <?= $data->jk ?> </td>
                        </tr>
                        <tr>
                            <td> Alamat </td>
                            <td>: <?= $data->alamat ?> </td>
                        </tr>
                        <tr>
                            <td> No Telpon </td>
                            <td>: <?= $data->telpon ?> </td>
                        </tr>
                        <tr>
                            <td>Status Vaksin</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <?php
                                            $no = 1;
                                            foreach ($data2 as $x) { ?>
                                                : vaksin <?= $x->nama_vaksin ?> <br>

                                            <?php     } ?>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <!-- tentang saya -->



                    <br>

                    <!-- cv -->

                    <br>

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>



</div>

<!-- Begin Page Content -->
<div class="container col-6">
    <?= $this->session->flashdata('pesanan'); ?>
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                NO Antrian
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <?php if ($antri == false) { ?>
                        <h1>No Antri Vaksin Ke - 0</h1>
                    <?php } else { ?>
                        <h1>No Antri Vaksin Ke - <?= $antri->no_urut ?></h1>
                    <?php } ?>

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
</div>