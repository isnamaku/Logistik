           <!-- Begin Page Content -->
           <div class="container-fluid">
 
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Tabel Barang Keluar</h1><br>
 <a href="<?= base_url('admin/tambah_barang_keluar'); ?>" class="btn btn-user" style="background-color: #F69133; color: #000000;"><i class="fas fa-plus"></i> Tambah</a>
 <a style="background-color: #F69133; color:#000000;margin-left:10px;" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"><i class="fas fa-filter"></i> Filter</a>
 <a href="<?= base_url('admin/export_distribusi'); ?>" class="btn btn-user" target="_blank" style="background-color: #F69133; color: #000000; margin-left:10px;"><i class="fas fa-file-excel"></i> Excel</a>

<!-- Filter -->
<form action=" <?= base_url() ?>admin/barang_keluar" method="POST">
    <div id="add_data_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div align="left">
                        <h4>Cari Data</h4>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" id="insert_form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mulai</label>
                                    <input type="date" class="form-control" name="tanggal_awal" id="tanggal_awal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hingga</label>
                                    <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir">
                                </div>
                            </div>
                        </div>
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" />
                        <br />
                        <!-- <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Country</label>
                    <div class="col-sm-4">
                        <?php //echo $form_country; 
                        ?>
                    </div>
                      </div>
                     -->
                        <!-- <label for="from">From</label> <input type="text" id="from" name="from"/> <label for="datetimes">to</label> <input type="text" id="to" name="to"/>
                    -->

                        <button class="btn btn-user" type="submit" name="submit" style="background-color: #F69133; color: #000000; float:right;">Cari</button>
                    </form>


                    <!-- Akhir Filter -->
                    <script src="//code.jquery.com/jquery-1.11.3.min.js" type="text/javascript">
                        var dateToday = new Date();
                        var dates = $("#from, #to").datepicker({
                            defaultDate: "+1w",
                            changeMonth: true,
                            numberOfMonths: 3,
                            minDate: dateToday,
                            onSelect: function(selectedDate) {
                                var option = this.id == "from" ? "minDate" : "maxDate",
                                    instance = $(this).data("datepicker"),
                                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                                dates.not(this).datepicker("option", option, date);
                            }
                        });
                    </script>

                    <script>
                        $(function() {
                            $('input[name="datetimes"]').daterangepicker({
                                timePicker: true,
                                startDate: moment().startOf('hour'),
                                endDate: moment().startOf('hour').add(32, 'hour'),
                                locale: {
                                    format: 'M/DD hh:mm A'
                                }
                            });
                        });
                    </script>
                    </div>
</div>
</div>


</div>
</form>
 <!-- DataTales Example -->
 <div class="card shadow my-4 mb-4">
     <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="180%" cellspacing="0">
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
                             <td> <?= $no++; ?></td>                        
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
                                     <a href="<?= base_url() ?>admin/hapus_barang_keluar/<?= $post[$i]['id_distribusi'] ?>" class="btn btn-xs" style="background-color: #FF0000; color: #FFFFFF" onclick="return confirm('Yakin ingin menghapus data distribusi tersebut?')"><span class="far fa-trash-alt"></span></a>
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


