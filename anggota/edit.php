<?php 

   include '../koneksi.php';
   include '../aset/header.php';

   $id_anggota = $_GET['id_anggota'];
   $query = mysqli_query($koneksi, "SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota = $id_anggota");
   $anggota = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Data Anggota</title>
</head>
<body>
   <div class="container">
      <div class="row mt-4">
         <div class="col-md">
            <center>
               <div class="card" style="width: 100%;">
                  <div class="card-header" style="width: 100%;">
                     <h2 class="card-title"><i class="fas fas fa-user"></i> Edit Data Anggota</h2>
                  </div>
                  <div class="card-body">
                     <form action="proses-edit.php" method="post">
                        <table class="table">
                           <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">
                           <tr>
                              <td>Nama</td>
                              <td><input style="width: 100%;" type="text" name="nama" value="<?= $anggota['nama']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>Kelas</td>
                              <td><input style="width: 100%;" type="text" name="kelas" value="<?= $anggota['kelas']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>No. Telp</td>
                              <td><input style="width: 100%;" type="text" name="telp" value="<?= $anggota['telp']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>Username</td>
                              <td><input style="width: 100%;" type="text" name="username" value="<?= $anggota['username']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>Password</td>
                              <td><input style="width: 100%;" type="password" name="password" value="<?= $anggota['password']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>Level</td>
                              <td>
                                 <select name="id_level" style="width: 100%;" required>


                                    <?php 
                                       $querye = mysqli_query($koneksi, "SELECT * FROM level");
                                       while ($query_level = mysqli_fetch_assoc($querye)):
                                    ?>

                                    <option value="<?= $query_level['id_level']; ?>"><?= $query_level['level'] ?></option>
                                       
                                    <?php 
                                       endwhile;
                                    ?>

                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th></th>
                              <th>
                                 <button type="submit" class="btn btn-primary" name="simpan">Edit</button>
                              </th>
                           </tr>
                        </table>
                     </form>
                  </div>
               </div>
            </center>
         </div>
      </div>
   </div>
</body>
</html>

<?php include '../aset/footer.php'; ?>