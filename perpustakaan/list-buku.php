<?php   include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
    <style>
        body{
            font-family: sans-serif;
        }
        table, th, td{
            border: 1px solid;
            border-collapse: collapse;
            padding: 10px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h3>Buku yang tersedia</h3>
    </header>

    <nav>
        <a href="from-tambah.php">Tambah buku [+]</a>
    </nav> <br>

    <table>
        <thead>
            <tr>
                <th>id_buku</th>
                <th>Judul buku</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Tahun trbit</th>
                <th>Jumlah tersedia</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = query("SELECT * FROM buku");
            $data = assoc($query);

            //mengeluarkan isi tabel
            foreach($data as $buku) : 
            ?>
                <tr>
                    <td><?php echo $buku['id_buku'] ?></td>
                    <td><?php echo $buku['judul'] ?></td>
                    <td><?php echo $buku['pengarang'] ?></td>
                    <td><?php echo $buku['kategori'] ?></td>
                    <td><?php echo $buku['penerbit'] ?></td>
                    <td><?php echo $buku['tahun'] ?></td>
                    <td><?php echo $buku['jumlah'] ?></td>
                    <td>
                        <?php 
                        echo "<a href='from-edit.php?id_buku=".$buku["id_buku"]."' >Edit</a> |";
                        echo "<a href='hapus.php?id_buku=".$buku["id_buku"]."'> Hapus</a>";
                        ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Total judul buku : <?php echo  mysqli_num_rows($query)?></p>
    <p><a href="home.php">Home</a></p>
    
</body>
</html>