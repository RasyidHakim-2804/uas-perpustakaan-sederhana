<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN</title>
    <style>
        body{
            font-family: sans-serif;
        }
        li{
            list-style-type: none;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Perpustakaan</h1>
        <p>"Buku adalah jendela dunia"</p>
    </header>
    <h3>Menu</h3>
    <nav>
        <ul>
            <li><a href="from-tambah.php">Tambah buku</a></li>
            <li><a href="list-buku.php">List buku</a></li>
            <li><a href="index.php">Ganti Akun</a></li>
        </ul>
    </nav>
    <?php
    //apakah variabel status sudah dibuat?
    if (isset($_GET['status'])): 
    ?>
    <p>
        <?php
        //jika sudah lakukan ini
        switch ($_GET['status']) {
            case 'sukses':
                echo "Penambahan buku baru BERHASIL!!";
                break;
            case 'gagal' :
                echo "Penambahan buku baru GAGAL!!!";
                break;
        }
        
        ?>
    </p>
    <?php endif; //ini endif yang atas ?> 
</body>
</html>