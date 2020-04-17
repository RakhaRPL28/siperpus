<?php

    include '../koneksi.php';
    include '../aset/header.php';

    $id_anggota = $_GET['id_anggota'];
    $query1 = mysqli_query($koneksi, "SELECT * FROM anggota WHERE anggota.id_anggota = '$id_anggota'");
    $query = mysqli_query($koneksi, "SELECT * FROM anggota INNER JOIN level USING(id_level) WHERE anggota.id_anggota = '$id_anggota' ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota</title>
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

         <?php while($nama=mysqli_fetch_assoc($query1)): ?>

      <h2 class="card-title"><?= $nama['nama']?></h2>
            
         <?php endwhile; ?>
            
      </div>
      <div class="card-body">
         <table class="table">

         <?php
            while($anggota = mysqli_fetch_assoc($query)):
         ?>

            <tr>
               <td>Nama</td>
               <td><?= $anggota['nama'] ?></td>
            </tr>
            <tr>
               <td>Id Anggota</td>
               <td><?= $anggota['id_anggota'] ?></td>
            </tr>
            <tr>
               <td>Kelas</td>
               <td><?= $anggota['kelas']?></td>
            </tr>    
            <tr>
               <td>No. Telp</td>
               <td><?= $anggota['telp']?></td>
            </tr>
            <tr>
               <td>Username</td>
               <td><?= $anggota['username']?></td>
            </tr>
            <tr>
               <td>Password</td>
               <td><?= $anggota['password']?></td>
            </tr>
            <tr>
               <td>Level</td>
               <td><?= $anggota['level']?></td>
            </tr>
            <tr>
               <td>Aksi</td>     
               <td>
                  <a href="edit.php?id_anggota=<?= $anggota["id_anggota"];?>  " class="badge badge-warning">Edit</a>
                  <a href="hapus.php?id_anggota=<?= $anggota["id_anggota"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
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