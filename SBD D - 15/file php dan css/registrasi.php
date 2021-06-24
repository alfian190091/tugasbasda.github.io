<?php
require "koneksi.php";

if (isset($_POST ['kirim'])){
    $nama_lengkap   = $_POST['nama_lengkap'];
    $jk             = $_POST['jk'];
    $no_telepon     = $_POST['no_telepon'];
    $alamat         = $_POST['alamat'];
    $kabupaten      = $_POST['Kabupaten'];
    $email          = $_POST['email']; 
    $password       = $_POST['password'];

    $simpan = "INSERT INTO user VALUES ('','$nama_lengkap','$jk','$no_telepon',
    '$alamat','$kabupaten','$email','$password')";

    $result = mysqli_query ($con,$simpan);

    if ($result){
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        //window.location='kontrak.php'</script>";
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Style_1.css">
    </head>
    <body>
        <div class="leftcolumn">
            <div class="wrap">
                <div class="container">
                    <h1>Register</h1>
                    <h3>
                        Sudah memiliki akun ? <a href="login.php">klik sini</a>
                    </h3>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><input type="text" name="nama_lengkap"></td>
                            </tr>
                            <tr>
                                <td>Jenis kelamin</td>
                                <td>:</td>
                                <td>
                                    <input type="radio" name="jk" value="laki-laki">Laki-laki
                                    <input type="radio" name="jk" value="perempuan">Perempuan
                                </td>
                            </tr>
                            <tr>
                                <td>No telepon </td>
                                <td>:</td>
                                <td><input type="text" name="no_telepon"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><textarea name="alamat"></textarea></td>
                            </tr>
                            <tr>
                                <td>Asal Kabupaten</td>
                                <td>:</td>
                                <td>
                                    <select name="Kabupaten">
                                        <option>--pilih Asal Kabupaten--</option>
                                        <option>Bangkalan</option>
                                        <option>Sampang</option>
                                        <option>Pamekasan </option>
                                        <option>Sumenep</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <td>Passoword</td>
                                <td>:</td>
                                <td><input type="password" name="password"></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="submit" name ="kirim">Kirim</button>
                                    <button type="reset" name ="batal">Batal</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
            <h2>AsistenQ</h2>
            <img src = "image.JPEG" align="center" width="270" height="300"> 
            </div>    
        </div>
    </body>
</html>