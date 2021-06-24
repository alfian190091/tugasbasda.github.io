<?php
require "konekwar.php";
$jenis_ker = isset($_GET['kerja']) ? $_GET['kerja'] : '';
$jenis_kel = isset($_GET['kelamin']) ? $_GET['kelamin'] : '';
$ast = query("SELECT *FROM data_asisten");
$query  = mysqli_query($conn, "SELECT * FROM jns_kerja ORDER BY id ASC");
$query3 = mysqli_query($conn, "SELECT data_asisten. *, jns_kerja.jenis_kerja 
							   FROM data_asisten, jns_kerja
							   WHERE data_asisten.id_jns_kerja	= jns_kerja.id	
							   AND data_asisten.id_jns_kerja = '$jenis_ker'
							   ORDER BY data_asisten.id ASC");						   

if (isset($_POST ['kirim'])){
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $perhari         = $_POST['perhari'];
    $perminggu       = $_POST['perminggu'];
    $perbulan        = $_POST['perbulan'];
    $start_kerja     = $_POST['start_kerja'];
    $jam_istirahat   = $_POST['jam_istirahat']; 
    $cuti            = $_POST['cuti'];

    $simpan = "INSERT INTO kriteria VALUES ('','$jenis_kelamin','$perhari','$perminggu',
    '$perbulan','$start_kerja','$jam_istirahat','$cuti')";

    $result = mysqli_query ($conn,$simpan);

    if ($result){
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        //window.location='kontrak.php'</script>";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kriteria Asisten</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
		<div class="container">
			
				
				<h3>Jenis Kerja:</h3>
		        	<?php if(mysqli_num_rows($query)) { ?>
						
						<?php while($row_jnsk = mysqli_fetch_array($query)) { ?>
							<input type = "radio" name = "jenis_kerja">
							<a href = "kriteria.php?kerja=<?php echo $row_jnsk["id"]; ?>"><?php echo $row_jnsk["jenis_kerja"]; ?></a><br>
						<?php }?>
						
					<?php }?>
			<form action="" method="POST">
				<h3 align ="left">Kriteria Asisten</h3>
				Silahkan pilih kriteria asisten yang diinginkan!<br><br>
		        Jenis Kelamin :<br>
					<input type="radio" name="jenis_kelamin" value="Laki-Laki" />Laki-Laki &nbsp; &nbsp; &nbsp;
					<input type="radio" name="jenis_kelamin" value="Perempuan" />Perempuan &nbsp; &nbsp; &nbsp;
		        <br><br>
		        Jam Kerja :<br>
				<table align  = "left">
				<tr>
		       	<td>Perhari &nbsp; &nbsp; &nbsp;</td>
				<td>:<input type="text" name="perhari" style="width: 50px;" /> hari</td>
				</tr>
				<tr>
		       	<td>Perminggu </td>
				<td>:<input type="text" name="perminggu" style="width: 50px;"/> minggu</td>
				</tr>
				<tr>
		     	<td>Perbulan </td>
				<td>:<input type="text" name="perbulan" style="width: 50px;"/> bulan</td>
				</tr>
				</table><br><br><br><br><br>
				Start Kerja :
		        <select   name="start_kerja">
		        	<option value="07.00">07.00</option>
		        	<option value="13.00">13.00</option>
		        	<option value="18.00">18.00</option>
		        </select><br><br>
		        Jam Istirahat :<br>
		        <input type="checkbox" name="jam_istirahat" value="12:00-13:00" />12:00-13:00 &nbsp; &nbsp; &nbsp;
		        <input type="checkbox" name="jam_istirahat" value="17:00-18:00" />17:00-18:00<br><br>
		        Cuti Kerja :<br>
		        <input type="checkbox" name="cuti" value="Weekend" />Weekend &nbsp; &nbsp; &nbsp;
		       	<input type="checkbox" name="cuti" value="Hari Besar" />Hari Besar &nbsp; &nbsp; &nbsp;
		        <input type="checkbox" name="cuti" value="Sakit" />Sakit &nbsp; &nbsp; &nbsp;
		        <input type="checkbox" name="cuti" value="Kepentingan Mendesak" />Kepentingan Mendesak<br>
		        <br><br>
		        
		        <button type="submit" name="kirim">Kirim</button>
		        <button type="reset" name="reset">Batal</button><br><br><br>
			</form>
			<h3>Default Gaji :</h3>
			<?php 
			$gaji = "Rp 2.000.000";
			echo $gaji;
			?>
			<h3>Pilih Asisten</h3>
				 	<?php if(mysqli_num_rows($query3)) { ?>
						<?php while($row_ast = mysqli_fetch_array($query3)) { ?>
							<a href = "kontrak.php">Pilih</a>
									
									<table>
									<tr>
									<td>Nama</td>
									<td>:<?php echo $row_ast["nama"]; ?></td>
									</tr>
									<tr>
									<td>Jenis Kelamin</td>
									<td>:<?php echo $row_ast["jk"]; ?></td>
									</tr>
									<tr>
									<td>Alamat</td>
									<td>:<?php echo $row_ast["alamat"]; ?></td>
									</tr>
									<tr>
									<td>NO.Hp</td>
									<td>:<?php echo $row_ast["hp"]; ?></td>
									</tr>
									</table>
									<br>
								
							
						<?php }?>
						
					<?php }?>
					<h3>Pembayaran DP</h3>
					<p>Pembayaran uang muka di awal via Transfer BANK BRI 0672616887 a/n Alfian Nurdiani K<br>
					dengan jumlah nominal pembayaran Rp. 200.000,-</p>
					<form action="" >
						<table>
							<tr>
								<td>Nama    </td>
								<td>:<input type="text"></td>
							</tr>
							<tr>
								<td>E-mail    </td>
								<td>:<input type="text"></td>
							</tr>
							<tr>
								<td>Bukti TF   </td>
								<td>:<input type="file" name = "gambar"></td>
							</tr>
						</table>
            
        			</form>
					
		</div>
	</div>
</body>
</html>