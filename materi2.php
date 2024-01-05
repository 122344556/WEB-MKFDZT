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
    <!-- <link rel="stylesheet" href="stylee.css" /> -->
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
            <h1 class=" tengah">Makhfudzat Hikmah</h1>
    </div>

    <div class="right-text">
        <p>
            "Makhfudzat hikmah" adalah istilah yang berasal dari bahasa Arab. Secara harfiah, "makhfudzat"
            dapat diartikan sebagai "hikmah" atau "kebijaksanaan." Jadi, "makhfudzat hikmah" dapat diterjemahkan
            sebagai "hikmah yang tersembunyi" atau "kebijaksanaan yang tersembunyi." Istilah ini sering digunakan dalam
            konteks keagamaan atau filosofis untuk merujuk pada pemahaman mendalam atau makna yang tersembunyi di balik
            suatu peristiwa atau ajaran. Dalam banyak tradisi keagamaan atau spiritual, konsep ini dapat terkait
            dengan pemahaman yang lebih dalam tentang kebijaksanaan Ilahi atau makna yang terkandung dalam ajaran suci.
            Penting untuk diingat bahwa interpretasi dan penggunaan istilah ini dapat bervariasi tergantung pada konteks
            budaya, agama, atau filosofi tertentu.
        </p>

    </div>
    </div>

    <div class="container6">
        <div class="center-text" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="left-text1">
                <img src="img/video.png" alt="video" />
                <h1 class="video">Video Penjelasan</h1>
                <h1 class="video">Tentang Makhfudzat Hikmah</h1>
            </div>

            <div class="right-text1">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9MpPEys3c3g?si=wtB9-CXOEARsF-Bg" width="500px" height="180px">
                </iframe>
            </div>
        </div>
    </div>

    <div class="tengah" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <h1>Contoh dari Makhfudzat Hikmah</h1>
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