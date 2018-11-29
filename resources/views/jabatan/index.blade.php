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
		<h2>Kelola Jabatan</h2><br>
				@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
				@endif
				<div class="row">
					<div class="col-lg-12 margin-tb">
						<div class="pull-right mb-1">
							<a class="btn btn-success" href="{{ route('jabatan.create') }}">Tambah Jabatan</a>
						</div>
						<div class="pull-left mb-1">
							<a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Home</a>
						</div>
					</div>
				</div>

				<br/>
				<table id="table_jabatan" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th width="250px">Nama Jabatan</th>
							<th>Deskripsi</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($jabatans as $key => $jabatan)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $jabatan->nama }}</td>
								<td>{{ $jabatan->deskripsi }}</td>
								<td>
									<a class="btn btn-warning" href="{{ route('jabatan.edit',$jabatan->id) }}">Edit</a>
									{!! Form::open(['method' => 'DELETE','route' =>
									['jabatan.destroy', $jabatan->id],'style'=>'display:inline']) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger'])
									!!}
									{!! Form::close() !!}
								</td>
								<!--  -->
							</tr>
						@endforeach
					</tbody>
				</table>

            @if ($jabatans->count()==0)
            <tr>
                <td colspan="5">No data to display.</td>
            </tr>
            @endif
			{{ $jabatans->links() }}
		</div>
	</div>
</div>
@endsection
