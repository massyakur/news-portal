@extends('layout.master')
@section('judul')
    Home
@endsection
@section('content')
@guest
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Selamat Datang!</strong> Silakan <b>Login</b> untuk menggunakan semua fitur PortalBerita.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endguest
@auth
{{-- <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div> --}}
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Kamu telah berhasil Login di <strong>PortalBerita</strong>. Sekarang kamu bisa menggunakan semua fitur yang ada di website PortalBerita ini.</p>
  </div>
@endauth
@endsection