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
								$prediksi = null;
								foreach ($total as $item)
								{
									$dataJumlah     = $item['total_permintaan'];
									$dataPrediksi = $item['prediksi'];
									$prediksi .="'$dataPrediksi'".","; 
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
						label: 'Permintaan',
						backgroundColor: ['rgb(255, 100, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)'],
						borderColor: ['rgb(255, 99, 132)'],
						data: [<?= $jumlah; ?>] //data siswa sebagai data dari chart
					},
					{
						label: 'Prediksi',
						backgroundColor: ['rgb(70, 99, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)'],	
						borderColor: ['rgb(70, 100, 132)'],
						data: [<?= $prediksi; ?>] //data siswa sebagai data dari chart
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