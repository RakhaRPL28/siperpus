<?php 

   include '../koneksi.php';

   if (isset($_POST['simpan'])) {

      $nama       = $_POST['nama'];
      $kelas      = $_POST['kelas'];
      $telp       = $_POST['telp'];
      $username   = $_POST['username'];
      $password   = $_POST['password'];
      $id_level   = $_POST['id_level'];

      $query = mysqli_query($koneksi, "INSERT INTO anggota (nama, kelas, telp, username, password, id_level) VALUES ('$nama', '$kelas', '$telp', '$username', '$password', '$id_level')");

      if ($query > 0) {

         echo 
            "<script>
               alert('Hei, Data Berhasil Ditambah');
               document.location.href = 'index.php';
             </script>";

      }

   }

?>

