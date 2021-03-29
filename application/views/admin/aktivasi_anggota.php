<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Anggota</h1>

<!-- DataTales Example -->
<div class="card shadow my-4 mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($post)) : ?>
                        <?php $i = 1;
                        foreach ($post as $post) : ?>
                            <tr>
                                <td> <?= $i++; ?></td>
                                <td> <?= $post['nama'] ?></td>
                                <td> <?= $post['email'] ?> </td>
                                <td> <?= $post['active'] ?> </td>

                                <td>

                                    <a href="<?= base_url() ?>admin/update_anggota/<?= $post['id'] ?>" class="switch">
                                        <input type="checkbox" <?php if ($post['active'] == '0') {
                                                                ?> checked <?php
                                                                        }   ?>>
                                        <span class="slider round"></span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("Btn");
                            x.disabled = true;
                        }
                    </script>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Style toogle -->
<style>
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 30px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: green;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 24px;
    width: 24px;
    left: 4px;
    bottom: 3px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: red;
}

input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 10px;
}

.slider.round:before {
    border-radius: 30%;
}
</style>