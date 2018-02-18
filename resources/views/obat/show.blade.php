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
			  			<label class="control-label">kode obat</label>	
			  			<input type="text" name="kode_obat" class="form-control" value="{{ $obats->kode_obat }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('namaobat') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama obat</label>	
			  			<input type="text" name="namaobat" class="form-control" value="{{ $obats->namaobat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">kategori</label>	
			  			<input type="text" name="kategori" class="form-control" value="{{ $obats->kategori }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">jumlah</label>	
			  			<input type="text" name="jumlah" class="form-control" value="{{ $obats->jumlah }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $obats->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection