@extends('layout.main')
@section('tittle','Data Pernikahan')
@section('data_pernikahan','active')
@section('content')
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class="row">
						<div class="col-md-8">
								<div class="page-title">Dashboard</div>
						</div>
						<div class="col-md-4">
							<ul class="breadcrumb page-breadcrumb pull-right">
								<li>
									<i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Data Pernikahan</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Taxi live location start -->
			<div class="row">
				<div class="col-md-12">
					<form style="background-color:white;padding-bottom: 20px;padding-left: 20px;padding-right: 20px">
						<div class="row">
							<div class="col-md-12">
								<div class="page-title" style="margin-left:20px">
									Form Data Pernikahan
									<a href="{{route('ViewTambahDataPernikahan')}}" class="btn btn-success pull-right" style="margin-right:20px">
										Tambahkan
									</a>
								</div>
							</div>
							<div class="col-md-12">
								<table class="table table-strip">
										<tr>
											<th>Mempelai Wanita</th>
											<th>Mempelai pria</th>
											<th>Tanggal Resepsi</th>
											<th>Tempat Resepsi</th>
											<th>Edit</th>
											<th>Delete</th>
											<th>Detail</th>
										</tr>
										@foreach($data_pernikahan as $data)
										<tr>
											<td>{{$data->mempelai_wanita}}</td>
											<td>{{$data->mempelai_pria}}</td>
											<td>{{$data->tanggal_resepsi}}</td>
											<td>{{$data->tempat_resepsi}}</td>
											<td><a href="#" class="btn btn-warning">Edit</a></td>
											<td><a href="#" class="btn btn-denger">Delete</a></td>
											<td><a href="#" class="btn btn-light">Detail</a></td>
										</tr>
										@endforeach
								</table>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection