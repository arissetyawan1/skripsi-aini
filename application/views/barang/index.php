<!-- side content -->
		<div id="layoutSidenav_content" class="content-menu">
			<main>
				<div class="container-fluid px-4">
					<h3 class="mt-4">Permintaan</h3>
					<p>test</p>
					<div class="card">
					<div class="card-header">
						<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
					</div>
					<div class="card-body">
					<div class="row d-flex flex-row-reverse">
					<div class="col-4">
						<form action="" method="post" class="d-flex">
							<div class="input-group">
								<input type="search" class="form-control rounded me-2" name="keyword" id="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
								<button type="submit" class="btn btn-primary rounded">Search</button>
							</div>
						</form>
					</div>
					</div>
					<table class="table table-bordered mt-3">
							<thread>
								<tr>
									<td class="text-center"><strong>No.</td></strong>
									<td class="text-center"><strong>Nama Barang</td></strong>
									<td class="text-center"><strong>Periode</td></strong>
									<td class="text-center"><strong>Jumlah Permintaan</td></strong>
									<td class="text-center"><strong>Jumlah Prediksi</td></strong>
									<td class="text-center"><strong>Aksi</td></strong>
								</tr>
							</thread>
							<tbody>
								<?php foreach ($barang as $brg) : ?>
								<tr>
									<td><?= $brg['id_barang'];?></td>
									<td><?= $brg['barang']; ?></td>
									<td><?= $brg['periode']; ?></td>
									<td><?= $brg['total_permintaan']; ?></td>
									<td><?= $brg['prediksi_permintaan']; ?></td>

									<td class="text-center">
									<button type="button" class="btn btn-info">Detil</button>
									<button type="button" class="btn btn-warning">Ubah</button>
									<button type="button" class="btn btn-danger">Hapus</button>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					</div>
				</div>
			</main>
		</div>
		<!-- Modal Tambah -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Ini bisa Kok
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				</div>
			</div>
		</div>