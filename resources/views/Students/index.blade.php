@extends('layouts.app')

@section('title','Students')

@section('content')

<a href="/students/create" class="card-link btn-warning">Tambah Mahasiswa</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No.Telepon</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($students as $student)
  <tr>
    <td>{{$student->nama_mahasiswa}}</td>
    <td>{{$student->alamat}}</td>
    <td>{{$student->no_tlp}}</td>
    <td>{{$student->email}}</td>
    <td><a href="/students/{{$student->id}}/edit"><button type="button" class="btn btn-outline-primary">Edit</a></button></td>
    <form action="/students/{{ $student->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-danger">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $students -> links() }}
    </div>
@endsection





    
