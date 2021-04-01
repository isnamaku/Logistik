<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
 
<body>
<table align="center" border="0" cellpadding="1" style="width: 750px;">
        <tbody>
            <tr>
                <td colspan="3">
                    <table border="0">
                        <tr>
                            <td><span><img src="<?= base_url() ?>/assets/img/kop.png" alt="Italian Trulli"></span></td>
                        </tr>
                    </table>
                    
                    <div align="center">
                        <span style="font-family: Arial; font-size:22px;"><b>BERITA ACARA SERAH TERIMA</b></span><br>
                        <span style="font-family: Arial; font-size:20px;"><b>Nomor : _______________ </b></span><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" height="270" valign="top">
                    <div align="justify" style="margin-left:160px; margin-right:120px;">
                        <br>
                    <!-- Konversi Hari Indonesia -->
                        <?php 
                        $hari =  date('D');
                        if ($hari == "Mon"){
                            $hari = "Senin";
                        } 
                        else if ($hari == "Tue"){
                            $hari = "Selasa";
                        } 
                        else if ($hari == "Wed"){
                            $hari = "Rabu";
                        } 
                        else if ($hari == "Thu"){
                            $hari = "Kamis";
                        } 
                        else if ($hari == "Fri"){
                            $hari = "Jum'at";
                        } 
                        else if ($hari == "Sat"){
                            $hari = "Sabtu";
                        } 
                        else if ($hari == "Sun"){
                            $hari = "Minggu";
                        } 

                        $date = $tanggal_BA ;
                        $date = explode('-', $date);
                        $tanggal = $date[2];
                        $bulan  = $date[1];
                        $tahun  = $date[0];

                        // Koversi Tanggal dan Tahun
                        function Dibaca($x) {
                            $angkaBaca = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
                            switch ($x) {
                                case ($x < 12):
                                    if($x == '01' || $x=='1' ){
                                        echo 'Satu';
                                    }
                                    else if($x == '02' || $x=='2'){
                                        echo 'Dua';
                                    }
                                    else if($x == '03' || $x=='3'){
                                        echo 'Tiga';
                                    }
                                    else if($x == '04' || $x =='5'){
                                        echo 'Empat';
                                    }
                                    else if($x == '05' || $x == '6'){
                                        echo 'Lima';
                                    }
                                    else if($x == '06' || $x == '6'){
                                        echo 'Enam';
                                    }
                                    else if($x == '07' || $x == '7'){
                                        echo 'Tujuh';
                                    }
                                    else if($x == '08' || $x == '8'){
                                        echo 'Delapan';
                                    }
                                    else if($x == '09'|| $x == '9'){
                                        echo 'Agustus';
                                    }
                                    else if($x == '09' || $x == '9'){
                                        echo 'Sembilan';
                                    }
                                    else if($x == '10' ){
                                        echo 'Sepuluh';
                                    }
                                    else if($x == '11'){
                                        echo 'Sebelas';
                                    }else{
                                        echo " " . $angkaBaca[$x];
                                    }
                                    break;
                                case ($x < 20):
                                    echo $result = Dibaca($x - 10) . " belas";
                                    break;
                                case ($x < 100):
                                    echo Dibaca($x / 10);
                                    echo " Puluh ";
                                    echo Dibaca($x % 10);
                                    break;
                                case ($x < 200):
                                    echo " Seratus ";
                                    echo Dibaca($x - 100);
                                    break;
                                case ($x < 1000):
                                    echo Dibaca($x / 100);
                                    echo " Ratus";
                                    echo Dibaca($x % 100);
                                    break;
                                case ($x < 2000):
                                    echo " Seribu ";
                                    echo Dibaca($x - 1000);
                                    break;
                                case ($x < 1000000):
                                    echo Dibaca($x / 1000);
                                    echo " Ribu ";
                                    echo Dibaca($x % 1000);
                                    break;
                                case ($x < 1000000000):
                                    echo Dibaca($x / 1000000);
                                    echo " Juta ";
                                    echo Dibaca($x % 1000000);
                                    break;
                            }
                        }



                         // Koversi Bulan
                        
                        if($bulan == '01'){
                            $bulan='Januari';
                        }
                        else if($bulan == '02'){
                            $bulan='Februari';
                        }
                        else if($bulan == '03'){
                            $bulan='Maret';
                        }
                        else if($bulan == '04'){
                            $bulan='April';
                        }
                        else if($bulan == '05'){
                            $bulan='Mei';
                        }
                        else if($bulan == '06'){
                            $bulan='Juni';
                        }
                        else if($bulan == '07'){
                            $bulan='Juli';
                        }
                        else if($bulan == '08'){
                            $bulan='Agustus';
                        }
                        else if($bulan == '08'){
                            $bulan='Agustus';
                        }
                        else if($bulan == '09'){
                            $bulan='September';
                        }
                        else if($bulan == '10'){
                            $bulan='Oktober';
                        }
                        else if($bulan == '11'){
                            $bulan='November';
                        }
                        else if($bulan == '12'){
                            $bulan='Desember';
                        }
                        // if ($hari) {;
                        //     echo ucwords(Dibaca($hari2));
                        // }
                       
                        ?> 

                        <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">Pada hari ini <?php echo $hari. ' ' ?>tanggal <?php echo ucwords(Dibaca($tanggal)). ' '?>bulan <?php echo $bulan. ' ' ?> tahun <?php echo ucwords(Dibaca($tahun))?>, kami yang bertanda tangan dibawah ini :
                        </span><br><br>
                        <table border="0" style="width: 650px;">
                            <tbody>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">1.</span></td>
                                    <td width="250"><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">Nama</span></td>
                                    <td width="10"><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td width="400"><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">Drs. BIWARA YUSWANTANA, M.Si.</span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">NIP</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">19630817 198909 1 001</span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">Jabatan</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">Kepala Pelaksana BPBD DIY</span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;font-size:22px;">Alamat</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">Jl. Kenari No. 14.A, Yogyakarta</span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">Telepon</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">(0274) 555585</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div align="justify">
                            <span style="font-family:Arial, Helvetica, sans-serif; margin-left:50px; font-size:22px;">Selanjutnya disebut sebagai <b>PIHAK KESATU</b></span><br><br>
                        </div>
                        <table border="0" style="width: 650px;">
                            <tbody>

                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">2.</span></td>
                                    <td width="250"><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">Nama</span></td>
                                    <td width="10"><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td width="400"><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;"><?php echo $nama; ?></span></td>
                         
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">NIP</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;"><?php echo $nip; ?></span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif; "> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">Jabatan</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;"><?php echo $jabatan; ?></span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">Instansi & Alamat</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;"><?php echo $instansi; ?></span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px; font-size:22px;">Telepon</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;"><?php echo $telepon; ?></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div align="justify">
                            <span style="font-family:Arial, Helvetica, sans-serif; margin-left:50px; font-size:22px;">Selanjutnya disebut sebagai <b>PIHAK KEDUA</b></span><br><br>
                        </div>
                        <span style="font-family: Arial; font-size:22px;">&emsp; Dengan ini <b>PIHAK KESATU</b> telah menyerahkan barang sesuai dengan list dalam tabel di bawah ini kepada <b>PIHAK KEDUA</b>, sebagai bantuan dalam rangka penanganan bencana di DIY.</span>
 
                        <table class="table table-bordered mt-3" style="color: black; font-size:22px;">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;">No</th>
                                    <th scope="col" style="text-align: center;">Nama Barang</th>
                                    <th scope="col" style="text-align: center;">Merk/Type/Ukuran</th>
                                    <th scope="col" style="text-align: center;">Volume</th>
                                    <th scope="col" style="text-align: center;">Keterangan</th>
                                </tr>
                                <tr>
                                    <th scope="col" style="text-align: center;">1</th>
                                    <th scope="col" style="text-align: center;">2</th>
                                    <th scope="col" style="text-align: center;">3</th>
                                    <th scope="col" style="text-align: center;">4</th>
                                    <th scope="col" style="text-align: center;">5</th>
                                </tr>
                            </thead>
                            <tbody style="font-family:Arial, Helvetica, sans-serif; font-size:22px; text-align:center;" id='#add-item-barcode'>

                                <?php 
                                $count = count($barcode);
                          
                                    foreach($barcode as $i=>$b): ?>
                                    <tr>
                                        <td><?= $i+1 ?></td>
                                        
                                        <td><?php echo $b[0]['nama_barang'] ?></td>
                                        <td></td>
                                        <td><?php echo $stock_keluar[$i] ?> <?php echo $b[0]['satuan'] ?></td>
                                        <td><?php echo $b[0]['barcode'] ?></td>
                                        
                                        </tr>
                                    <?php endforeach ?>

                          
                          
                            </tbody>
                        </table>
 
                        <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">&emsp; Dengan ditandatanganinya berita acara ini, pengelolaan, penggunaan, dan pendistribusian barang selanjutnya menjadi tanggung jawab <b>PIHAK KEDUA</b>.</span><br>
 
                        <br><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;"> &emsp;Demikian Berita Acara Serah Terima ini dibuat dan ditandatangani kedua belah pihak untuk digunakan sebagaimana mestinya.</span><br><br>
            <tr>
                <td>
                    <div align="center">
                        <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;"> </span><br>
                        <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">PIHAK KEDUA</span>
                    </div>
                    <div align="center"><br><br>
                        <br><span style="font-family:Arial, Helvetica, sans-serif; text-decoration: underline; font-size:22px;">
                        <?php echo $nama; ?>
                        </span><br>
                        <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">NIP. <?php echo $nip; ?></span>
                    </div>
                </td>
                <td>
                <td valign="top">
                    <div align="center">
                            <!-- explode date -->
                            <?php 
                            $date = $tanggal_BA ;
                            $date = explode('-', $date);
                            $hari = $date[2];
                            $tahun  = $date[0];
                            ?>
                            


                        <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">Yogyakarta, <?php echo $hari . ' ' .  $bulan . ' ' . $tahun ?></span><br>
                        <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">PIHAK PERTAMA</span>
                    </div>
                    <div align="center"><br><br>
                        <br><span style="font-family:Arial, Helvetica, sans-serif; text-decoration:underline; font-size:22px;">Drs. BIWARA YUSWANTAR</span><br>
                        <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px;">NIP. 19681009 199603 1 003</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
 
</html>
