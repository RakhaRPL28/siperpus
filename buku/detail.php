<?php

    include '../koneksi.php';
    include '../aset/header.php';

    $id = $_GET['id_buku'];
    $query1 = mysqli_query($koneksi, "SELECT * FROM buku WHERE buku.id_buku = '$id' ");
    $query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori USING(id_kategori) WHERE buku.id_buku = '$id' ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md">
                </div>
            </div>
        </div>

            <div class="card">
            <div class="card-header">
                <?php while($judul=mysqli_fetch_assoc($query1)): ?>
            <h2 class="card-title"><?= $judul['judul']?></h2>
                <?php endwhile; ?>
                
            </div>
            <div class="card-body">

                <table class="table">
                <?php
                    while($buku = mysqli_fetch_assoc($query)):?>

                    <tr>
                        <td width="150px">Cover</td>
                        <td><img src= "<?= $buku['cover']?>" height= '150' width='150'></td>
                    </tr>    
                    <tr>
                        <td>ID</td>
                        <td><?= $buku['id_buku']?></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td><?= $buku['judul']?></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><?= $buku['penerbit']?></td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td><?= $buku['pengarang']?></td>
                    </tr>
                    <tr>
                        <td>Ringkasan</td>
                        <td><?= $buku['ringkasan']?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><?= $buku['stok']?></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><?= $buku['kategori']?></td>
                    </tr>
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id_buku=<?= $buku["id_buku"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id_buku=<?= $buku["id_buku"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
                        </td>
                     </tr>
                 <?php
                   endwhile;
                 ?>            

                </table>
            </div>
        </div>
</body>
</html>
<?php
include '../aset/footer.php';
?>