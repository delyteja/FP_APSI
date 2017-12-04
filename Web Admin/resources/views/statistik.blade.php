@extends('layouts.app')

@section('content')
<h1>Statistik</h1>
<br>
<p>Masukkan Tanggal : <input type="text" id="datepicker"></p>
<p>Pilih data statistik :</p>
<div style="padding-left: 10px;">
  <div class="checkbox">
    <label><input type="checkbox" value="">Pengunjung</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" value="">Verified User</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" value="">Admin dan TU</label>
  </div>
</div>
<a href="/statistik" class="btn btn-primary">Submit</a>
<br><br><br>
<img src="https://don16obqbay2c.cloudfront.net/wp-content/uploads/Kliken-1504538212.png" alt="#">
<br><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection('content')
