<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <p>
            <label for="username">Username : </label>
            <input type="text" autocomplete="off" name="username" id="username">
        </p>
        <p>
            <label for="sandi">Password : </label>
            <input type="password" name="sandi" id="sandi">
        </p>
        <button type="submit" name="login">Login</button>
    </form>
    <p>Belum punya akun?</p>
    <p>Dftar disini <a href="form-petugas.php">Daftar</a></p>
    <?php
    if(isset($_GET['status'])):
    ?>
    <p>
        <?php
        if($_GET['status']="sukses") {
            echo "<h2>Silahkan Login ulang</h2>";
        }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>

<?php
//prosesnya
    
    if(isset($_POST["login"])){

        //ambil data dari form
        $username = $_POST["username"];
        $sandi = $_POST["sandi"];

        //buat query sql
        $sql = "SELECT * FROM petugas WHERE username='$username' AND sandi='$sandi' ";
        $query = query($sql);

        //apakah akun ditemukan?
        if(mysqli_num_rows($query) == 1){
            header('Location: home.php');
        } else {?>
            <script>
                alert("Mohon maaf akun yang anda masukkan tidak ada!!!!");
            </script>
        <?php }


    }

    ?>