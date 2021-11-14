@extends('layout.master')
@section('judul')
    Create Cast
@endsection
@section('title')
    Create Cast
@endsection
@section('content')
<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control">
      <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Umur</label>
      <input type="text" class="form-control" name="umur">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Bio</label>
        <textarea class="form-control" name="bio" cols="30" rows="10"></textarea>
      </div>
      @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection