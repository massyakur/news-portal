@extends('layout.master')
@section('judul')
    Detail Page of Kategori
@endsection
@section('title')
    {{$kategori->id}}. {{$kategori->nama}}
@endsection
@section('content')
    <h1>{{$kategori->nama}}</h1>
    <p>{{$kategori->deskripsi}}</p>
@endsection