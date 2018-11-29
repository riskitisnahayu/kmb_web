@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <center><h3>KONFIRMASI PENDAFTARAN </h3></center></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>Setelah melakukan pendaftaran, Anda dapat melakukan wawancara dengan datang langsung ke GSP hari Minggu jam 15.00<br>
                        Jangan lupa membawa kartu identitas dan CV.<br>
                        Wawancara terakhir akan dilaksanakan pada tanggal 15 Desember 2018.<br>
                        Untuk info lebih lanjut bisa hubungi : <br>
                    <h4>NO. Telepon :08978765466 a.n Aldilla</h4>
                    <br>
                    Terimakasih Telah Mendaftar</center>

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
