@section('navbar')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Belajar NET</a>
    </div>
    @section('umum')
    <ul class="nav navbar-nav">
      <li class="active"><a href="/home">Home</a></li>
      <li><a href="/manage">Manage Data</a></li>
      <li><a href="/statistik">Statistik</a></li>
      <li><a href="/verifikasi">Verifikasi Akun</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Nama Admin</a></li>
      <li><a href="/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    @show
  </div>
</nav>
@show
