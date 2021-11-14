@extends('layout.master')
@section('judul')
    List Kategori
@endsection
@section('title')
    Semua Kategori
@endsection
@section('content')
@auth
   <a href="/kategori/create" class="btn btn-success btn-sm mb-3">Tambah Kategori</a> 
@endauth

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($kategori as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->deskripsi}}</td>
                <td>
                    <form action="/kategori/{{$item->id}}" method="POST">
                        <a href="/kategori/{{$item->id}}" class="btn btn-info btn-sm">Details</a>
                        @auth
                                <a href="/kategori/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/kategori/{{$item->id}}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                        @endauth
                        
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