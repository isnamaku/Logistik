<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Tambah Barang Masuk</a>
    <hr>

    <!-- Akhir dariProses Panggi Barcode -->
    <div class="card shadow my-4 mb-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <p style="color:black;">Jenis Barang</p>
                        <hr>
                        <!-- Banyak Barang -->
                        <iframe name="votar" style="display:none;"></iframe>
                        <form action="" method="post" target="votar"> <a style="color:black;"> Pilih jenis barang yang akan dimasukkan : </a>

                            <select name="test">
                                <option value="1" name="1">Pangan</option>
                                <option value="2" name="2">Non Pangan</option>
                            </select>
                            <br />
                            <input type="submit" class="btn-primary " value="Lanjut" data-target="#sumbitModal" style="margin-top:20px;" />
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <form action="<?= base_url('admin/proses_tambah_barang_masuk'); ?>" method="POST" >

    <!-- Proses Panggi Barcode -->
    <?php if (isset($_GET['test'])) {
            $test = ($_GET['test']);

            $last_row = $this->db->select('barcode')->order_by('barcode', "desc")->limit(1)->get('barang')->row();

            $noUrut = (int)substr($last_row->barcode, 2, 6);
            $noUrut++;

            if ($test == '1') {
                $str = '50';
                $newKode = $str . sprintf('%04s', $noUrut);
            } else {
                $str = '51';
                $newKode = $str . sprintf('%04s', $noUrut);
            }
        }
        ?>

        <br>
        <br>
    
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Tanggal</label>
                    <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal_masuk" id="tanggal_masuk" required>
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kode Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode" value=" <?php if (isset($_GET['test'])) {
                                                                                                                                        echo $newKode;
                                                                                                                }
                                                                                                                                    ?>">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama_barang" id="nama_barang">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Stock Masuk</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="stock" id="stock">
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Satuan</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="satuan" id="satuan">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Harga</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="harga" id="harga">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Keterangan</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="keterangan" id="keterangan">
                </div>
            </div>
        </div>
        <button type="submit" href="<?= base_url() ?>admin/barang_masuk" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right; margin-bottom:100px;">Tambah</button>
        <a href="<?= base_url() ?>admin/barang_masuk" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right; margin-bottom:100px;">Batal</a>
    </form>
</div>