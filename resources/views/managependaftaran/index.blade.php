@extends('layouts.app')

@section('logout')
<a href="{{ route('admin.logout') }}"
	onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">
	Logout
</a>

<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endsection

@section('content')
<div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
		<h2>Kelola Pendaftaran Anggota</h2><br>
				@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
				@endif
				<div class="row">
					<div class="col-lg-12 margin-tb">
						<div class="pull-right mb-1">
							<a class="btn btn-success" href="{{ route('pendaftaran.create') }}">Pendaftaran Anggota</a>
						</div>
						<div class="pull-left mb-1">
							<a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Home</a>
						</div>
					</div>
				</div>

				<br/>
				<table id="table_daftars" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>NIK</th>
							<th>Universitas</th>
							<th>Nomor Telepon</th>
							<th>Alamat</th>
							<th>Jabatan</th>
							<th width="280px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($daftars as $key => $daftar)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $daftar->name }}</td>
								<td>{{ $daftar->nik }}</td>
								<td>{{ $daftar->universitas }}</td>
								<td>{{ $daftar->no_telp }}</td>
								<td>{{ $daftar->alamat }}</td>
								<td>{{ $daftar->jabatan['nama'] }}</td>
								<td>
									<a class="btn btn-info" href="{{ route('pendaftaran.show',$daftar->id) }}">Detail</a>
									<a class="btn btn-warning" href="{{ route('pendaftaran.edit',$daftar->id) }}">Edit</a>
									<a class="btn btn-danger" href="/admin/pendaftaran/aktif/{{$daftar->id}}">Aktif</a>
									{!! Form::open(['method' => 'DELETE','route' =>
									['pendaftaran.destroy', $daftar->id],'style'=>'display:inline']) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger'])
									!!}
									{!! Form::close() !!}
								</td>
								<!--  -->
							</tr>
						@endforeach
					</tbody>
				</table>

            @if ($daftars->count()==0)
            <tr>
                <td colspan="5">No data to display.</td>
            </tr>
            @endif
			{{ $daftars->links() }}
		</div>
	</div>
</div>
@endsection
