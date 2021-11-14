@extends('layout.master')
@section('judul')
    Edit Cast Page
@endsection
@section('title')
    Edit Cast {{$cast->nama}}
@endsection
@section('content')
<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" value="{{ $cast->nama }}" class="form-control">
      <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Umur</label>
      <input type="text" class="form-control" value="{{ $cast->umur }}" name="umur">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Bio</label>
        <textarea class="form-control" name="bio" cols="30" rows="10">{{ $cast->bio }}</textarea>
      </div>
      @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection