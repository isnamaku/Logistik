            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Berita Acara</h1>
        

                <!-- DataTales Example -->
                <div class="card shadow my-4 mb-4">
                    <div class="card-body">
                    
                    <form action="#" method="POST">
        <div class="row">
            <div class="col-md-6">
                <p>Data Penerima</p>
                <hr>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Tanggal Berita Acara</label>
                    <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Nama</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Jabatan</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama_barang" id="nama_barang">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Instansi</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="stock" id="stock">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">NIP</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="satuan" id="satuan">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Telp</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="keterangan" id="keterangan">
                </div>
            </div>
            <div class="col-md-6">
            <p>Data Barang</p>
                <hr>
                <!-- Banyak Barang -->
                <!-- <iframe name="votar" style="display:none;"></iframe> -->
                <form action="" method="post" target="votar" > Banyak barang yang didistribusikan : 
                <input name="banyak_data" id="banyak_data" /> barang<br />    
                <input type="submit" value="Lanjut" data-target="#sumbitModal"/>
                </form>

                <script style="text/javascript">
                $('#submit').click(function() {
                    $.ajax({
                        url: 'berita_acara.php',
                        type: 'POST',
                        data: {
                           $banyak_data = 'banyak_data' ;
                        },
                        success: function(msg) {
                            alert('Email Sent');
                        }               
                    });
                });
                </script>

                
<div class="modal fade" id="votar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">Apakah Anda yakin akan keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-dismiss="modal">Kembali</button>
                <a class="btn btn-danger" href="<?= base_url("/auth/logout") ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>

 
                <!-- <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Nama Pengirim</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="sumber" id="sumber">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Perusahaan Pengirim</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="sumber_2" id="sumber_2">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kolom</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="column" id="column">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kode</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="kode" id="kode">
                </div> -->



                <!-- Logout Modal-->
                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a> -->


<!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">Apakah Anda yakin akan keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-dismiss="modal">Kembali</button>
                <a class="btn btn-danger" href="<?= base_url("/auth/logout") ?>">Keluar</a>
            </div>
        </div>
    </div>
</div> -->

            </div>
        </div>
        <button type="submit" href="<?= base_url() ?>admin/barang_masuk" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Tambah</button>
        <a href="<?= base_url() ?>admin/barang_masuk" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Batal</a>
    </form>
                    </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
