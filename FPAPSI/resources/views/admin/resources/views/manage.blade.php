@extends('layouts.app')

@section('content')
<h1>Manage Data Admin dan TU</h1>
<br>
<h3>Data Admin</h3>
@include('inc.tabelAdmin')
<br><br><br>
<h3>Data Tata Usaha</h3>
@include('inc.tabelTU')
@endsection('content')
