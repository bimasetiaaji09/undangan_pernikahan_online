@extends('layout.main')
@section('tittle','Tambah Data Pernikahan')
@section('data_pernikahan','active')
@section('content')
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class="row">
						<div class="col-md-8">
								<div class="page-title">Tambah Data Pernikahan</div>
						</div>
						<div class="col-md-4">
							<ul class="breadcrumb page-breadcrumb pull-right">
								<li>
									<i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li >Data Pernikahan</li>
                                <li class="active">Tambahkan</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Taxi live location start -->
			<div class="row">
				<div class="col-md-12">
					<form style="background-color:white;padding-bottom: 20px;padding-left: 20px;padding-right: 20px" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<div class="page-title" style="margin-left:20px">
									Form Tambah Data Pernikahan
								</div>
							</div>
						</div>
						<div class="row" style="margin: 50px;">
							<div class="col-md-6">
								<div class="form-group">
									<h2 for=""><b>Foto Prewedding</b></h2>	
								</div>
								<div class="form-grup">
									<input type="file" style="display:none" name="image" id="">
									<img id="img_preview" src="{{asset('template_admin')}}\assets\img\aploud_foto.PNG" class="img-fluid border" alt="" >
									<h3 style="color: red;">*Aploud Foto wedding minimal 3 foto</h3>
								</div>
								<div class="form-group">
									<h2 for=""><b>Resepsi Pernikahan</b></h2>	
								</div>
								<div class="input-group form-group mb-3">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect01">Hari</label>
									</div>
									<select class="custom-select" id="inputGroupSelect01">
										<option value="Senin">Senin...</option>
										<option value="Selasa">Selasa</option>
										<option value="Rabu">Rabu</option>
										<option value="Kamis">Kamis</option>
										<option value="Jum'at">Jum'at</option>
										<option value="Sabtu">Sabtu</option>
										<option value="Minggu">Minggu</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tanggal Resepsi</label>
									<input type="date" name="tanggal_resepsi" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Awal Waktu Resepsi</label>
									<input type="time" name="pukul_resepsi" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Akhir Waktu Resepsi</label>
									<input type="time" name="pukul_resepsi" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Tempat Resepsi</label>
									<input type="text" name="tempat_resepsi" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Link Google Map Resepsi</label>
									<input type="text" name="link_map_resepsi" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Alamat Resepsi</label>
									<input type="text" name="alamat_resepsi" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h2 for=""><b>Keluarga Mempelai</b></h2>
								</div>
								<div class="form-group">
									<label for="">Nama Mempelai Pria</label>
									<input type="text" name="mempelai_pria" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Nama Mempelai Wanita</label>
									<input type="text" name="mempelai_wanita" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Nama Ayah Mempelai Pria</label>
									<input type="text" name="ayah_mempelai_pria" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Nama Ibu Mempelai Pria</label>
									<input type="text" name="ibu_mempelai_pria" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Nama Ayah Mempelai wanita</label>
									<input type="text" name="ayah_mempelai_wanita" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Nama Ibu Mempelai Wanita</label>
									<input type="text" name="ibu_mempelai_wanita" class="form-control">
									<hr>
								</div>
								<div class="form-group">
									<h2 for=""><b>Akad Nikah Pernikahan</b></h2>
								</div>
								<div class="input-group form-group mb-3">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect01">Hari</label>
									</div>
									<select class="custom-select" id="inputGroupSelect01">
										<option value="Senin">Senin...</option>
										<option value="Selasa">Selasa</option>
										<option value="Rabu">Rabu</option>
										<option value="Kamis">Kamis</option>
										<option value="Jum'at">Jum'at</option>
										<option value="Sabtu">Sabtu</option>
										<option value="Minggu">Minggu</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tanggal Akad Nikah</label>
									<input type="date" name="tanggal_akad_nikah" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Awal Waktu Akad Nikah</label>
									<input type="time" name="pukul_akad_nikah" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Akhir Waktu Akad Nikah</label>
									<input type="time" name="pukul_akad_nikah" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Tempat Akad Nikah</label>
									<input type="text" name="tempat_akad_nikah" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Link Google Map Akad Nikah</label>
									<input type="text" name="link_map_akad_nikah" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Alamat Akad Nikah</label>
									<input type="text" name="alamat_akad_nikah" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group text-center">
									<a href="" class="btn btn-danger">kembali</a>
									<button class="btn btn-success">Simpan</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('defaault_foto')
<script>
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function(e) {
				$('#img_preview').attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]); // convert to base64 string
		}
	}

	$("[name='image']").change(function() {
		readURL(this);
	});

	$("#img_preview").click(function() {
		$("[name='image']").click()
	});
</script>
@endsection

