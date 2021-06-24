<?php
require "konekwar.php";
$query = mysqli_query($conn, "SELECT * FROM kriteria order by  id desc limit 1");
$row_query = mysqli_fetch_array($query);
$query3 = mysqli_query($conn, "SELECT * FROM data_asisten order by  id desc limit 1");
$row_query3 = mysqli_fetch_array($query3);
require "koneksi.php";
$query2 = mysqli_query($con, "SELECT * FROM user order by  id desc limit 1");
$row_query2 = mysqli_fetch_array($query2);

?>
<html>
    <head>
        <title>kontrak</title>
    </head>
    <body>
        
        <table align ="center">
        <tr><td><h2><center>KONTRAK PERJANJIAN KERJA</center><h2></td></tr>
        <tr><td><h2><center>ASISTEN RUMAH TANGGA - PEMBERI KERJA</center><h2></td></tr> 
        
        </table>
        <table>
            <tr>
                <td>yang bertandatangan dibawah ini :</td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:<?php echo $row_query2['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:<?php echo $row_query2['jk']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:<?php echo $row_query2['alamat']; ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>:<?php echo $row_query2['email']; ?></td>
            </tr>
            <tr>
                <td>No.Handphone</td>
                <td>:<?php echo $row_query2['no_telepon']; ?></td>
            </tr>
            <tr><td><br></td></tr>
        </table>
        <table>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Bertindak atas nama dan untuk diri sendiri sebagai Pemberi Kerja, yang selanjutnya disebut sebagai PIHAK PERTAMA.</td>
            </tr>
            
        </table>
        <table>
            <tr>
                <td>yang bertandatangan dibawah ini :</td>
            </tr>				
				<tr>
				<td>Nama</td>
				<td>:<?php echo $row_query3['nama']; ?></td>
				</tr>
				<tr>
				<td>Jenis Kelamin</td>
				<td>:<?php echo $row_query3['jk']; ?></td>
				</tr>
				<tr>
				<td>Alamat</td>
				<td>:<?php echo $row_query3['alamat']; ?></td>
				</tr>
				<tr>
				<td>No.Hp</td>
				<td>:<?php echo $row_query3['hp']; ?></td>
				</tr>
				<br>
								
					
            <tr><td><br></td></tr>
        </table>
        <table>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Bertindak atas nama dan untuk diri sendiri sebagai PRT (Pekerja Rumah Tangga), yang selanjutnya disebut sebagai PIHAK KEDUA</td>
            </tr>
            <tr><td><br></td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini PIHAK PERTAMA dan PIHAK KEDUA bersepakat untuk membuat perjanjian kerja dengan ketentuan sebagai berikut :</td></tr>
        </table>
        <table>
            <tr>
                <br><td><h4><center>Pasal 1</center></h4></td>
            </tr>
            <tr>
                <td>
                <ol>
                    <li>Perjanjian kerja ini berlaku selama <?php echo $row_query['perhari']; ?> Hari, <?php echo $row_query['perminggu']; ?> Minggu, <?php echo $row_query['perbulan']; ?> Bulan. terhitung sejak tanggal ……Bulan..…Tahun….</li>
                    <li>Apabila dalam masa perjanjian kerja PIHAK KEDUA berhenti atas kemauan sendiri, maka:</li>
                    <ol type ="a" >
                        <li>PIHAK KEDUA wajib memberitahukan dahulu paling lambat 2 (dua) minggu sebelum tanggal pengunduran diri</li>
                        <li>PIHAK KEDUA berhak mendapatkan upah berdasarkan perhitungan lamanya waktu bekerja dan biaya transport</li>
                    </ol>
                    <li>Apabila dalam masa perjanjian kerja PIHAK PERTAMA memberhentikan PIHAK KEDUA, PIHAK PERTAMA wajib memberitahukan paling lambat 1 (satu) bulan sebelum tanggal pemberhentian</li>
                    <li>Apabila dalam masa perjanjian kerja PIHAK PERTAMA memberhentikan PIHAK KEDUA(sebelum masa perjanjian kerja berakhir) maka PIHAK PERTAMA wajib memberikan pesangon kepada PIHAK KEDUA.</li>
                </ol>
                </td>
            </tr>
            <tr>
            <br><td><h4><center>Pasal 2</center></h4></td>
            </tr>
            <tr>
                <td>
                <ol>
                    <li>PIHAK KEDUA berkewajiban menjalankan tugas-tugas/pekerjaan sebagaimana terurai dalam lampiran uraian tugas perjanjian ini</li>
                    <li>Waktu Kerja PIHAK KEDUA sebagai berikut :</li>
                    <ol type ="a" >
                        <li>Hari Senin sampai dengan Jum’at dari pukul <?php echo $row_query['start_kerja']; ?>  dengan waktu istirahat selama 1 jam pada pukul <?php echo $row_query['jam_istirahat']; ?></li>
                        
                    </ol>
                </ol>
                </td>
            </tr>
            <tr>
            <br><td><h4><center>Pasal 3</center></h4></td>
            </tr>
            <tr><td><p>&nbsp;&nbsp;&nbsp;&nbsp;Atas kerja yang diberikan oleh PIHAK KEDUA, maka PIHAK PERTAMA berkewajiban
memenuhi hak-hak PIHAK KEDUA sebagai berikut :</p></td></tr>
            <tr><td>
       
                <ol>
                    <li>Upah sebesar Rp. 2.000.000,- perbulan, yang akan dibayarkan setiap tgl….. secara ......
                    <li>Tunjangan Hari Raya (THR) sebesar 1 bulan gaji yang akan dibayarkan sebelum hari raya
                    <li>Waktu istirahat antar jam kerja
                    <li>Upah lembur apabila PIHAK PERTAMA dengan persetujuan PIHAK KEDUA mempekerjakan PIHAK KEDUA melebihi waktu kerja
                    <li>Hari libur mingguan (24 jam dalam seminggu)
                    <li>Hari Libur pada hari Libur Nasional dan Hari PRT Nasional serta Hari PRT Internasional
                    <li>Apabila PIHAK PERTAMA mempekerjakan PIHAK KEDUA pada hari libur, maka PIHAK KEDUA berhak mendapatkan uang pengganti libur sebesar Rp ………………. untuk setiap 1 hari libur.
                    <li>Cuti haid untuk PIHAK KEDUA
                    <li>Mendapatkan cuti tahunan sebanyak sekurang-kurangnya 12 hari setiap tahun
                    <li>Fasilitas makan yang layak 3 x sehari dan tempat tidur/istirahat yang sehat dan aman
                    <li>Jaminan sosial berupa Jaminan Pemeliharaan Kesehatan, Jaminan Keselamatan dan Kecelakaan Kerja, Jaminan Hari Tua, Jaminan Pensiun dan Jaminan Kematian
                    <li>Kebebasan berkumpul, berorganisasi dan berserikat
                    <li>Kenaikan gaji secara periodik setahun sekali minimal sebesar .... dari jumlah gaji apabila Perjanjian Kerja diperpanjang
                </ol>  
            </td></tr> 
            <tr><td><br><h4><center>Pasal 4</center></h4></td></tr>
            <tr><td><p>&nbsp;&nbsp;&nbsp;&nbsp;Pihak PERTAMA berkewajiban memberikan informasi kepada Pihak KEDUA mengenai:</p></td></tr>
            <tr><td> 
                <ol>
                    <li>Siapa yang menjadi anggota rumah tangga dari pemberi kerja dan berwenang memberi tugas pada Pihak KEDUA sebagaimana lampiran Perjanjian Kerja ini;
                    <li>Situasi, kondisi, tata letak perlengkapan-perabot rumah tangga, ruang sanitasi, dapur, alat dan perlengkapan kerja beserta petunjuk penggunaannya, peraturan dalam rumah tangga, lingkungan sekitar rumah tangga, RT, RW, Kelurahan Pihak PERTAMA, dan fasilitas untuk Pihak KEDUA, yang berkaitan dengan tugas Pihak KEDUA dan hubungan kerja antara kedua belah Pihak;
                    <li>Pertolongan Pertama Pada Kecelakaan;
                    <li>Layanan Medis, Kepolisian terdekat untuk Pertolongan Segera;    
                    <li>Daftar Telepon Penting dan tata cara menghubunginya
                </ol>
            </td></tr>
            <tr><td><br><h4><center>Pasal 5</center></h4></td></tr>
            <tr><td><p>&nbsp;&nbsp;&nbsp;&nbsp;PIHAK PERTAMA Dan PIHAK KEDUA berkewajiban saling menghargai dan mentaati
kesepakatan-kesepakatan yang tertuang dalam perjanjian kerj</p></td></tr>
            <tr><td><br><h4><center>Pasal 6</center></h4></td></tr>
            <tr><td><p>&nbsp;&nbsp;&nbsp;&nbsp;Hal-hal yang belum diatur dalam perjanjian kerja ini akan diatur kemudian sesuai dengan
kesepakatan kedua belah pihak</p></td></tr>
            <tr><td><br><h4><center>Pasal 7</center></h4></td></tr>
            <tr><td>
                <ol>
                    <li>Apabila kedua belah pihak mengalami perselisihan, atau tidak memenuhi ketentuanketentuan sebagaimana dimaksud dalam perjanjian kerja ini, maka akan diselesaikan secara musyawarah terlebih dulu</li>
                    <li>Apabila tahap pertama tidak tercapai penyelesaian, maka berlanjut pada tahp kedua mediasi dengan melibatkan pihak Dinas Ketenagakerjaan atau lembaga swadaya masyarakat atau serikat buruh/pekerja di wilayah kerja sebagai mediator.</li>
                    <li>Apabila jalan musyawarah dan mediasi tidak bisa tercapai kesepakatan, maka penyelesaian masalah akan dilakukan melalui jalur hukum.</li>
                </ol>
            </td></tr>
            <tr><td><p>&nbsp;&nbsp;&nbsp;&nbsp;Demikian perjanjian kerja ini dibuat dengan sungguh-sungguh dalam keadaan sadar dan tanpa ada tekanan atau paksaan dari pihak manapun<br><br>
            Disetujui dan ditandatangani,</p></td></tr>
            <tr><td>Di :</td></tr>
            <tr><td>Tanggal :</td></tr>
        </table>
               
        <table>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;</td>
                <td><center>PIHAK PERTAMA</center><br><br><br><br><br><br></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;</td>
                <td><center>PIHAK KEDUA</center><br><br><br><br><br><br></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;</td>
                <td><center>(<?php echo $row_query2['nama_lengkap']; ?>)</center></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;</td>
                <td><center>(<?php echo $row_query3['nama']; ?>)</center></td>
            </tr>
            <tr>
                <td></td>
                <td><center><br>Saksi I</center><br><br><br><br><br><br></td>
                <td></td>
                <td><center><br>Saksi II</center><br><br><br><br><br><br></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;</td>
                <td><center>............................</center></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;&nbsp;&nbsp;&nbsp;&nbsp;&#8287;&#8287;&#8287;</td>
                <td><center>............................</center></td>
            </tr>
        </table>
    </body>
</html>