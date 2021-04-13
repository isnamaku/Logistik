<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <a href="<?php echo base_url('admin/proses_export_distribusi'); ?>" class="btn btn-xs" style="margin-left: 80px; margin-top:30px; background-color: #3283a8; color: #FFFFFF;">Export ke Excel</a>
    <table border="1" cellspacing="0" style="margin-left: 80px; margin-top:40px; text-align:center;">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Nama Penerima</th>
                <th>Jabatan Penerima</th>
                <th>Instansi Penerima</th>
                <th>Barcode</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($distribusi)) {
                $i = 1;
                $pengirim = 'BPBD DIY';
                foreach ($distribusi as $distribusi) {
            ?>
                    <tr>
                        <td> <?= $i++; ?></td>
                        <td> <?= $distribusi['tanggal_keluar'] ?></td>
                        <td> <?= $pengirim; ?> </td>
                        <td> <?= $distribusi['nama_penerima'] ?> </td>
                        <td> <?= $distribusi['jabatan_penerima'] ?> </td>
                        <td> <?= $distribusi['instansi_penerima'] ?></td>
                        <td> <?= $distribusi['barcode'] ?></td>
                        <td> <?= $distribusi['nama_barang'] ?></td>
                        <td> <?= $distribusi['jumlah_keluar'] ?></td>
                        <td> <?= $distribusi['satuan'] ?></td>
                        <td> <?= $distribusi['keterangan'] ?></td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</body>

</html>