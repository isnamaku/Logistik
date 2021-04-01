<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Data Pihak Pertama</a>
    <hr>
    <?php if (isset($post)) {
        foreach ($post as $post) { ?>
            <form action="<?= base_url(); ?>admin/updatePihakPertama/" method="POST">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Nama</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama" id="nama" value="<?= $post['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">NIP</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="NIP" id="NIP" value="<?= $post['NIP'] ?>">
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Jabatan</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="jabatan" id="jabatan" value="<?= $post['jabatan'] ?>">
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Alamat</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="alamat" id="alamat" value="<?= $post['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Telepon</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="telepon" id="telepon" value="<?= $post['telepon'] ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Simpan</button>
                <a href="<?= base_url() ?>admin/index" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Kembali</a>
        <?php }
    } ?>
            </form>
</div>