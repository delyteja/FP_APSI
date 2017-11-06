@extends('layouts.app')
@section('umum')
@endsection('umum')

@section('content')
<h1>HELLO ADMIN!!!</h1>
<h3>Silahkan login terlebih dahulu</h3>
<div class="row">
  <div class="col-lg-4" style="padding-top:30px; padding-bottom:103px;">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">User name</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <a href="/home" type="submit" class="btn btn-primary">Login</a>
    </form>
  </div>
</div>
@endsection('content')
