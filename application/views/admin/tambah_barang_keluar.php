<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Tambah Barang Keluar</a>
    <hr>
    <form action="<?= base_url('admin/proses_tambah_barang_keluar'); ?>" method="POST">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Tanggal Keluar</label>
                    <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal_keluar" id="tanggal_keluar">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kode Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Jumlah Barang Keluar</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="jumlah_keluar" id="jumlah_keluar">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Keterangan</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="keterangan" id="keterangan">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Nama Penerima</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama_penerima" id="nama_penerima">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Jabatan Penerima</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="jabatan_penerima" id="jabatan_penerima">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Instansi Penerima</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="instansi_penerima" id="instansi_penerima">
                </div>
            </div>
        </div>
        <button type="submit" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Tambah</button>
        <a href="<?= base_url() ?>Admin/barang_keluar" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Batal</a>
    </form>
</div>
