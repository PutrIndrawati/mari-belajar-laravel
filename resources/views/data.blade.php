@extends('master.master')
@section('title','laravel')
@section('halaman', 'Isi Data')

@section('content')
<form action="/data" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputNama">nama</label>
    <input name = "nama" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputTelepon">Telepon</label>
    <input name ="telepon" type="number" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Alamat</label>
    <input name ="alamat" type="text" class="form-control">
  </div>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection