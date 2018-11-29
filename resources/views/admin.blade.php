@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang <strong>ADMIN</strong>! </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="admin/pendaftaran"> <button type="button" class="btn btn-primary">
                        Kelola Pendaftaran
                    </button><br>

                    <a href="admin/pengurus" > <button style="margin-top: 10px;" type="button" class="btn btn-primary">
                        Kelola Kepengurusan
                    </button><br>

                    <a href="admin/jabatan" > <button style="margin-top: 10px;" type="button" class="btn btn-primary">
                        Kelola Jabatan
                    </button><br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
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
