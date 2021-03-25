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
                                            <button type="submit2" class="btn-primary " value="Lanjut" data-target="#sumbitModal" style="margin-top:20px;">Lanjut</button>
                                        </form>
                                    </div>
                            
                            </div>

                        </form>    
                     <div >
                     

                </div>

                
            </div>
    </div>

<script type="text/javascript">
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}


 </script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {

        $('form').on('submit2', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'admin/berita_acara.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
    </script>

            
            <!-- /.container-fluid -->
            <div class="card shadow my-4 mb-4">
                    <div class="card-body">
                        <form  >
                            <div class="row">
                             <div class="col-md-6">
                                        <p style="color:black;">Data Barang</p>
                                        <?php if(isset($_GET['barcode'])) {
                                            $post = count($_GET['barcode']) ;

                                            for($i = 0; $i<$post;$i++){
                                                $barcode = $_GET['barcode'];
                                                // redirect("admin/detail_barang/$barcode[$i]");
                                               ?>
                                           <p><?=$barcode[$i];?></p> 
                                           <?php }  }  ?>
                                   
                                        <hr>
                                        <form  method="post" target="form-pilih">
                                <?php if(isset($_GET['banyak_data'] )) { 
                                    $banyak_data = $_GET['banyak_data'];
                                    if($banyak_data>0){
                                        for ($i=0; $i<$banyak_data; $i++) {
                                            $urutan = 1+$i;
                                            ?>     
                                        <div class="card-body">                                                                             
                                            <div class="form-group" >
                                               
                                                    <p style="color:black;">Data ke- <?php echo $urutan; ?></p>
                                                    <label style="color:#000000; font-weight:bold" onkeyup="showResult(this.value)">Barcode</label>
                                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode[<?php $i?>]" id="barcode" >
                                                    
                                                        <!-- <label style="color:#000000; font-weight:bold">Nama Barang</label>
                                                        <p type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode"></p>
                                                        <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                                                        <label style="color:#000000; font-weight:bold">Merk/Type/Ukuran</label>
                                                        <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                                                        <label style="color:#000000; font-weight:bold">Volume</label>
                                                        <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode">
                                                        <label style="color:#000000; font-weight:bold">Keterangan</label>
                                                        <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode"> -->

                                             </div>
                                        </div>
                                

                                    <?php
                                        } ?>
                                        
                                        <button type="submit2" class="btn-primary " value="Pilih" data-target="#sumbitModal" style="margin-top:20px;">Pilih</button>
                                        </form>  

                                   <?php }else if ($banyak_data<=0) {
                                       
                                        echo '<span style="color:red;text-align:center;">Data barang yang dimasukkan minimal 1 data barang!</span>';
                                    }
                                    } else{
                                        echo '<span style="color:red;text-align:center;">Isikan jumlah barang yang akan didistribusi terlebih dahulu!</span>';
                                    }
                                        ?> 


                                     
                                   
                             </div>
                            
                            </div>
                        </form>
                       
<!-- if -->
                     <div >
                     

                </div>

                
            </div>
    </div>

                <!-- /.container-fluid -->
                <div class="card shadow my-4 mb-4">
                    <div class="card-body">
                    <form action="<?= base_url()?>admin/print" method="POST">
        
                        <div class="col-md-6">
                            <p style="color:black;">Data Penerima</p>
                            <hr>
                            <div class="form-group">
                                <label style="color:#000000; font-weight:bold">Tanggal Berita Acara</label>
                                <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal_BA" id="tanggal_BA" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#000000; font-weight:bold">Nama</label>
                                <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#000000; font-weight:bold">Jabatan</label>
                                <input type="text" style="background-color: #E5E5E5" class="form-control" name="jabatan" id="jabatan" >
                            </div>
                            <div class="form-group">
                                <label style="color:#000000; font-weight:bold">Instansi</label>
                                <input type="text" style="background-color: #E5E5E5" class="form-control" name="instansi" id="instansi">
                            </div>
                            <div class="form-group">
                                <label style="color:#000000; font-weight:bold">NIP</label>
                                <input type="text" style="background-color: #E5E5E5" class="form-control" name="nip" id="nip" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#000000; font-weight:bold">Telepon</label>
                                <input type="text" style="background-color: #E5E5E5" class="form-control" name="telepon" id="telepon">
                            </div>
                        </div>
                        <button type="submit" href="<?= base_url('admin/print'); ?>" type= "submit" class="btn btn-user" style="background-color: #F69133; color: #000000;font-weight:bold; float:right;"><i class="fas fa-print"></i></i> Cetak</button>
                        <a href="<?= base_url() ?>admin/barang_masuk" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Batal</a>
                    </form>

                     <div >
                     

                </div>

                
            </div>
    </div>
