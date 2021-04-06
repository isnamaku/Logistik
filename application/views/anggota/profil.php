<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Edit Profil Anggota</a>
    <hr>
    <?php if (isset($anggota)) {
        foreach ($anggota as $anggota) { ?>
            <form action="<?= base_url() ?>Anggota/update_profil/<?= $anggota['id'] ?>" method="POST">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Nama</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama" id="nama" value="<?= $anggota['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Email</label>
                            <input type="text" style="background-color: #E5E5E5" class="form-control" name="email" id="email" value="<?= $anggota['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label style="color:#000000; font-weight:bold">Password</label>
                            <input type="password" style="background-color: #E5E5E5" class="form-control" name="password" id="password" value="<?= $anggota['password'] ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Simpan</button>
                <a href="<?= base_url() ?>anggota/index" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Kembali</a>
        <?php }
    } ?>
            </form>
</div>