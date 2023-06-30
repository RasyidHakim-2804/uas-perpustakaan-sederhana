<?php

include("config.php");

if( isset($_GET["id_buku"]) ){

    //membuat variabel id
    $id = $_GET['id_buku'];

    //query hapus
    $sql = "DELETE FROM buku WHERE id_buku=$id";
    $query = query($sql);

    //pemeriksaan
    if($query){
        header("Location: list-buku.php");
    } else {
        die("Gagal menghapus!!");
    }

} else {
    die("Harus lewat halaman <a href='list-buku.php'>List Buku<a/>");
}


?>