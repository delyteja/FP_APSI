@extends('layouts.app')

@section('content')
<h1>Add new data</h1>
<br>
<form>
  <div class="form-group row">
    <label for="id" class="col-sm-1 col-form-label">Id</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="id" placeholder="Enter id">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-1 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" placeholder="Nama lengkap">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-sm-1 col-form-label">Alamat</label>
    <div class="col-sm-4">
      <textarea type="text" class="form-control" id="alamat" placeholder="Alamat lengkap"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="nohp" class="col-sm-1 col-form-label">No HP</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="hohp" placeholder="08x xxx xxx xxx">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-1 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="email" placeholder="example@example.com">
    </div>
  </div>
</form>
<a onclick="berhasil()" href="/manage" type="submit" class="btn btn-primary">Add</a>

@endsection('content')
