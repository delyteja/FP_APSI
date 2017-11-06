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
	    <h4><i class="fa fa-check-circle-o" aria-hidden="true"></i> Tes ONLINE</h4>
	    <hr>
        <div class="container">
			  <p>1. Berapakah satu tambah dua:</p>
			  <form>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Dua</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Tiga</label>
			    </div>
			    <div class="checkbox disabled">
			      <label><input type="checkbox" value="">Empat</label>
			    </div>
			  </form><br>
			  <p>2. Berapakah satu tambah dua:</p>
			  <form>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Dua</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Tiga</label>
			    </div>
			    <div class="checkbox disabled">
			      <label><input type="checkbox" value="">Empat</label>
			    </div><br>
			  </form>
			  <p>3. Berapakah satu tambah dua:</p>
			  <form>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Lima</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Enam</label>
			    </div>
			    <div class="checkbox disabled">
			      <label><input type="checkbox" value="">Tuju</label>
			    </div>
			  </form><br>
			  <p>4. Berapakah satu tambah dua:</p>
			  <form>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Dua</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Tiga</label>
			    </div>
			    <div class="checkbox disabled">
			      <label><input type="checkbox" value="">Empat</label>
			    </div>
			  </form><br>
			  <p>5. Berapakah satu tambah dua:</p>
			  <form>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Lima</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="">Enam</label>
			    </div>
			    <div class="checkbox disabled">
			      <label><input type="checkbox" value="">Tuju</label>
			    </div>
			  </form>

			  <a href="#" style="margin-left: 50px;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Submit</a>


		</div>
    </div>
</div>
@endsection
