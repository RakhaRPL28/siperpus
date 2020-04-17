<?php  

	include '../koneksi.php';
	include '../aset/header.php';

	$sql = "SELECT * FROM anggota ORDER BY nama";
	$res = mysqli_query($koneksi, $sql);

	$pinjam = array();

	while ($data = mysqli_fetch_assoc($res)){
		$pinjam[] = $data;
	}

?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2 class="card-title"><i class="fas fa-user"></i> Data Anggota <a href="tambah.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a>
					</h2>
				</div>
				<div class="card-body">
					<div class="ser">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Nama</th>
									<th scope="col">Kelas</th>
									<th scope="col">No. Telp</th>
									<th scope="col">Username</th>
									<th scope="col">Password</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>

							<?php
								$no = 1;
								foreach ($pinjam as $p) { 
							?>

								<tr>
									<th scope="row"><?= $no ?></th>
									<td><?= $p['nama'] ?></td>
									<td><?= $p['kelas'] ?></td>
									<td><?= $p['telp'] ?></td>
									<td><?= $p['username'] ?></td>
									<td><?= $p['password'] ?></td>
									<td>
										<a href="detail.php?id_anggota=<?= $p['id_anggota'] ?>" class="badge badge-success">Detail</a>
										<a href="edit.php?id_anggota=<?= $p['id_anggota'] ?>" class="badge badge-warning">Edit</a>
										<a href="hapus.php?id_anggota=<?= $p['id_anggota'] ?>" class="badge badge-danger">Hapus</a>
									</td>
								</tr>
							<?php
								$no++;
							}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include '../aset/footer.php';
?>