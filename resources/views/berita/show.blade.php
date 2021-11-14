@extends('layout.master')
@section('judul')
    Detail Page of Cast
@endsection
@section('title')
    {{$cast->id}}. {{$cast->nama}}
@endsection
@section('content')
    <h1>{{$cast->nama}}</h1>
    <p>{{$cast->umur}}</p>
    <p>{{$cast->bio}}</p>
@endsection