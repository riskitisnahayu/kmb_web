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
			<center><h3>Ubah Jabatan</h3> </center>
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Sorry!</strong> Something wrong with your input data.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			{!! Form::model($jabatan, ['method' => 'PATCH','route' => ['jabatan.update', $jabatan->id]]) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px;margin-top: 20px;">
						<div class="form-group">
							<div class="col-md-4">
								<strong>Nama Jabatan</strong>
							</div>
							<div class="col-md-8">
								{!! Form::text('nama', null, array('placeholder' => 'Nama Jabatan','class' => 'form-control')) !!}
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px;margin-top: 10px;">
						<div class="form-group">
							<div class="col-md-4">
								<strong>Deskripsi</strong>
							</div>
							<div class="col-md-8">
								<textarea rows="5" type="text" class="form-control" name="deskripsi"  placeholder="Tulis Deskripsi..." >{{ $jabatan->deskripsi }}</textarea>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom: 10px">
						<button type="button" class="btn btn-danger" onclick="location.href='{{url('/admin/jabatan')}}'">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection
