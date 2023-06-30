<?php

include("config.php");

if (isset($_POST['ubah'])) {
    edit($_POST);
}


if( !isset($_GET["id_buku"]) ){
    header('Location: list-buku.php');
}

$id = $_GET["id_buku"];

//buat query
$sql = "SELECT * FROM buku WHERE id_buku = $id";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <header><h3>Edit Buku</h3></header>

    <form action="" method="post">
        <fieldset>
            <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku']?>">
            <p>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" value="<?php echo $buku['judul']; ?>">
            </p>
            <p>
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang" value="<?php echo $buku['pengarang']; ?>">
            </p>
            <p>
                <label for="kategori">Kategori :</label>
                <?php $buku['kategori']; ?>
                <select name="kategori" id="kategori">
                    <option <?php echo ($buku == "pendidikan") ? "selected":"" ?> value="pendidikan" >Pendidikan</option>
                    <option <?php echo ($buku == "teknologi") ? "selected":"" ?> value="teknologi">Teknologi</option>
                    <option <?php echo ($buku == "sosial") ? "selected":"" ?> value="sosial">Sosial</option>
                    <option <?php echo ($buku == "fiksi") ? "selected":"" ?> value="fiksi">Fiksi</option>
                    <option <?php echo ($buku == "komik") ? "selected":"" ?> value="komik">Komik</option>
                </select>
            </p>
            <p>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" value="<?php echo $buku['penerbit']; ?>">
            </p>
            <p>
                <label for="tahun">Tahun :</label>
                <input type="date" name="tahun" id="tahun" value="<?php echo $buku['tahun']; ?>">         
            </p>
            <p>
                <label for="jumlah">Jumlah :</label>
                <input type="number" name="jumlah" id="jumlah" value="<?php echo $buku['jumlah']; ?>">
            </p>
            <p>
                <button type="submit" name="ubah">Ubah</button>
            </p>

            
        </fieldset>
    </form>
</body>
</html>