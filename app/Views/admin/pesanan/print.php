<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Print Laporan Pesanan</title>
    <link href="<?= base_url() ?>assets/img/logo.png" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <style>
        @page {
            size: A4 landscape
        }

        h1 {
            font-weight: bold;
            font-size: 20pt;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th {
            padding: 8px 8px;
            border: 1px solid #000000;
            text-align: center;
        }

        .table td {
            padding: 3px 3px;
            border: 1px solid #000000;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body class="A4 landscape">
    <section class="sheet padding-10mm">
        <h1>LAPORAN PESANAN</h1>

        <table class="table" style="margin-top: 3rem;">
            <thead>
                <tr>
                    <th>TANGGAL</th>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>KONTAK</th>
                    <th>PAKET</th>
                    <th>JUMLAH (orang)</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pesanan as $key => $value) { ?>
                    <tr>
                        <td class="text-center" width="100"><?= $value->tanggal ?></td>
                        <td width="100"><?= $value->kode_pesanan ?></td>
                        <td><?= $value->nama ?></td>
                        <td width="180"><?= $value->no_hp ?></td>
                        <td width="100"><?= $value->nama_paket ?></td>
                        <td class="text-center" width="100"><?= $value->jumlah_orang ?></td>
                        <td width="100"><?= $value->status ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>

<script>
    window.print();
</script>

</html>