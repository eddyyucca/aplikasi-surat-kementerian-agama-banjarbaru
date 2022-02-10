<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SURAT IZIN</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <style>
        th .a {
            height: 50px;
            padding-left: 10px;
            vertical-align: top;

        }


        table {
            border-collapse: collapse;
            height: 100%;
        }



        tr .bungkus {
            padding-left: 20px;
        }
    </style>

</head>

<body>
    <?php
    $tgl = date('d-m-Y');
    function tgl_indo($tgl)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tgl);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }

    // 21 Oktober 2017

    // echo "<br/>";
    // echo "<br/>";

    // echo tgl_indo("1994-02-15"); // 15 Februari 1994
    ?>
    <table>
        <tr align="left">
            <th rowspan="2"><img src="<?= base_url('assets/cop_surat.png') ?>" width="100%">
            </th>
        </tr>
    </table>

    <table align="center" width="600px" border="0">

        <tr>
            <td colspan="3">
                <p>Yang bertanda tangan dibawah ini :</p>
            </td>
        </tr>
        <tr>
            <td width="100px">Nama</td>
            <td width="10px">:</td>
            <td><?= $data->nama ?></td>
        </tr>
        <tr>
            <td width="100px">Jabatan</td>
            <td width="10px">:</td>
            <td><?= $data->jabatan ?></td>
        </tr>
        <tr>
            <td width="100px">Bidang</td>
            <td width="10px">:</td>
            <td><?= $data->bidang ?></td>
        </tr>

    </table>
    <table align="center" width="600px" border="0">
        <tr>
            <td colspan="3">
                <p align=" justify"> &nbsp; &nbsp; &nbsp; &nbsp; Dengan adanya surat ini saya ingin mengajukan <?= $data->keperluan ?>. Cuti akan terhitung mulai dari tanggal <?= tgl_indo($data->dari_tanggal) ?> hingga <?= tgl_indo($data->sampai_tanggal) ?>. Saya menyadari adanya tanggung jawab besar dalam menjalankan pekerjaan saya, maka sehubungan dengan surat ini, pekerjaan saya akan dialihkan ke rekan kerja saya untuk sementara waktu sampai cuti melahirkan saya berakhir.
            </td>
        </tr>

    </table>


    <table align="center" width="600px" border="0">
        <tr>
            <td width="400px"></td>
            <td>
                <p align=" justify">Banjarbaru, <?= tgl_indo(date('Y-m-d')); ?><br>
                    Hormat Saya</p>
                <br>
                <br>
                <br>
                <br>
                <?= $data->nama ?>

            </td>
        </tr>
    </table>
    <br> <br>

    <script>
        window.print();
    </script>
</body>

</html>