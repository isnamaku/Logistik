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
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stock</th>
                                        <th>Satuan</th>
                                        <th>Nama Pengirim</th>
                                        <th>Perusahaan Pengirim</th>
                                        <th>Kolom</th>
                                        <th>Kode</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(isset($post)) {
                                    $i=1;
                                    
                                    foreach ($post as $post) {  
                                        $jumlah = $post['harga'] * $post['stock'];
                                        ?>
                                  
                                    <tr>
                                    <td><?= $i++; ?></td>
                                                <td> <?= $post['tanggal_masuk'] ?></td>
                                                <td> <?= $post['barcode'] ?> </td>
                                                <td> <?= $post['nama_barang'] ?> </td>
                                                <td> <?= $post['stock'] ?> </td>
                                                <td> <?= $post['satuan'] ?> </td>
                                                <td> <?= $post['sumber'] ?></td>
                                                <td> <?= $post['sumber_2'] ?></td>
                                                <td> <?= $post['column'] ?></td>
                                                <td> <?= $post['kode_sumber'] ?></td>
                                                <td> Rp <?= $post['harga'] ?></td>
                                                <td> Rp <?= $jumlah ?></td>
                                                <td> <?= $post['keterangan'] ?></td>
       
                                        <td>
                                            <a href="<?= base_url() ?>admin/info_barang_masuk/<?= $post['id_transaksi_masuk'] ?>" class="btn btn-xs" style="background-color: #FFB800; color: #FFFFFF;"><span class="far fa-question-circle"></span></a>
                                            <a href="<?= base_url() ?>admin/edit_barang_masuk/<?= $post['id_transaksi_masuk'] ?>" class="btn btn-xs" style="background-color: #2CB162; color: #FFFFFF"><span class="far fa-edit"></span></a>
                                            <a href="<?= base_url() ?>admin/hapus_barang_masuk/<?= $post['id_transaksi_masuk'] ?>" class="btn btn-xs" style="background-color: #FF0000; color: #FFFFFF" onclick="return confirm('Yakin ingin menghapus post?')"><span class="far fa-trash-alt"></span></a>
                                        </td>
                                    </tr>

                                    <?php }
                                }?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
