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
			  			<label class="control-label">Diagnosa sakit</label>	
			  			<input type="text" name="diagnosasakit" class="form-control" value="{{ $rekamtindakans->diagnosasakit }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('tanggalrawat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal rawat</label>	
			  			<input type="text" name="tanggalrawat" class="form-control" value="{{ $rekamtindakans->tanggalrawat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Suhu tubuh/label>	
			  			<input type="text" name="suhutubuh" class="form-control" value="{{ $rekamtindakans->suhutubuh }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tensi darah</label>	
			  			<input type="text" name="tensidarah" class="form-control" value="{{ $rekamtindakans->tensidarah }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('ketgejala') ? ' has-error' : '' }}">
			  			<label class="control-label">keterangan gejala</label>	
			  			<input type="text" name="ketgejala" class="form-control" value="{{ $rekamtindakans->ketgejala }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection