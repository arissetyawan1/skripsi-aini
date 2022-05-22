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
							</div>
							<div class="col">
								<div class="form-group mb-2">
									<input type="text" name="fr1" placeholder="Frekuensi 1" id="frekuensi1" class="form-control frekuensi">
									<?= form_error('fr1','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr2" placeholder="Frekuensi 2" id="frekuensi2" class="form-control frekuensi">
									<?= form_error('fr2','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr3" placeholder="Frekuensi 3" id="frekuensi3" class="form-control">
									<?= form_error('fr3','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr4" placeholder="Frekuensi 4" id="frekuensi4" class="form-control">
									<?= form_error('fr4','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr5" placeholder="Frekuensi 5" id="frekuensi5" class="form-control">
									<?= form_error('fr5','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr6" placeholder="Frekuensi 6" id="frekuensi6" class="form-control">
									<?= form_error('fr6','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr7" placeholder="Frekuensi 7" id="frekuensi7" class="form-control">
									<?= form_error('fr7','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr8" placeholder="Frekuensi 8" id="frekuensi8" class="form-control">
									<?= form_error('fr8','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr9" placeholder="Frekuensi 9" id="frekuensi9" class="form-control">
									<?= form_error('fr9','<small class="text-danger">','</small>'); ?>
								</div>
								<div class="form-group mb-2">
									<input type="text" name="fr10" placeholder="Frekuensi 10" id="frekuensi10" class="form-control">
									<?= form_error('fr10','<small class="text-danger">','</small>'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col">
								<div class="form-group mb-2">
										<input id="distribusi1" class="form-control" id="disabledInput" type="text" placeholder="Distribusi 1"   >
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi2" placeholder="Distribusi 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi3" placeholder="Distribusi 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi4" placeholder="Distribusi 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi5" placeholder="Distribusi 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi6" placeholder="Distribusi 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi7" placeholder="Distribusi 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi8" placeholder="Distribusi 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi9" placeholder="Distribusi 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="distribusi10" placeholder="Distribusi 2" class="form-control">
									</div>	
								</div>
							<div class="col">
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif1" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif2" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif3" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif4" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif5" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif6" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif7" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif8" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif9" type="text" placeholder="Kumulatif 1" name="pd1" class="pk" disabled>
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="kumulatif10" type="text" placeholder="Kumulatif 1" name="pd1" class="pk"  disabled>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group mb-2">
									<input id="interval1" class="form-control" id="disabledInput" type="text" placeholder="Interval 1"   >
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval2" placeholder="Interval 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval3" placeholder="Interval 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval4" placeholder="Interval 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval5" placeholder="Interval 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval6" placeholder="Interval 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval7" placeholder="Interval 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval8" placeholder="Interval 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval9" placeholder="Interval 2" class="form-control">
									</div>
								<div class="form-group mb-2">
										<input type="text" name="per7" id="interval10" placeholder="Interval 2" class="form-control">
									</div>	
								</div>
							<div class="col-md-2">
								<div class="form-group mb-2">
									<input class="form-control" id="acak1" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak2" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak3" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak4" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak5" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak6" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak7" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak8" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak9" type="text" placeholder="Bil Acak 1" name="angka_acak[]" class="acak" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak10" type="text" placeholder="Bil  Acak 1" name="angka_acak[]" class="acak"" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak11" type="text" placeholder="Bil  Acak 1" name="angka_acak[]" class="acak"" >
								</div>
								<div class="form-group mb-2">
									<input class="form-control" id="acak12" type="text" placeholder="Bil  Acak 1" name="angka_acak[]" class="acak"" >
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
					var frek1 = parseInt($("#frekuensi1").val());
					var frek2 =parseInt($("#frekuensi2").val());
					var frek3 = parseInt($("#frekuensi3").val());
					var frek4 =parseInt($("#frekuensi4").val());
					var frek5 = parseInt($("#frekuensi5").val());
					var frek6 =parseInt($("#frekuensi6").val());
					var frek7 = parseInt($("#frekuensi7").val());
					var frek8 =parseInt($("#frekuensi8").val());
					var frek9 = parseInt($("#frekuensi9").val());
					var frek10 =parseInt($("#frekuensi10").val());
					count_frek = frek1+frek2+frek3+frek4+frek5+frek6+frek7+frek8+frek9+frek10;
					$("#distribusi1").val((frek1/count_frek).toFixed(2));
					$("#distribusi2").val((frek2/count_frek).toFixed(2));
					$("#distribusi3").val((frek3/count_frek).toFixed(2));
					$("#distribusi4").val((frek4/count_frek).toFixed(2));
					$("#distribusi5").val((frek5/count_frek).toFixed(2));
					$("#distribusi6").val((frek6/count_frek).toFixed(2));
					$("#distribusi7").val((frek7/count_frek).toFixed(2));
					$("#distribusi8").val((frek8/count_frek).toFixed(2));
					$("#distribusi9").val((frek9/count_frek).toFixed(2));
					$("#distribusi10").val((frek10/count_frek).toFixed(2));
					let pk1, pk2, pk3, pk4, pk5, pk6, pk7, pk8, pk9, pk10;
					pk1 = 0;
					pk2 = pk1+frek1/count_frek;
					pk3 = pk2+frek2/count_frek;
					pk4 = pk3+frek3/count_frek;
					pk5 = pk4+frek4/count_frek;
					pk6 = pk5+frek5/count_frek;
					pk7 = pk6+frek6/count_frek;
					pk8 = pk7+frek7/count_frek;
					pk9 = pk8+frek8/count_frek;
					pk10 = pk9+frek9/count_frek;
					$("#kumulatif1").val((pk1+frek1/count_frek).toFixed(2));
					$("#kumulatif2").val((pk2+frek2/count_frek).toFixed(2));
					$("#kumulatif3").val((pk3+frek3/count_frek).toFixed(2));
					$("#kumulatif4").val((pk4+frek4/count_frek).toFixed(2));
					$("#kumulatif5").val((pk5+frek5/count_frek).toFixed(2));
					$("#kumulatif6").val((pk6+frek6/count_frek).toFixed(2));
					$("#kumulatif7").val((pk7+frek7/count_frek).toFixed(2));
					$("#kumulatif8").val((pk8+frek8/count_frek).toFixed(2));
					$("#kumulatif9").val((pk9+frek9/count_frek).toFixed(2));
					$("#kumulatif10").val((pk10+frek10/count_frek).toFixed(2));
					$("#interval1").val(`0 - ${(pk1+frek1/count_frek).toFixed(2)}`);
					$("#interval2").val(`${((pk1+frek1/count_frek) + 0.01).toFixed(2)} -  ${(pk2+frek2/count_frek).toFixed(2)}`);
					$("#interval3").val(`${((pk2+frek2/count_frek) + 0.01).toFixed(2)} -  ${(pk3+frek3/count_frek).toFixed(2)}`);
					$("#interval4").val(`${((pk3+frek3/count_frek) + 0.01).toFixed(2)} -  ${(pk4+frek4/count_frek).toFixed(2)}`);
					$("#interval5").val(`${((pk4+frek4/count_frek) + 0.01).toFixed(2)} -  ${(pk5+frek5/count_frek).toFixed(2)}`);
					$("#interval6").val(`${((pk5+frek5/count_frek) + 0.01).toFixed(2)} -  ${(pk6+frek6/count_frek).toFixed(2)}`);
					$("#interval7").val(`${((pk6+frek6/count_frek) + 0.01).toFixed(2)} -  ${(pk7+frek7/count_frek).toFixed(2)}`);
					$("#interval8").val(`${((pk7+frek7/count_frek) + 0.01).toFixed(2)} -  ${(pk8+frek8/count_frek).toFixed(2)}`);
					$("#interval9").val(`${((pk8+frek8/count_frek) + 0.01).toFixed(2)} -  ${(pk9+frek9/count_frek).toFixed(2)}`);
					$("#interval10").val(`${((pk9+frek9/count_frek) + 0.01).toFixed(2)} -  ${(pk10+frek10/count_frek).toFixed(2)}`);
						let intvl1=parseInt($("#interval1").val());
						let intvl2=parseInt($("#interval2").val());
						let intvl3=parseInt($("#interval3").val());
						let intvl4=parseInt($("#interval4").val());
						let intvl5=parseInt($("#interval5").val());
						let intvl6=parseInt($("#interval6").val());
						let intvl7=parseInt($("#interval7").val());
						let intvl8=parseInt($("#interval8").val());
						let intvl9=parseInt($("#interval9").val());
					// auto angka acak
					let n = 11, a =4 , b =7 , mod = 99;
					let acak1, acak2, acak3, acak4, acak5, acak6, acak7, acak8, acak9, acak10, acak11, acak12;
					acak1 =((a * n + b ) % mod).toFixed(2);
					acak2 =((a * acak1 + b ) % mod).toFixed(2);
					acak3 =((a * acak2 + b ) % mod).toFixed(2);
					acak4 =((a * acak3 + b ) % mod).toFixed(2);
					acak5 =((a * acak4 + b ) % mod).toFixed(2);
					acak6 =((a * acak5 + b ) % mod).toFixed(2);
					acak7 =((a * acak6 + b ) % mod).toFixed(2);
					acak8 =((a * acak7 + b ) % mod).toFixed(2);
					acak9 =((a * acak8 + b ) % mod).toFixed(2);
					acak10 =((a * acak9 + b ) % mod).toFixed(2);
					acak11 =((a * acak10 + b ) % mod).toFixed(2);
					acak12 =((a * acak11 + b ) % mod).toFixed(2);
					$("#acak1").val(acak1);
					$("#acak2").val(acak2);
					$("#acak3").val(acak3);
					$("#acak4").val(acak4);
					$("#acak5").val(acak5);
					$("#acak6").val(acak6);
					$("#acak7").val(acak7);
					$("#acak8").val(acak8);
					$("#acak9").val(acak9);
					$("#acak10").val(acak10);
					$("#acak11").val(acak11);
					$("#acak12").val(acak12);
					
					$("#prediksi1").val(barisf);
					$("#prediksi2").val(barisb);
					$("#prediksi3").val(barisg);
					$("#prediksi4").val(barise);
					$("#prediksi5").val(barisi);
					$("#prediksi6").val(barisg);
					$("#prediksi7").val(barisf);
					$("#prediksi8").val(barise);
					$("#prediksi9").val(barisf);
					$("#prediksi10").val(barisd);
					$("#prediksi11").val(acak11);
					$("#prediksi12").val(acak12);

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
