<?php
include("koneksi.php");
session_start();

$MK_arab    = "";
$Arti       = "";
$MK_Pnjls   = "";
$sukses = "";
$error = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Makhfudzat</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="navbar" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <a href="index.php">
            <div class="brand">Makhfudzat</div>
        </a>
        <div class="logo">
            <a href="index.php"><img src="img/profile.png" alt="Logo" /> </a>
        </div>
    </div>

    <div class="slider-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="slider">
            <div class="slide">
                <img src="img/kabah.jpeg" alt="Gambar 1" />
            </div>
            <div class="slide">
                <img src="img/shalat.jpeg" alt="Gambar 2" />
            </div>
            <div class="slide">
                <img src="img/masjid.jpeg" alt="Gambar 3" />
            </div>
        </div>

        <div class="prev" onclick="prevSlide()">&#10094;</div>
        <div class="next" onclick="nextSlide()">&#10095;</div>
    </div>

    <div class="center-text" ">
        <div class=" left-text data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"">
            <h1 class=" tengah">Makhfudzat Pertemanan</h1>
    </div>

    <div class="right-text">
        <p>
            pada pemahaman mendalam atau kebijaksanaan yang terkait dengan hubungan pertemanan.
            Ini bisa mencakup pemahaman tentang nilai-nilai, integritas, dukungan, dan aspek-aspek lain dari hubungan persahabatan.
            Meskipun istilah ini mungkin tidak umum, pemahaman mendalam tentang pertemanan bisa menjadi hal yang berharga.
            Pertemanan yang sehat dapat memberikan dukungan emosional, kebijaksanaan, dan kegembiraan dalam hidup seseorang.
            Apabila istilah ini digunakan dalam suatu konteks tertentu atau dalam komunitas atau tradisi khusus, akan lebih baik
            untuk memahami konteks tersebut agar dapat menginterpretasinya dengan benar.
        </p>

    </div>
    </div>

    <div class="container6">
        <div class="center-text" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="left-text1">
                <img src="img/video.png" alt="video" />
                <h1 class="video">Video Penjelasan</h1>
                <h1 class="video">Tentang Makhfudzat Pertemanan</h1>
            </div>

            <div class="right-text1">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xY0lilH2K4M?si=sDlGWPl6U5Jx34cI" width="500px" height="180px">
                </iframe>
            </div>
        </div>
    </div>

    <div class="tengah" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <h1>Contoh dari Makhfudzat Pertemanan</h1>
    </div>

    <div class="materi" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <?php
        $sql2 = "select * from materi order by id desc";
        $q2 = mysqli_query($koneksi, $sql2);
        $urut = 1;
        while ($r2 = mysqli_fetch_array($q2)) {
            $id     = $r2['id'];
            $MK_arab = $r2['MK_arab'];
            $MK_Pnjls = $r2['MK_Pnjls'];
            $Arti = $r2['Arti'];

        ?>
            <div class="container7">
                <p class="urut"><?php echo $urut++ ?></p>
                <p class="MK"><?php echo $MK_arab ?></p>
                <p class="Arti"><?php echo $Arti ?></p>
                <p class="Pjl"><?php echo $MK_Pnjls ?></p>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="footerContainer" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href="https://wa.me/6281293025367"><i class="fa-brands fa-whatsapp"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">News</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="https://wa.me/6281293025367">Contact Us</a></li>
                <li><a href="">Our Team</a></li>
            </ul>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy; Designed by <span class="designer">DRA</span></p>
        </div>
    </div>

    <script>
        AOS.init();
    </script>

    <script src="script.js"></script>
</body>

</html>