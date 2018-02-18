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
			  			<label class="control-label">kode dokter</label>	
			  			<input type="text" name="kodedok" class="form-control" value="{{ $dokters->kodedok }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama tindakan</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $dokters->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">jenis kelamin</label>	
			  			<input type="text" name="jk" class="form-control" value="{{ $dokters->jk }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">spesialis</label>	
			  			<input type="text" name="spesialis" class="form-control" value="{{ $dokters->spesialis }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">nomor ijin praktek</label>	
			  			<input type="text" name="nomorijinpraktek" class="form-control" value="{{ $dokters->nomorijinpraktek }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection