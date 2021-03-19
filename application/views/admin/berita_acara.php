            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Berita Acara</h1>
        

                <!-- DataTales Example -->
                <div class="card shadow my-4 mb-4">
                    <div class="card-body">
                        <form  >
                            <div class="row">
                                    <div class="col-md-6">
                                        <p style="color:black;">Banyak Barang</p>
                                        <hr>
                                        <!-- Banyak Barang -->
                                        <iframe name="votar" style="display:none;"></iframe>
                                        <form action="" method="post" target="votar"  > <a style="color:black;"> Banyak barang yang didistribusikan : </a>
                                            <input name="banyak_data" id="banyak_data" style="color:black;" />  <a style="color:black;"> barang </a>
                                            <br />    
                                            <input type="submit" class="btn-primary " value="Lanjut" data-target="#sumbitModal" style="margin-top:20px;"/>
                                        </form>
                                    </div>
                            
                            </div>

                        </form>    
                     <div >
                     

                </div>

                
            </div>
    </div>
            
            <!-- /.container-fluid -->
            <div class="card shadow my-4 mb-4">
                    <div class="card-body">
                        <form  >
                            <div class="row">
                             <div class="col-md-6">
                                        <p style="color:black;">Data Barang</p>
                                        <hr>

                                <?php if(isset($_GET['banyak_data'])) { 
                                    $banyak_data = $_GET['banyak_data'];
                                    
                                        for ($i=0; $i<$banyak_data; $i++) {
                                            $urutan = 1+$i;
                                            ?>     
                                        <div class="card-body">                                                                             
                                            <div class="form-group" >
                                                <p style="color:black;">Data ke- <?php echo $urutan; ?></p>
                                                    <label style="color:#000000; font-weight:bold">Nama Barang</label>
                                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                                                    <label style="color:#000000; font-weight:bold">Merk/Type/Ukuran</label>
                                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                                                    <label style="color:#000000; font-weight:bold">Volume</label>
                                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                                                    <label style="color:#000000; font-weight:bold">Keterangan</label>
                                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                                                </div>
                                        </div>
                                        <hr width="100%">
                                    <?php
                                        } 
                                    } else{
                                        echo '<span style="color:red;text-align:center;">Isikan jumlah barang yang akan didistribusi terlebih dahulu!</span>';
                                    }
                                        ?>  
                             </div>
                            
                            </div>

                        </form>    
                     <div >
                     

                </div>

                
            </div>
    </div>

                <!-- /.container-fluid -->
                <div class="card shadow my-4 mb-4">
                    <div class="card-body">
                    <form action="<?= base_url() ?>report/pdf" method="POST">
        
                        <div class="col-md-6">
                            <p style="color:black;">Data Penerima</p>
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
                                <label style="color:#000000; font-weight:bold">Telepon</label>
                                <input type="text" style="background-color: #E5E5E5" class="form-control" name="keterangan" id="keterangan">
                            </div>
                        </div>

                        <button type="submit" href="<?= base_url() ?>admin/barang_masuk" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Tambah</button>
                        <a href="<?= base_url() ?>admin/barang_masuk" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Batal</a>
                    </form>

                     <div >
                     

                </div>

                
            </div>
    </div>
