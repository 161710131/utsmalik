@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Obat 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">nomor rekam medis</label>	
			  			<input type="text" name="nomorrm" class="form-control" value="{{ $pasiens->nomorrm }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama tindakan</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $pasiens->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">jenis kelamin</label>	
			  			<input type="text" name="jk" class="form-control" value="{{ $pasiens->jk }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">golongan darah</label>	
			  			<input type="text" name="goldar" class="form-control" value="{{ $pasiens->goldar }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">tanggal lahir</label>	
			  			<input type="text" name="tl" class="form-control" value="{{ $pasiens->tl }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection