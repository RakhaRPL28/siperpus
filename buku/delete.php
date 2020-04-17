<?php

	include '../koneksi.php';

	$id_buku = $_GET['id_buku'];

	$query = mysqli_query($koneksi, "DELETE FROM buku WHERE buku.id_buku = '$id_buku'");

	if($query 	> 0) {

		echo "
				<script> 
					alert('Hei, Data Berhasil Dihapus'); document.location.href='index.php';
				</script>";
	} else {
		echo "
			   <script> 
					alert('Hei, Data Gagal Dihapus'); document.location.href='index.php';
			   </script>";
	}
	 
	var_dump($query);

?>