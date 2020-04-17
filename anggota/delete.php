<?php

	include '../koneksi.php';

	$id_anggota = $_GET['id_anggota'];
	$query = mysqli_query($koneksi, "DELETE FROM anggota WHERE anggota.id_anggota = '$id_anggota'");

	if($query > 0) {

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

?>