<?php    
    session_start() ;
    if (isset($_POST["submit"])){
        $komen1 = $_POST["komen1"];
        $_SESSION["komen1"] = $_POST["komen1"];
            echo "<script>
                    alert('Tanggapan anda terkirim, Terimakasih telah berkunjung! :)');
                </script>";
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="Style_2.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
             <i class="fas fa-align-justify" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>AsistenQ</header>
            <ul>
                <li><a href="home.php"><i class="fas fa-home">Home</i></a></li>
                <li><a href="#"><i class="fas fa-link">Contract page</i></a></li>
                <li><a href="about.php"><i class="far fa-question-circle">About</i></a></li>
                <li><a href="servis.php"><i class="fas fa-sliders-h">Services</i></a></li>
                <li><a href="kontak.php"><i class="fas fa-envelope">Contact</i></a></li>
            </ul>
        </div>
        <div id="wrap">
            <div id="content">
                <div id="kiri">
                    <h1 align="center">AsistenQ</h1>
                    <br>
                    <br>
                    <h3 align="center">  Selamat datang di about </h3>
                    <br>
                    <br>
                    <p align="center">
                            Disini kami bertiga membuat website ini dalam rangka menyelesaikan tugas mata kuliah basis data yang sedang kami ampu pada semester 3 ini 
                        semoga hasil dari website kami ini dapat memuaskan anda sekalian .
                    </p>
                    <br>
                    <p align="center">Kami masih banyak kekurangan jadi mohon maaf kan atas ketidaknyamanannya</p>
                    <p align="center">Jika ada masalah silahkan kontak kami di alamat email kami yang telah kami berikan pada side bar kami atau klik 
                        <a href="kontak.php">disini</a>
                    </p>
                    <br>
                    <h4 align="center"> Terimas kasih kunjungannya </h4>
                    <br>
                    <br>
                    <br>
                    <div id="komen">
                        <h3 align="center">Yuk !! Kirim komentarmu disini :)</h3>
                        <div id="isikomen" align="center" >
                            <form action="" method="post">
                                <textarea  name="komen1" id="komen1" placeholder="Komentar!"></textarea>
                                <br>
                                <input type="submit" name="submit" value="kirim">
                            </form>
                        </div>  
                    </div>
                </div>
                <div id="kanan">
                    <img src = "image.JPEG" align="center" width="270" height="300">
                </div>
            </div>
        </div>    
    </body>
</html>