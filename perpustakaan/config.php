<?php
//membuat variabel database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "perpustakaan";

//menggunakan mysqli
$db = mysqli_connect($server, $user, $password, $nama_database);

//jika gagal menghubungkan, maka halaman index akan menampilkan pesan eror
if ( !$db ) {
    die("Gagal menghubungkan ke database : ". mysqli_connect_error());
}

/*
function function yang akan digunakan
ada disini
biar lebih rapi dan tidak pusing
*/

//function query, untuk menjalankan syntax SQL
function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    //mengecek adanya eror pada syntax
    if(!$result){
        echo mysqli_error($db);
    } else {
        return $result;
    }
}

//function assoc, untuk menampilkan data dari tabel
function assoc($tabel){
    $data = [];
    while ($row = mysqli_fetch_assoc($tabel)) {
        $data[] = $row;
    }
    return $data;
} 

//fungsi tambah data
function tambah($data, $buku){
    //ambil data dari form
    
    $judul = strtolower($data["judul"]);
    $pengarang = strtolower($data["pengarang"]);
    $kategori = strtolower($data["kategori"]);
    $penerbit = strtolower($data["penerbit"]);
    $tahun = $data["tahun"];
    $jumlah = $data["jumlah"];


    // buat query sql
    $sql = "INSERT INTO buku (judul, pengarang, kategori, penerbit, tahun, jumlah) 
    VALUE
     ('$judul', '$pengarang', '$kategori', '$penerbit', '$tahun', '$jumlah')";
    $query = query($sql);

    // apakah query berhasil?
    if ($query) {
        return true;
    } else {
        return false;
    }

}

//fungsi mengubah data buku yang ada
function edit($dataBaru){
    
    //ambil data dari form
    $id = $dataBaru["id_buku"];
    $judul = strtolower($dataBaru["judul"]);
    $pengarang = strtolower($dataBaru["pengarang"]);
    $kategori = strtolower($dataBaru["kategori"]);
    $penerbit = strtolower($dataBaru["penerbit"]);
    $tahun = $dataBaru["tahun"];
    $jumlah = $dataBaru["jumlah"];

    // buat query sql
    $sql = "UPDATE buku SET 
    judul='$judul', 
    pengarang='$pengarang', 
    kategori='$kategori', 
    penerbit='$penerbit', 
    tahun='$tahun', 
    jumlah='$jumlah' WHERE id_buku=$id";
    
    $query = query($sql);

    // apakah query berhasil?
    if ($query) {
        header('Location: list-buku.php?');
    } else {
        die("Gagal mengubah");
    }
}

?>