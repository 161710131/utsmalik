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
			  			<input type="text" name="nomorrm" class="form-control" value="{{ $registrasis->nomorrm }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('tanggalregis') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal regis</label>	
			  			<input type="text" name="tanggalregis" class="form-control" value="{{ $registrasis->tanggalregis }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">jam regis</label>	
			  			<input type="text" name="jamregis" class="form-control" value="{{ $registrasis->jamregis }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">kode dokter</label>	
			  			<input type="text" name="kodedok" class="form-control" value="{{ $registrasis->kodedok }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">nomorindukpetugas</label>	
			  			<input type="text" name="nomorindukpetugas" class="form-control" value="{{ $registrasis->nomorindukpetugas }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection