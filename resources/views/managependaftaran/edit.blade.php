@extends('layouts.app')

@section('css')
    <link href="{{asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

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
			<center><h3>Ubah Pendaftaran</h3> </center>
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
			{!! Form::model($daftar, ['method' => 'PATCH','route' => ['pendaftaran.update', $daftar->id]]) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px;margin-top: 20px;">
						<div class="form-group">
							<div class="col-md-4">
								<strong>Nama</strong>
							</div>
							<div class="col-md-8">
								{!! Form::text('name', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px">
						<div class="form-group">
							<div class="col-md-4">
								<strong>NIK </strong>
							</div>
							<div class="col-md-8">
								{!! Form::text('nik', null, array('placeholder' => 'Nomor Induk Kependudukan','class' => 'form-control')) !!}
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px">
						<div class="form-group">
							<div class="col-md-4">
								<strong>Universitas </strong>
							</div>
							<div class="col-md-8">
								{!! Form::text('universitas', null, array('placeholder' => 'Universitas','class' => 'form-control')) !!}
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px">
						<div class="form-group">
							<div class="col-md-4">
								<strong>Nomor Telepon</strong>
							</div>
							<div class="col-md-8">
								{!! Form::text('no_telp', null, array('placeholder' => 'Nomor Telepon Yang Aktif','class' => 'form-control')) !!}
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px">
						<div class="form-group">
							<div class="col-md-4">
								<strong>Alamat</strong>
							</div>
							<div class="col-md-8">
								{!! Form::text('alamat', null, array('placeholder' => 'Alamat','class' => 'form-control')) !!}
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px">
						<div class="form-group">
							<div class="col-md-4">
								<strong>Jabatan</strong>
							</div>
							<div class="col-md-8">
								<select class="form-control" name="jabatan_id">
		                            @foreach($jabatan as $value)
                                        @if ($value->id > 4)
                                        <option value="{{$value->id}}" {{collect(old('jabatan'))->contains($value->id) ? 'selected':''}} @if($value->id == $daftar['jabatan_id']) selected='selected' @endif>{{$value->nama}}</option>
                                    @endif
		                            @endforeach
                        		</select>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom: 10px">
						<button type="button" class="btn btn-danger" onclick="location.href='{{url('/admin/pendaftaran')}}'">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('javascript')
    <script src="{{asset('lib/select2/js/select2.min.js')}}"></script>

    <script>
        $(function(){

            'use strict';

            // Select2
            $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
            $('.select2').select2();



        });

    </script>
@endsection
