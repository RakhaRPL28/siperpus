<?php 
	include '../koneksi.php';
	include '../aset/header.php';
	include 'fungsi-transaksi.php';

	$buku = ambilBuku($koneksi);
	$anggota = ambilAnggota($koneksi);
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
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h3><i class="fas fa-plus"></i> Tambah Peminjaman</h3>
					</div>

					<div class="card-body">
						<form action="proses-pinjam.php" method="post">
							<div class="form-group">
								<label for="anggota">Nama Anggota</label>
								<select name="id_anggota" class="form-control">
									<option value="">--Pilih Nama--</option>

									<?php 
										foreach ($anggota as $a) {
									?>

									<option value="<?= $a['id_anggota'] ?>"><?= $a['nama'] ?></option>

									<?php 
										}
									?>

								</select>
							</div>

							<div class="form-group">
								<label for="buku">Judul Buku</label>
								<select name="id_buku" class="form-control">
									<option value="">--Pilih Judul--</option>

									<?php 
										foreach ($buku as $b) {
									?>

									<option value="<?= $b['id_buku'] ?>"><?= $b['judul'] ?></option>

									<?php 
										}
									?>

								</select>
							</div>

							<div class="form-group">
								<label for="datepicter">Tanggal Pinjam</label>
								<input type="date" name="tgl_pinjam" class="form-control" required>
							</div>

							<div class="form-group">
								<button type="submit" name="btnPinjam" class="btn btn-primary mt-auto">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php 
	include '../aset/footer.php';
?>