@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> MEMBER Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4><CENTER>Selamat Datang Dalam <strong> <a href="/">KOMUNITAS MAHASISWA BOYOLALI</a </strong>!</CENTER></h4>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('logout') 
    <a href="{{ route('user.logout') }}" 
        onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();"> 
        Logout 
    </a> 
    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;"> 
        {{ csrf_field() }} 
    </form> 
@endsection
