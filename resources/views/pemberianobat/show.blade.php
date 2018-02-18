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
			  			<label class="control-label">nomor rawat jalan</label>	
			  			<input type="text" name="nomorrawatjalan" class="form-control" value="{{ $pemberianobats->nomorrawatjalan }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('tgldiberiobat') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl diberiobat</label>	
			  			<input type="text" name="tgldiberiobat" class="form-control" value="{{ $pemberianobats->tgldiberiobat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">tgl rawat</label>	
			  			<input type="text" name="tglrawat" class="form-control" value="{{ $pemberianobats->tglrawat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">jumlah obat</label>	
			  			<input type="text" name="jumlahobat" class="form-control" value="{{ $pemberianobats->jumlahobat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">dosis</label>	
			  			<input type="text" name="dosis" class="form-control" value="{{ $pemberianobats->dosis }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection