<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Edit Barang Masuk</a>
    <hr>
    <form action="<?= base_url('admin/barang_masuk')?>" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Tanggal</label>
                    <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal" id="tanggal">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kode Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="kode" id="kode">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barang" id="barang">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Stock Masuk</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="jumlah" id="jumlah">
                </div>
            </div>
            <div class="col-md-6">
 
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Nama Pengirim</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="pengirim" id="pengirim">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Perusahaan Pengirim</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="perusahaan" id="perusahaan">
                </div>
            </div>
        </div>
        <button type="submit" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Simpan</button>
        <a href="<?= base_url() ?>admin/barang_masuk" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Batal</a>
    </form>
</div>
