<?php 

   include '../aset/header.php';
   include '../koneksi.php';

   $query = mysqli_query($koneksi, "SELECT * FROM level");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SiPERPUS</title>
</head>
<body>
   <div class="container">
      <div class="row mt-4">
         <div class="col-md">
            <center>
               <div class="card" style="width: 100%">
                  <div class="card-header" style="width: 100%">
                     <h2 class="card-title"><i class="fas fas fa-user"></i> Tambah Data Anggota</h2>
                  </div>

                  <!-- Akhir Dari Card Header -->

                  <!-- Awal Card Body -->

                  <div class="card-body">
                     <form action="proses-tambah.php" method="post">
                        <table class="table">
                           <tr>
                              <td>Nama</td>
                              <td><input type="text" style="width: 100%" name="nama"></td>
                           </tr>
                           <tr>
                              <td>Kelas</td>
                              <td><input type="text" style="width: 100%" name="kelas"></td>
                           </tr>
                           <tr>
                              <td>Telp</td>
                              <td><input type="text" style="width: 100%" name="telp"></td>
                           </tr>
                           <tr>
                              <td>Username</td>
                              <td><input type="text" style="width: 100%" name="username"></td>
                           </tr>
                           <tr>
                              <td>Password</td>
                              <td><input type="password" style="width: 100%" name="password"></td>
                           </tr>
                           <tr>
                              <td>Level</td>
                              <td>
                                 <select style="width: 100%;" name="id_level">
                                    <option value="">-- Pilih Level --</option>
                                    

                                    <?php 
                                       while ($level = mysqli_fetch_assoc($query)):
                                    ?>

                                    <option value="<?= $level['id_level']; ?>"><?= $level['level']; ?></option>

                                    <?php 
                                       endwhile;
                                    ?>

                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th></th>
                              <th>
                                 <input type="submit" name="simpan" class="btn btn-primary" value="Tambah">
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