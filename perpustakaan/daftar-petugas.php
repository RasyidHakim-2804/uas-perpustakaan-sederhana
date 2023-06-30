<?php

include("config.php");

// cek apakah tombol sudah diklik
if (isset($_POST["petugas"])) {
    
    //ambil data dari form
    $nama = ($_POST["nama"]);
    $noTlp = ($_POST["no_tlp"]);
    $username = ($_POST["username"]);
    $sandi = ($_POST["sandi"]);

    // buat query sql
    $sql = "INSERT INTO petugas (nama, no_tlp, username, sandi) 
    VALUE
     ('$nama', '$noTlp', '$username', '$sandi')";
    $query = query($sql);

    // apakah query berhasil?
    if ($query) {
        header('Location: login.php?status=sukses');
    } else {
        header('Location: form-petugas.php?status=daftar-gagal');
    }


} else {
    die("Akses gagal...");
}

?>