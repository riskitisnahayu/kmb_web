@extends('layouts.app')

@section('logout')
	<a href="{{ route('admin.logout') }}"
		onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
		Logout
	</a>
	<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<center><h3>Detail Pengurus</h3> </center>
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px; margin-top: 20px;">
				<div class="form-group">
					<div class="col-md-4">
						<strong>Nama</strong>
					</div>
					<div class="col-md-8">
						{{ $daftar->name }}
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;">
				<div class="form-group">
					<div class="col-md-4">
						<strong>NIK</strong>
					</div>
					<div class="col-md-8">
						{{ $daftar->nik }}
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;">
				<div class="form-group">
					<div class="col-md-4">
						<strong>Universitas</strong>
					</div>
					<div class="col-md-8">
						{{ $daftar->universitas }}
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;">
				<div class="form-group">
					<div class="col-md-4">
						<strong>Nomor Telepon</strong>
					</div>
					<div class="col-md-8">
						{{ $daftar->no_telp }}
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;">
				<div class="form-group">
					<div class="col-md-4">
						<strong>Alamat</strong>
					</div>
					<div class="col-md-8">
						{{ $daftar->alamat }}
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;">
				<div class="form-group">
					<div class="col-md-4">
						<strong>Jabatan</strong>
					</div>
					<div class="col-md-8">
						{{ $daftar->jabatan['nama'] }}
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom: 10px">
				<button type="button" class="btn btn-danger" onclick="location.href='{{url('/admin/pengurus')}}'">Kembali</button>
			</div>
		</div>
	</div>
</div>
@endsection
