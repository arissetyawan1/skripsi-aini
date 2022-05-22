<!-- side content -->
		<div id="layoutSidenav_content" class="content-menu container-fluid">
			<form method="post" action="<?= base_url('Front_Controller/tambah'); ?>" class="mx-4" >
				<h2 class="mt-2"> Hitung Permintaan</h2>
				<div class="row my-3">
					<div class="d-flex w-50">
						<div class="input-group">
							<label class ="mr-3"> Tanggal </label>
							<input type="text" id="datepicker" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-7">
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan1" placeholder="Permintaan 1" class="form-control ">
									<?= form_error('per1','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan2" placeholder="Permintaan 2" class="form-control ">
									<?= form_error('per2','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan3" placeholder="Permintaan 3" class="form-control">
									<?= form_error('per3','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan4" placeholder="Permintaan 4" class="form-control">
									<?= form_error('per4','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan5" placeholder="Permintaan 5" class="form-control">
									<?= form_error('per5','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan6" placeholder="Permintaan 6" class="form-control">
									<?= form_error('per6','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan7" placeholder="Permintaan 7" class="form-control">
									<?= form_error('per7','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan8" placeholder="Permintaan 8" class="form-control">
									<?= form_error('per8','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]" id="permintaan9" placeholder="Permintaan 9" class="form-control">
									<?= form_error('per9','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]"id="permintaan10"  placeholder="Permintaan 10" class="form-control">
									<?= form_error('per10','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]"id="permintaan11"  placeholder="Permintaan 11" class="form-control">
									<?= form_error('per10','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="tahun[]" class="year" placeholder="Permintaan 1" class="form-control" hidden>
									<input type="text" name="total_permintaan[]"id="permintaan12"  placeholder="Permintaan 12" class="form-control">
									<?= form_error('per10','<small class="text-danger">','</small>'); ?>
								</div>
							</div>
							<div class="col" id='col-frekuensi'>
								
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col" id='col-distribusi'>
								<!-- <div class="form-group mb-2">
										<input id="distribusi1" class="form-control" id="disabledInput" type="text" placeholder="Distribusi 1"   >
									</div>-->
							</div>
							<div class="col" id='col-kumulatif'>
								<!-- <div class="form-group mb-2">
									<input class="form-control" id="kumulatif1" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div> -->
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-4" id="col-interval">
								<!-- <div class="form-group mb-2">
									<input id="interval1" class="form-control" id="disabledInput" type="text" placeholder="Interval 1"   >
								</div> -->
							</div>
							<div class="col-md-2">
								<div class="form-group mb-2">
									<input class="form-control" id="acak1" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
							</div>
							<div class="col">
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi1" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi2" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi3" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi4" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi5" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi6" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi7" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi8" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi9" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi10" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak"" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi11" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak"" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="prediksi12" type="text" placeholder="Prediksi Permintaan 1" name="angka_acak[]" class="acak"" >
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="d-flex ml-auto p-3 w-25">
						<button type="button" id="hitung"  class="btn btn-primary btn-md mt-2 btn-block mx-2"><i class="fas fa-fw fa-calculator"></i> HITUNG</button>
						<button type="reset" id="hitung"  class="btn btn-warning btn-md mt-2 btn-block mx-2"><i class="fas fa-fw fa-undo"></i> Reset</button>
						<button type="submit" class="btn btn-danger btn-md mt-2 btn-block"><i class="fas fa-fw fa-save"></i> Simpan</button>
					</div>
				</div>
			</form>
		</div>

		<script type="text/javascript">
			 $("#datepicker").datepicker({
					format: " yyyy", // Notice the Extra space at the beginning
					viewMode: "years", 
					minViewMode: "years"
			});
			console.log($("#datepicker").val());
			 $("#datepicker").on("change",function(){
				var selected = $(this).val();
				console.log(selected);
				$(".year").val(selected);
			});
			var count_frek = 0;
			$('#hitung').on("click",function () {
			let barisa= parseInt($('#permintaan1').val());
			let barisb= parseInt($('#permintaan2').val());
			let barisc= parseInt($('#permintaan3').val());
			let barisd= parseInt($('#permintaan4').val());
			let barise= parseInt($('#permintaan5').val());
			let barisf= parseInt($('#permintaan6').val());
			let barisg= parseInt($('#permintaan7').val());
			let barish= parseInt($('#permintaan8').val());
			let barisi= parseInt($('#permintaan9').val());
			let barisj= parseInt($('#permintaan10').val());
			let barisk= parseInt($('#permintaan11').val());
			let barisl= parseInt($('#permintaan12').val());
			let array = [barisa,barisb,barisc,barisd,barise, barisf, barisg, barish, barisi, barisj, barisk, barisl]
			let baru = array.reduce((num, count) => {
				return num[count] = ++num[count] || 1, num
			}, {})
			console.log(baru, 'liat frekuensi');
			const val = Object.values(baru)
			const key = Object.keys(baru)
			let count_frek = val.reduce((acc, curr) => acc + curr)
			console.log(val, 'liat frekuensi');
			console.log(count_frek, 'liat jumlah frekuensi');
			let frek = 0
			let kumulatif[-1] = 0
			for (let i = 0; i < val.length; i++) {
				// console.log(frek[i]);
				console.log(count_frek.toFixed(2));
				$("#col-frekuensi").append(`<div class="form-group mb-2"><input type="text" name="fr1" placeholder="${key[i]} = ${val[i]}" id="frekuensi1" class="form-control frekuensi"><?= form_error('fr1','<small class="text-danger">','</small>'); ?></div>`);	
				$("#col-distribusi").append(`<div class="form-group mb-2"><input id="distribusi" class="form-control" id="disabledInput" type="text" placeholder="${parseFloat(val[i] / count_frek).toFixed(2)}"></div>`);///
				$("#col-kumulatif").append(`<div class="form-group mb-2"><input id="distribusi1" class="form-control" id="disabledInput" type="text" placeholder="${[i-1]+val[i] / count_frek.toFixed(2) }"></div>`);
				$("#col-interval").append(`<div class="form-group mb-2"><input id="interval1" class="form-control" id="disabledInput" type="text" placeholder="Interval 1"></div>`);
				// for (let a = 0; a < i-1; a++) {
				// 	const element = array[a];
				// 	console.log(element, ' ini element');
				// }
			}
			// $("#col-frekuensi").append(`<div class="form-group mb-2"><input type="text" name="fr1" placeholder="${count_freak}" id="frekuensi1" class="form-control frekuensi"><?= form_error('fr1','<small class="text-danger">','</small>'); ?></div>`);	

			
					// auto angka acak
			// console.log(abb, 'lihat')
			// var frek1 = parseInt($("#frekuensi1").val());
			// var frek2 =parseInt($("#frekuensi2").val());
			// var frek3 = parseInt($("#frekuensi3").val());
			// var frek4 =parseInt($("#frekuensi4").val());
			// var frek5 = parseInt($("#frekuensi5").val());
			// var frek6 =parseInt($("#frekuensi6").val());
			// var frek7 = parseInt($("#frekuensi7").val());
			// var frek8 =parseInt($("#frekuensi8").val());
			// var frek9 = parseInt($("#frekuensi9").val());
			// var frek10 =parseInt($("#frekuensi10").val());
			// count_frek = frek1+frek2+frek3+frek4+frek5+frek6+frek7+frek8+frek9+frek10;
			// $("#distribusi1").val((frek1/count_frek).toFixed(2));
			// $("#distribusi2").val((frek2/count_frek).toFixed(2));
			// $("#distribusi3").val((frek3/count_frek).toFixed(2));
			// $("#distribusi4").val((frek4/count_frek).toFixed(2));
			// $("#distribusi5").val((frek5/count_frek).toFixed(2));
			// $("#distribusi6").val((frek6/count_frek).toFixed(2));
			// $("#distribusi7").val((frek7/count_frek).toFixed(2));
			// $("#distribusi8").val((frek8/count_frek).toFixed(2));
			// $("#distribusi9").val((frek9/count_frek).toFixed(2));
			// $("#distribusi10").val((frek10/count_frek).toFixed(2));
			// let pk1, pk2, pk3, pk4, pk5, pk6, pk7, pk8, pk9, pk10;
			// pk1 = 0;
			// pk2 = pk1+frek1/count_frek;
			// pk3 = pk2+frek2/count_frek;
			// pk4 = pk3+frek3/count_frek;
			// pk5 = pk4+frek4/count_frek;
			// pk6 = pk5+frek5/count_frek;
			// pk7 = pk6+frek6/count_frek;
			// pk8 = pk7+frek7/count_frek;
			// pk9 = pk8+frek8/count_frek;
			// pk10 = pk9+frek9/count_frek;
			// pk11 = pk10+frek10/count_frek;
			// pk12 = pk11+frek11/count_frek;
			// $("#kumulatif1").val((pk1+frek1/count_frek).toFixed(2));
			// $("#kumulatif2").val((pk2+frek2/count_frek).toFixed(2));
			// $("#kumulatif3").val((pk3+frek3/count_frek).toFixed(2));
			// $("#kumulatif4").val((pk4+frek4/count_frek).toFixed(2));
			// $("#kumulatif5").val((pk5+frek5/count_frek).toFixed(2));
			// $("#kumulatif6").val((pk6+frek6/count_frek).toFixed(2));
			// $("#kumulatif7").val((pk7+frek7/count_frek).toFixed(2));
			// $("#kumulatif8").val((pk8+frek8/count_frek).toFixed(2));
			// $("#kumulatif9").val((pk9+frek9/count_frek).toFixed(2));
			// $("#kumulatif10").val((pk10+frek10/count_frek).toFixed(2));
			// $("#kumulatif11").val((pk11+frek10/count_frek).toFixed(2));
			// $("#kumulatif12").val((pk12+frek10/count_frek).toFixed(2));
			// $("#interval1").val(`0 - ${(pk1+frek1/count_frek).toFixed(2)}`);
			// $("#interval2").val(`${((pk1+frek1/count_frek)+ 0.01).toFixed(2)} -  ${(pk2+frek2/count_frek).toFixed(2)}`);
			// $("#interval3").val(`${((pk2+frek2/count_frek)+ 0.01).toFixed(2)} -  ${(pk3+frek3/count_frek).toFixed(2)}`);
			// $("#interval4").val(`${((pk3+frek3/count_frek)+ 0.01).toFixed(2)} -  ${(pk4+frek4/count_frek).toFixed(2)}`);
			// $("#interval5").val(`${((pk4+frek4/count_frek)+ 0.01).toFixed(2)} -  ${(pk5+frek5/count_frek).toFixed(2)}`);
			// $("#interval6").val(`${((pk5+frek5/count_frek)+ 0.01).toFixed(2)} -  ${(pk6+frek6/count_frek).toFixed(2)}`);
			// $("#interval7").val(`${((pk6+frek6/count_frek)+ 0.01).toFixed(2)} -  ${(pk7+frek7/count_frek).toFixed(2)}`);
			// $("#interval8").val(`${((pk7+frek7/count_frek)+ 0.01).toFixed(2)} -  ${(pk8+frek8/count_frek).toFixed(2)}`);
			// $("#interval9").val(`${((pk8+frek8/count_frek)+ 0.01).toFixed(2)} -  ${(pk9+frek9/count_frek).toFixed(2)}`);
			// $("#interval10").val(`${((pk9+frek9/count_frek)+ 0.01).toFixed(2)} -  ${(pk10+frek10/count_frek).toFixed(2)}`);
			// $("#interval11").val(`${((pk9+frek9/count_frek)+ 0.01).toFixed(2)} -  ${(pk10+frek10/count_frek).toFixed(2)}`);
			// $("#interval12").val(`${((pk9+frek9/count_frek)+ 0.01).toFixed(2)} -  ${(pk10+frek10/count_frek).toFixed(2)}`);
			// let intvl1=parseInt($("#interval1").val());
			// let intvl2=parseInt($("#interval2").val());
			// let intvl3=parseInt($("#interval3").val());
			// let intvl4=parseInt($("#interval4").val());
			// let intvl5=parseInt($("#interval5").val());
			// let intvl6=parseInt($("#interval6").val());
			// let intvl7=parseInt($("#interval7").val());
			// let intvl8=parseInt($("#interval8").val());
			// let intvl9=parseInt($("#interval9").val());
			// let intvl10=$("#interval10").val(`${((pk9+frek9/count_frek)+ 0.01).toFixed(2)} -  ${(pk10+frek10/count_frek).toFixed(2)}`);
			// console.log(intvl1, ' lihat coba');
					// let n = 11, a =4 , b =7 , mod = 99;
					// let acak1, acak2, acak3, acak4, acak5, acak6, acak7, acak8, acak9, acak10, acak11, acak12;
					// acak1 =((a * n + b ) % mod).toFixed(2);
					// console.log(acak1, ' acak');
					// acak2 =((a * acak1 + b ) % mod).toFixed(2);
					// acak3 =((a * acak2 + b ) % mod).toFixed(2);
					// acak4 =((a * acak3 + b ) % mod).toFixed(2);
					// acak5 =((a * acak4 + b ) % mod).toFixed(2);
					// acak6 =((a * acak5 + b ) % mod).toFixed(2);
					// acak7 =((a * acak6 + b ) % mod).toFixed(2);
					// acak8 =((a * acak7 + b ) % mod).toFixed(2);
					// acak9 =((a * acak8 + b ) % mod).toFixed(2);
					// acak10 =((a * acak9 + b ) % mod).toFixed(2);
					// acak11 =((a * acak10 + b ) % mod).toFixed(2);
					// acak12 =((a * acak11 + b ) % mod).toFixed(2);
					// $("#acak1").val(acak1);
					// $("#acak2").val(acak2);
					// $("#acak3").val(acak3);
					// $("#acak4").val(acak4);
					// $("#acak5").val(acak5);
					// $("#acak6").val(acak6);
					// $("#acak7").val(acak7);
					// $("#acak8").val(acak8);
					// $("#acak9").val(acak9);
					// $("#acak10").val(acak10);
					// $("#acak11").val(acak11);
					// $("#acak12").val(acak12);

					// console.log(d1.toFixed(2));
					// if ((acak1 => intvl1) && (acak1 <= intvl2)) {
					// 	console.log('bener');
					// } else {
					// 	console.log('salah');
					// }
			})
		</script>
		<!-- <div id="layoutSidenav_content" class="content-menu">
			<main>
				<div class="container-fluid px-4">
					<h3 class="mt-4">Permintaan</h3>
					<p>test</p>
					<div class="card">
					<div class="card-header">
						<a href="<?=base_url();?>barang/index" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
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

									<td class="text-center"><strong>Periode</td></strong>
									<td class="text-center"><strong>Jumlah Permintaan</td></strong>
									<td class="text-center"><strong>Jumlah Prediksi</td></strong>
									<td class="text-center"><strong>Aksi</td></strong>
								</tr>
							</thread>
							<tbody>
								<?php foreach ($barang as $brg) : ?>
								<tr>
									<td class="text-center"><?= $brg['id_barang'];?></td>

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
		</div> -->

	
		<!-- Modal Tambah -->
		<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php if(validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?=validation_errors();?>
						</div>
						<?php endif; ?>
						<form action="<?= base_url("barang/tambahData"); ?>" method="post">
							<div class="row">
								<div class="col">
									<label for="periode">Periode</label>
									<input type="date" name="periode" class="form-control" id="periode">
								</div>
								<div class="col">
									<label for="total_permintaan">Jumlah Permintaan</label>
									<input type="number" name="total_permintaan" class="form-control" id="total_permintaan">
								</div>
							</div>
						</form>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
					<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
				</div>
				</div>
			</div>
		</div> -->
