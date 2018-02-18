@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Obat
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('rekamtindakan.update',$rekamtindakans->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('diagnosasakit') ? ' has-error' : '' }}">
			  			<label class="control-label">diagnosa sakit</label>	
			  			<input type="text" name="diagnosasakit" class="form-control" value="{{ $rekamtindakans->diagnosasakit }}"  required>
			  			@if ($errors->has('diagnosasakit'))
                            <span class="help-block">
                                <strong>{{ $errors->first('diagnosasakit') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tanggalrawat') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal rawat</label>	
			  			<input type="date" name="tanggalrawat" class="form-control" value="{{ $rekamtindakans->tanggalrawat }}"  required>
			  			@if ($errors->has('tanggalrawat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggalrawat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('suhutubuh') ? ' has-error' : '' }}">
			  			<label class="control-label">suhu tubuh</label>	
			  			<input type="time" name="suhutubuh" class="form-control" value="{{ $rekamtindakans->suhutubuh }}"  required>
			  			@if ($errors->has('suhutubuh'))
                            <span class="help-block">
                                <strong>{{ $errors->first('suhutubuh') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tensidarah') ? ' has-error' : '' }}">
			  			<label class="control-label">tensi darah</label>	
			  			<input type="text" name="tensidarah" class="form-control" value="{{ $rekamtindakans->tensidarah }}"  required>
			  			@if ($errors->has('tensidarah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tensidarah') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('ketgejala') ? ' has-error' : '' }}">
			  			<label class="control-label">keterangan gejala</label>	
			  			<input type="text" name="ketgejala" class="form-control" value="{{ $rekamtindakans->ketgejala }}"  required>
			  			@if ($errors->has('ketgejala'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ketgejala') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@rekamtindakan