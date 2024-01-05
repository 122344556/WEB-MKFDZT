<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mkfdzt";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("tidak berhasil terkoneksi");
}

$MK_arab    = "";
$Arti       = "";
$MK_Pnjls   = "";
$sukses = "";
$error = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="class-header text-white bg-secondary">
                Data Makhfudzat
            </div>
        </div>

        <div class="materi">
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
                            <p><?php echo $urut++ ?></p>
                            <p><?php echo $MK_arab ?></p>
                            <p><?php echo $Arti ?></p>
                            <p><?php echo $MK_Pnjls ?></p>
                          </div>
                        <?php
                        }
                        ?>
        </div>
</body>
</html>
