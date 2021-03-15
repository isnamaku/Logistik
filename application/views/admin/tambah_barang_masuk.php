<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Tambah Barang Masuk</a>
    <hr>
    <form action="<?= base_url('admin/proses_tambah_barang_masuk'); ?>" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Tanggal</label>
                    <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kode Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama_barang" id="nama_barang">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Stock Masuk</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="stock" id="stock">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Satuan</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="satuan" id="satuan">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Keterangan</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="keterangan" id="keterangan">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Nama Pengirim</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="sumber" id="sumber">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Perusahaan Pengirim</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="sumber_2" id="sumber_2">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kolom</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="column" id="column">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kode</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="kode" id="kode">
                </div>
            </div>
        </div>
        <button type="submit" href="<?= base_url() ?>admin/barang_masuk" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Tambah</button>
        <a href="<?= base_url() ?>admin/barang_masuk" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Batal</a>
    </form>
</div>