<?php

   include '../koneksi.php';
   include '../aset/header.php';

   $id_buku = $_GET['id_buku'];
   $query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku = $id_buku");
   $buku = mysqli_fetch_assoc($query);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Data Buku</title>
</head>
<body>
   <div class="container">
      <div class="row mt-4">
         <div class="col-md">
            <center>
               <div class="card" style="width: 100%;">
                  <div class="card-header" style="width: 100%;">
                     <h2 class="card-title"><i class="fas fas fa-book"></i> Edit Data Buku</h2>
                  </div>
                  <div class="card-body">
                     <form action="proses-edit.php" method="post">
                        <table class="table">  
                           <input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">
                           <tr>
                              <td>Judul Buku</td>
                              <td><input style="width: 100%;" type="text" name="judul" value="<?= $buku['judul']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>Penerbit</td>
                              <td><input style="width: 100%;" type="text" name="penerbit" value="<?= $buku['penerbit']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>Pengarang</td>
                              <td><input style="width: 100%;" type="text" name="pengarang" value="<?= $buku['pengarang']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>Ringkasan</td>
                              <td><textarea style="width: 100%; height: 100px;" value="<?= $buku['cover']; ?>" type="textarea" name="ringkasan" required><?= $buku['ringkasan']; ?></textarea></td>
                           </tr>
                           <input style="width: 100%;" type="hidden" name="cover" value="<?= $buku['cover'] ?>">
                           <tr>
                              <td>Stok</td>
                              <td><input style="width: 100%;" type="number" name="stok" value="<?= $buku['stok']; ?>" required></td>
                           </tr>
                           <tr>
                              <td>Kategori</td>
                              <td>
                                 <select name="id_kategori" style="width: 100%;" required>

                                    <?php
                                       $querye = mysqli_query($koneksi, "SELECT * FROM kategori");
                                       while ($query_kategori = mysqli_fetch_assoc($querye)):
                                    ?>

                                 <option value="<?= $query_kategori['id_kategori']; ?>"><?= $query_kategori['kategori'] ?></option>

                                    <?php
                                       endwhile;
                                    ?>
                                 ph
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <th></th>
                              <th><button type="submit" class="btn btn-primary" name="simpan">Edit</button></th>
                           </tr>
                        </table>
                     </form>
                  </div>
               </div>
            </center>
         </div>
      </div>
   </div>
   <form method="get" action=""></form>
</body>
</html>

<?php 

   include '../aset/footer.php';

?>
