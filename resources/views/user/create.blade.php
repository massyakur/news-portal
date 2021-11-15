@extends('layout.master')
@section('judul')
    Tambah Kategori
@endsection
@section('title')
    Buat Kategori Baru
@endsection
@section('content')
<form action="/kategori" method="POST">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" cols="30" rows="10"></textarea>
      </div>
      @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
@endsection