@section('navbar')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Belajar NET</a>
    </div>
    @section('umum')
    <ul class="nav navbar-nav">
      <li class="{{Request::is('home') ? 'active' : ''}}"><a href="/home">Home</a></li>
      <li class="{{Request::is('verifikasi') ? 'active' : ''}}"><a href="/verifikasi">Verifikasi Pembayaran</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Nama Staff</a></li>
      <li><a href="/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    @show
  </div>
</nav>
@show
