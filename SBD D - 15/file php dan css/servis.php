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
                    <h2 align="center">
                        Selamat Datang di Services
                    </h2>
                    <br>
                    <p>Disini anda dapat membuat keluhan atau menyebutkan kesalahan pekerja yang anda sewa agar kami dapat menegurnya atau menghentikan kontak kerja sama </p>
                    <p>Silahkan pilih Clue yang telah kami berikan agar kami dapat memberikan sanksi kepada pekerja tersebut </p>
                    <br>
                    <form action ="c_2.php" method="POST">
                        <div class="kl">
                            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap">
                            <br>
                            <br>
                            <input type="text" name="email" id="email" placeholder="e-mail">
                            <br>
                            <br>
                            <input type="password" name="password" id="password" placeholder="password">
                            <br>
                            <br>
                            <label>Apakah pekerja ada tidak dapat menyelesaikan tugasnya ?</label> <br>
                            <select name="kl_1">
                                <option>--pilih--</option>
                                    <option>Iya,sering</option>
                                    <option>Kadang-kadang</option>
                                    <option>tidak pernah</option>
                            </select>
                            <br>
                            <br>
                            <label>Apakah pekerja bekerjas sesuai kontrak kerja ?</label> <br>
                            <select name="kl_2">
                                <option>--pilih--</option>
                                    <option>Iya</option>
                                    <option>tidak</option>
                            </select>
                            <br>
                            <br>
                            <label>Apakah pekerja sering membantah anda ?</label> <br>
                            <select name="kl_3">
                                <option>--pilih--</option>
                                    <option>Iya,sering</option>
                                    <option>Kadang-kadang</option>
                                    <option>tidak pernah</option>
                            </select>
                            <br>
                            <br>
                            <label>Apakah pekerja selalu bermain hp dan meninggalkan tugasnya ?</label> <br>
                            <select name="kl_4">
                                <option>--pilih--</option>
                                    <option>Iya,sering</option>
                                    <option>Kadang-kadang</option>
                                    <option>tidak pernah</option>
                            </select>
                            <br>
                            <br>
                            <label>Apakah pekerja sering tidur pada saat jam bekerja ?</label> <br>
                            <select name="kl_5">
                                <option>--pilih--</option>
                                    <option>Iya,sering</option>
                                    <option>Kadang-kadang</option>
                                    <option>tidak pernah</option>
                            </select>
                            <br>
                            <br>
                            <label>Jika ada selain silahkan isi dibawah ini</label>
                            <br>
                            <br>
                            <textarea  name="dll" id="dll" placeholder="dan lain-lain"></textarea>
                            <br>
                            <br>
                            <button type="submit" name ="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="kanan">
                    <img src = "img .JPEG" align="center" width="270" height="300">
                </div>
            </div>
        </div>    
    </body>
</html>