            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tabel Barang Masuk</h1>
                <a href="<?= base_url('admin/tambah_barang_masuk'); ?>" class="btn btn-user" style="background-color: #F69133; color: #000000;">Tambah</a>

                <!-- DataTales Example -->
                <div class="card shadow my-4 mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>
                                            <a href="<?= base_url('admin/info_barang_masuk'); ?>" class="btn btn-xs" style="background-color: #FFB800; color: #FFFFFF;"><span class="far fa-question-circle"></span></a>
                                            <a href="<?= base_url('admin/edit_barang_masuk'); ?>" class="btn btn-xs" style="background-color: #2CB162; color: #FFFFFF"><span class="far fa-edit"></span></a>
                                            <a href="<?= base_url('admin/hapus_barang_masuk'); ?>" class="btn btn-xs" style="background-color: #FF0000; color: #FFFFFF" onclick="return confirm('Yakin ingin menghapus post?')"><span class="far fa-trash-alt"></span></a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
