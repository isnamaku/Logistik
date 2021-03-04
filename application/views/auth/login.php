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
                                    <h1 class="h4 text-gray-900 mb-4">MASUK</h1>
                                </div>


                                <form class="user" method="POST" action="<?= base_url('Auth/login'); ?>">
                                    <div class="form-group">
                                        <label style="color:#000000; font-weight:bold">E-mail</label>
                                        <input type="text" style="background-color: #E5E5E5" class="form-control" name="email" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label style="color:#000000; font-weight:bold">Kata Sandi</label>
                                        <input type="password" style="background-color: #E5E5E5" class="form-control" name="password" id="password">
                                    </div>

                                    <button type="submit" style="background-color: #FF8C00; color:#000000; font-weight:bold" class="btn btn-block">
                                        Masuk Sekarang
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a style="color:#000000; font-weight:bold">Belum punya akun? </a><a href="<?= base_url('Auth/register'); ?>">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>