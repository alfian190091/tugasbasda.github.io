<?php
require "koneksi.php";
if( isset($_POST["login"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($con, "SELECT * FROM user WHERE email = '$email' ");
    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
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
                    <h1>Login</h1>
                    <h3>
                        LOGIN HERE
                    </h3>
                    <?php if ( isset($error)) : ?>
                        <p style = "color:red; font-style: italic;">email/password salah</p>
                    <?php  endif; ?>
                    <from action="" method="post">
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="text" name="email "></td>
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
                                    <button type="submit" name="login">login</button>
                                </td>
                            </tr>
                            <tr><td>Belum punya akun ? <a href="registrasi.php">klik sini</a>
                            </td></tr>
                        </table>
                    </from>
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