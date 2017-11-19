<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar NET</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
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
