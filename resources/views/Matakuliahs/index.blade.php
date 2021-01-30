@extends('layouts.app')

@section('title','Matakuliahs')

@section('content')

<a href="/matakuliahhs/create" class="card-link btn-warning">Tambah Matakuliah</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Matakuliah</th>
      <th scope="col">SKS</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($matakuliahs as $matakuliah)
  <tr>
    <td>{{$matakuliah->nama_matakuliah}}</td>
    <td>{{$matakuliah->sks}}</td>
    @endforeach
  </tbody>
</table>
<div>
    {{ $matakuliahs -> links() }}
    </div>
@endsection





    
