<!-- side content -->
		<div id="layoutSidenav_content" class="content-menu">
			<main>
				<div class="container-fluid px-4">
					<h3 class="mt-4">Permintaan</h3>
					<p>test</p>
					<div class="card">
					<div class="card-header">
					<a href="<?=base_url();?>barang/tambah" class="btn btn-primary">Tambah Data</a>
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