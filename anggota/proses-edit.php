<?php 

   include '../koneksi.php';

   if (isset($_POST['simpan'])) {

      $id_anggota    = $_POST['id_anggota'];
      $nama          = $_POST['nama'];
      $kelas         = $_POST['kelas'];
      $telp          = $_POST['telp'];
      $username      = $_POST['username'];
      $password      = $_POST['password'];
      $id_level      = $_POST['id_level'];

      $query = "UPDATE anggota SET nama = '$nama', kelas = '$kelas', telp = '$telp', username = '$username', password = '$password', id_level = '$id_level' WHERE id_anggota = '$id_anggota'";

      $res     = mysqli_query($koneksi, $query);
      $count   = mysqli_affected_rows($koneksi);

      if ($res > 0) {
         echo
            "<script>
               alert('Hei, Data Berhasil Diedit');
               document.location.href = 'index.php';
            </script>";

      }

   }

?>