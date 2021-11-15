@extends('layout.master')
@section('judul')
    Halaman Edit Kategori
@endsection
@section('title')
    Edit Kategori {{$kategori->nama}}
@endsection
@section('content')
<form action="/kategori/{{$kategori->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" value="{{ $kategori->nama }}" class="form-control">
      <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" cols="30" rows="10">{{ $kategori->deskripsi }}</textarea>
      </div>
      @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection