@extends('layouts.app')

@section('title','Matakuliahs')

@section('content')

<form action="/Matakuliahs/{{ $matakuliah['id'] }}" method="POST">
@csrf
@method('PUT')

  <div class="form-group">
    <label for="exampleInputEmail1">nama_matakuliah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_matakuliah" aria-describedby="emailHelp" value="{{old('nama_matakuliah') ? old('nama_matakuliah') : $friend['nama_matakuliah'] }}">
    @error('nama_matakuliah')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">sks</label>
    <input type="text" class="form-control" name="sks" id="exampleInputPassword1" value="{{old('sks') ? old('sks') : $friend['sks'] }}">
    @error('sks')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

    
