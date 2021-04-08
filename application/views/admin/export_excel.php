<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <a href="<?php echo base_url('admin/proses_export_transaksi_masuk'); ?>" class="btn btn-xs" style="margin-left: 80px; margin-top:30px; background-color: #3283a8; color: #FFFFFF;">Export ke Excel</a>
    <table border="1" cellspacing="0" style="margin-left: 80px; margin-top:40px; text-align:center;">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Barcode</th>
                <th>Nama Barang</th>
                <th>Stock</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($transaksi_masuk)) {
                $i = 1;
                foreach ($transaksi_masuk as $transaksi_masuk) {
            ?>
                    <tr>
                        <td> <?= $i++; ?></td>
                        <td> <?= $transaksi_masuk['tanggal_masuk'] ?></td>
                        <td> <?= $transaksi_masuk['barcode'] ?></td>
                        <td> <?= $transaksi_masuk['nama_barang'] ?> </td>
                        <td> <?= $transaksi_masuk['stock'] ?> </td>
                        <td> <?= $transaksi_masuk['satuan'] ?> </td>
                        <td> Rp <?= $transaksi_masuk['harga'] ?></td>
                        <td> <?= $transaksi_masuk['keterangan'] ?></td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</body>

</html>