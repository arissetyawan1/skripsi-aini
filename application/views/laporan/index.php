		<!-- side content -->
		<div id="layoutSidenav_content" class="content-menu">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">
						Laporan Page
					</h1>
					<form method="post"  action="<?= base_url('Laporan/index'); ?>">
						<div class="row my-1">
							<div class="d-flex w-50">
								<div class="input-group">
									<label class ="mr-3"> Tahun </label>
									<input type="text" id="datepicker" name="tahun"/>
								</div>
								<button type="submit" id="report" class="btn  btn-danger btn-sm btn-block"><i class="fas fa-fw fa-save"></i> Cari</button>
							</div>
						</div>
					</form>
					<?php if(!empty($total)){ ?>
					<div class="row mt-4">
						<div class="col">
							<!-- <span> Ini colom nder</span> -->
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
								}?>
							</div>
						</div>
					<?php 
						}else{
							?>
							<div class="row mt-4">
								<div class="col">
									<b class="text-center"> Data Kosong</b>
									<canvas id="myChart"></canvas>
								</div>
							</div>
						<?php  
						}?>
				</div>
			</main>
		<script>
			 $("#datepicker").datepicker({
					format: " yyyy", // Notice the Extra space at the beginning
					viewMode: "years", 
					minViewMode: "years"
			});
			var selected =0;
			console.log($("#datepicker").val());
			 $("#datepicker").on("change",function(){
			 	selected= $(this).val();
				console.log(selected);
				$(".year").val(selected);
			});

			// $("#report").on('click', function(){
			// 	alert(selected)
			// })
			const ctx = document.getElementById('myChart').getContext('2d');
			 var chart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: [<?= $angka_acak; ?>], // data tahun sebagai label dari chart
					datasets: [{
						label: 'Permintaan',
						// backgroundColor: ['rgb(255, 100, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)', 'rgb(255, 99, 132)'],
						fill:false,
						pointRadius: 7,
    					pointBackgroundColor :'rgb(255, 99, 132)',
						borderColor: ['rgb(255, 99, 132)'],
						tension : 0,
						data: [<?= $jumlah; ?>] //data siswa sebagai data dari chart
					},
					{
						label: 'Prediksi',
						// backgroundColor: ['rgb(70, 99, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)', 'rgb(70, 100, 132)'],
						fill:false,
						pointRadius: 7,
    					pointBackgroundColor :'rgb(70, 100, 132)',
						borderColor: ['rgb(70, 100, 132)'],
						tension : 0,
						data: [<?= $prediksi; ?>] //data siswa sebagai data dari chart
					}]
				},
			});
		</script>