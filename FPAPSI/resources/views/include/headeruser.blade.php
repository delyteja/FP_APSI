<!-- HEADER -->

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-default navbar-fixed-top navShadow">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="	#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="app-navbar-collapse">
		<!-- Left Side Of Navbar -->
		<ul class="nav navbar-nav">
		<li><a href="{{ url('/') }}"><i class="fa fa-home"></i>
		&nbsp;&nbsp;Home</a></li>
		
		<!-- <li><a href="{{ url('/tktpendidikan') }}"> <i class="fa fa-graduation-cap" aria-hidden="true"></i>
		&nbsp;&nbsp;Tingkat Pendidikan</a></li> -->
			 	<li><a href="{{ url('/lihat') }}"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Materi</a></li>
			 	<li><a href="{{ url('/regconfirm') }}"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Konfirmasi Pemabayaran</a></li>
				<li><a href="{{ url('/to') }}"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Tes Online</a></li>
				<li><a href="{{ url('/diskusi') }}"><i class="fa fa-code" aria-hidden="true"></i>&nbsp;&nbsp;Diskusi</a></li>
			<li><a href="{{ url('/tanyacs') }}"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp;Kontak CS</a></l>
		</ul>
		</div>
		 <!-- tingkat pendidikan, mata pelajaran, tes online, diskusi, tanya CS -->
	</div>
</nav>
<br>
<br>
<br>
<br>
    <!-- END HEADER -->
