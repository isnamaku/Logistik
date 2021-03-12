            <!-- Begin Page Content -->
            <div class="container-fluid">
 
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tabel Barang Masuk</h1>
                <div class="table-responsive">
                    <div align="left">
                        <button type="button" style="background-color: #FF8C00; color:#000000;" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Filter</button>
                    </div>
                </div>
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
                                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hingga</label>
                                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <label>Nama Barang</label>
                                    <input type="text" name="nama" id="nama" class="form-control" />
                                    <br />
                                    <label>Sumber Pengirim</label>
                                    <input type="text" name="nama" id="nama" class="form-control" />
                                    <br />
                                    
<label for="from">From</label> <input type="text" id="from" name="datetimes"/> <label for="to">to</label> <input type="text" id="to" name="to"/>
                                    <a href="" class="btn btn-user" style="background-color: #F69133; color: #000000; float:right;">Cari</a>
                                
                                    <script>
           
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
                                </form>
                            </div>
                        </div>
                    </div>
                    

           </div>



                
 
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
                                        <th>Nama Pengirim</th>
                                        <th>Perusahaan Pengirim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($post)) {
                                        foreach ($post as $post) {  ?>
                                            <tr>
                                                <td> <?= $post['no_barang'] ?></td>
                                                <td> <?= $post['tanggal_masuk'] ?></td>
                                                <td> <?= $post['barcode'] ?> </td>
                                                <td> <?= $post['nama_barang'] ?> </td>
                                                <td> <?= $post['stock'] ?> </td>
                                                <td> <?= $post['sumber'] ?></td>
                                                <td> <?= $post['sumber_2'] ?></td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
 
            </div>
            <!-- /.container-fluid -->
 
            </div>
            <!-- End of Main Content -->