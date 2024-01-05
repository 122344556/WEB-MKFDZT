<?php
include ("koneksi.php");
session_start();

$MK_arab    = "";
$Arti       = "";
$MK_Pnjls   = "";
$sukses = "";
$error = "";

if(isset($_GET['op'])){
    $op=$_GET['op'];
}else {
    $op="";
}

if($op == 'edit'){ //logika untuk edit
    $id     =$_GET['id'];
    $sql1   ="select * from materi where id= '$id'";
    $q1     =mysqli_query($koneksi,$sql1);
    $r1     =mysqli_fetch_array($q1);
    $MK_arab =$r1['MK_arab'];
    $Arti    =$r1['Arti'];
    $MK_Pnjls =$r1['MK_Pnjls'];

    if($MK_arab == ''){
        $error="Data tidak ditemukan";
    }

}

if($op == 'delete'){ //logika untuk delete
    $id         = $_GET['id'];
    $sql1       = "delete from materi where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}

if (isset($_POST["simpan"])) { //logika untuk create
    $MK_arab    = $_POST['MK_arab'];
    $Arti       = $_POST['Arti'];
    $MK_Pnjls   = $_POST['MK_Pnjls'];

    if ($MK_arab && $Arti && $MK_Pnjls) {
        if($op == 'edit'){ //untuk update
            $sql1="update materi set MK_arab='$MK_arab',Arti='$Arti',MK_Pnjls='$MK_Pnjls' where id='$id'";
            $q1=mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses="data berhasil update";
            }else {
                $error= "Data gagal";
            }
        } else { //untuk insert
            $sql1 = "insert into materi(MK_arab,Arti,MK_Pnjls) values ('$MK_arab','$Arti','$MK_Pnjls')";
            $q1 = mysqli_query($koneksi, $sql1);
    
            if ($q1) {
                $sukses = "Berhasil memasukkan data";
            } else {
                $error = "Gagal";
            }
        }
       
    } else {
        $error = "Silakan Masukan semua data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="mx-auto">
        <!-- untuk memasukan data -->
        <div class="card">
            <div class="class-header text-white bg-secondary">
                Create/Edit data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php
                    header("refresh:3;url=crud.php");
                }
                ?>

                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses; ?>
                    </div>
                <?php
                header("refresh:3;url=crud.php");
                }
                ?>

                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="MK_arab" class="col-sm-2 col-form-label">Makhfudzat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MK_arab" name="MK_arab" value="<?php echo $MK_arab ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Arti" class="col-sm-2 col-form-label">Arti</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Arti" name="Arti" value="<?php echo $Arti ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="MK_Pnjls" class="col-sm-2 col-form-label">Penjelasan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MK_Pnjls" name="MK_Pnjls" value="<?php echo $MK_Pnjls ?>">
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan data" class="btn btn-primary" />
                    </div>
                </form>

            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="class-header text-white bg-secondary">
                Data Makhfudzat
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Makhfudzat</th>
                            <th scope="col">Arti</th>
                            <th scope="col">Penjelasan</th>
                            <th scope="col">Aksi</th>
                        </tr>

                    <tbody>
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
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $MK_arab ?></td>
                                <td scope="row"><?php echo $Arti ?></td>
                                <td scope="row"><?php echo $MK_Pnjls ?></td>
                                <td scope="row">
                                    <a href="crud.php?op=edit&id=<?php echo $id ?>"> <button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="crud.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
                <a href="login.php"><button type="button" class="button1">Kembali</button></a>
            </div>
        </div>
    </div>
</body>
</html>