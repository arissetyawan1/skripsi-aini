		<!-- side content -->
		<div id="layoutSidenav_content" class="content-menu">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">
						Laporan Page
					</h1>
					<div class="row mt-4">
						<div class="col">
							<span> Ini colom nder</span>
							<canvas id="myChart"></canvas>
							<?php
								//Inisialisasi nilai variabel awal
								$nama_jurusan= "";
								$jumlah=null;
								$angka_acak=null;
								foreach ($total as $item)
								{
									$dataJumlah     = $item['total_permintaan'];
									$jumlah .= "'$dataJumlah'".",";
									$data_angka_acak = $item['bulan'];
									$angka_acak .= "'$data_angka_acak'".",";
								}
								?>
						</div>
					</div>
				</div>
			</main>
		<script>
			const ctx = document.getElementById('myChart').getContext('2d');
			 var chart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: [<?= $angka_acak; ?>], // data tahun sebagai label dari chart
					datasets: [{
						label: 'Jumlah Peserta',
						backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)'],
						borderColor: ['rgb(255, 99, 132)'],
						data: [<?= $jumlah; ?>] //data siswa sebagai data dari chart
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});
		</script>