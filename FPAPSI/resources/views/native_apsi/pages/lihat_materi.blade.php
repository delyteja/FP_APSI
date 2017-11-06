<!DOCTYPE html>
<!--
Template Name: Gogopo
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Rasyid Course</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ URL::asset('assets/cssyoga/layout.css') }}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="#">Kursus Online</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li>Mentor</li>
          <li class="active"><a href="{{ url('/mentor') }}">Home</a></li>
          <li><a class="drop" href="#">Materi</a>
            <ul>
              <li><a href="{{ url('/unggah') }}">Mengunggah Materi</a></li>
              <li><a href="{{ url('/lihat') }}">Melihat Materi</a></li>
            </ul>
          </li>
          <li><a href="/native_apsi/pages/diskusi.php">Diskusi</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">SMP Kelas 2</header>
          <header class="heading">Matematika</header>
          <ul class="nospace clear" style="color:black">
            <li class="one_quarter first"><a href="#"><img src="{{ URL::asset('assets/images/demo/video/eksponen.gif') }}" alt="">
              Bab 1 : Teori Eksponensial bagian 1</a>
              <br>
              <button type="submit" value="unduh">Unduh Materi</button>
            </li>
            <li class="one_quarter"><a href="#"><img src="{{ URL::asset('assets/images/demo/video/eksponen.gif') }}" alt="">
              Bab 1 : Teori Eksponensial bagian 2</a>
              <br>
              <button type="submit" value="unduh">Unduh Materi</button>
            </li>
            <li class="one_quarter"><a href="#"><img src="{{ URL::asset('assets/images/demo/video/bilangan.png') }}" alt="">
              Bab 2 : Teori Bilangan</a>
              <br>
              <button type="submit" value="unduh">Unduh Materi</button>
            </li>
            <li class="one_quarter"><a href="#"><img src="{{ URL::asset('assets/images/demo/video/gradien.png') }}" alt="">
              Bab 3 : Gradien</a>
              <br>
              <button type="submit" value="unduh">Unduh Materi</button>
            </li>
            <li class="one_quarter first"><a href="#"><img src="{{ URL::asset('assets/images/demo/video/kartesian.gif') }}" alt="">
              Bab 4 : Koordinat Kartesian</a>
              <br>
              <button type="submit" value="unduh">Unduh Materi</button>
            </li>
            <li class="one_quarter"><a href="#"><img src="{{ URL::asset('assets/images/demo/video/luas_dan_keliling.png') }}" alt="">
              Bab 5 : Luas dan Keliling Bangun Datar</a>
              <br>
              <button type="submit" value="unduh">Unduh Materi</button>
            </li>
          </ul>
          <figcaption>Terakhir diunggah oleh Mentor sekitar 1 menit yang lalu</figcaption>
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Sebelumnya</a></li>
          <li class="current">1</li>
          <li><a href="#">2</a></li>
          <li><a href="#">Selanjutnya &raquo;</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <br>
    </div>
    <div class="one_third">
      <h6 class="heading">TENTANG KAMI</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Jalan Teknik Kimia &amp; Teknik Informatika Institut Teknologi Sepuluh Nopember, Surabaya
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> kursus@online.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Kursus@Online.com</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>