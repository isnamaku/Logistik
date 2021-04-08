<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php if (isset($post)) {
        foreach ($post as $post) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group" id="box">
                            <?php
                            for ($i = 0; $i < 7; $i++) {
                                $barcode = $post['barcode'];
                                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
                            ?>
                                <div class="form-group">
                                    <div style="box-sizing: border-box; width: 230px; height: 155px; padding: 5px; border: 1px solid black; margin-left:30px;">
                                        <div align="center">
                                            <a style="color: black; font-size:12px;"><b>BPBD DIY</b></a><br>
                                            <a style="color: black; font-size:14px;"><?= $post['nama_barang'] ?></a>
                                        </div>
                                        <?php echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($barcode, $generator::TYPE_CODE_128)) . '">'; ?>
                                        <br>
                                        <div align="center">
                                            <a style="color:#000000;"> <?php echo $barcode;  ?> </a><br>
                                        </div>
                                        <div align="left" style="display: inline;">
                                            <a style="color:#000000; "> 20001 </a>
                                        </div>
                                        <div align="right" style="display: inline; float:right;">
                                            <a style="color:#000000;">Rp.<?= $post['harga'] ?> </a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            <?php }

                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group" id="box">
                            <?php
                            for ($i = 0; $i < 7; $i++) {
                                $barcode = $post['barcode'];
                                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
                            ?>
                                <div class="form-group">
                                    <div style="box-sizing: border-box; width: 220px; height: 155px; padding: 5px; border: 1px solid black; margin-left:30px;">
                                        <div align="center">
                                            <a style="color: black;"><b>BPBD DIY</b></a><br>
                                            <a style="color: black; font-size:small;"><?= $post['nama_barang'] ?></a>
                                        </div>
                                        <?php echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($barcode, $generator::TYPE_CODE_128)) . '">'; ?>
                                        <br>
                                        <div align="center">
                                            <a style="color:#000000;"> <?php echo $barcode;  ?> </a><br>
                                        </div>
                                        <div align="left" style="display: inline;">
                                            <a style="color:#000000; "> 20001 </a>
                                        </div>
                                        <div align="right" style="display: inline; float:right;">
                                            <a style="color:#000000;">Rp.<?= $post['harga'] ?> </a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            <?php }

                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group" id="box">
                            <?php
                            for ($i = 0; $i < 7; $i++) {
                                $barcode = $post['barcode'];
                                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
                            ?>

                                <div class="form-group">
                                    <div style="box-sizing: border-box; width: 220px; height: 155px; padding: 5px; border: 1px solid black; margin-left:30px;">
                                        <div align="center">
                                            <a style="color: black;"><b>BPBD DIY</b></a><br>
                                            <a style="color: black; font-size:small;"><?= $post['nama_barang'] ?></a>
                                        </div>
                                        <?php echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($barcode, $generator::TYPE_CODE_128)) . '">'; ?>
                                        <br>
                                        <div align="center">
                                            <a style="color:#000000;"> <?php echo $barcode;  ?> </a><br>
                                        </div>
                                        <div align="left" style="display: inline;">
                                            <a style="color:#000000; "> 20001 </a>
                                        </div>
                                        <div align="right" style="display: inline; float:right;">
                                            <a style="color:#000000;">Rp.<?= $post['harga'] ?> </a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            <?php }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php  }
    } ?>


    <!-- Script untuk print -->
    <script type="text/javascript">
        window.print();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>