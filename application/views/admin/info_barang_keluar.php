<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Detail Barang Keluar</a>
    <hr>
    <form>
        <?php if (isset($post)) {
            foreach ($post as $post) { ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Tanggal Keluar</label>
                            <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal_keluar" id="tanggal_keluar" value="<?= $post['tanggal_keluar'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Nama Penerima</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama_penerima" id="nama_penerima" value="<?= $post['nama_penerima'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">NIP Penerima</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="nip_penerima" id="nip_penerima" value="<?= $post['nip_penerima'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Jabatan Penerima</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="jabatan_penerima" id="jabatan_penerima" value="<?= $post['jabatan_penerima'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Instansi Penerima</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="instansi_penerima" id="instansi_penerima" value="<?= $post['instansi_penerima'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Telepon Penerima</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="telp_penerima" id="telp_penerima" value="<?= $post['telp_penerima'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
 
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Kode Barang</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode" value="<?= $post['barcode'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Barang</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama_barang" id="nama_barang" value="<?= $post['nama_barang'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Jumlah Barang Keluar</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="jumlah_keluar" id="jumlah_keluar" value="<?= $post['jumlah_keluar'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Satuan</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="satuan" id="satuan" value="<?= $post['satuan'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Keterangan</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="keterangan" id="keterangan" value="<?= $post['keterangan'] ?>" disabled>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/barang_keluar') ?>" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Kembali</a>
        <?php }
        } ?>
    </form>
</div>
