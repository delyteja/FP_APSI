@extends('app')

@section('title')
    Tambah Kelas
@endsection

@section('header')
     @include('include.headeruser')
@endsection

@section('content')
    <div class="panel panel-default">
    <div class="panel-body" style="align-content: center;margin: auto;">
	    <h4><i class="fa fa-money" aria-hidden="true"></i> Konfirmasi Pembayaran</h4>
	    <hr>
        <div class="row" style="align-content: center;">
            <div class="col-md-6">
		    	<div class="panel panel-default">
	  				<div class="panel-body">
						{!! Form::open(array('url' => '/kelas')) !!}
						<div class="form-group">
						{!! Form::label('Total Pembayaran', 'Total Pembayaran') !!}
						{!! Form::text('kodekls',null, array('class' => 'form-control','placeholder'=>'total yang dibayarkan')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('Norek', 'Nomor Rekening Pengirim') !!}
							{!! Form::text('norek',null, array('class' => 'form-control','placeholder'=>'Nomor Rekening Pengirim')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('foto', 'Bukti Pembayaran') !!}
                            {!! Form::file('foto', null, array('class' => 'form-control','placeholder'=>'fotobu')) !!}
						</div>

						{!! Form::button('<i class="fa fa-plus-square"></i>'. ' Konfirmasi', array('type' => 'konfirmasi', 'class' => 'btn btn-primary'))!!}
                        {!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}

						{!! Form::close()!!}
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
