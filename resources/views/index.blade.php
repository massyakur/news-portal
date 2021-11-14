@extends('layout.master')
@section('judul')
    Dashboard
@endsection
@section('content')
@auth
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div>
@endauth
@endsection