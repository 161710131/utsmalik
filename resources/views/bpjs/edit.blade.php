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
			  	<form action="{{ route('Bpjs.update',$bpjs->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nomorkartu') ? ' has-error' : '' }}">
			  			<label class="control-label">nomor kartu</label>	
			  			<input type="text" name="nomorkartu" class="form-control" value="{{ $bpjs->nomorkartu }}"  required>
			  			@if ($errors->has('nomorkartu'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomorkartu') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $bpjs->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">alamat</label>	
			  			<input type="textarea" name="alamat" class="form-control" value="{{ $bpjs->alamat }}"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tl') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal lahir</label>	
			  			<input type="text" name="tl" class="form-control" value="{{ $bpjs->tl }}"  required>
			  			@if ($errors->has('tl'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tl') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('nik') ? ' has-error' : '' }}">
			  			<label class="control-label">nik</label>	
			  			<input type="text" name="nik" class="form-control" value="{{ $bpjs->nik }}"  required>
			  			@if ($errors->has('nik'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nik') }}</strong>
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
@endsection