<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Detail Barang Masuk</a>
    <hr>
    <form>
        <?php if (isset($post)) {
            foreach ($post as $post) { ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Kode Barang</label>
                            <?php
                            $barcode = $post['barcode'];
                            $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
                            ?>
                        </div>
                        <div class="form-group">
                                    <div style="box-sizing: border-box; width: 250px; height: 155px; padding: 5px; border: 1px solid black; margin-left:30px;">
                                        <div align="center">
                                            <a style="color: black;"><b>BPBD DIY</b></a><br>
                                            <a style="color: black; font-size:small;"><?= $post['nama_barang'] ?></a>
                                            <?php echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($barcode, $generator::TYPE_CODE_128)) . '">'; ?>
                                        </div>
                                        <div align="center">
                                            <a style="color:#000000;"> <?php echo $barcode;  ?> </a><br>
                                        </div>
                                        <div align="left" style="display: inline;">
                                            <a style="color:#000000; ">
                                                <?php
                                                if (preg_match("/^BNPB/i", $post['nama_barang'])) {
                                                    echo '200001';
                                                } else if (preg_match("/^APBD/i", $post['nama_barang'])) {
                                                    echo '200002';
                                                } else if (preg_match("/^PERU/i", $post['nama_barang'])) {
                                                    echo '200005';
                                                } else if (preg_match("/^MASY/i", $post['nama_barang'])) {
                                                    echo '200006';
                                                } else if (preg_match("/^BTT/i", $post['nama_barang'])) {
                                                    echo '200007';
                                                } else if (preg_match("/^BLKPP/i", $post['nama_barang'])) {
                                                    echo '200008';
                                                } else {
                                                    echo '200009';
                                                }
                                                ?>
                                            </a>
                                        </div>
                                        <div align="right" style="display: inline; float:right;">
                                            <a style="color:#000000;">Rp.<?= $post['harga'] ?> </a>
                                        </div>
                                    </div>
                                </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Tanggal</label>
                            <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal" id="tanggal" value="<?= $post['tanggal_masuk'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Kode Barang</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="kode" id="kode" value="<?= $post['barcode'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Barang</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="barang" id="barang" value="<?= $post['nama_barang'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Stock</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="jumlah" id="jumlah" value="<?= $post['stock'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Harga</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="pengirim" id="pengirim" value="<?= $post['harga'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Keterangan</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="perusahaan" id="perusahaan" value="<?= $post['keterangan'] ?>" disabled>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/barang_masuk') ?>" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Kembali</a>
        <?php }
        } ?>
    </form>
</div>