<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Petugas</title>
    <style>
         body{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<header>
        <h3>Form Daftar Petugas</h3>
    </header>

    <form action="daftar-petugas.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </p>
            <p>
                <label for="no_tlp">No Telepon :</label>
                <input type="text" name="no_tlp" id="no_tlp">
            </p>
            <p>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label for="password">Password :</label>
                <input type="text" name="sandi" id="sandi">
            </p>
            <p>
                <button type="submit" name="petugas">Tambah</button>
            </p>
        </fieldset>
    </form>
    <?php
    //apakah variabel status sudah dibuat?
    if (isset($_GET['status'])): 
        ?>
        <p>
            <?php
            //jika sudah lakukan ini
            if ($_GET['status'] == 'daftar-gagal') {
                echo "<h3>Mohon maaf proses Registrasi anda GAGAL</h3>";     //tampilan
            }
            ?>
        </p>
        <?php endif; ?>
</body>
</html>