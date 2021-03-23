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
                    <div align="center">
                        <span style="font-family: Arial; font-size:large; ">PEMERINTAH DAERAH ISTIMEWA YOGYAKARTA</span><br>
                        <span style="font-family: Arial; font-size:x-large; "><b>BADAN PENANGGULANGAN BENCANA DAERAH</b></span><br>
                        <span style="font-family: Arial; ">Alamat: Jl. Kenari No.14A, Telp (0274) 555836, Fax (0274) 554206</span><br>
                        <span style="font-family: Arial; ">Website: bpbd.jogjaprov.go.id</span>
                        <!-- <hr style="width: 100%; color: black; height: 1px; background-color:black;" /> -->
                        <span style="font-family: Arial; "><b>___________________________________________________________________________________________________ </b></span><br><br>
                        <span style="font-family: Arial; "><b>BERITA ACARA SERAH TERIMA</b></span><br>
                        <span style="font-family: Arial; "><b>Nomor : _____________ </b></span><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" height="270" valign="top">
                    <div align="justify">
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
                                    echo " " . $angkaBaca[$x];
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

                        <span style="font-family:Arial, Helvetica, sans-serif;">&emsp; Pada hari ini <?php echo $hari. ' ' ?>tanggal <?php echo ucwords(Dibaca($tanggal)). ' '?>bulan <?php echo $bulan. ' ' ?> tahun <?php echo ucwords(Dibaca($tahun))?>, kami yang bertanda tangan dibawah ini :
                        </span><br><br>
                        <table border="0" style="width: 460px;">
                            <tbody>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;">1.</span></td>
                                    <td width="200"><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">Nama</span></td>
                                    <td width="10"><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td width="330"><span style="font-family:Arial, Helvetica, sans-serif;">Drs. BIWARA YUSWANTANA, M.Si.</span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">NIP</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">19630817 198909 1 001</span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">Jabatan</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">Kepala Pelaksana BPBD DIY</span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">Alamat</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">Jl. Kenari No. 14.A, Yogyakarta</span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">Telepon</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">(0274) 555585</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div align="justify">
                            <span style="font-family:Arial, Helvetica, sans-serif; margin-left:50px;">Selanjutnya disebut sebagai <b>PIHAK KESATU</b></span><br><br>
                        </div>
                        <table border="0" style="width: 460px;">
                            <tbody>

                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;">2.</span></td>
                                    <td width="200"><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">Nama</span></td>
                                    <td width="10"><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td width="330"><span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $nama; ?></span></td>
                         
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">NIP</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $nip; ?></span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">Jabatan</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $jabatan; ?></span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">Instansi & Alamat</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $instansi; ?></span></td>
                                </tr>
                                <tr>
                                    <td width="20"><span style="font-family:Arial, Helvetica, sans-serif;"> </span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif; margin-left:30px;">Telepon</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;">:</span></td>
                                    <td><span style="font-family:Arial, Helvetica, sans-serif;"><?php echo $telepon; ?></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div align="justify">
                            <span style="font-family:Arial, Helvetica, sans-serif; margin-left:50px;">Selanjutnya disebut sebagai <b>PIHAK KEDUA</b></span><br><br>
                        </div>
                        <span style="font-family: Arial;">&emsp; Dengan ini <b>PIHAK KESATU</b> telah menyerahkan barang sesuai dengan list dalam tabel di bawah ini kepada <b>PIHAK KEDUA</b>, sebagai bantuan dalam rangka penanganan Covid-19 di DIY.</span>
 
                        <table class="table table-bordered mt-3" style="color: black;">
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
                            <tbody>
                                <tr style="text-align: center;">
                                    <td>1.</td>
                                    <td>Masker kain</td>
                                    <td></td>
                                    <td>12,000 pcs</td>
                                    <td>510000101</td>
                                </tr>
                            </tbody>
                        </table>
 
                        <span style="font-family:Arial, Helvetica, sans-serif;">&emsp; Dengan ditandatanganinya berita acara ini, pengelolaan, penggunaan, dan pendistribusian barang selanjutnya menjadi tanggung jawab <b>PIHAK KEDUA</b>.</span><br>
 
                        <br><span style="font-family:Arial, Helvetica, sans-serif;"> &emsp;Demikian Berita Acara Serah Terima ini dibuat dan ditandatangani kedua belah pihak untuk digunakan sebagaimana mestinya.</span><br><br>
            <tr>
                <td>
                    <div align="center">
                        <span style="font-family:Arial, Helvetica, sans-serif;"> </span><br>
                        <span style="font-family:Arial, Helvetica, sans-serif;">PIHAK KEDUA</span>
                    </div>
                    <div align="center"><br><br>
                        <br><span style="font-family:Arial, Helvetica, sans-serif; text-decoration: underline;">
                        <?php echo $nama; ?>
                        </span><br>
                        <span style="font-family:Arial, Helvetica, sans-serif;">NIP. <?php echo $nip; ?></span>
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
                            $bulan  = $date[1];
                            $tahun  = $date[0];
                            ?>
                            


                        <span style="font-family:Arial, Helvetica, sans-serif;">Yogyakarta, <?php echo $hari . ' ' .  $bulan . ' ' . $tahun ?></span><br>
                        <span style="font-family:Arial, Helvetica, sans-serif;">PIHAK PERTAMA</span>
                    </div>
                    <div align="center"><br><br>
                        <br><span style="font-family:Arial, Helvetica, sans-serif; text-decoration:underline;">Drs. BIWARA YUSWANTAR</span><br>
                        <span style="font-family:Arial, Helvetica, sans-serif;">NIP. 19681009 199603 1 003</span>
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
