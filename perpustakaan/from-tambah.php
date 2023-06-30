<?php
include('config.php');

if (isset($_POST['tambah'])) {
    if (tambah($_POST, $_FILES['buku']) === true) {
        header('Location: home.php?status=sukses');
    } else {
        header('Location: home.php?status=gagal');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
</head>
<body>
    <header>
        <h3>Form Penambahan Buku</h3>
    </header>

    <form action="" method="post">
        <fieldset>
            <p>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul">
            </p>
            <p>
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang">
            </p>
            <p>
                <label for="kategori">Kategori :</label>
                <select name="kategori" id="kategori">
                    <option value="pendidikan">Pendidikan</option>
                    <option value="teknologi">Teknologi</option>
                    <option value="sosial">Sosial</option>
                    <option value="fiksi">Fiksi</option>
                    <option value="komik">Komik</option>
                </select>
            </p>
            <p>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit">
            </p>
            <p>
                <label for="tahun">Tahun :</label>
                <input type="date" name="tahun" id="tahun">         
            </p>
            <p>
                <label for="jumlah">Jumlah :</label>
                <input type="number" name="jumlah" id="jumlah">
            </p>
            <p>
                <button type="submit" name="tambah">Tambah</button>
            </p>
        </fieldset>
    </form>
</body>
</html>