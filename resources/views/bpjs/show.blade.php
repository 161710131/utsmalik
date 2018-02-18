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
			  			<label class="control-label">nomor kartu</label>	
			  			<input type="text" name="nomorkartu" class="form-control" value="{{ $bpjs->nomorkartu }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama tindakan</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $bpjs->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">alamat</label>	
			  			<input type="textarea" name="alamat" class="form-control" value="{{ $bpjs->alamat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">tanggal lahir</label>	
			  			<input type="text" name="tl" class="form-control" value="{{ $bpjs->tl }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">nik</label>	
			  			<input type="text" name="nik" class="form-control" value="{{ $bpjs->nik }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection