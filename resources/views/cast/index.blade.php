@extends('layout.master')
@section('judul')
    List Cast
@endsection
@section('title')
    Cast Table
@endsection
@section('content')

<a href="/cast/create" class="btn btn-success btn-sm mb-3">Add Cast</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Bio</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->umur}}</td>
                <td>{{$item->bio}}</td>
                <td>
                    <form action="/cast/{{$item->id}}" method="POST">
                        <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Details</a>
                        <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        @method('delete')
                        @csrf
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
        <tr colspan="3">
            <td>No data</td>
        </tr>  
        @endforelse
    </tbody>
  </table>
  
@endsection