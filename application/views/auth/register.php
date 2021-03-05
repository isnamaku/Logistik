<style type="text/css">
    body {
        background-color: #FF8C00;
    }
</style>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">DAFTAR</h1>
                                </div>
                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="POST" action="<?= base_url('Auth/register'); ?>">
                                    <div class="form-group">
                                        <label style="color:#000000; font-weight:bold">Nama</label>
                                        <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama" id="nama" <?= form_error('nama', '<small class="text-danger pl-3">', '</small'); ?>>
                                    </div>

                                    <div class="form-group">
                                        <label style="color:#000000; font-weight:bold">E-mail</label>
                                        <input type="text" style="background-color: #E5E5E5" class="form-control" name="email" id="email" <?= form_error('email', '<small class="text-danger pl-3">', '</small'); ?>>
                                    </div>

                                    <div class="form-group">
                                        <label style="color:#000000; font-weight:bold">Kata Sandi</label>
                                        <input type="password" style="background-color: #E5E5E5" class="form-control" name="password1" id="password1" <?= form_error('password1', '<small class="text-danger pl-3">', '</small'); ?>>
                                    </div>

                                    <div class="form-group">
                                        <label style="color:#000000; font-weight:bold">Konfirmasi Kata Sandi</label>
                                        <input type="password" style="background-color: #E5E5E5" class="form-control" name="password2" id="password2">
                                    </div>

                                    <button type="submit" style="background-color: #FF8C00; color:#000000; font-weight:bold" class="btn btn-block">
                                        Daftar Sekarang
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a style="color:#000000; font-weight:bold">Sudah punya akun? </a><a href="<?= base_url('Auth/login'); ?>">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>