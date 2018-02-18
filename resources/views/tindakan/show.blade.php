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
			  			<label class="control-label">kode Tindakan</label>	
			  			<input type="text" name="kode_tindakan" class="form-control" value="{{ $tindakans->kode_tindakan }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama tindakan</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $tindakans->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">jenistindakan</label>	
			  			<input type="text" name="jenistindakan" class="form-control" value="{{ $tindakans->jenistindakan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">waktutindakan</label>	
			  			<input type="text" name="waktutindakan" class="form-control" value="{{ $tindakans->waktutindakan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">tariftindakan</label>	
			  			<input type="text" name="tariftindakan" class="form-control" value="{{ $tindakans->tariftindakan }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection