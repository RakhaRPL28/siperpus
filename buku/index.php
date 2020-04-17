<?php  
	include '../koneksi.php';

	$sql = "SELECT * FROM buku ORDER BY judul";
	$res = mysqli_query($koneksi, $sql);

	$pinjam = array();

	while ($data = mysqli_fetch_assoc($res)){
		$pinjam[] = $data;
	}

	include '../aset/header.php';
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2 class="card-title">
						<i class="fas fa-book"></i> Data Buku <a href="tambah.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a>
					</h2>
				</div>
				<div class="card-body">
					<div class="ser">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Judul</th>
									<th scope="col">Penerbit</th>
									<th scope="col">Pengarang</th>
									<th scope="col">Stok</th>
									<th scope="col">Cover</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>

							<?php
								$no = 1;
								foreach ($pinjam as $p) { 
							?>

								<tr>
									<th scope="row"><?= $no ?></th>
									<td><?= $p['judul'] ?></td>
									<td><?= $p['penerbit'] ?></td>
									<td><?= $p['pengarang'] ?></td>
									<td><?= $p['stok'] ?></td>
									<td><?= $p['cover'] ?></td>
									<td>
										<a href="detail.php?id_buku=<?= $p['id_buku'] ?>" class="badge badge-success">Detail</a>
										<a href="edit.php?id_buku=<?= $p['id_buku'] ?>" class="badge badge-warning">Edit</a>
										<a href="hapus.php?id_buku=<?= $p['id_buku'] ?>" class="badge badge-danger">Hapus</a>
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