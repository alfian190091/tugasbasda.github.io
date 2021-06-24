<?php
require "koneksi.php";

if (isset($_POST ['submit'])){
    $nama           = $_POST['nama'];
    $email          = $_POST ['email']; 
    $password       = $_POST ['password'];
    $kl_1           = $_POST['kl_1'];
    $kl_2           = $_POST['kl_2'];
    $kl_3           = $_POST['kl_3'];
    $kl_4           = $_POST['kl_4'];
    $kl_5           = $_POST['kl_5'];
    $dll            = $_POST['dll'];


    $simpan = "INSERT INTO kesalahan (nama,email,passoword,kl_1,kl_2,kl_3,kl_4,kl_5,dll)
        VALUES ('$nama','$email','$password','$kl_1','$kl_2','$kl_3','$kl_4','$kl_5','$dll')";

    $result = mysqli_query ($con,$simpan);

    if ($result){
        echo "<script>alert('terimakasih, akan kami proses segera');window.location='home.php'</script>";
    }

}
?>