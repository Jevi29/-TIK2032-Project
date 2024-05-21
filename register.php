<?php
    include ("database.php");

    if (isset($_POST["register"])) {
        $user = $_POST["username"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
      

        $sql = "INSERT INTO tabel_php (Nama, email, Password) Values 
        ('$user', '$email', '$pass')";
    

        if($db->query($sql)){
            echo"data masuk";
        }else{
            echo "gagal";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar akun</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="email" placeholder="email" name="email"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">daftar</button>
    </form>
</body>
</html>