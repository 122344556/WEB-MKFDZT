<?php 
include ("koneksi.php");
session_start();

if(isset($_POST['sub'])){

    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $query=mysqli_query($koneksi,"select * from login where name ='$name'");
    $no=mysqli_num_rows($query);

    if($no> 0){
        $data=mysqli_fetch_assoc($query);
        
        if($data['pass']==$pass){
            echo 'login succesfull';

            header ("Location:crud.php");
            exit();
        } else {
            echo 'wrong password';
        }
    }

    else {
        echo 'username tidak ada';
    }
    header("refresh:3;url=login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form Validation</title>
    <style>
        .container {
            width: 350px;
            height: 400px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            border: 2px solid #131212;
            border-radius: 10px;
            margin-top: 100px;
        }

        .form-group {
            text-align: left;
            margin: 15px 0;
        }

        input[type="text"],select {
            width: 95%;
            padding: 5px;
        }

        img{
            width:80px;
            height:80px;
        }

        h1{
            text-align: center;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
        <h2>Form Login Web Admin</h2>
        <img src="img/login.png" alt="key"/>

        <div class="form-group">
                <h3><label for="Username">Username</label></h3>
            </div>
         <div class="form-group">
                <input type="text" id="username" name="name" style="border-radius: 2px;" placeholder="Masukkan Username">
        </div>

        <div class="form-group">
                <h3><label for="password">Password</label></h3>
            </div>
         <div class="form-group">
                <input type="password" id="password" name="pass" style="width:335px; height:25px; border-radius:2px; " placeholder="Masukkan Password">
        </div>

        <input type="submit" name="sub" value="login" style="width:100px; height:20px; font-weight:bold; border-radius:8px; " >

        </form>
    </div>
</body>
</html>