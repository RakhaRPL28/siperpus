<?php  

	include '../koneksi.php';
	include '../aset/header.php';
	$query = mysqli_query($koneksi, "SELECT * FROM kategori");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data Buku</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md">
				<center>
					<div class="card" style="width: 100%;">
            <div class="card-header" style="width: 100%;">
              <h2 class="card-title"><i class="fas fas fa-book"></i> Tambah Data Buku</h2>
            </div>
            
            <div class="card-body">
               <form action="proses-tambah.php" method="post">
                  <table class="table">
                     <tr>
                        <td>Judul Buku</td>
                        <td><input type="text" style="width: 100%;" name="judul"></td>
                     </tr>
                     <tr>
                        <td>Penerbit</td>
                        <td><input type="text" style="width: 100%;" name="penerbit"></td>
                     </tr>
                     <tr>
                        <td>Pengarang</td>
                        <td><input type="text" style="width: 100%;" name="pengarang"></td>
                     </tr>
                     <tr>
                        <td>Ringkasan</td>
                        <td>
                           <textarea name="ringkasan" style="width: 100%;">

                           </textarea>
                        </td>
                     </tr>
                     <tr>
                        <td>Cover</td>
                        <td><input type="file" name="cover"></td>
                     </tr>
                     <tr>
                        <td>Stok</td>
                        <td><input type="number" name="stok" style="width: 100%;"></td>
                     </tr>
                     <tr>
                        <td>Kategori</td>
                        <td>
                           <select style="width: 100%;" name="id_kategori" style="width: 100%;">
                              <option value="">-- Pilih Kategori --</option>

                              <?php
                                 while ($kategori = mysqli_fetch_assoc($query)): 
                              ?>
                              
                              <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>

                              <?php
                                 endwhile;
                              ?>

                           </select>
                        </td>
                     </tr>
                     <tr>
                        <th></th>
                        <th><input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></th>
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

<?php
   include '../aset/footer.php';
?>