
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Berita Acara</h1>
            
            <!-- /.container-fluid -->
            <div class="card shadow my-4 mb-4">
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <input type="text" id="input-barcode" class="form-group">  
                            <button class="btn-primary" type="button" id="submit-barcode">Pilih</button>
                            </div>
                        </div> 
            <form action="<?= base_url()?>admin/a_print" method="POST">
                        <div class="row" id="add-item-barcode">
                        </div>
                </div>
            </div>

                <!-- /.container-fluid -->
                <div class="card shadow my-4 mb-4">
                    <div class="card-body">
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
                                <input type="text" style="background-color: #E5E5E5" class="form-control" name="nip" id="nip">
                            </div>
                            <div class="form-group">
                                <label style="color:#000000; font-weight:bold">Telepon</label>
                                <input type="text" style="background-color: #E5E5E5" class="form-control" name="telepon" id="telepon">
                            </div>
                        </div>
                        <button type="submit" href="<?= base_url('admin/print'); ?>" type= "submit" class="btn btn-user" style="background-color: #F69133; color: #000000;font-weight:bold; float:right;"><i class="fas fa-print"></i></i> Cetak</button>
                        <a href="<?= base_url() ?>admin/barang_masuk" class="btn mr-3" style="background-color: #F69133; color:#000000; font-weight:bold; float:right;">Batal</a>
                    </form>

                     <div >
                     


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
                                redirect("admin/detail_barang/$barcode[$i]");
                               ?>
                           <p><?php echo $barcode[$i]; ?></p> 
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
                                    <label style="color:#000000; font-weight:bold" onkeyup="showResult(this.value)" >Barcode</label>
                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode[<?php $i?>]" id="barcode">
                                    
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
                        
                        <button type="submit" class="btn-primary" >Pilih</button>
                        </form>  

                   <?php }else if ($banyak_data<=0) {
                       
                        echo '<span style="color:red;text-align:center;">Data barang yang dimasukkan minimal 1 data barang!</span>';
                    }
                    }  else if(isset($_GET['barcode']) && !isset($_GET['banyak_data'] ) ){
                        echo '<span style="color:red;text-align:center;">Isikan jumlah barang yang akan didistribusi terlebih dahulu!</span>';
                    } 
                        ?> 

        $('#submit-barcode').on('click', function(e) {
            let barcode = $('#input-barcode').val();
            if (barcode == '') {
                alert('isikan barcode')
            }else{
                $.ajax({
                    'type': 'POST',
                    'url': "<?=base_url('admin/getDataBarcode')?>",
                    'data':{'barcode':barcode},
                    'dataType':'json',
                    'success': function(response) {
                        if (response[0] == null) {
                            alert('data tidak ditemukan')
                        }else{
                            $('#input-barcode').val('')
                            $('#add-item-barcode').append(`
                                <div class="col-md-6">
                                <div class="card" style="padding:10px;">                                                                             
                            <div class="form-group" >
                                 
                                    <table>
                                    <tr>
                                    <input type="hidden" name="barcode[]" value="${response[0].barcode}">
                                        <td>Barcode</td>
                                        <td>&nbsp:&nbsp</td>

                                    </tr>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>&nbsp:&nbsp</td>

                                        <td>${response[0].nama_barang}</td>


                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>&nbsp:&nbsp</td>

                                        <td>${response[0].stock} ${response[0].satuan}</td>

                                    </tr>
                                    <tr>
                                        <td>Stock Keluar</td>
                                        <td>&nbsp:&nbsp</td>

                                        <td><input type="text" name="jumlah_keluar[]" > ${response[0].satuan} </td>

                                    </tr>
                                    <tr>
                                    <td>&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>Merk/Type/Ukuran</td>
                                        <td>&nbsp:&nbsp</td>
                                        <td><input type="text" name="merk[]" ></td>

                                    </tr>
                                    </table>
                    
                         </div>
     <div >
     </div>
     
                            `)
                        }
                        $('#input-barcode').val('')
                    }
                })
            }
        })

      });
    </script>

                                        <td><input type="text" name="stock_keluar" id="stock_keluar"> <?= $post['satuan'] ?> </td>
                                    </tr>
                                    </table>
                                    <!-- <label style="color:#000000; font-weight:bold" onkeyup="showResult(this.value)" >Barcode</label>
                                    <input type="text" style="background-color: white" class="form-control" name=" <?= $post['barcode'] ?> "  value="<?= $post['barcode'] ?>" id="barcode" readonly>
                             </div>
                             <div class="form-group" >
                                    <label style="color:#000000; font-weight:bold" onkeyup="showResult(this.value)" >Nama Barang</label>
                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name=" <?= $post['nama_barang'] ?>"  value="<?= $post['nama_barang'] ?>" id="barcode" readonly>
                             </div>
                             <div class="form-group" >
                                    <label style="color:#000000; font-weight:bold" onkeyup="showResult(this.value)" >Stock</label>
                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name=" <?= $post['stock'] ?> "  value="<?= $post['stock'] ?>" id="barcode" readonly>
                             </div>
                             <div class="form-group" >
                                    <label style="color:#000000; font-weight:bold" onkeyup="showResult(this.value)" >Stock Keluar</label>
                                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="stock_keluar"  value="" id="barcode" >
                             </div> -->
                         </div>
        <!-- <form>
        <label style="color:#000000; font-weight:bold">Barcode</label>
        <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode" value="<?= $post['barcode'] ?>">
        </form>    -->
        <?php } }?>
     <div >
     
     </form>
     </div>

</div>



</div>

<!-- /.container-fluid -->
<div class="card shadow my-4 mb-4">
    <div class="card-body">
  
    <form action="<?= base_url() ?>admin/print" method="POST">
        <div class="col-md-6">
            <p style="color:black;">Data Penerima</p>
            <hr>
            <div class="form-group">
                <label style="color:#000000; font-weight:bold">Tanggal Berita Acara</label>
                <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal_BA" id="tanggal_BA">
            </div>
            <div class="form-group">
                <label style="color:#000000; font-weight:bold">Nama</label>
                <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label style="color:#000000; font-weight:bold">Jabatan</label>
                <input type="text" style="background-color: #E5E5E5" class="form-control" name="jabatan" id="jabatan">
            </div>
            <div class="form-group">
                <label style="color:#000000; font-weight:bold">Instansi</label>
                <input type="text" style="background-color: #E5E5E5" class="form-control" name="instansi" id="instansi">
            </div>
            <div class="form-group">
                <label style="color:#000000; font-weight:bold">NIP</label>
                <input type="text" style="background-color: #E5E5E5" class="form-control" name="nip" id="nip">
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

