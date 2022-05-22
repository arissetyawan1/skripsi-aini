	<!-- Content -->

			<div class="col-md-12 mb-3 mt-2">
				<div class="card border-dark">
					<div class="card-header bg-dark text-light text-center font-weight-bold"><i class="fas fa-fw fa-calculator"></i> APLIKASI PREDIKSI PENJUALAN DENGAN MONTE CARLO</div>
					<div class="card-body ">
					<div class="row d-flex flex-row-reverse">
						<div class="col-4 mb-3">
							<div class="input-group">
								<label> Tanggal </label>
								<input type="text" id="datepicker" />
							</div>
						</div>
					</div>
						<form action="<?= base_url('Front_Controller/tambah'); ?>" method="post" class="">
						<div class="row justify-content-center">
								<div class="col-md-2">
									<div class="card border-dark">
										<div class="card-header bg-dark text-white text-center">
											<i class="fas fa-fw fa-hand-holding-usd"></i> Data Permintaan
										</div>
										<div class="card-body">
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan1" placeholder="permintaan 1" class="form-control ">
												<?= form_error('per1','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan2" placeholder="permintaan 2" class="form-control ">
												<?= form_error('per2','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan3" placeholder="permintaan 3" class="form-control">
												<?= form_error('per3','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan4" placeholder="permintaan 4" class="form-control">
												<?= form_error('per4','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan5" placeholder="permintaan 5" class="form-control">
												<?= form_error('per5','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan6" placeholder="permintaan 6" class="form-control">
												<?= form_error('per6','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan7" placeholder="permintaan 7" class="form-control">
												<?= form_error('per7','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan8" placeholder="permintaan 8" class="form-control">
												<?= form_error('per8','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]" id="permintaan9" placeholder="permintaan 9" class="form-control">
												<?= form_error('per9','<small class="text-danger">','</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="tahun[]" class="year" placeholder="permintaan 1" class="form-control" hidden>
												<input type="text" name="total_permintaan[]"id="permintaan10"  placeholder="permintaan 10" class="form-control">
												<?= form_error('per10','<small class="text-danger">','</small>'); ?>
											</div>
										</div>
									</div>										
								</div>
								<div class="col-md-2">
										<div class="card border-dark">
											<div class="card-header bg-dark text-white text-center">
												<i class="fas fa-fw fa-shopping-basket"></i> Data Frekuensi
											</div>
											<div class="card-body">
												<div class="form-group">
													<input type="text" name="fr1" placeholder="Frekuensi 1" id="frekuensi1" class="form-control frekuensi">
													<?= form_error('fr1','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr2" placeholder="Frekuensi 2" id="frekuensi2" class="form-control frekuensi">
													<?= form_error('fr2','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr3" placeholder="Frekuensi 3" id="frekuensi3" class="form-control">
													<?= form_error('fr3','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr4" placeholder="Frekuensi 4" id="frekuensi4" class="form-control">
													<?= form_error('fr4','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr5" placeholder="Frekuensi 5" id="frekuensi5" class="form-control">
													<?= form_error('fr5','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr6" placeholder="Frekuensi 6" id="frekuensi6" class="form-control">
													<?= form_error('fr6','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr7" placeholder="Frekuensi 7" id="frekuensi7" class="form-control">
													<?= form_error('fr7','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr8" placeholder="Frekuensi 8" id="frekuensi8" class="form-control">
													<?= form_error('fr8','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr9" placeholder="Frekuensi 9" id="frekuensi9" class="form-control">
													<?= form_error('fr9','<small class="text-danger">','</small>'); ?>
												</div>
												<div class="form-group">
													<input type="text" name="fr10" placeholder="Frekuensi 10" id="frekuensi10" class="form-control">
													<?= form_error('fr10','<small class="text-danger">','</small>'); ?>
												</div>
											</div>
										</div>
								</div>
								<div class="col-md-1">
									<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Probabilitas Distribusi</div>
									<div class="form-group">
										<input id="distribusi1" class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1"   >
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi2" placeholder="Probabilitas 2" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi3" placeholder="Probabilitas 2" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi4" placeholder="Probabilitas 2" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi5" placeholder="Probabilitas 2" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi6" placeholder="Probabilitas 2" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi7" placeholder="Probabilitas 2" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi8" placeholder="Probabilitas 2" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi9" placeholder="Probabilitas 2" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" name="per7" id="distribusi10" placeholder="Probabilitas 2" class="form-control">
									</div>
									
								</div>
								<div class="col-md-1">
									<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Probabilitas Kumulatif</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif1" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif2" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif3" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif4" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif5" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif6" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif7" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif8" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif9" type="text" placeholder="Probabilitas 1" name="pd1" class="pk" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="kumulatif10" type="text" placeholder="Probabilitas 1" name="pd1" class="pk"  disabled>
									</div>
								</div>
								<div class="col-md-1">
									<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Interval</div>
									<div class="form-group">
										<input class="form-control" id="interval1" type="text" placeholder="Interval 1" name="pd1" class="interval" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval2" type="text" placeholder="Interval 1" name="pd1" class="interval" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval3" type="text" placeholder="Interval 1" name="pd1" class="interval" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval4" type="text" placeholder="Interval 1" name="pd1" class="interval"  disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval5" type="text" placeholder="Interval 1" name="pd1" class="interval" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval6" type="text" placeholder="Interval 1" name="pd1" class="interval" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval7" type="text" placeholder="Interval 1" name="pd1" class="interval"  disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval8" type="text" placeholder="Interval 1" name="pd1" class="interval"  disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval9" type="text" placeholder="Interval 1" name="pd1" class="interval" disabled>
									</div>
									<div class="form-group">
										<input class="form-control" id="interval10" type="text" placeholder="Interval 1" name="pd1" class="interval"  disabled>
									</div>
								</div>
								<div class="col-md-1">
									<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Angka Acak</div>
									<div class="form-group">
										<input class="form-control" id="acak1" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak2" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak3" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak4" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak5" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak6" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak7" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak8" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak9" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak" >
									</div>
									<div class="form-group">
										<input class="form-control" id="acak10" type="text" placeholder="Angak Acak 1" name="angka_acak[]" class="acak"" >
									</div>
								</div>
							</div>
							<div class="row justify-content-center mt-3">
								<div class="col-md-6">
									<button type="submit" class="btn btn-dark btn-lg mt-2 btn-block"><i class="fas fa-fw fa-calculator"></i> HITUNG</button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
				<!-- <div class="col-md-4">
					<div class="card border-dark">
						<div class="card-header bg-dark text-white text-center font-weight-bold"><i class="fas fa-fw fa-user-cog"></i> USER GUIDE</div>
						<div class="card-body">
							<div class="alert alert-danger" role="alert">
							  <h4 class="alert-heading">PENTING !!!</h4>
							  <p>Aplikasi ini hanya dapat digunakan untuk memprediksi penjualan dengan jumlah hari selama 10 hari atau bulan selama 10 bulan</p>
							  <hr>
							  <h5>Input / Masukan :</h5>
							  <p class="mb-0">Data Permintaan merupakan data permintaan produk</p>
							  <p class="mb-0">Data Frekuensi merupakan banyaknya permintaan produk</p>
							</div>
						</div>
					</div>
					<div class="card border-dark mt-3">
						<div class="card-header bg-dark text-center text-white font-weight-bold"><i class="fas fa-fw fa-user"></i> AUTHOR</div>
						<div class="card-body">
							<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
							    <div class="carousel-item active" data-interval="5000">
							      <img src="<?= base_url('assets/img/author1.jpg'); ?>" class="d-block w-100" alt="..." width="">
							    </div>
							    <div class="carousel-item" data-interval="2000">
							      <img src="<?= base_url('assets/img/author2.jpg'); ?>" class="d-block w-100" alt="...">
							    </div>
							    <div class="carousel-item">
							      <img src="<?= base_url('assets/img/author3.jpg'); ?>" class="d-block w-100" alt="...">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
							<p class="mt-1">
								My name is <span class="badge badge-primary">IRSYAD</span>, i am from <span class="badge badge-success">Purwodadi City</span>
							</p>
						</div>
					</div>
				</div> -->
			</div>

	<script type="text/javascript">
		const frek=(a,b,c,d,e,f,g,h,i,j)=>{
			let arr = [a,b,c,d,e,f,g,h,i,j]
			return arr.map
		}
      $("#datepicker").datepicker( {
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
	// $(".permintaan").on('keyup', function(){
	// 	let value = $(this).val() + 4;
	// 	$(".frekuensi").each(function(){
	// 		$(this).val(value);
	// 	})
	// })
	var count_frek = 0;
	$("#frekuensi10").on('keyup', function(){
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
		$("#interval1").val(`0 - ${pk1+frek1/count_frek}`);
		$("#interval2").val(`${(pk1+frek1/count_frek).toFixed(2) + 0.01} -  ${(pk2+frek2/count_frek).toFixed(2)}`);
		$("#interval3").val(`${(pk2+frek2/count_frek).toFixed(2) + 0.01} -  ${(pk3+frek3/count_frek).toFixed(2)}`);
		$("#interval4").val(`${(pk3+frek3/count_frek).toFixed(2) + 0.01} -  ${(pk4+frek4/count_frek).toFixed(2)}`);
		$("#interval5").val(`${(pk4+frek4/count_frek).toFixed(2) + 0.01} -  ${(pk5+frek5/count_frek).toFixed(2)}`);
		$("#interval6").val(`${(pk5+frek5/count_frek).toFixed(2) + 0.01} -  ${(pk6+frek6/count_frek).toFixed(2)}`);
		$("#interval7").val(`${(pk6+frek6/count_frek).toFixed(2) + 0.01} -  ${(pk7+frek7/count_frek).toFixed(2)}`);
		$("#interval8").val(`${(pk7+frek7/count_frek).toFixed(2) + 0.01} -  ${(pk8+frek8/count_frek).toFixed(2)}`);
		$("#interval9").val(`${(pk8+frek8/count_frek).toFixed(2) + 0.01} -  ${(pk9+frek9/count_frek).toFixed(2)}`);
		$("#interval10").val(`${(pk9+frek9/count_frek).toFixed(2) + 0.01} -  ${(pk10+frek10/count_frek).toFixed(2)}`);

		// auto angka acak
		let n = 11, a =5 , b =7 , mod = 99;
		let acak1, acak2, acak3, acak4, acak5, acak6, acak7, acak8, acak9, acak10;
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

		console.log(d1.toFixed(2));
		// console.log(count_frek);
	})
	console.log(count_frek);
	</script>
