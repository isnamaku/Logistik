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
                                        <td>${response[0].barcode}</td>
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