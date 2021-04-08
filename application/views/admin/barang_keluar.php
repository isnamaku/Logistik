           <!-- Begin Page Content -->
           <div class="container-fluid">
 
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Tabel Barang Keluar</h1>
 <a href="<?= base_url('admin/tambah_barang_keluar'); ?>" class="btn btn-user" style="background-color: #F69133; color: #000000;">Tambah</a>

 <!-- DataTales Example -->
 <div class="card shadow my-4 mb-4">
     <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="200%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Tanggal</th>
                         <th>Pengirim</th>
                         <th>Nama Penerima</th>
                         <th>Jabatan Penerima</th>
                         <th>Instansi Penerima</th>
                         <th>Barcode</th>
                         <th>Barang</th>
                         <th>Jumlah</th>
                         <th>Satuan</th>
                         <th>Keterangan</th>
                         <th>Aksi</th>
                     </tr>
                 </thead>
                 <tbody>      
                        <?php if(isset($post)) {
                            $no = 1;
                            $instansi = "BPBD DIY";
                                    for($i=0; $i<count($post); $i++) { 
                                        $date = $post[$i]['tanggal_keluar'];
                                        $date = explode('-', $date);
                                        $date =$date[2].'-'.$date[1].'-'.$date[0];   
                                        ?>
                             <tr>                                
                                 <td><?= $post[$i]['id_distribusi'] ?></td>
                                 <td> <?= $date; ?></td>
                                 <td><?= $instansi; ?></td>
                                 <td> <?= $post[$i]['nama_penerima'] ?> </td>
                                 <td> <?= $post[$i]['jabatan_penerima'] ?> </td>
                                 <td> <?= $post[$i]['instansi_penerima'] ?></td>
                                 <td> <?= $post[$i]['barcode'] ?></td>
                                 <td> <?= $post[$i]['nama_barang'] ?></td>
                                 <td> <?= $post[$i]['jumlah_keluar'] ?></td>
                                 <td> <?= $post[$i]['satuan'] ?></td>
                                 <td> <?= $post[$i]['keterangan'] ?></td>
                                 <td>
                                     <a href="<?= base_url() ?>admin/info_barang_keluar/<?= $post[$i]['id_distribusi'] ?>" class="btn btn-xs" style="background-color: #FFB800; color: #FFFFFF;"><span class="far fa-question-circle"></span></a>
                                     <a href="<?= base_url() ?>admin/edit_barang_keluar/<?= $post[$i]['id_distribusi'] ?>" class="btn btn-xs" style="background-color: #2CB162; color: #FFFFFF"><span class="far fa-edit"></span></a>
                                     <a href="<?= base_url() ?>admin/hapus_barang_keluar/<?= $post[$i]['id_distribusi'] ?>" class="btn btn-xs" style="background-color: #FF0000; color: #FFFFFF" onclick="return confirm('Yakin ingin menghapus post?')"><span class="far fa-trash-alt"></span></a>
                                 </td>
                             </tr>
                         <?php } ?>
                     <?php } ?>

                 </tbody>
             </table>
         </div>
     </div>
 </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
