<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar NET</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body class="home">
    @include('inc.navbar')
    <div class="container">
      @yield('content')
    </div>
    <script type="text/javascript">
      function berhasil() {
          alert("Berhasil!");
      }
      function deletebox() {
        if (confirm("Are you sure?") == true) {
            berhasil();
        }
        else {
          alert("Cancelled!");
        }
      }
    </script>
  </body>
  <footer id="footer" class="text-center">
      <p>Copyright 2017 &copy; Belajar NET</p>
  </footer>
</html>
